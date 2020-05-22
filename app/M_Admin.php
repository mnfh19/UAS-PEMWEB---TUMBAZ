<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Admin extends Model
{
    protected $table = 'tbl_admin';

    public $timestamps = false;

    protected $primaryKey = 'id_admin';
}
