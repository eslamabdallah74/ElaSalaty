<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ExpBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users  = User::all();
        for($i=0; $i < 30; $i++)
        {
            DB::table('exp_bars')->insert([
                'user_id' => $users->random()->id,
                'exp'     => $faker->numberBetween(100,5),
                'level'   => $faker->randomDigit(),
            ]);
        }
    }
}
