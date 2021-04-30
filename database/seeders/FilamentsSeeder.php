<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filaments::factory()->count(10)->create();
    }
}
