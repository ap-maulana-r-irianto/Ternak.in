<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kambing;

class Keranjang_InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kambing = Kambing::where('idinvestor', "Auth::user()->id")->where('permintaan1', 1)->where('permintaan2', null)->get();
        return view('investor.keranjang_investor', ['kambing' => $kambing]);
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
        Kambing::where('id', $id)->update([
            'idinvestor' => "Auth::user()->id",
            'permintaan1' => true
        ]);

        return redirect('/investor/peternak')->with('status','Data Kambing Berhasil Ditambahkan ke Keranjang!');
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
        Kambing::where('id', $id)->update([
            'idinvestor' => null,
            'permintaan1' => null
        ]);
        return view('investor.keranjang_investor')->with('status','Data Kambing Berhasil Dihapus Dari Keranjang!');
    }
}
