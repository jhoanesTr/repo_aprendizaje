<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empresas extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome', 'localidade', 'poboacion', 'actividade', 'telefono', 'fax', 'data_incorporacion',
        'persoa_contacto', 'orientador', 'ofertas_contratacion', 'ofertas_formacion', 'notas'
    ];
    protected $hidden = ['id'];

    public $timestamps = true;

    public function scopeBuscador($query, $buscar_por, $buscar){
        if (($buscar_por) and ($buscar)){
            return $query->where($buscar_por, 'like', '%$buscar%');
        }
        else return Empresas::all();
    }
}
