<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kambing extends Model
{
    //
	
    protected $table = 'kambing';
    protected $fillable = ['idkambing','jeniskambing','tgllahir','berat','jeniskelamin','harga','idpeternak','fotokambing'];

    public function peternak(){
    	return $this->belongsTo('App\Peternak');
    }
    
    
}
