<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kambing;

class Kambingku_PeternakController extends Controller
{
    public function search(){
        //
        $kambing = Kambing::all();
        return view('peternak.carikambingku_peternak', ['kambing' => $kambing]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kambing = Kambing::all();
        return view('peternak.seluruhkambingku_peternak', ['kambing' => $kambing]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peternak.tambahkambingku_peternak');
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
            'idkambing' => ['required', 'unique:kambing,idkambing'],
            'jeniskambing' => ['required'],
            'tgllahir' => ['required', 'date'],
            'berat' => ['required'],
            'jeniskelamin' => ['required'],
            'harga' => ['required']
        ]);

        Kambing::create($request->all());

        return redirect('/peternak/kambingku')->with('status','Data Kambingku Berhasil Ditambahkan!');
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
        return view('peternak.detailkambingku_peternak');
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
