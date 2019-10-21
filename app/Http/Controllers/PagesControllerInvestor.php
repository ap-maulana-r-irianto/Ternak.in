<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;

class PagesControllerInvestor extends Controller
{
    //
    public function home(){
        $peternak = Peternak::all();
        $investor = Investor::all();
        $admin    = Admin::all();
        $kambing  = Kambing::all();
    	return view('investor.dashboard_investor', ['peternak' => $peternak, 'investor' => $investor, 'admin' => $admin, 'kambing' => $kambing]);
    }

    public function grafik(){
    	return view('investor.grafik_investor');
    }

    public function profil(){
        $investor = Investor::where('id','1')->first();
    	return view('investor.profil_investor', ['investor' => $investor]);
    }
}
