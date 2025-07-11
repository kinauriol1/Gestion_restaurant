<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('deliveries', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenom');
        $table->string('telephone');
        $table->string('email')->nullable();
        $table->text('adresse');
        $table->string('ville');
        $table->string('zone');
        $table->string('mode_paiement');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
