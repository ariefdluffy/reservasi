<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_pelatihan',
        'jumlah_peserta',
        'tipe_pelatihan',
    ];

    public function participant()
    {
        return $this->hasMany(Participant::class);
    }
}
