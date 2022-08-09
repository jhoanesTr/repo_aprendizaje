<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Persoas extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'persoas';

    protected $primaryKey = "id";

    protected $fillable = [
        'nome', 'primeiro_apelido', 'segundo_apelido', 'nif', 'data_nacemento',
        'sexo', 'codigo_postal', 'telefono', 'email'
    ];

    public $sortable = ['nome', 'primeiro_apelido', 'segundo_apelido', 'nif', 'data_nacemento',
    'sexo', 'codigo_postal', 'telefono', 'email'];

    protected $hidden = ['id'];

    public $timestamps = true;
}
