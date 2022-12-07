<?php

namespace Database\Seeders;

use Database\Seeders\PharmacySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();

        $this->call([
            PharmacySeeder::class,
        ]);
    }
}
