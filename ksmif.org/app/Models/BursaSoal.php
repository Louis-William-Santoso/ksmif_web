<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BursaSoal extends Model
{
    protected $fillable = [
        'matkul_id',
        'uploaded_by', //di isi ID user 
        'tahun',
        'tipe' //['UTS', 'UAS', 'Quiz', 'Latihan']
    ];
}
