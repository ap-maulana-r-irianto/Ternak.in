<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;


class PagesControllerPeternak extends Controller
{
    //
    public function home(){
        $peternak = Peternak::all();
        $investor = Investor::all();
        $admin    = Admin::all();
        $kambing  = Kambing::all();
    	return view('peternak.dashboard_peternak', ['peternak' => $peternak, 'investor' => $investor, 'admin' => $admin, 'kambing' => $kambing]);
    }

    public function grafik(){
    	return view('peternak.grafik_peternak');
    }

    public function profil(){
        $peternak = Peternak::where('id',"Auth::user()->id")->first();
    	return view('peternak.profil_peternak', ['peternak' => $peternak]);
    }
}
