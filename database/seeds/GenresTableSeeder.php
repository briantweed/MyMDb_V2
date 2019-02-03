<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('genres')->delete();
        
        DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'Adventure',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'Animation',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'Biography',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'Children',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'Comedy',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'Crime',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'Disaster',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 'Documentary',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 'Drama',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 'Epic',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 'Family',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'Fantasy',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 'Film-Noir',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 'History',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 'Horror',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 17,
                'type' => 'Legal',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 18,
                'type' => 'Martial Arts',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 19,
                'type' => 'Musical',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 20,
                'type' => 'Mystery',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 21,
                'type' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 22,
                'type' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 23,
                'type' => 'Spy',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 24,
                'type' => 'Superhero',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 25,
                'type' => 'Thriller',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 26,
                'type' => 'Video Game',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 27,
                'type' => 'War',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 28,
                'type' => 'Western',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 29,
                'type' => 'World',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 30,
                'type' => 'Music',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
