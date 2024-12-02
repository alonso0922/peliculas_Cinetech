<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Peliculas extends Model
// {
//     use HasFactory;
//     protected $table='peliculas';
//     protected $fillable=['nombre','sinopsis','duracion','categoria','personaje','imagen'];
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;

    protected $table = 'peliculas';
    // Campos que son asignables en masa
    protected $fillable = [
        
        'nombre', 
        'sinopsis', 
        'duracion', 
        'categoria', 
        'personaje', 
        'imagen',
        'trailer'
    ];

    // Accesor para obtener la URL de la imagen (si usas almacenamiento público)
    public function getImagenUrlAttribute()
    {
        return url('imagenes/' . $this->imagen);  // Asumiendo que las imágenes se almacenan en public/imagenes
    }

    
}
