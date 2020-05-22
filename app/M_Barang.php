<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Barang extends Model
{
    protected $table = 'tbl_barang';

    public $timestamps = false;

    protected $primaryKey = 'id_barang';
}
