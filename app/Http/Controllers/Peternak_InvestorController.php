<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Kambing;

class Peternak_InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(){
        //
        $peternak = Peternak::all();
        return view('investor.caripeternak_investor', ['peternak' => $peternak]);
    }

    public function index()
    {
        //
        $peternak = Peternak::all();
        return view('investor.seluruhpeternak_investor', ['peternak' => $peternak]);
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
            'idinvestor'    => '1'
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
    }
}
