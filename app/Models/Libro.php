<?php

namespace App\Models;
use App\Models\Autores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
     use HasFactory;
    protected $table = 'libros';
    protected $fillable = [
        'titulo', 'editorial', 'precio','id_autor'
    ];
public function autor()
{
    return $this->belongsTo(Autores::class, 'id_autor');
}

}
