<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peternak;

class Peternak_AdminController extends Controller
{
    public function search(){
        //
        $peternak = Peternak::all();
        return view('admin.caripeternak_admin', ['peternak' => $peternak]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peternak = Peternak::all();
        return view('admin.seluruhpeternak_admin', ['peternak' => $peternak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambahpeternak_admin');
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
        $peternak = new Peternak();
        $peternak->nama = $request->input('nama');
        $peternak->alamat = $request->input('alamat');
        $peternak->nohp = $request->input('nohp');
        $peternak->noktp = $request->input('noktp');
        $peternak->alamatpeternakan = $request->input('alamatpeternakan');
        $peternak->username = $request->input('username');
        $peternak->password = $request->input('password');
        $peternak->email = $request->input('email');
        $peternak->save();
        return redirect('/admin/seluruhpeternak');
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
        $peternak = Peternak::findorfail($id);
        return view('admin.showpeternak_admin', compact('peternak'));
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
        $peternak = Peternak::findorfail($id);
        return view('admin.editpeternak_admin', compact('peternak'));
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
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'noktp' => 'required',
            'alamatpeternakan' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        
        Peternak::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'noktp' => $request->noktp,
            'alamatpeternakan' => $request->alamatpeternakan,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ]);
        return redirect('/admin/seluruhpeternak');
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
        Peternak::destroy($id);
        return redirect('/admin/seluruhpeternak');
    }
}
