<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Empresas extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'empresas';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome', 'localidade', 'poboacion', 'actividade', 'telefono', 'fax', 'data_incorporacion',
        'persoa_contacto', 'orientador', 'ofertas_contratacion', 'ofertas_formacion', 'notas'
    ];

    public $sortable = ['nome', 'localidade', 'poboacion', 'actividade', 'telefono', 'fax', 'data_incorporacion',
    'persoa_contacto', 'orientador', 'ofertas_contratacion', 'ofertas_formacion', 'notas'];

    protected $hidden = ['id'];

    public $timestamps = true;
}
