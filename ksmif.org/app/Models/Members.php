<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'users_id',
        'period',
        'division',
        'role' //['Koor', 'WaKoor', 'Anggota','Ketua','Wakil Ketua', 'Sekretaris', 'Bendahara']
    ];
}
