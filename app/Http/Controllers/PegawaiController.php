<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai, App\User;
class PegawaiController extends Controller
{
    public function json()
    {
        $pegawais = Pegawai::all();
        foreach ($pegawais as $pegawai)
        {
            $pegawai->nama = $pegawai->user->name;
        }
        return $pegawais;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pegawai.create');
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
        $nama = $request->nama;
        $user = User::create([
            'name' => $nama,
            'email' => "$nama@sripuja.com",
            'password' => bcrypt('sripuja'),
        ]);

        $pegawai = new Pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->hp = $request->hp;
        $pegawai->gaji = $request->gaji;
        $pegawai->user_id = $user->id;
        $pegawai->save();

        return redirect()->action('PegawaiController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
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
        $pegawai = Pegawai::find($id);
        $pegawai->user->name = $request->nama;
        $pegawai->user->save();
        $pegawai->alamat = $request->alamat;
        $pegawai->telepon = $request->telepon;
        $pegawai->hp = $request->hp;
        $pegawai->gaji = $request->gaji;
        $pegawai->save();
        return redirect()->action('PegawaiController@index');
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
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->action('PegawaiController@index');

    }
}
