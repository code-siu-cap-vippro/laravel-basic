<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    use HasFactory;
    protected $table = "lophoc";
    protected $primary = "malop";
    public $timestamps =  false;

    public function khoa()
    {
        return $this->belongsTo(Khoa::class,"makhoa", "makhoa");
    }

    public function sinhvien()
    {
        return $this->hasMany(Sinhvien::class,"malop", "malop");
    }
}
