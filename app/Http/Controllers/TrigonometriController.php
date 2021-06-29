<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrigonometriController extends Controller
{
    public function sincos()
    {
        return view('Trigo.sincos');
    }
    public function koord()
    {
        return view('Trigo.koord');
    }
    public function tambahkurang()
    {
        return view('Trigo.tambahkurang');
    }
    public function sinus()
    {
        return view('Trigo.sinus');
    }
    public function cosinus()
    {
        return view('Trigo.cosinus');
    }
    public function kutub()
    {
        return view('Trigo.kutub');
    }
}
