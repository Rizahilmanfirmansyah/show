<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pegawai";
    
    protected $fillable = [
        'replid', 'nik', 'nip', 'nama', 'gelarakhir' , 'panggilan'
    ];
}
