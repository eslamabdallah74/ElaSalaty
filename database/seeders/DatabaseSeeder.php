<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'eslam abdallah',
            'email'    => 'eslamabdallah301@gmail.com',
            'gender'   => 1,
            'password' => Hash::make('eslam1020'),
           ]);
        $faker = Faker::create();
        for ($i=0; $i < 30 ; $i++)
        {
           DB::table('users')->insert([
            'name'     => $faker->name,
            'email'    => $faker->email,
            'gender'   => $faker->numberBetween(0,1),
            'password' => Hash::make('password'),
           ]);
       }
        $this->call([
            PrayersSeeder::class,
            ExpBarSeeder::class,
        ]);
    }
}
