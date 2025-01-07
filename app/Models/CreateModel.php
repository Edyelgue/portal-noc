<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateModel extends Model
{
    use HasFactory;

    protected $table = 'cadastros';

    protected $fillable = [
        'nome',
        'email',
        'usuario_remedy',
        'equipe',
        'turno',
        'nivel',
    ];
}
