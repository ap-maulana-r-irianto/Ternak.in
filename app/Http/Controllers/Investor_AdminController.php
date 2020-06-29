<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investor;

class Investor_AdminController extends Controller
{
    public function search(){
        $investor = Investor::all();
        return view('admin.cariinvestor_admin', ['investor' => $investor]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $investor = Investor::all();
        return view('admin.seluruhinvestor_admin', ['investor' => $investor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tambahinvestor_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => ['required'],
            'alamat'   => ['required'],
            'nohp'     => ['required', 'max:14'],
            'noktp'    => ['required', 'size:16'],
            'username' => ['required', 'max:6'],
            'password' => ['required', 'max:10'],
            'email'    => ['required', 'email'],
            'scanktp'  => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file = $request->file('scanktp');
        $folder = public_path('scanktpinvestor');
        $file->move($folder, $file->getClientOriginalName());

        // Investor::create($request->all());

        $investor           = new Investor;
        $investor->nama     = $request->nama;
        $investor->alamat   = $request->alamat;
        $investor->nohp     = $request->nohp;
        $investor->noktp    = $request->noktp;
        $investor->username = $request->username;
        $investor->password = $request->password;
        $investor->email    = $request->email;
        $investor->scanktp  = $file->getClientOriginalName();

        $investor->save();

        return redirect('/admin/investor')->with('status','Data Investor Berhasil Ditambahkan!');
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
        $investor = Investor::findorfail($id);
        return view('admin.showinvestor_admin', compact('investor'));
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
        $investor = Investor::findorfail($id);
        return view('admin.editinvestor_admin', compact('investor'));
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
            'nama'     => ['required'],
            'alamat'   => ['required'],
            'nohp'     => ['required', 'max:14'],
            'noktp'    => ['required', 'size:16'],
            'username' => ['required', 'max:6'],
            'password' => ['required', 'max:10'],
            'email'    => ['required', 'email'],
            'scanktp'  => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
        ]);

        $file   = $request->file('scanktp');
        $folder = public_path('scanktpinvestor');
        $file->move($folder, $file->getClientOriginalName());

        Investor::where('id', $id)->update([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'nohp'     => $request->nohp,
            'noktp'    => $request->noktp,
            'username' => $request->username,
            'password' => $request->password,
            'email'    => $request->email,
            'scanktp'  => $file->getClientOriginalName()
        ]);
        return redirect('/admin/investor')->with('status','Data Investor Berhasil Diubah!');
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
        Investor::destroy($id);
        return redirect('/admin/investor')->with('status','Data Investor Berhasil Dihapus!');
    }
}
