<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Mobil extends Model
{
    protected $table = 'tbl_mobil';

    public $timestamps = false;

    protected $primaryKey = 'id_barang';
}
