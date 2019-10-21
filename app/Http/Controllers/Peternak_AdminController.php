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
        // $peternak = new Peternak;
        // $peternak->nama = $request->nama;
        // $peternak->alamat = $request->alamat;
        // $peternak->nohp = $request->nohp;
        // $peternak->noktp = $request->noktp;
        // $peternak->alamatpeternakan = $request->alamatpeternakan;
        // $peternak->username = $request->username;
        // $peternak->password = $request->password;
        // $peternak->email = $request->email;
        // $peternak->save();

        // Peternak::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'nohp' => $request->nohp,
        //     'noktp' => $request->noktp,
        //     'alamatpeternakan' => $request->alamatpeternakan,
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'email' => $request->email
        // ])
        
        $request->validate([
            'nama'             => ['required'],
            'alamat'           => ['required'],
            'nohp'             => ['required', 'max:14'],
            'noktp'            => ['required', 'size:16', 'unique:peternak,noktp'],
            'alamatpeternakan' => ['required'],
            'username'         => ['required', 'size:6'],
            'password'         => ['required', 'size:10'],
            'email'            => ['required', 'email', 'unique:peternak,email'],
            'scanktp'          => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file = $request->file('scanktp');
        $folder = public_path('scanktppeternak');
        $file->move($folder, $file->getClientOriginalName());

        // Peternak::create($request->all());

        $peternak = new Peternak;
        $peternak->nama = $request->nama;
        $peternak->alamat = $request->alamat;
        $peternak->nohp = $request->nohp;
        $peternak->noktp = $request->noktp;
        $peternak->alamatpeternakan = $request->alamatpeternakan;
        $peternak->username = $request->username;
        $peternak->password = $request->password;
        $peternak->email = $request->email;
        $peternak->scanktp = $file->getClientOriginalName();

        $peternak->save();

        return redirect('/admin/peternak')->with('status','Data Peternak Berhasil Ditambahkan!');
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
            'nama'             => ['required'],
            'alamat'           => ['required'],
            'nohp'             => ['required', 'max:14'],
            'noktp'            => ['required', 'size:16', 'unique:peternak,noktp'],
            'alamatpeternakan' => ['required'],
            'username'         => ['required', 'size:6'],
            'password'         => ['required', 'size:10'],
            'email'            => ['required', 'email', 'unique:peternak,email'],
            'scanktp'          => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file = $request->file('scanktp');
        $folder = public_path('scanktppeternak');
        $file->move($folder, $file->getClientOriginalName());
        
        Peternak::where('id', $id)->update([
            'nama'             => $request->nama,
            'alamat'           => $request->alamat,
            'nohp'             => $request->nohp,
            'noktp'            => $request->noktp,
            'alamatpeternakan' => $request->alamatpeternakan,
            'username'         => $request->username,
            'password'         => $request->password,
            'email'            => $request->email,
            'scanktp'          => $file->getClientOriginalName()
        ]);
        return redirect('/admin/peternak')->with('status','Data Peternak Berhasil Diubah!');
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
        return redirect('/admin/peternak')->with('status','Data Peternak Berhasil Dihapus!');
    }
}
