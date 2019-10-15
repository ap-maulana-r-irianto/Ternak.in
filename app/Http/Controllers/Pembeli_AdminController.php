<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembeli;

class Pembeli_AdminController extends Controller
{
    public function search(){
        $pembeli = Pembeli::all();
        return view('admin.caripembeli_admin', ['pembeli' => $pembeli]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembeli = Pembeli::all();
        return view('admin.seluruhpembeli_admin', ['pembeli' => $pembeli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambahpembeli_admin');
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
            'nama' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required', 'max:14'],
            'noktp' => ['required', 'size:16', 'unique:investor,username'],
            'username' => ['required', 'size:6', 'unique:investor,username'],
            'password' => ['required', 'size:10'],
            'email' => ['required', 'email']
        ]);

        Pembeli::create($request->all());

        return redirect('/admin/pembeli')->with('status','Data Pembeli Berhasil Ditambahkan!');
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
        return view('admin.showpembeli_admin');
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
        $pembeli = Pembeli::findorfail($id);
        return view('admin.editpembeli_admin', compact('pembeli'));
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
            'nama' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required', 'max:14'],
            'noktp' => ['required', 'size:16', 'unique:investor,username'],
            'username' => ['required', 'size:6', 'unique:investor,username'],
            'password' => ['required', 'size:10'],
            'email' => ['required', 'email']
        ]);

        Pembeli::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'noktp' => $request->noktp,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ]);
        return redirect('/admin/pembeli')->with('status','Data Pembeli Berhasil Diubah!');
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
        Pembeli::destroy($id);
        return redirect('/admin/pembeli')->with('status','Data Pembeli Berhasil Dihapus!');
    }
}
