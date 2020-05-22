<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use App\M_User;
use App\M_Barang;
use App\M_Category; 
use App\M_Jual; 
use App\M_Beli; 
use App\M_Sewa; 
use App\M_Sewain; 
use App\M_Paket; 
use App\M_Gambar; 

class C_User extends Controller
{
    public function login(){
        return view('page.login');
    }

    
    public function register(){
        return view('page.register');
    }

    
    public function loginUser(Request $r){
        $e = $r->input("email");
        $p = $r->input("pass");

        $hash = md5($p);
        $data = M_User::where('email', $e)->first();


        if($data){ 
            if($hash == $data->password){
                if($data->status_user == 0){
                    return redirect('login')->with('warning','Akun Anda belum aktif, silahkan konfirmasi akun ke terlebih dahulu !');
                }else {
                    Session::put('user', $data->id_user);
                    Session::put('username',$data->username);
                    Session::put('profil',$data->gambar_profile);
                    
                    return redirect('/')->with('success', 'Sukses Login !');
                }
                
            }
            else{
                return redirect('login')->with('warning', 'Password Salah, Coba Lagi !');
            }
        }
        else{
            return redirect('login')->with('warning', 'Email Belum Terdaftar !');
        }

    }

    public function registerUser(Request $r){
        date_default_timezone_set('Asia/Jakarta');

        $user = new M_User;
        $user->username = $r->input("username");
        $user->email = $r->input("email");

        $user->alamat = null;
        $user->no_telp = null;
        $user->tgl_daftar = date("Y-m-d");
        $user->gambar_profile = "default.png";
        $user->status_user = 0;

        if($r->input("pass") != $r->input("con")){
            return redirect('register')->with('warning','Confirmasi Password tidak sama dengan kolom Password !');
        }else {
            $pass = md5($r->input("pass"));
            $user->password = $pass;

            if(!$user->save()){
                return redirect('register')->with('warning','Gagal Mendaftar !');
            }else {
                return redirect('login')->with('success','Berhasil Daftar, Silahkan Konfirmasi Email Anda !');
            }
        }
        

        
        
    }


    public function profile(){
        $idid = Session::get('user');
        if($idid != null){
            $data['user'] = M_User::where('id_user', $idid)->first();
            $barang = M_Barang::where('id_user', $idid)->get();
            foreach ($barang as $d) {
                $jual = M_Jual::where('id_barang', $d->id_barang)->first();
                $sewa = M_Sewain::where('id_barang', $d->id_barang)->first();
                if($d->status_barang == 0){

                    $data['harga'][$d->id_barang] = $jual->harga_beli;
                    $data['status'][$d->id_barang] = $jual->status_beli;

                }else {
                    $data['status'][$d->id_barang] = $sewa->status_jual;
                    $data['harga'][$d->id_barang] = M_Paket::where('id_sewa', $sewa->id_sewa)->pluck('harga_paket')->first();
                    $data['ketersediaan'] = M_Paket::where('id_sewa', $sewa->id_sewa)->pluck('ketersediaan_paket')->first();
                    $data['paketan'] = M_Paket::where('id_sewa', $sewa->id_sewa)->get();
    
                }

                $data['gambar'][$d->id_barang] = M_Gambar::where('id_barang', $d->id_barang)->orderBy('id_gambar_list', "ASC")->pluck('nama_gambar')->first();
            }
            $data['barang'] = $barang;
            $data['count_jual'] = M_Jual::where('id_user', $idid)->count();
            $data['count_sewa'] = M_Sewain::where('id_user', $idid)->count();
            
            return view('page.profile', $data);
        }else {
            return redirect('login');
        }
        
    }

    function ubahStat(Request $r){
        $test = M_Barang::where('id_barang', $r->id)->first();

        if($r->stat == true){
            $sta = 1;
        }else {
            $sta = 0;
        }

        if($test->status_barang == 0){
            $jual = M_Beli::where('id_barang', $r->id)->update(['status_beli' => $sta]);
        }else {
            $sewa = M_Sewa::where('id_barang', $r->id)->update(['status_sewa' => $sta]);
        }

    }

    function ubahProfile(Request $r){
        $idid = Session::get('user');
        $user = M_User::find($idid);
        $all = M_User::all();


        $bol  = "sukses";
        if($r->email != $user->email){
            foreach ($all as $d) {
                if($r->email == $d->email){
                    $bol = "gagal";
                }
            }
        }

        $user->username = $r->user;
        $user->alamat = $r->alamat;
        $user->email = $r->email;
        $user->no_telp = $r->telp;

        if($bol == "gagal"){
            echo "Email Sudah Terdaftar";
        }else {
            if($user->update()){
            
                echo "sukses";
            }else {
                echo " ";
            }
        }
        
    }

    function ubahPass(Request $r){
        $idid = Session::get('user');
        $userP = M_User::where('id_user', $idid)->first();
        $user = M_User::find($idid);
        $hash = md5($r->passLama);

        if($r->passBaru != $r->conPassBaru){
            echo "Password Baru tidak sama Dengan Konfirmasi Password Baru";
        }else {
            if($hash != $userP->password){
                echo "Password Lama Salah, silahkan coba lagi";
            }else {
                $user->password = md5($r->passBaru);
                if($user->update()){
                    echo "sukses";
                }else {
                    echo "Gagal Ubah";
                }
            }
        }
        
    }

    function aktivasi(Request $r){
        $id = $r->id;
        $stat = $r->stat;

        if($stat == 0){
            M_User::where('id_user', $id)->update(['status_user' => 1]);
            $stat = 1;
            echo $stat;
        }else {
            M_User::where('id_user', $id)->update(['status_user' => 0]);
            $stat = 0;
            echo $stat;
        }
    }


    function upload(Request $r, $tipe){
        $idid = Session::get('user');
        $foto = $r->file('uploadin');
        $foto->move(public_path('img/user'), time().'-'.$foto->getClientOriginalName());

        $filename = time().'-'.$foto->getClientOriginalName();
        // crop image
        $img = Image::make(public_path('img/user/'.$filename));
        $croppath = public_path('img/user/cropped/'.$filename);
 
        $img->crop($r->width, $r->height, $r->left, $r->right);
        $img->save($croppath);

        if($tipe == "update"){
            $val = M_User::where('id_user', $idid)->update(['gambar_profile' => $filename]);
            if($val){
                echo  "sukses";
            }else {
                echo "gagal";
            }
        }

        
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }



}
