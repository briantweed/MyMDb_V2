<?php

use Illuminate\Database\Seeder;

class FakeMovieTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_tag')->delete();
        
        \DB::table('movie_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 2,
                'tag_id' => 4,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 4,
                'tag_id' => 6,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 5,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 6,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 7,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 9,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 10,
                'tag_id' => 6,
                'created_at' => '2019-03-25 13:27:58',
                'updated_at' => '2019-03-25 13:27:58',
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 1,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 1,
                'tag_id' => 5,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 1,
                'tag_id' => 5,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 2,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 3,
                'tag_id' => 7,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 4,
                'tag_id' => 7,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 5,
                'tag_id' => 3,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 6,
                'tag_id' => 2,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 6,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 6,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 7,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 8,
                'tag_id' => 7,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 8,
                'tag_id' => 4,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 8,
                'tag_id' => 3,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 9,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 9,
                'tag_id' => 3,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 10,
                'tag_id' => 3,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 10,
                'tag_id' => 5,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 10,
                'tag_id' => 6,
                'created_at' => '2019-03-25 13:33:12',
                'updated_at' => '2019-03-25 13:33:12',
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 1,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            27 => 
            array (
                'id' => 28,
                'movie_id' => 1,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            28 => 
            array (
                'id' => 29,
                'movie_id' => 1,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            29 => 
            array (
                'id' => 30,
                'movie_id' => 2,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            30 => 
            array (
                'id' => 31,
                'movie_id' => 3,
                'tag_id' => 1,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            31 => 
            array (
                'id' => 32,
                'movie_id' => 3,
                'tag_id' => 3,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            32 => 
            array (
                'id' => 33,
                'movie_id' => 4,
                'tag_id' => 7,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            33 => 
            array (
                'id' => 34,
                'movie_id' => 4,
                'tag_id' => 5,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            34 => 
            array (
                'id' => 35,
                'movie_id' => 4,
                'tag_id' => 7,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            35 => 
            array (
                'id' => 36,
                'movie_id' => 5,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            36 => 
            array (
                'id' => 37,
                'movie_id' => 5,
                'tag_id' => 2,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            37 => 
            array (
                'id' => 38,
                'movie_id' => 6,
                'tag_id' => 4,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            38 => 
            array (
                'id' => 39,
                'movie_id' => 7,
                'tag_id' => 5,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            39 => 
            array (
                'id' => 40,
                'movie_id' => 8,
                'tag_id' => 8,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            40 => 
            array (
                'id' => 41,
                'movie_id' => 9,
                'tag_id' => 2,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
            41 => 
            array (
                'id' => 42,
                'movie_id' => 10,
                'tag_id' => 2,
                'created_at' => '2019-03-25 13:34:43',
                'updated_at' => '2019-03-25 13:34:43',
            ),
        ));
        
        
    }
}