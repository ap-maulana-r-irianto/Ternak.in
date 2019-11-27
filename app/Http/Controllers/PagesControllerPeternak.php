<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesControllerPeternak extends Controller
{
    //
    public function home(){
        $transaksi = Kambing::where('idpeternak', Auth::user()->id)->where('statuspersetujuan2', 1)->get();
        $investor = DB::table('kambing')->join('investor','investor.id','=','kambing.idinvestor')->where('kambing.idpeternak', Auth::user()->id)->get();
        $request  = Kambing::where('idpeternak', Auth::user()->id)->where('statuspersetujuan1', 1)->where('statuspersetujuan2', null)->get();
        $kambing  = Kambing::where('idpeternak', Auth::user()->id)->get();
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
