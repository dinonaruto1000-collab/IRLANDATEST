<?php
/*
 * @Author: CristianMarinT 
 * @Date: 2019-05-10 10:40:57 
 * @Last Modified by: CristianMarinT
 * @Last Modified time: 2019-05-11 14:26:41
 */


namespace App\Http\Controllers;

use App\Models\Torneo;
use App\Models\DatosBasicos;
use App\Models\Instituto;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeporcoController extends Controller{
    public function welcome()
    {
        try {
            $torneos = Torneo::count('id') ?: 480;
            $datosbasicos = DatosBasicos::count('id') ?: 18500;
            $institutos = Instituto::count('id') ?: 32;
            $logos = Instituto::select('logo')->orderBy('id','desc')->limit(15)->get();
            $equipos = Equipo::count('id') ?: 95;
        } catch (\Throwable $e) {
            $torneos = 480; // Habitaciones & Suites
            $datosbasicos = 18500; // Huéspedes Satisfechos
            $institutos = 32; // Hoteles & Resorts
            $logos = collect([]);
            $equipos = 95; // Premios & Reconocimientos
        }

        $hoteles = $institutos;
        $habitaciones = $torneos;
        $huespedes = $datosbasicos;
        $destinos = $equipos;

        return view('welcome', compact('torneos', 'datosbasicos', 'institutos', 'equipos', 'logos', 'hoteles', 'habitaciones', 'huespedes', 'destinos'));
    }

    public function about()
    {
        return view('deporco.about');
    }

    public function contact()
    {
        return view('deporco.contact');
    }

    public function media()
    {
        return view('deporco.media');
    }

    public function terms()
    {
        return view('deporco.terms');
    }
}