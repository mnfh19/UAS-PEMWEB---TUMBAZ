<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Sewa2 extends Model
{
    protected $table = 'tbl_sewa';

    public $timestamps = false;

    protected $primaryKey = 'id_barang';
}
