<?php

namespace Database\Seeders;

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
        \App\Models\Structure::factory(10)->create();

        for ($i=1; $i < 11; $i++) {
            \App\Models\System::factory(10)->create(['structure_id' => $i ]);
        }
        // \App\Models\User::factory(10)->create();
        // \App\Models\Structure::factory(10)->create();
    }
}
