<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


use App\M_Barang;
use App\M_Gambar;
use App\M_Beli;
use App\M_Mobil;
use App\M_Elektronik;
use App\M_Category;
use App\M_Motor;
use App\M_Jual;
use App\M_Sewa;
use App\M_Sewa2;
use App\M_Paket;
use App\M_Sewain;


class C_Main extends Controller
{
    public function dashboard(){
        $idid = Session::get('user');
        if($idid != null){
            $barang = M_Category::orderBy('id_barang', "DESC")->take(6)->get();
            $barang2 = M_Category::inRandomOrder()->limit(8)->get();
            $data['count'] = M_Category::count();

            // $barang1 = M_Category::orderBy('id_barang', "DESC")->take(3)->get();

            foreach ($barang as $d) {
                $gambar = M_Gambar::where('id_barang', $d->id_barang)->pluck('nama_gambar')->first();
                $data['firstImg'][$d->id_barang] = $gambar;

                if($d->status_barang == 0){
                    $harga = M_Beli::where('id_barang', $d->id_barang)->pluck('harga_beli')->first();
                }else {
                    $sewa = M_Sewa::where('id_barang', $d->id_barang)->pluck('id_sewa')->first();
                    $harga = M_Paket::where('id_sewa', $sewa)->pluck('harga_paket')->first();
                }

                $data['harga'][$d->id_barang] = $harga;
            }

            foreach ($barang2 as $d) {
                $gambar = M_Gambar::where('id_barang', $d->id_barang)->pluck('nama_gambar')->first();
                $data['firstImg2'][$d->id_barang] = $gambar;

                if($d->status_barang == 0){
                    $harga = M_Beli::where('id_barang', $d->id_barang)->pluck('harga_beli')->first();
                }else {
                    $sewa = M_Sewa::where('id_barang', $d->id_barang)->pluck('id_sewa')->first();
                    $harga = M_Paket::where('id_sewa', $sewa)->pluck('harga_paket')->first();
                }

                $data['harga2'][$d->id_barang] = $harga;
            }

            $data['barang'] = $barang;
            $data['barang2'] = $barang2;

            return view('page.dashboard', $data);
        }else {
            return redirect('login');
        }
        
    }


    public function product($id){
        $idid = Session::get('user');
        if($idid != null){
            $barang = M_Barang::where('id_barang', $id)->first();
            $jual = M_Jual::where('id_barang', $id)->first();
            $sewa = M_Sewain::where('id_barang', $id)->first();

            if($barang->status_barang == 0){

                $data['jual'] = $jual;
                $data['price'] = $jual->harga_beli;
                if($jual->tipe_barang == "Mobil"){
                    $data['mobil'] = M_Mobil::where('id_barang', $id)->first();
                }else if($jual->tipe_barang == "Motor"){
                    $data['motor'] = M_Motor::where('id_barang', $id)->first();
                }else if($jual->tipe_barang == "Elektronik"){
                    $data['elektronik'] = M_Elektronik::where('id_barang', $id)->first();
                }
            }else {
                $data['jual'] = $sewa;
                $data['price'] = M_Paket::where('id_sewa', $sewa->id_sewa)->pluck('harga_paket')->first();
                $data['ketersediaan'] = M_Paket::where('id_sewa', $sewa->id_sewa)->pluck('ketersediaan_paket')->first();
                $data['paketan'] = M_Paket::where('id_sewa', $sewa->id_sewa)->get();

            }


            

            $data['gambar'] = M_Gambar::where('id_barang', $id)->orderBy('id_gambar_list', "ASC")->first();
            $data['img'] = M_Gambar::where('id_barang', $id)->orderBy('id_gambar_list', "ASC")->get();


            $rel = M_Category::where('tipe_barang', $barang->tipe_barang)->get();
            foreach ($rel as $d) {
                $gambar = M_Gambar::where('id_barang', $d->id_barang)->pluck('nama_gambar')->first();
                $data['firstImg'][$d->id_barang] = $gambar;

                if($d->status_barang == 0){
                    $harga = M_Beli::where('id_barang', $d->id_barang)->pluck('harga_beli')->first();
                }else {
                    $paket = M_Sewa::where('id_barang', $d->id_barang)->pluck('id_sewa')->first();
                    $harga = M_Paket::where('id_sewa', $paket)->pluck('harga_paket')->first();
                }

                $data['harga'][$d->id_barang] = $harga;
            }

            $data['related'] = $rel;

            return view('page.product', $data);
        }else {
            return redirect('login');
        }

        
    }

    public function getKabu($id){
        $data['list'] = DB::table('tbl_kabupaten')->where('province_id', $id)->orderBy('name', 'ASC')->get();
        $data['type'] = "~ Pilih Kabupaten ~";
        return view('list.option', $data);
        // echo json_encode($data);
    }

    public function getKeca($id){
        $data['list'] = DB::table('tbl_kecamatan')->where('regency_id', $id)->orderBy('name', 'ASC')->get();
        $data['type'] = "~ Pilih Kecamatan ~";
        return view('list.option', $data);
        // echo json_encode($data);
    }



    public function tes()
    {
        $id = 47;
        $sewa = M_Sewa2::where('id_barang', $id)->first();
        echo $sewa->id_sewa;
    }



}
