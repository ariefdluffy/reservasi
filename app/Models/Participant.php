<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'participant_id',
        'training_id',
        'nama_peserta',
        'email',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class, 'participant_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
