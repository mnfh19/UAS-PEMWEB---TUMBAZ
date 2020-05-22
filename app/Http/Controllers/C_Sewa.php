<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


use App\M_Barang;
use App\M_Gambar;
use App\M_Sewa;
use App\M_Sewa2;
use App\M_Sewain;
use App\M_Paket;
use App\M_Lokasi;

class C_Sewa extends Controller
{
    public function sewa(){
        $data['pro'] = DB::table('tbl_provinsi')->orderBy('name', 'ASC')->get();
        $data['totalll'] = 0;
        return view('page.sewa', $data);
    }

    public function sewaUbah($id){
        $iklan =  M_Sewain::where('id_barang', $id)->first();
        $lokasi = M_Lokasi::where('id_barang', $id)->first();

        $data['pro'] = DB::table('tbl_provinsi')->orderBy('name', 'ASC')->get();
        $data['kabu'] = DB::table('tbl_kabupaten')->where('province_id', $lokasi->id_provinsi)->orderBy('name', 'ASC')->get();
        $data['keca'] = DB::table('tbl_kecamatan')->where('regency_id', $lokasi->id_kabupaten)->orderBy('name', 'ASC')->get();
       
        $data['paket_num'] = M_Paket::where('id_sewa', $iklan->id_sewa)->count();
        $pertamax = M_Paket::where('id_sewa', $iklan->id_sewa)->first();
        $data['paketFirst'] = $pertamax;
        $p = explode(" ", $pertamax->waktu_paket);
        $data['waktuPertamax'] = $p[1];
        $data['satuanPertamax'] = $p[2];

        $data['type1'] = $iklan->tipe_sewa;
        $data['type2'] = $iklan->kategori_sewa;

        $data['totalll'] = 0;
        $data['iklan'] = $iklan;
        $data['lokasi'] = $lokasi;
        return view('page.sewaUbah', $data);
    }

    public function addNew($total){
        $data['totalll'] = $total;
        return view('list.optionsewanew', $data);
    }

    public function getPaket($idsewa){
        // $data['totalll'] = $total;
        $data['paketan'] = DB::select("SELECT *
                        FROM tbl_paket WHERE id_sewa = $idsewa
                        AND id_paket != (SELECT MIN(id_paket) FROM tbl_paket WHERE id_sewa = $idsewa)");

        
        
        
        // $data['paket_num'] = M_Paket::where('id_sewa', $idsewa)->count();
        return view('list.optionsewaold', $data);
    }

    public function tambah(Request $r){
        date_default_timezone_set('Asia/Jakarta');
        date("Y-m-d");

        $tipe = $r->input('subkate');

        $barang = new M_Barang;
        $barang->id_user = Session::get('user');;
        $barang->tipe_barang = $tipe;
        $barang->nama_barang = $r->input('judul');
        $barang->desc_barang = $r->input('desc');
        $barang->tgl_post_barang = date("Y-m-d");
        $barang->status_barang = 1;

        if($barang->save()){
            Session::put('sewain', $barang->id_barang);
            $lokasi = new M_Lokasi;

            $lokasi->id_barang = $barang->id_barang;
            $lokasi->id_provinsi = $r->input('provinsi');
            $lokasi->id_kabupaten = $r->input('kabupaten');
            $lokasi->id_kecamatan = $r->input('kecamatan');

            if($lokasi->save()){
                $sewa = new M_Sewa;
                
                $sewa->id_barang = $barang->id_barang;
                $sewa->fasilitas_sewa = $r->input('fasilitas');
                $sewa->syarat_sewa = $r->input('syarat');
                $sewa->tipe_sewa = $r->input('tipe');
                $sewa->kategori_sewa = $r->input('kategori');
                $sewa->subkategori_sewa = $r->input('subkate');
                $sewa->status_sewa = 0;
    
                if($sewa->save()){
                    foreach ($r->get('paket') as $d) {
                        $paket = new M_Paket;
            
                        $paket->id_sewa = $sewa->id_sewa;
                        $paket->harga_paket = $d['harga'];
                        $paket->waktu_paket = "Per ".$d['num']." ".$d['per'];
                        $paket->ketersediaan_paket = $r->input("ketersediaan");
            
                        $paket->save();
                    }
                    echo "sukses";
                    
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

        $tipe = $r->input('subkate');

        $barang = M_Barang::find($id);
        $barang->id_user = Session::get('user');;
        $barang->tipe_barang = $tipe;
        $barang->nama_barang = $r->input('judul');
        $barang->desc_barang = $r->input('desc');
        $barang->tgl_post_barang = date("Y-m-d");
        $barang->status_barang = 1;

        if($barang->update()){
            Session::put('sewain', $id);
            $lokasi = M_Lokasi::find($id);

            $lokasi->id_barang = $id;
            $lokasi->id_provinsi = $r->input('provinsi');
            $lokasi->id_kabupaten = $r->input('kabupaten');
            $lokasi->id_kecamatan = $r->input('kecamatan');

            if($lokasi->update()){
                $sewa = M_Sewa2::find($id);
                
                $sewa->id_barang = $id;
                $sewa->fasilitas_sewa = $r->input('fasilitas');
                $sewa->syarat_sewa = $r->input('syarat');
                $sewa->tipe_sewa = $r->input('tipe');
                $sewa->kategori_sewa = $r->input('kategori');
                $sewa->subkategori_sewa = $r->input('subkate');
                $sewa->status_sewa = 0;
    
                if($sewa->update()){
                    $sewakun = M_Sewa2::where('id_barang', $id)->first();
                    M_Paket::where('id_sewa', $sewakun->id_sewa)->delete();
                    foreach ($r->get('paket') as $d) {

                        $paket = new M_Paket;
                        
                        $paket->id_sewa = $sewakun->id_sewa;
                        $paket->harga_paket = $d['harga'];
                        $paket->waktu_paket = "Per ".$d['num']." ".$d['per'];
                        $paket->ketersediaan_paket = $r->input("ketersediaan");
            
                        $paket->save();
                    }
                    echo "sukses";
                    
                }else {
                    echo "gagal Sewa";
                }
            }else {
                echo "gagal Lokasi";
            }
        }else {
            echo "gagal Barang";
        }

        
    }

    public function delete($id){
        $get = M_Sewa::where('id_barang', $id)->first();
        M_Paket::where('id_sewa', $get->id_sewa)->delete();
        M_Sewa::where('id_barang', $id)->delete();
        M_Lokasi::where('id_barang', $id)->delete();
        M_Gambar::where('id_barang', $id)->delete();
        M_Barang::where('id_barang', $id)->delete();

        echo "sukses";

    }

    public function upload(Request $r){    
        $gambar = new M_Gambar;
        $image = $r->file('file');
        $imageName = $image->getClientOriginalName();
        $path = public_path()."/img/single-product/";

        $image->move($path, $imageName);
        $gambar->id_barang = Session::get('sewain');
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
            redirect("sewa");
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

    public function getKategori($val){
        $data['type1'] = $val;
        return view('list.optionsewa', $data);
    }

    public function getKategori2($val){
        $data['type2'] = $val;
        return view('list.optionsewa2', $data);
    }
}
