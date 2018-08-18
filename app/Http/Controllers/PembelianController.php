<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian, App\Supplier, App\Barang, Auth;
class PembelianController extends Controller
{
    public function json()
    {
        $pembelians = Pembelian::all();
        foreach ($pembelians as $pembelian)
        {
            $pembelian->nama_supplier = $pembelian->supplier->nama;
        }
        return $pembelians;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suppliers = Supplier::all();
        return view('pembelian.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelian = new Pembelian;
        $pembelian->no_nota = $request->no_nota;
        $pembelian->tanggal = $request->tanggal;
        $pembelian->total = 0;
        $pembelian->no_faktur = $request->no_faktur;
        $pembelian->supplier_id = $request->supplier_id;
        $pembelian->user_id = Auth::user()->id;
        $pembelian->save();

        $counter = 1;
        $total = 0;
        while (isset($request["id_$counter"]))
        {
            $idBarang = $request["id_$counter"];
            $qty = $request["jumlah_$counter"];
            $harga = $request["harga_$counter"];
            $subTotal = $qty * $harga;
            $total += $subTotal;
            $pembelian->barangs()->attach($idBarang, 
                ['quantity' => $qty, 'hbeli' => $harga, "subtotal" => $subTotal, "sisa" => $qty]);

            $barang = Barang::find($idBarang);
            $barang->stokTotal += $qty;
            $barang->save();
            $counter++;
        }
        $pembelian->total = $total;
        $pembelian->save();
        return redirect()->action('PembelianController@index');
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
        $pembelian = Pembelian::find($id);
        return view('pembelian.show', compact('pembelian'));
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
        return view('pembelian.edit');
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
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return redirect()->action('PembelianController@index');
    }
}
