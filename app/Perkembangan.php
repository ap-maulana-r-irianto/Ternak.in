<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    //
    protected $table = 'dataperkembanganternak';
    protected $fillable = ['idkambing','berat','tanggal','kondisi','keterangan'];

    public function kambing(){
    	return $this->hasMany('App\Kambing');
    }
}
