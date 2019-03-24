<?php

use Illuminate\Database\Seeder;

class FakeCrewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crew')->delete();
        
        \DB::table('crew')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'person_id' => 3,
                'position' => 'Composer',
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'person_id' => 2,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 1,
                'person_id' => 3,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 2,
                'person_id' => 1,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'person_id' => 9,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 3,
                'person_id' => 7,
                'position' => 'Composer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 3,
                'person_id' => 3,
                'position' => 'Producer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 4,
                'person_id' => 2,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 5,
                'person_id' => 5,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 5,
                'person_id' => 4,
                'position' => 'Producer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 5,
                'person_id' => 1,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 6,
                'person_id' => 3,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 7,
                'person_id' => 10,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 7,
                'person_id' => 5,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 8,
                'person_id' => 9,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 8,
                'person_id' => 7,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 8,
                'person_id' => 4,
                'position' => 'Composer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 9,
                'person_id' => 10,
                'position' => 'Composer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 9,
                'person_id' => 8,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 9,
                'person_id' => 10,
                'position' => 'Writer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 10,
                'person_id' => 1,
                'position' => 'Producer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 10,
                'person_id' => 4,
                'position' => 'Director',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 10,
                'person_id' => 2,
                'position' => 'Producer',
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
        ));
        
        
    }
}