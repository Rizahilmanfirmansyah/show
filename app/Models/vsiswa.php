<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vsiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "v_siswa";
    protected $fillable = [
        'nis', 'nama', 'kelas', 'tahunmmasuk'
    ];
}
