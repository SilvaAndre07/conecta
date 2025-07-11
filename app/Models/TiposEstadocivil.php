<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposEstadocivil extends Model
{
    use HasFactory;

    protected $table = 'tipos_estadocivil';

    protected $fillable = [
        'nome',
    ];
}
