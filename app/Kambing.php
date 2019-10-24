<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kambing extends Model
{
    //
	
    protected $table = 'kambing';
    protected $fillable = ['idkambing','jeniskambing','tgllahir','berat','jeniskelamin','harga','idpeternak','fotokambing'];

    public function peternak(){
    	return $this->hasMany('App\Peternak');
    }

    public function perkembangan(){
    	return $this->belongsTo('App\Perkembangan');
    }
    
    
}
