<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Gambar extends Model
{
    protected $table = 'tbl_gambar_list';

    public $timestamps = false;

    protected $primaryKey = 'id_gambar_list';
}
