<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peternak;

class Profil_Peternak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peternak = Peternak::where('id', '1')->first();
        return view('peternak.profil_peternak', ['peternak' => $peternak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('peternak.editprofil_peternak', compact('peternak'));
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
        return redirect('/peternak/profil')->with('status','Data Profil Berhasil Diubah!');
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
    }
}
