<?php

namespace Database\Seeders;

use App\Models\OfertasFormacion;
use App\Models\Empresas;
use App\Models\Persoas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => 'admin1234',
            // 'photo' => $this->faker->image('public/storage/images',35,35, null, false),
            'is_admin' => 1,
            'remember_token' =>  Str::random(10),
        ]);

        // User::create([
        //     'name'    => 'Noe',
        //     'email'    => 'noe@gmail.com',
        //     'password' => bcrypt('user1234'),
        //     // 'photo' => $this->faker->image('public/storage/images',35,35, null, false),
        //     'is_admin' => null,
        //     'remember_token' =>  Str::random(10),
        // ]);

        //::factory()->create();
        Persoas::factory()->count(200)->create();
        Empresas::factory()->count(50)->create();
        OfertasFormacion::factory()->count(50)->create();
    }
}
