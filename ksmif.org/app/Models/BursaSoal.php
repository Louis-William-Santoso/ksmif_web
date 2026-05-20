<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BursaSoal extends Model
{
    protected $table = 'bursa_soal';
    protected $fillable = [
        'matkul_id',
        'uploaded_by', //di isi ID user 
        'tahun',
        'tipe' //['UTS', 'UAS', 'Quiz', 'Latihan']
    ];

    function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class);
    }
}
