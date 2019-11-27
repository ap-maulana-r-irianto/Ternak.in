<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Investor;
use App\Admin;
use App\Kambing;
use App\Transaksi;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesControllerAdmin extends Controller
{
    //
    public function home(){
        $peternak = Peternak::all();
        $investor = Investor::all();
        $admin    = Admin::all();
        $kambing  = Kambing::all();
        $transaksi= Kambing::where('statuspersetujuan2', 1)->get();
    	return view('admin.dashboard_admin', ['peternak' => $peternak, 'investor' => $investor, 'admin' => $admin, 'kambing' => $kambing, 'transaksi' => $transaksi]);
    }

    public function grafik(){
    	return view('admin.grafik_admin');
    }

    public function profil(){
    	return view('admin.profil_admin');
    }
}
