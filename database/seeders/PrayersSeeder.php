<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prayers')->insert([
            'id'        => '1',
            'pray_name' => 'الفجر',
        ]);
        DB::table('prayers')->insert([
            'id'        => '2',
            'pray_name' => 'الظهر',
        ]);
        DB::table('prayers')->insert([
            'id'        => '3',
            'pray_name' => 'العصر',
        ]);
        DB::table('prayers')->insert([
            'id'        => '4',
            'pray_name' => 'المغرب',
        ]);
        DB::table('prayers')->insert([
            'id'        => '5',
            'pray_name' => 'العشاء',
        ]);
    }
}
