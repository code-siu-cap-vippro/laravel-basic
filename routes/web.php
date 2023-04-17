<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Buoi03Controller;
use App\Http\Controllers\Buoi04;
use App\Models\Lophoc;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(["prefix" => "Buoi01"], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name("tranglaravel");
    
    Route::get('/hello/{hoten?}', function($hoten=null){
        if ($hoten==null)
           return "Laravel kính chào các bạn";
        else
           return $hoten . " kính chào các bạn";
    });
    
    Route::get('/chucmung/{nam}/{hoten?}', function($nam, $hoten=null){
        if ($hoten==null)
            return "Chúc mừng sinh nhật " . (2023 - $nam) . " Của bạn";
        else
            return "Chúc mừng sinh nhật " . (2023 - $nam) . " Của " .$hoten;
    });
    
    Route::get('/thotinh', function(){
        return view("thotinh");
    });
    
    Route::get("/chuongtrinh", function(){
        return view("ctdt");
    });
    
    Route::get("/vidulink", function(){
        return view("vidu_link");
    });
    
    Route::get("/phuongtrinhbac1", function(){
        return view("ptb1");
    })->name("phuongtrinh01");
    
    Route::get("/formptb1", function(){
    
        return view("form");
    });
    
    Route::post("/formptb1", function(Request $req){
        $a = $req["hsa"];
        $b = $req["hsb"];
        if ($a==0)
        {
            if ($b==0)
                $kq ="Vô số nghiệm";
            else
                $kq ="Vô nghiệm";
        }
        else
        {
            $kq = "Phương trình có nghiệm x = " . (-$b/$a);
        }
        return view("form", compact("a","b","kq"));
    });
});

Route::group(["prefix" => "Buoi02"], function(){
    Route::get("/hinhchunhat", function(){
        return view("hinhchunhat");
    });
    Route::post("/hinhchunhat", function(Request $req){
        $cd = $req["cd"];
        $cr = $req["cr"];
        $cv = ($cd + $cr) * 2;
        $dt = ($cd * $cr) . "m<sup>2</sup>";
        return view("hinhchunhat", compact("cd", "cr", "cv", "dt"));
    });
});

Route::group(["prefix" => "Buoi03"], function(){
    Route::get("/chao", [Buoi03Controller::class, "chaoban"]);
    Route::get("/tinhluong",[Buoi03Controller::class, "getTinhLuong"]);
    Route::post("/tinhluong",[Buoi03Controller::class, "postTinhLuong"]);
    Route::get("/hinhchunhat",[Buoi03Controller::class, "getHinhChuNhat"])->name("hcn");
    Route::get("/hinhtron", [Buoi03Controller::class, "getHinhTron"]);
    Route::post("/hinhtron", [Buoi03Controller::class, "postHinhTron"]);
});

Route::get("/thohay", [Buoi03Controller::class, "getThoHay"]);

Route::group(["prefix" => "Buoi04"], function(){
    Route::get("/thome", [Buoi04::class,"get_thome"])->name("thome");
    Route::get("/ngungon", [Buoi04::class,"get_ngungon"])->name("ngungon");
});

Route::group(["prefix" => "Buoi07"], function(){
    Route::get("/ds",function(){
        $dslop = Lophoc::where("malop", "=", 2)->with('sinhvien')->get();
        return view("Buoi07.vd01", compact('dslop'));
    });
});