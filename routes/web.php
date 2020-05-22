<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//php artisan make:controller C_Main
//php artisan make:model M_Main

Route::get('/', 'C_Main@dashboard');


Route::get('login', 'C_User@login');


Route::get('register', 'C_User@register');


Route::get('logout', 'C_User@logout');
Route::get('profile', 'C_User@profile');


Route::prefix('user')->group(function(){
    Route::post('/login', 'C_User@loginUser');
    Route::post('/register', 'C_User@registerUser');
    Route::get('/ubahStat', 'C_User@ubahStat');
    Route::post('/upload/{tipe}', 'C_User@upload');
    Route::post('/ubahProfile', 'C_User@ubahProfile');
    Route::post('/ubahPass', 'C_User@ubahPass');
});


Route::get('/kategori', 'C_Main@kategori');
Route::get('/cart', 'C_Main@cart');
Route::get('/product', 'C_Main@product');
Route::get('/checkout', 'C_Main@checkout');
Route::get('/contact', 'C_Main@contact');

Route::prefix('category')->group(function(){
    Route::get('/', 'C_Category@category');
    Route::get('/loadMore', 'C_Category@loadMore');
    Route::get('/loadMoreFilter', 'C_Category@loadMoreFilter');
    Route::get('/getData', 'C_Category@category');

    Route::get('/filtered', 'C_Category@filtered');

});

Route::prefix('jual')->group(function(){
    Route::get('/{tipe}', 'C_Jual@jual');
    Route::get('/ubah/{tipe}/{id}', 'C_Jual@jualUbah');
    Route::get('/getJenis/{tipe}', 'C_Jual@getJenis');
    Route::post('/tambah', 'C_Jual@tambah');
    Route::post('/update/{id}', 'C_Jual@update');
    Route::get('/delete/{id}/{tipe}', 'C_Jual@delete');
    Route::post('/upload', 'C_Jual@upload');
    Route::post('/deleteUp', 'C_Jual@deleteUp');
    Route::get('/getUploaded/{id}', 'C_Jual@getUploaded');
});

Route::prefix('sewa')->group(function(){
    Route::get('/', 'C_Sewa@sewa');
    Route::get('/ubah/{id}', 'C_Sewa@sewaUbah');
    Route::get('/getPaket/{idsewa}', 'C_Sewa@getPaket');
    Route::get('/addNew/{total}', 'C_Sewa@addNew');
    Route::post('/tambah', 'C_Sewa@tambah');
    
    Route::post('/update/{id}', 'C_Sewa@update');
    Route::get('/delete/{id}', 'C_Sewa@delete');

    Route::post('/upload', 'C_Sewa@upload');
    Route::get('/getKategori/{kat}', 'C_Sewa@getKategori');
    Route::get('/getKategori2/{kat}', 'C_Sewa@getKategori2');
    Route::get('/getUploaded/{id}', 'C_Sewa@getUploaded');
    Route::post('/deleteUp', 'C_Sewa@deleteUp');

    // Route::get('/getTipe/{kat}', 'C_Main@getKategori');
});

Route::prefix('admin')->group(function(){
    Route::get('/login', 'C_Admin@login');
    Route::post('/loginAdmin', 'C_Admin@loginAdmin');
    Route::get('/kelolaUser', 'C_Admin@kelolaUser');
    Route::get('/aktivasi/{id}', 'C_Admin@aktivasi');
});



Route::get('/product/{id}', 'C_Main@product');

Route::get('/getKabu/{id}', 'C_Main@getKabu');
Route::get('/getKeca/{id}', 'C_Main@getKeca');





Route::get('/tes', 'C_Main@tes');
