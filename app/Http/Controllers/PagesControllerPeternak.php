<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerPeternak extends Controller
{
    //
    public function home(){
    	return view('peternak.dashboard_peternak');
    }

    public function grafik(){
    	return view('peternak.grafik_peternak');
    }

    public function profil(){
    	return view('peternak.profil_peternak');
    }
}
