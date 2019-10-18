<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Peternak;
use App\Investor;
use App\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    //
    public function login(Request $request){
    	$dataadmin = Admin::where('email', $request->email)->where('password', $request->password)->get();
    	$datapeternak = Peternak::where('email', $request->email)->where('password', $request->password)->get();
    	$datainvestor = Investor::where('email', $request->email)->where('password', $request->password)->get();
    	$datapembeli = Pembeli::where('email', $request->email)->where('password', $request->password)->get();

    	if (count($dataadmin)>0) {
    		Auth::guard('admin')->LoginUsingId($dataadmin[0]['id']);
    		return redirect('admin/dashboard');
    	}elseif (count($datapeternak)>0) {
    		Auth::guard('peternak')->LoginUsingId($datapeternak[0]['id']);
    		return redirect('peternak/dashboard');
    	}elseif (count($datainvestor)>0) {
    		Auth::guard('investor')->LoginUsingId($datainvestor[0]['id']);
    		return redirect('investor/dashboard');
    	}elseif (count($datapembeli)>0) {
    		Auth::guard('pembeli')->LoginUsingId($datapembeli[0]['id']);
    		return redirect('pembeli/dashboard');
    	}else{
    		return redirect('/');
    	}

    }

    public function create(){
    	return view('register');
    }

    public function store(Request $request){
    	$request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required', 'max:14'],
            'noktp' => ['required', 'size:16', 'unique:investor,username'],
            'username' => ['required', 'size:6', 'unique:investor,username'],
            'password' => ['required', 'size:10'],
            'email' => ['required', 'email']
        ]);

        Admin::create($request->all());

        return redirect('/');
    }

    public function logout(){
    	if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    		return redirect('/');
    	}elseif (Auth::guard('peternak')->check()) {
    		Auth::guard('peternak')->logout();
    		return redirect('/');
    	}elseif (Auth::guard('investor')->check()) {
    		Auth::guard('investor')->logout();
    		return redirect('/');
    	}elseif (Auth::guard('pembeli')->check()) {
    		Auth::guard('pembeli')->logout();
    		return redirect('/');
    	}

    
    }	
    
    
}
