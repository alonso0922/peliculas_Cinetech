<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
       
            $table->id(); 
            $table->string('nombre', 100); 
            $table->string('sinopsis');
            $table->string('duracion');
            $table->string('categoria', 50);
            $table->string('personaje', 100)->nullable();
            $table->string('imagen')->nullable();
             $table->string('trailer');
            $table->timestamps(); 
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peliculas');
       
    }
};
