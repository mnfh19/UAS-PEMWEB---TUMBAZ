<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Beli extends Model
{
    protected $table = 'tbl_beli';

    public $timestamps = false;

    // protected $primaryKey = 'id_beli';
    protected $primaryKey = 'id_barang';

}
