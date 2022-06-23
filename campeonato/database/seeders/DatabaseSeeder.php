<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbcampeonato')->insert([
            'nome' => 'Brasileirão Série A'
        ]);

        DB::table('tbcampeonato')->insert([
            'nome' => 'Brasileirão Série B'
        ]);

        DB::table('tbcampeonato')->insert([
            'nome' => 'Brasileirão Série C'
        ]);

        DB::table('tbtime')->insert([
            'nome' => 'Flamengo',
            'tecnico' => 'Rogério Ceni'
        ]);

        DB::table('tbtime')->insert([
            'nome' => 'Palmeiras',
            'tecnico' => 'Abel'
        ]);

        DB::table('tbtime')->insert([
            'nome' => 'Corinthians',
            'tecnico' => 'Sylvinho'
        ]);

        DB::table('tbatleta')->insert([
            'nome' => 'Tiago',
            'peso' => '50',
            'altura' => '1.50',
            'id_time' => '3'
        ]);

        DB::table('tbatleta')->insert([
            'nome' => 'Jeferson',
            'peso' => '60',
            'altura' => '1.80',
            'id_time' => '1'
        ]);

        DB::table('tbatleta')->insert([
            'nome' => 'Marcos',
            'peso' => '90',
            'altura' => '1.80',
            'id_time' => '2'
        ]);
    }
}
