<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kambing;
use App\Peternak;

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
        $peternak = Peternak::where('id','1')->first();
        return view('peternak.seluruhkambingku_peternak', ['kambing' => $kambing, 'peternak' => $peternak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peternak = Peternak::all();
        return view('peternak.tambahkambingku_peternak', ['peternak' => $peternak]);
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
            'idkambing'    => ['required', 'unique:kambing,idkambing'],
            'tgllahir'     => ['required', 'date'],
            'berat'        => ['required'],
            'jeniskelamin' => ['required'],
            'harga'        => ['required'],
            'jeniskambing' => ['required'],
            'idpeternak' => ['required'],
            'fotokambing'  => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
            ]);

        $file = $request->file('fotokambing');
        $folder = public_path('fotokambing');
        $file->move($folder, $file->getClientOriginalName());

        // Kambing::create($request->all());

        $kambing = new Kambing;
        $kambing->idkambing    = $request->idkambing;
        $kambing->tgllahir     = $request->tgllahir;
        $kambing->berat        = $request->berat;
        $kambing->jeniskelamin = $request->jeniskelamin;
        $kambing->harga        = $request->harga;
        $kambing->jeniskambing = $request->jeniskambing;
        $kambing->idpeternak   = $request->idpeternak;
        $kambing->fotokambing  = $file->getClientOriginalName();

        $kambing->save();

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
        $kambing = Kambing::findorfail($id);
        return view('peternak.detailkambingku_peternak', compact('kambing'));
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
        $kambing = Kambing::findorfail($id);
        return view('peternak.editkambingku_peternak', compact('kambing'));
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
            'idkambing'    => ['required', 'unique:kambing,idkambing'],
            'tgllahir'     => ['required', 'date'],
            'berat'        => ['required'],
            'jeniskelamin' => ['required'],
            'harga'        => ['required'],
            'jeniskambing' => ['required'],
            'idpeternak'   => ['required'],
            'fotokambing'  => ['required','file','image','mimes:jpeg,png,jpg','max:5000']
            ]);

        $file = $request->file('fotokambing');
        $folder = public_path('fotokambing');
        $file->move($folder, $file->getClientOriginalName());

        Kambing::where('id', $id)->update([
            'idkambing'    => $request->idkambing,
            'tgllahir'     => $request->tgllahir,
            'berat'        => $request->berat,
            'jeniskelamin' => $request->jeniskelamin,
            'harga'        => $request->harga,
            'jeniskambing' => $request->jeniskambing,
            'idpeternak'   => $request->idpeternak,
            'fotokambing'  => $file->getClientOriginalName()
        ]);
        return redirect('/peternak/kambingku')->with('status','Data Kambing Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Peternak::destroy($id);
        return redirect('/peternak/kambingku')->with('status','Data Kambing Berhasil Dihapus!');
    }
}
