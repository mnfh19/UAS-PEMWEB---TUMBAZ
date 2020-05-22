<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Lokasi extends Model
{
    protected $table = 'tbl_lokasi';

    public $timestamps = false;

    // protected $primaryKey = 'id_lokasi';
    protected $primaryKey = 'id_barang';
}
