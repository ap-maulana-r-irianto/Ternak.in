<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerInvestor extends Controller
{
    //
    public function home(){
    	return view('investor.dashboard_investor');
    }
}
