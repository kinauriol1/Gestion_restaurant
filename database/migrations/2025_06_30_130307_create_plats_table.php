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
        Schema::create('plats', function (Blueprint $table) {
           Schema::create('plats', function (Blueprint $table) {
              $table->id();
              $table->string('nom');      // Ajouté : nom du plat
              $table->integer('prix');    // Ajouté : prix du plat
              $table->timestamps();
});

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
