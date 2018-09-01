<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Auth;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(array('username' => $request->username, 'password' => $request->password))){
            return "success";
        }
        else {        
            return "Wrong Credentials";
        }
=======
use App\Pegawai, App\Absen;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        $absens = Absen::where('absensi', '=', 0)->orderBy('pegawai_id', 'asc')->orderBy('tanggal', 'asc')->get();
        /*
        $events = array();
        foreach($absens as $absen)
        {
            $event = array();
            $event['title'] = $absen->pegawai->user->name;
            $event['start'] = $absen->tanggal;
            $events[] = $event;   
        }
        $events = json_encode($events);
        */
        
        $absenCounter = count($absens);
        $count = 0;
        $events = array();

        if ($absenCounter > 0)
        {        
            $prev = strtotime($absens[0]->tanggal);
            $tempevent = null;
            $prevId = $absens[0]->pegawai_id;
            foreach ($absens as $absen)
            {
                $idP = $absen->pegawai_id;
                $now = strtotime($absen->tanggal);
                if ($idP == $prevId)
                {
                    if ($now - $prev == 86400)
                        $tempevent['end'] = date('Y-m-d', $now + 86400);
                    else
                    {
                        if (isset($tempevent))
                            $events[] = $tempevent;

                        $event = array();
                        $event['title'] = $absen->pegawai->user->name;
                        $event['start'] = explode(' ',$absen->tanggal)[0];
                        $tempevent = $event;
                    }
                }
                else
                {
                    if (isset($tempevent))
                        $events[] = $tempevent;

                    $event = array();
                    $event['title'] = $absen->pegawai->user->name;
                    $event['start'] = explode(' ',$absen->tanggal)[0];
                    $tempevent = $event;
                }
                $count++;
                if ($count < $absenCounter)
                    $prev = $now;
                $prevId = $idP;
            }


            if ($now - $prev == 86400)
                $tempevent['end'] = date('Y-m-d', $now + 86400);
            $events[] = $tempevent;
        }
        $events = json_encode($events);     

        return view('home', compact('pegawais', 'events'));
>>>>>>> 89b1f447d154be4b9e1c19744a84d468801d0ac7
    }
}
