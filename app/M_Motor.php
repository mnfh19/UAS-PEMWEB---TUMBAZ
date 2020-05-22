<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Motor extends Model
{
    protected $table = 'tbl_motor';

    public $timestamps = false;

    protected $primaryKey = 'id_barang';
}
