<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $table='series';
    protected $fillable=['id','nombre','sinopsis','episodios','duracion','categoria','personaje','imagen','trailer'];


public function getImagenUrlAttribute()
    {
        return url('imagenes/' . $this->imagen);  // Asumiendo que las imágenes se almacenan en public/imagenes
    }
}