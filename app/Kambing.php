<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kambing extends Model
{
    //
	
    protected $table = 'kambing';
    protected $fillable = ['idkambing','jeniskambing','tgllahir','berat','jeniskelamin','harga','idpeternak','idinvestor','idtransaksiinvestor','fotokambing','statuspersetujuan1','statuspersetujuan2','permintaan1','permintaan2','jual'];

    public function peternak(){
    	return $this->belongsTo('\App\Peternak');
    }

    public function investor(){
        return $this->belongsTo('App\Peternak');
    }

    public function pembeli(){
        return $this->belongsTo('App\Peternak');
    }

    public function perkembangan(){
    	return $this->hasMany('App\Perkembangan');
    }
    
    
}
