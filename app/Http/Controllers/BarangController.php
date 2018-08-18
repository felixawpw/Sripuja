<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Barang;
class BarangController extends Controller
{
    public function json()
    {
        $barangs = Barang::all();
        $barangs = ["asd", "fgh", "jkl", 'qwe', 'asd', 'zxc'];
        return $barangs;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
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
        $barang = new Barang;
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->kodeharga = $request->kodeharga;
        $barang->hbeli = $request->hbeli;
        $barang->hjual = $request->hjual;
        $barang->stoktotal = $request->stoktotal;
        $barang->hgrosir = $request->hgrosir;

        $barang->save();
        return redirect()->action('BarangController@index');
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
        $barang = Barang::find($id);
        return view('barang.show', compact('barang'));
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
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
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
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->kodeharga = $request->kodeharga;
        $barang->hbeli = $request->hbeli;
        $barang->hjual = $request->hjual;
        $barang->stoktotal = $request->stoktotal;
        $barang->hgrosir = $request->hgrosir;

        $barang->save();
        return redirect()->action('BarangController@index');
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
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->action('BarangController@index');
    }
}
