<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    //
    protected $table = 'pembeli';
    protected $fillable = ['nama','alamat','nohp','noktp','username','password','email'];
}
