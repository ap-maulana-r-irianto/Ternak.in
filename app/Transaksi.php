<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksiinvestor';
    protected $fillable = ['metode','status','bukti'];
}
