<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $tra = Transaksi::all();
        return view('page.transaksi.index',compact('tra','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pel = Pelanggan::all();
        return view('page.transaksi.form',compact('pel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $tra = new Transaksi;

        $tra->no_transaksi = $request->no;
        $tra->pelanggans_id = $request->pelanggan;
        $tra->tgl = $request->tgl;
        $tra->tarif = $request->tarif;
     
     

        $tra->save();

        return redirect('/transaksi');
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
        $pel = Pelanggan::all();
        $tra = Transaksi::find($id);

        return view('page.transaksi.edit',compact('tra','pel'));
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
        $tra = Transaksi::find($id);

        $tra->no_transaksi = $request->no;
        $tra->pelanggans_id = $request->pelanggan;
        $tra->tgl = $request->tgl;
        $tra->tarif = $request->tarif;
     
     

        $tra->save();

        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tra  = Transaksi::find($id);
        $tra->delete();
        return redirect('/transaksi');
    }
}
