<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
class AbsenController extends Controller
{
    //
    public function index()
    {
    	
    }

    public function store(Request $request)
    {
    	$r = $request->all();
    	$array = array();
    	parse_str($r['form'], $array);
    	$tanggal = $array['tanggal'];

    	$countAbsen = Absen::where('tanggal', '=', "$tanggal 00:00:00")->count();
    	if ($countAbsen > 0)
    		return "Tanggal tersebut sudah diabsen.";

    	$output = "$tanggal;";
    	foreach($array as $key=>$value)
    	{
    		if (strpos($key, 'radio_') === 0)
    		{
    			$idPegawai = explode('_', $key)[1];

    			$absen = new Absen;
    			$absen->tanggal = $tanggal;
    			$absen->pegawai_id = $idPegawai;
    			$absen->absensi = $value;
    			$absen->save();
    		}
    	}
    	return "Berhasil absen";
    }
}
