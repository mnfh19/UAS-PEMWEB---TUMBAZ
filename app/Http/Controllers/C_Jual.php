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
use App\M_Motor;
use App\M_Jual;
use App\M_Elektronik;
use App\M_Lokasi;

class C_Jual extends Controller
{
    public function jual($tipe){
        $data['pro'] = DB::table('tbl_provinsi')->orderBy('name', 'ASC')->get();
        $data['tipe'] = $tipe;
        return view('page.jual', $data);
    }

    public function jualUbah($tipe,$id){
        $iklan =  M_Jual::where('id_barang', $id)->first();
        $lokasi = M_Lokasi::where('id_barang', $id)->first();


        switch ($tipe) {
            case 'Mobil':
                $detail = M_Mobil::where('id_barang', $id)->first();
                break;
            case 'Motor':
                $detail = M_Motor::where('id_barang', $id)->first();
                break;
            case 'Elektronik':
                $detail = M_Elektronik::where('id_barang', $id)->first();
                break;
            default:
                # code...
                break;
        }

        $data['detail'] = $detail;
        $data['iklan'] = $iklan;
        $data['lokasi'] = $lokasi;
        $data['isi'] = M_Elektronik::where('id_barang', $id)->pluck('jenis_elektronik')->first();
        $data['pro'] = DB::table('tbl_provinsi')->orderBy('name', 'ASC')->get();
        $data['kabu'] = DB::table('tbl_kabupaten')->where('province_id', $lokasi->id_provinsi)->orderBy('name', 'ASC')->get();
        $data['keca'] = DB::table('tbl_kecamatan')->where('regency_id', $lokasi->id_kabupaten)->orderBy('name', 'ASC')->get();
        $data['tipe'] = $tipe;
        return view('page.jualubah', $data);
    }

    public function tambah(Request $r){
        date_default_timezone_set('Asia/Jakarta');
        date("Y-m-d");

        $tipe = $r->input('tipe');

        $barang = new M_Barang;
        $barang->id_user = Session::get('user');
        $barang->tipe_barang = $tipe;
        $barang->nama_barang = $r->input('judul');
        $barang->desc_barang = $r->input('desc');
        $barang->tgl_post_barang = date("Y-m-d");
        $barang->status_barang = 0;

        if($barang->save()){
            Session::put('jualin', $barang->id_barang);
            $lokasi = new M_Lokasi;

            $lokasi->id_barang = $barang->id_barang;
            $lokasi->id_provinsi = $r->input('provinsi');
            $lokasi->id_kabupaten = $r->input('kabupaten');
            $lokasi->id_kecamatan = $r->input('kecamatan');

            if($lokasi->save()){
                $beli = new M_Beli;
                
                $beli->id_barang = $barang->id_barang;
                $beli->harga_beli = $r->input('harga');
                $beli->status_beli = 0;
    
                if($beli->save()){
                    switch ($tipe) {
                        case 'Mobil':
                            $mobil = new M_Mobil;
                            $mobil->id_barang = $barang->id_barang;
                            $mobil->merek_mobil = $r->input('merek');
                            $mobil->tahun_mobil = $r->input('tahun');
                            $mobil->bahan_mobil = $r->input('bahan');
                            $mobil->warna_mobil = $r->input('warna');
                            $mobil->tipe_penjual = $r->input('penjual');
                            $mobil->jarak_mobil = $r->input('jarak');

                            if($mobil->save()){
                                echo "sukses";
                            }else {
                                echo "gagal";
                            }
                            break;
                        case 'Motor':
                            $motor = new M_Motor;
                            $motor->id_barang = $barang->id_barang;
                            $motor->merek_motor = $r->input('merek');
                            $motor->tahun_motor = $r->input('tahun');
                            $motor->warna_motor = $r->input('warna');
                            $motor->tipe_penjual = $r->input('penjual');
                            $motor->jarak_motor = $r->input('jarak');

                            if($motor->save()){
                                echo "sukses";
                            }else {
                                echo "gagal";
                            }
                            break;
                        case 'Elektronik':
                            $elektronik = new M_Elektronik;
                            $elektronik->id_barang = $barang->id_barang;
                            if($r->has('jenis')){
                                $elektronik->jenis_elektronik = $r->input('jenis');
                            }else {
                                $elektronik->jenis_elektronik = null;
                            }

                            if($r->has('type')){
                                $elektronik->tipe_elektronik = $r->input('type');
                            }else {
                                $elektronik->tipe_elektronik = null;
                            }

                            $elektronik->merek_elektronik = $r->input('merek');
                            $elektronik->kondisi_elektronik = $r->input('kondisi');

                            if($elektronik->save()){
                                echo "sukses";
                            }else {
                                echo "gagal total";
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                    
                }else {
                    echo "gagal";
                }
            }else {
                echo "gagal";
            }
                
        }else {
            echo "gagal";
        }

    }

    public function update(Request $r, $id){
        date_default_timezone_set('Asia/Jakarta');
        date("Y-m-d");

        $tipe = $r->input('tipe');

        $barang = M_Barang::find($id);
        $barang->id_user = Session::get('user');
        $barang->tipe_barang = $tipe;
        $barang->nama_barang = $r->input('judul');
        $barang->desc_barang = $r->input('desc');
        $barang->tgl_post_barang = date("Y-m-d");
        $barang->status_barang = 0;

        if($barang->update()){
            Session::put('jualin', $id);
            $lokasi = M_Lokasi::find($id);

            $lokasi->id_barang = $barang->id_barang;
            $lokasi->id_provinsi = $r->input('provinsi');
            $lokasi->id_kabupaten = $r->input('kabupaten');
            $lokasi->id_kecamatan = $r->input('kecamatan');

            if($lokasi->save()){
                $beli = M_Beli::find($id);
                
                $beli->id_barang = $barang->id_barang;
                $beli->harga_beli = $r->input('harga');
                $beli->status_beli = 0;
    
                if($beli->save()){
                    switch ($tipe) {
                        case 'Mobil':
                            $mobil = M_Mobil::find($id);
                            $mobil->id_barang = $barang->id_barang;
                            $mobil->merek_mobil = $r->input('merek');
                            $mobil->tahun_mobil = $r->input('tahun');
                            $mobil->bahan_mobil = $r->input('bahan');
                            $mobil->warna_mobil = $r->input('warna');
                            $mobil->tipe_penjual = $r->input('penjual');
                            $mobil->jarak_mobil = $r->input('jarak');

                            if($mobil->save()){
                                echo "sukses";
                            }else {
                                echo "gagal";
                            }
                            break;
                        case 'Motor':
                            $motor = M_Motor::find($id);
                            $motor->id_barang = $barang->id_barang;
                            $motor->merek_motor = $r->input('merek');
                            $motor->tahun_motor = $r->input('tahun');
                            $motor->warna_motor = $r->input('warna');
                            $motor->tipe_penjual = $r->input('penjual');
                            $motor->jarak_motor = $r->input('jarak');

                            if($motor->save()){
                                echo "sukses";
                            }else {
                                echo "gagal";
                            }
                            break;
                        case 'Elektronik':
                            $elektronik = M_Elektronik::find($id);
                            $elektronik->id_barang = $barang->id_barang;
                            if($r->has('jenis')){
                                $elektronik->jenis_elektronik = $r->input('jenis');
                            }else {
                                $elektronik->jenis_elektronik = null;
                            }

                            if($r->has('type')){
                                $elektronik->tipe_elektronik = $r->input('type');
                            }else {
                                $elektronik->tipe_elektronik = null;
                            }

                            $elektronik->merek_elektronik = $r->input('merek');
                            $elektronik->kondisi_elektronik = $r->input('kondisi');

                            if($elektronik->save()){
                                echo "sukses";
                            }else {
                                echo "gagal total";
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                    
                }else {
                    echo "gagal";
                }
            }else {
                echo "gagal";
            }
                
        }else {
            echo "gagal";
        }

    }


    public function delete($id, $tipe){
        M_Barang::where('id_barang', $id)->delete();

        M_Beli::where('id_barang', $id)->delete();
        
        M_Lokasi::where('id_barang', $id)->delete();

        switch ($tipe) {
            case 'Mobil':
                M_Mobil::where('id_barang', $id)->delete();
                break;

            case 'Motor':
                M_Motor::where('id_barang', $id)->delete();
                break;

            case 'Elektronik':
                M_Elektronik::where('id_barang', $id)->delete();
                break;
            
            default:
                # code...
                break;
        }

        echo "sukses";
    }


    public function upload(Request $r){    
        $idkun = Session::get('jualin');
        // $delete = M_Gambar::where('id_barang', $idkun)->delete();

        $gambar = new M_Gambar;
        $image = $r->file('file');
        $imageName = $image->getClientOriginalName();
        $path = public_path()."/img/single-product/";

        $image->move($path, $imageName);
        $gambar->id_barang = $idkun;
        $gambar->nama_gambar = $imageName;

        //resize
        $canvas = Image::canvas(116, 116);
        $resizein  = Image::make(public_path('img/single-product/'.$imageName))->resize(116, 116, function($constraint)
        {
            $constraint->aspectRatio();
        });

        $canvas->insert($resizein, 'center');
        $croppath = public_path('img/single-product/cropped/'.$imageName);
        $canvas->save($croppath);


        if($gambar->save()){
            redirect("/");
        }else {
            redirect("jual");
        }
    }

    public function deleteUp(Request $request){
        $filename = $request->filename;
        // ImageUpload::where('filename', $filename)->delete();
        $path = public_path()."/img/single-product/".$filename;
        if (file_exists($path)) {
            unlink($path);
            M_Gambar::where('id_barang', $request->id)->where('nama_gambar', $filename)->delete();
        }
        return $filename;
    }

    public function getJenis($tipe){
        $data['isi'] = $tipe;
        return view('list.optionelek', $data);
    }

    public function getUploaded($id){
        $result = [];
        // $result = new StdClass();
        $img = M_Gambar::where('id_barang', $id)->orderBy('id_gambar_list', "ASC")->get();
        $con = 0;
        foreach ($img as $d) {
            
            $getImage = Image::make(public_path('img/single-product/'.$d->nama_gambar));
            
            $result[] = [
                'name' => $d->nama_gambar,
                'size' => $getImage->filesize()
            ];

        }
        
        echo json_encode($result);
    }   
}
