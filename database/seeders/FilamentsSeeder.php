<?php

namespace Database\Seeders;

use App\Models\Filaments;
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
        Filaments::factory()->count(5)->create();
    }
}
