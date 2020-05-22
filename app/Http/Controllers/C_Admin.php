<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use App\M_Admin;
use App\M_User;


class C_Admin extends Controller
{

    public function login(){
        return view('page.loginadmin');
    }

    public function kelolaUser(){
        $data['user'] = M_User::all();
        return view('page.kelolauser', $data);
    }

    public function loginAdmin(Request $r){
        $e = $r->input("username");
        $p = $r->input("password");

        // $hash = md5($p);
        $hash = $p;

        // $remember_me = $r->has('remember_me') ? true : false; 
        $data = M_Admin::where('username', $e)->first();


        if($data){ 
            if($hash == $data->pass){
                Session::put('user', $data->id_admin);

                    // Session::put('lvl_user',$data->level_user);
                    Session::put('username',$data->username);
                    // Session::put('profil',$data->gambar_profile);
                    
                    return redirect('admin/kelolaUser')->with('success', 'Sukses Login !');
                
            }
            else{
                return redirect('admin/login')->with('warning', 'Password Salah, Coba Lagi !');
            }
        }
        else{
            return redirect('admin/login')->with('warning', 'Username Belum Terdaftar !');
        }

    }

    function aktivasi($id){
        $us = M_User::where('id_user', $id)->first();
        if($us->status_user == 0){
            $sta = 1;
        }else {
            $sta = 0;
        }

        M_User::where('id_user', $id)->update(['status_user' => $sta]);
        echo $sta;
    }


    
}
