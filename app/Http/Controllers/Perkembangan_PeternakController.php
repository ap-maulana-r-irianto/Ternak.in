<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kambing;
use App\Perkembangan;

class Perkembangan_PeternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function buat($id)
    {
        $kambing = Kambing::findorfail($id);
        return view('peternak.tambahperkembangan_peternak', ['kambing' => $kambing]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peternak.tambahperkembangan_peternak');
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
            'idkambing'  => ['required'],
            'berat'      => ['required'],
            'tanggal'    => ['required', 'date'],
            'kondisi'    => ['required'],
            'keterangan' => []
            ]);

        $id = $request->idkambing;

        // Kambing::create($request->all());

        $kambing = new Kambing;
        $kambing->idkambing  = $request->idkambing;
        $kambing->berat      = $request->berat;
        $kambing->tanggal    = $request->tanggal;
        $kambing->kondisi    = $request->kondisi;
        $kambing->keterangan = $request->keterangan;

        $kambing->save();

        return redirect('/peternak/perkembangan/'.$id)->with('status','Data Perkembangan Berhasil Ditambahkan!');
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
        $kambing = Kambing::findorfail($id);
        $perkembangan = Perkembangan::where("idkambing", "$id")->first();

        return view('peternak.seluruhperkembangan_peternak', ['perkembangan' => $perkembangan, 'kambing' => $kambing]);
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
