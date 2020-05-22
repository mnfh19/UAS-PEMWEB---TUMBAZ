<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Paket extends Model
{
    protected $table = 'tbl_paket';

    public $timestamps = false;

    protected $primaryKey = 'id_paket';
}
