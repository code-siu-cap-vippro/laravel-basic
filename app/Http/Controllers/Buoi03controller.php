<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buoi03Controller extends Controller
{
    public function chaoban() {

        $hoten = "<font color='red'><b>Giang Hào Côn</b></font>";
        $tuoi = 52;
        return view("chao", compact("hoten","tuoi"));
    }

    public function getTinhLuong(){

        return view("tinhluong");
    }

    public function postTinhLuong(Request $req) {
        $nc = $req["ngaycong"];
        $lg = $req["luongngay"];
        $lt = $nc * $lg;
        return view("tinhluong", compact("nc", "lg", "lt"));

    }

    public function getHinhChuNhat(){
        if (isset($_GET["cd"]))
        {
            $cd = $_GET["cd"];
            $cr = $_GET["cr"];
            $cv = ($cd + $cr) * 2;
            $dt = $cd * $cr;
            return view("Buoi03Bt01", compact("cv", "dt"));
        }
        return view("Buoi03Bt01");
    }

    public function getHinhTron() {
        return view("Buoi03Bt04");
    }

    public function postHinhTron(Request $req) {
        $bk = $req["bankinh"];
        $cv = 2 * 3.14159 * $bk;
        $dt = 3.14159 * $bk * $bk;
        return view("Buoi03Bt04", compact("bk", "cv", "dt"));
    }

    public function getThoHay() {
        return view("thohay");
    }
}