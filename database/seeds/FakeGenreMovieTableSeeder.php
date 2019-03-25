<?php

use Illuminate\Database\Seeder;

class FakeGenreMovieTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genre_movie')->delete();
        
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_id' => 17,
                'movie_id' => 1,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            1 => 
            array (
                'id' => 2,
                'genre_id' => 7,
                'movie_id' => 1,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            2 => 
            array (
                'id' => 3,
                'genre_id' => 23,
                'movie_id' => 1,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            3 => 
            array (
                'id' => 4,
                'genre_id' => 27,
                'movie_id' => 2,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            4 => 
            array (
                'id' => 5,
                'genre_id' => 15,
                'movie_id' => 2,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            5 => 
            array (
                'id' => 6,
                'genre_id' => 30,
                'movie_id' => 2,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            6 => 
            array (
                'id' => 7,
                'genre_id' => 6,
                'movie_id' => 3,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            7 => 
            array (
                'id' => 8,
                'genre_id' => 26,
                'movie_id' => 4,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            8 => 
            array (
                'id' => 9,
                'genre_id' => 19,
                'movie_id' => 4,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            9 => 
            array (
                'id' => 10,
                'genre_id' => 4,
                'movie_id' => 5,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            10 => 
            array (
                'id' => 11,
                'genre_id' => 8,
                'movie_id' => 5,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            11 => 
            array (
                'id' => 12,
                'genre_id' => 19,
                'movie_id' => 6,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            12 => 
            array (
                'id' => 13,
                'genre_id' => 23,
                'movie_id' => 7,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            13 => 
            array (
                'id' => 14,
                'genre_id' => 22,
                'movie_id' => 8,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            14 => 
            array (
                'id' => 15,
                'genre_id' => 20,
                'movie_id' => 8,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            15 => 
            array (
                'id' => 16,
                'genre_id' => 9,
                'movie_id' => 8,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            16 => 
            array (
                'id' => 17,
                'genre_id' => 6,
                'movie_id' => 9,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            17 => 
            array (
                'id' => 18,
                'genre_id' => 7,
                'movie_id' => 9,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            18 => 
            array (
                'id' => 19,
                'genre_id' => 2,
                'movie_id' => 9,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            19 => 
            array (
                'id' => 20,
                'genre_id' => 8,
                'movie_id' => 10,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
            20 => 
            array (
                'id' => 21,
                'genre_id' => 17,
                'movie_id' => 10,
                'created_at' => '2019-03-25 13:37:26',
                'updated_at' => '2019-03-25 13:37:26',
            ),
        ));
        
        
    }
}