<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empresa_Seguimiento extends Model
{
    use HasFactory;

    protected $table = 'empresas';  # Tabla
    public function scopeBuscador($query, $buscar_por, $buscar){
        if (($buscar_por) and ($buscar)){
            return $query->where($buscar_por, 'like', '%$buscar%');
        }
        #else return DB::table('empresas');
    }
}
