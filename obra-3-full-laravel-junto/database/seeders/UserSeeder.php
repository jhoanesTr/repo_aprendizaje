<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'    => 'Alberte',
        //     'email'    => 'alberte@gmail.com',
        //     'password'   =>  bcrypt('user123'),
        //     'is_admin' => 0,
        //     'remember_token' =>  Str::random(10),
        // ]);

        // DATOS DEL USER FACTORY
        User::factory()->create();
    }

    // public function run()
    // {
    //     $users = [
    //         [
    //            'name'=>'Employee',
    //            'email'=>'employee@nicesnippets.com',
    //            'is_admin'=>'1',
    //            'password'=> bcrypt('123456'),
    //         ],
    //         [
    //            'name'=>'User',
    //            'email'=>'user@nicesnippets.com',
    //            'is_admin'=>'0',
    //            'password'=> bcrypt('123456'),
    //         ],
    //     ];
    //     foreach ($user as $key => $value) {
    //         User::create($value);
    //     }

    //     foreach($users as $user)
    //       {
    //           User::create([
    //            'name' => $user['name'],
    //            'email' => $user['email'],
    //            'password' => Hash::make($user['password'])
    //          ]);
    //        }
    // }
}
