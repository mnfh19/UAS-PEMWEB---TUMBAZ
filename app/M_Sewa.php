<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Sewa extends Model
{
    protected $table = 'tbl_sewa';

    public $timestamps = false;

    protected $primaryKey = 'id_sewa';
}
