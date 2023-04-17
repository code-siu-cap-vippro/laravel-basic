<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $table = "sinhvien";
    protected $primary = "masv";
    public $timestamps =  false;

    public function sinhvien()
    {
        return $this->belongsTo(Lophoc::class,"malop", "malop");
    }

    public function ketqua()
    {
        return $this->hasMany(Ketqua::class,"masv", "masv");
    } 
}
