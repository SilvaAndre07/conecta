<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatosPcd extends Model
{
    use HasFactory;
    protected $table = "candidatos_pcd";

    protected $fillable = [
        'id_candidato',
        'id_deficiencia',
    ];
}
