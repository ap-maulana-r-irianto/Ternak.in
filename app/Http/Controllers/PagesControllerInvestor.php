<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesControllerInvestor extends Controller
{
    //
    public function home(){
        $peternak   = Peternak::all();
        $peternakku = DB::table('kambing')->join('peternak','peternak.id','=','kambing.idpeternak')->where('kambing.idinvestor', Auth::user()->id)->where('kambing.statuspersetujuan2',null)->get();
        $request    = Kambing::where('statuspersetujuan1', 1)->where('statuspersetujuan2',null)->get();
        $kambing    = Kambing::where('idinvestor', Auth::user()->id)->where('statuspersetujuan2',null)->get();
    	return view('investor.dashboard_investor', ['peternak' => $peternak, 'peternakku' => $peternakku, 'request' => $request, 'kambing' => $kambing]);
    }

    public function grafik(){
    	return view('investor.grafik_investor');
    }

    public function profil(){
        $investor = Investor::where('id',"Auth::user()->id")->first();
    	return view('investor.profil_investor', ['investor' => $investor]);
    }
}
