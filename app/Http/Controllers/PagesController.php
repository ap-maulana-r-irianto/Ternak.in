<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Peternak;
use App\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    //
    public function awal(){
        return view('login');
    }
    public function login(Request $request){
    	$dataadmin = Admin::where('email', $request->email)->where('password', $request->password)->get();
    	$datapeternak = Peternak::where('email', $request->email)->where('password', $request->password)->get();
    	$datainvestor = Investor::where('email', $request->email)->where('password', $request->password)->get();

    	if (count($dataadmin)>0) {
    		Auth::guard('admin')->LoginUsingId($dataadmin[0]['id']);
    		return redirect('admin/dashboard');
    	}elseif (count($datapeternak)>0) {
    		Auth::guard('peternak')->LoginUsingId($datapeternak[0]['id']);
    		return redirect('peternak/dashboard');
    	}elseif (count($datainvestor)>0) {
    		Auth::guard('investor')->LoginUsingId($datainvestor[0]['id']);
    		return redirect('investor/dashboard');
    	}else{
    		return redirect('/');
    	}

    }

    public function createpeternak(){
        $user = 'peternak';
    	return view('register', ['user' => $user]);
    }
    public function createinvestor(){
        $user = 'investor';
        return view('register', ['user' => $user]);
    }
    public function createpembeli(){
        $user = 'pembeli';
        return view('register', ['user' => $user]);
    }
    public function createadmin(){
        $user = 'admin';
        return view('register', ['user' => $user]);
    }

    public function storepeternak(Request $request){
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

        return redirect('login');
    }
    public function storeinvestor(Request $request){
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

        return redirect('login');
    }
    public function storepembeli(Request $request){
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

        return redirect('login');
    }
    public function storeadmin(Request $request){
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

        return redirect('login');
    }

    public function logout(){
    	if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    		return view('login');
    	}elseif (Auth::guard('peternak')->check()) {
    		Auth::guard('peternak')->logout();
    		return view('login');
    	}elseif (Auth::guard('investor')->check()) {
    		Auth::guard('investor')->logout();
    		return view('login');
    	}

    
    }	
    
    
}
