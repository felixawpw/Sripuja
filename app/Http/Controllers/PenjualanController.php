<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang, App\Penjualan, App\Customer, Auth;

class PenjualanController extends Controller
{
    public function json()
    {
        $penjualans = Penjualan::all();
        
        foreach($penjualans as $penjualan)
        {
            $penjualan->nama_customer = $penjualan->customer->nama;
            $penjualan->nama_penjual = $penjualan->user->name;
        }

        return $penjualans;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('penjualan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customers = Customer::all();
        return view('penjualan.create', compact('customers'));
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

        $penjualan = new Penjualan;
        $penjualan->no_nota = $request->no_nota;
        $penjualan->tanggal = $request->tanggal;
        $penjualan->total = $request->total;
        $penjualan->customer_id = $request->customer_id;
        $penjualan->user_id = Auth::user()->id;
        $penjualan->total = 0;
        $penjualan->save();


        $counter = 1;
        $total = 0;
        while (isset($request["id_$counter"]))
        {
            $idBarang = $request["id_$counter"];
            $qty = $request["jumlah_$counter"];
            $harga = $request["harga_$counter"];
            $subTotal = $qty * $harga;
            $total += $subTotal;

            $barang = Barang::find($idBarang);
            $barang->stokTotal -= $qty;
            $barang->save();

            $pembelian = $barang->pembelians()->where('sisa', '>', 0)->orderBy('hbeli', 'asc')->first();
            $pembelian->sisa -= $qty;
            $hbeli = $pembelian->pivot->hbeli;

            $penjualan->barangs()->attach($idBarang, 
                ['quantity' => $qty, 'hbeli' => $hbeli, "hjual" => $harga, "subtotal" => $subTotal, "disc" => $qty, "hgrosir" => 0]);

            $counter++;
        }

        $penjualan->total = $total;
        $penjualan->save();
        return redirect()->action('PenjualanController@index');
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
