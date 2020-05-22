<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    protected $table = 'tbl_user';

    public $timestamps = false;

    protected $primaryKey = 'id_user';
}
