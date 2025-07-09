<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appel des seeders
        $this->call([
            RoleSeeder::class,
            // Tu pourras ajouter d'autres seeders ici plus tard (ex: CategorieSeeder, UserSeeder)
        ]);
    }
}
