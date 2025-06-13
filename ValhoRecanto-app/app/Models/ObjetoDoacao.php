<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ObjetoDoacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'foto',
        'categoria',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}