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
use App\M_Sewa;
use App\M_Paket;
use App\M_Mobil;
use App\M_Motor;
use App\M_Jual;
use App\M_Category;

class C_Category extends Controller
{
    public function category(){
        $barang = M_Category::orderBy('id_barang', "DESC")->take(6)->get();
        $data['count'] = M_Category::count();

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

        $data['barang'] = $barang;
        return view('page.category', $data);
    }

    public function loadMore(Request $r){
        if($r->ajax()){
            $skip = $r->skip;
            $data['count'] = M_Category::count();
            $barang = M_Category::orderBy('id_barang', "DESC")->skip($skip)->take(6)->get();

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

            $data['barang'] = $barang;
            return view('list.category', $data);
            // return response()->json($products);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    public function filtered(Request $r){
        $barang = M_Category::orderBy('id_barang', "DESC")->where('tipe_barang', $r->pilihan)->take(6)->get();
        $data['count'] = M_Category::where('tipe_barang', $r->pilihan)->count();

        $barang1 = M_Category::orderBy('id_barang', "DESC")->take(6)->get();

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

        $data['barang'] = $barang;
        return view('list.category', $data);
    }

    public function loadMoreFilter(Request $r){
        if($r->ajax()){
            $skip = $r->skip;
            

            if($r->has('filteran')){
                $filt = $r->filteran;
                $data['count'] = M_Category::where('tipe_barang', $r->pilihan)->count();
                $barang = M_Category::orderBy('id_barang', "DESC")->where('tipe_barang', $filt)->skip($skip)->take(6)->get();
            }else {
                $barang = M_Category::orderBy('id_barang', "DESC")->skip($skip)->take(6)->get();
            }

            

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

            $data['barang'] = $barang;
            return view('list.category', $data);
            // return response()->json($products);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }
}
