<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ResponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respons')->insert([
            'jawaban' => 'tidak', 
            'skor' => '1'
        ]);

        DB::table('respons')->insert([
            'jawaban' => 'kurang',
            'skor' => '2'
        ]);

        DB::table('respons')->insert([
            'jawaban' => 'cukup',
            'skor' => '3'
        ]);

        DB::table('respons')->insert([
            'jawaban' => 'normal',
            'skor' => '4'
        ]);

        DB::table('respons')->insert([
            'jawaban' => 'sangat',
            'skor' => '5'
        ]);
    }
}
