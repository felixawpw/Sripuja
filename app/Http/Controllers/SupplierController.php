<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{

    public function json()
    {
        $suppliers = Supplier::all();
        return $suppliers;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
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
        $supplier = new Supplier;
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->fax = $request->fax;
        $supplier->namasales = $request->namasales;
        $supplier->teleponsales = $request->teleponsales;
        $supplier->save();

        return redirect()->action('SupplierController@index');
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
        $supplier = Supplier::find($id);
        return view('supplier.show', compact('supplier'));
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
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('supplier'));
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
        $supplier = Supplier::find($id);
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->fax = $request->fax;
        $supplier->namasales = $request->namasales;
        $supplier->teleponsales = $request->teleponsales;
        $supplier->save();

        return redirect()->action('SupplierController@index');
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
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->action('SupplierController@index');
    }
}
