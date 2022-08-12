<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "siswa";
    protected $fillable = [
       'replid', 'nis', 'nama', 'aktif', 'tahunmasuk'
    ];
}
