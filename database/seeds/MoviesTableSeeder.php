<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Nacho Libre',
                'year' => 2006
            ],
            [
                'title' => 'Inception',
                'year' => 2010
            ],
            [
                'title' => 'Toy Story',
                'year' => 1995
            ],
            [
                'title' => 'The Dark Knight',
                'year' => 2008
            ],
            [
                'title' => 'The Godfather',
                'year' => 1972
            ]
        ]);
    }
}
