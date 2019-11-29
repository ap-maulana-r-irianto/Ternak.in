<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kambing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Requestjual_InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kambing = DB::table('kambing')->join('investor','investor.id','=','kambing.idinvestor')->where('kambing.idinvestor', Auth::user()->id)->where('kambing.statuspersetujuan1',1)->where('kambing.statuspersetujuan2',0)->get();
        // $kambing = Kambing::where('idpeternak', Auth::user()->id)->where('statuspersetujuan1', 1)->get();
        return view('investor.seluruhrequestjual_investor', ['kambing' => $kambing]);
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
        Kambing::where('id', $id)->update([
            'statuspersetujuan2' => 1
        ]);
        return redirect('/investor/requestjual')->with('status','Data Pengajuan Penjualan Kambing Berhasil Disetujui dan Kerja Sama Telah Selesai!');
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
        Kambing::where('id', $id)->update([
            'statuspersetujuan1' => 0,
            'jual'    => 0
        ]);
        return redirect('/investor/requestjual')->with('status','Data Pengajuan Penjualan Kambing Berhasil Ditolak!');
    }
}
