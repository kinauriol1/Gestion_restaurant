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
        Schema::table('plats', function (Blueprint $table) {
            $table->string('nom')->after('id');
            $table->text('description')->nullable()->after('nom');
            $table->integer('prix')->after('description');
            $table->string('image')->nullable()->after('prix');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plats', function (Blueprint $table) {
            $table->dropColumn(['nom', 'description', 'prix', 'image']);
        });
    }
};
