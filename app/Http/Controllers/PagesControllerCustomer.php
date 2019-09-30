<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerCustomer extends Controller
{
    //
    public function home(){
    	return view('dashboard_customer');
    }
}
