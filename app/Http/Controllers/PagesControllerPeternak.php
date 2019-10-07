<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerPeternak extends Controller
{
    //
    public function home(){
    	return view('peternak.dashboard_peternak');
    }
}
