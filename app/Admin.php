<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    protected $fillable = ['nama','alamat','nohp','noktp','username','password','email','scanktp'];
}
