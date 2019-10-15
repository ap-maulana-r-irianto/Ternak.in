<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peternak extends Model
{
    //
    use SoftDeletes;
    protected $table = 'peternak';
    protected $fillable = ['nama','alamat','nohp','noktp','alamatpeternakan','username','password','email'];
     
}
