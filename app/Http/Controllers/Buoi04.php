<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buoi04 extends Controller
{
    public function get_thome()
    {
        return view("Buoi04.thome");
    }
    public function get_ngungon()
    {
        return view("Buoi04.ngungon");
    }

    public function get_lietkemonhoc()
    {
        $dsmh = Monhoc::all();
        return view("Buoi07.monhoc", compact('dsmh'));
    }
}
