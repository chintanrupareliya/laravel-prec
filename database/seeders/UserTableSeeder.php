<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //clear user table first
        User::truncate();
        $faker = \Faker\Factory::create();
        // make sure everyone has the same password and
        //hash it before the loop, or else our seeder will be to slow.
        $password= Hash::make('password');
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password'=> $password,
        ]);
        // And now let's generate a few dozen users for our app:
            for ($i = 0; $i < 10; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => $password,
                ]);
            }

    }
}
