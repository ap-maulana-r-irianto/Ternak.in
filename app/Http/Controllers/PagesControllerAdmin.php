<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerAdmin extends Controller
{
    //
    public function home(){
    	return view('admin.dashboard_admin');
    }

    public function grafik(){
    	return view('admin.grafik_admin');
    }

    public function profil(){
    	return view('admin.profil_admin');
    }
}
