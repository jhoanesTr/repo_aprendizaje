<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertasFormacion extends Model
{
    use HasFactory;

    protected $table = 'ofertas_formacions';

    protected $primaryKey = "id";

    protected $fillable = ['empresa', 'posto', 'data_inicio', 'data_fin', 'num_prazas'];

    protected $hidden = ['id'];

    public $timestamps = true;
}
