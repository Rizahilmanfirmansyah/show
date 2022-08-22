<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "v_siswa";
    protected $fillable = [
       'replid','kelas','nis', 'nama', 'aktif', 'tahunmasuk'
    ];
}
