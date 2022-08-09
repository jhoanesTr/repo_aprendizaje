<?php

namespace Database\Seeders;

use App\Models\OfertasFormacion;
use Illuminate\Database\Seeder;

class OfertasFormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfertasFormacion::factory()->count(50)->create();
    }
}
