<?php

namespace Database\Seeders;

use App\Models\Filament;
use Illuminate\Database\Seeder;

class FilamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filament::factory()->count(5)->create();
    }
}
