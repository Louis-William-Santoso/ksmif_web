<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = [
        'id', 
        'nama_matkul',
    ];

    public function bursa_soal():HasMany
    {
        return $this->hasMany(BursaSoal::class, 'matkul_id', 'id');
    }
}
