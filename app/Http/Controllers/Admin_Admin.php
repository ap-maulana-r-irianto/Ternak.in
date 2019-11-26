<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class Admin_Admin extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin = Admin::all();
        return view('admin.seluruhadmin_admin', ['admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambahadmin_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'             => ['required'],
            'alamat'           => ['required'],
            'nohp'             => ['required', 'max:14'],
            'noktp'            => ['required', 'size:16', 'unique:admin,noktp'],
            'username'         => ['required', 'size:6'],
            'password'         => ['required', 'size:10'],
            'email'            => ['required', 'email', 'unique:admin,email'],
            'scanktp'          => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file = $request->file('scanktp');
        $folder = public_path('scanktpadmin');
        $file->move($folder, $file->getClientOriginalName());

        // admin::create($request->all());

        $admin = new Admin;
        $admin->nama             = $request->nama;
        $admin->alamat           = $request->alamat;
        $admin->nohp             = $request->nohp;
        $admin->noktp            = $request->noktp;
        $admin->username         = $request->username;
        $admin->password         = $request->password;
        $admin->email            = $request->email;
        $admin->scanktp          = $file->getClientOriginalName();

        $admin->save();

        return redirect('/admin/admin')->with('status','Data Admin Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $admin = Admin::findorfail($id);
        return view('admin.showadmin_admin', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = Admin::findorfail($id);
        return view('admin.editadmin_admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama'             => ['required'],
            'alamat'           => ['required'],
            'nohp'             => ['required', 'max:14'],
            'noktp'            => ['required', 'size:16', 'unique:admin,noktp'],
            'username'         => ['required', 'size:6'],
            'password'         => ['required', 'size:10'],
            'email'            => ['required', 'email', 'unique:admin,email'],
            'scanktp'          => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file = $request->file('scanktp');
        $folder = public_path('scanktpadmin');
        $file->move($folder, $file->getClientOriginalName());
        
        Admin::where('id', $id)->update([
            'nama'             => $request->nama,
            'alamat'           => $request->alamat,
            'nohp'             => $request->nohp,
            'noktp'            => $request->noktp,
            'username'         => $request->username,
            'password'         => $request->password,
            'email'            => $request->email,
            'scanktp'          => $file->getClientOriginalName()
        ]);
        return redirect('/admin/peternaadmink')->with('status','Data Admin Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Admin::destroy($id);
        return redirect('/admin/admin')->with('status','Data Admin Berhasil Dihapus!');
    }
}
