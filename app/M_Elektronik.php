<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Elektronik extends Model
{
    protected $table = 'tbl_elektronik';

    public $timestamps = false;

    protected $primaryKey = 'id_barang';
}
