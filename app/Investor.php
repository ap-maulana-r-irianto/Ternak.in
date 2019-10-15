<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    //

    protected $table = 'investor';
    protected $fillable = ['nama','alamat','nohp','noktp','username','password','email'];
}
