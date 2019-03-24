<?php

use Illuminate\Database\Seeder;

class FakeCastTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cast')->delete();
        
        \DB::table('cast')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'person_id' => 5,
                'character' => 'Lilliana Botsford',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'person_id' => 5,
                'character' => 'Prof. Rosalinda Brakus PhD',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 1,
                'person_id' => 5,
                'character' => 'Sienna Effertz',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 1,
                'person_id' => 5,
                'character' => 'Eliane Simonis',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 1,
                'person_id' => 9,
                'character' => 'Cleta Okuneva',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 1,
                'person_id' => 10,
                'character' => 'Prof. Ted Kuhlman',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 1,
                'person_id' => 6,
                'character' => 'Edwin Romaguera',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 1,
                'person_id' => 8,
                'character' => 'Nathanial Koss',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 1,
                'person_id' => 7,
                'character' => 'Vince Huel',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 1,
                'person_id' => 2,
                'character' => 'Mrs. Heidi Carroll I',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 2,
                'person_id' => 5,
                'character' => 'Benny Heidenreich',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 2,
                'person_id' => 10,
                'character' => 'Zander Koepp',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 2,
                'person_id' => 5,
                'character' => 'Annabel Sipes',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 2,
                'person_id' => 5,
                'character' => 'Prof. Jarred Legros DVM',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 2,
                'person_id' => 1,
                'character' => 'Miss Ivory Conroy Jr.',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 2,
                'person_id' => 8,
                'character' => 'Dr. Erwin Jerde DVM',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 2,
                'person_id' => 7,
                'character' => 'Prof. Rene Nader',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 2,
                'person_id' => 8,
                'character' => 'Gustave Parisian',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 2,
                'person_id' => 4,
                'character' => 'Daphne Braun',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 3,
                'person_id' => 8,
                'character' => 'Prof. Destin Gleichner DDS',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 3,
                'person_id' => 10,
                'character' => 'Sasha Wiegand',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 3,
                'person_id' => 7,
                'character' => 'Dale Wisoky',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 3,
                'person_id' => 4,
                'character' => 'Jovany Kerluke',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 3,
                'person_id' => 9,
                'character' => 'Buford Treutel',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 3,
                'person_id' => 7,
                'character' => 'Hank Wehner',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:35',
                'updated_at' => '2019-03-24 22:00:35',
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 3,
                'person_id' => 4,
                'character' => 'Jennifer Huel',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 3,
                'person_id' => 10,
                'character' => 'Renee Sipes',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            27 => 
            array (
                'id' => 28,
                'movie_id' => 3,
                'person_id' => 2,
                'character' => 'Dr. Lillie Boehm IV',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            28 => 
            array (
                'id' => 29,
                'movie_id' => 4,
                'person_id' => 9,
                'character' => 'Dr. Luna Wehner',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            29 => 
            array (
                'id' => 30,
                'movie_id' => 4,
                'person_id' => 4,
                'character' => 'Mrs. Liliane Nitzsche',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            30 => 
            array (
                'id' => 31,
                'movie_id' => 4,
                'person_id' => 2,
                'character' => 'Antonietta Heller DVM',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            31 => 
            array (
                'id' => 32,
                'movie_id' => 4,
                'person_id' => 4,
                'character' => 'Modesto Zemlak IV',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            32 => 
            array (
                'id' => 33,
                'movie_id' => 4,
                'person_id' => 9,
                'character' => 'Mr. Karley Quigley MD',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            33 => 
            array (
                'id' => 34,
                'movie_id' => 4,
                'person_id' => 2,
                'character' => 'Reid Johnson V',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            34 => 
            array (
                'id' => 35,
                'movie_id' => 5,
                'person_id' => 2,
                'character' => 'Rylee Hermiston',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            35 => 
            array (
                'id' => 36,
                'movie_id' => 5,
                'person_id' => 1,
                'character' => 'Lina Spencer',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            36 => 
            array (
                'id' => 37,
                'movie_id' => 5,
                'person_id' => 1,
                'character' => 'Jerome Heidenreich',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            37 => 
            array (
                'id' => 38,
                'movie_id' => 5,
                'person_id' => 6,
                'character' => 'Jamil Altenwerth',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            38 => 
            array (
                'id' => 39,
                'movie_id' => 5,
                'person_id' => 9,
                'character' => 'Henry Miller III',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            39 => 
            array (
                'id' => 40,
                'movie_id' => 5,
                'person_id' => 4,
                'character' => 'Hiram Balistreri',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            40 => 
            array (
                'id' => 41,
                'movie_id' => 5,
                'person_id' => 5,
                'character' => 'Gene Mitchell III',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            41 => 
            array (
                'id' => 42,
                'movie_id' => 5,
                'person_id' => 8,
                'character' => 'Gerardo Nader',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            42 => 
            array (
                'id' => 43,
                'movie_id' => 6,
                'person_id' => 2,
                'character' => 'Asia Tromp',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            43 => 
            array (
                'id' => 44,
                'movie_id' => 6,
                'person_id' => 3,
                'character' => 'Dr. Freida Berge',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            44 => 
            array (
                'id' => 45,
                'movie_id' => 6,
                'person_id' => 3,
                'character' => 'Mr. Bernie Farrell V',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            45 => 
            array (
                'id' => 46,
                'movie_id' => 6,
                'person_id' => 1,
                'character' => 'Marcel Tremblay II',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            46 => 
            array (
                'id' => 47,
                'movie_id' => 7,
                'person_id' => 8,
                'character' => 'Mr. Amparo Kautzer',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            47 => 
            array (
                'id' => 48,
                'movie_id' => 7,
                'person_id' => 6,
                'character' => 'Raphael Walter',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            48 => 
            array (
                'id' => 49,
                'movie_id' => 7,
                'person_id' => 8,
                'character' => 'Cassidy Friesen',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            49 => 
            array (
                'id' => 50,
                'movie_id' => 7,
                'person_id' => 9,
                'character' => 'Jaron Frami',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            50 => 
            array (
                'id' => 51,
                'movie_id' => 7,
                'person_id' => 3,
                'character' => 'Miss Andreane Runolfsdottir I',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            51 => 
            array (
                'id' => 52,
                'movie_id' => 7,
                'person_id' => 8,
                'character' => 'Camryn McClure',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            52 => 
            array (
                'id' => 53,
                'movie_id' => 7,
                'person_id' => 5,
                'character' => 'Dr. Alberto Morissette',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            53 => 
            array (
                'id' => 54,
                'movie_id' => 7,
                'person_id' => 2,
                'character' => 'Declan Lockman MD',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            54 => 
            array (
                'id' => 55,
                'movie_id' => 8,
                'person_id' => 2,
                'character' => 'Mrs. Margarette Schroeder',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            55 => 
            array (
                'id' => 56,
                'movie_id' => 8,
                'person_id' => 5,
                'character' => 'Christiana Frami',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            56 => 
            array (
                'id' => 57,
                'movie_id' => 8,
                'person_id' => 8,
                'character' => 'Mr. Alejandrin Jones',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            57 => 
            array (
                'id' => 58,
                'movie_id' => 8,
                'person_id' => 4,
                'character' => 'Ms. Jayne Moen MD',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            58 => 
            array (
                'id' => 59,
                'movie_id' => 8,
                'person_id' => 9,
                'character' => 'Jada Lockman',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            59 => 
            array (
                'id' => 60,
                'movie_id' => 8,
                'person_id' => 4,
                'character' => 'Germaine Nolan',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            60 => 
            array (
                'id' => 61,
                'movie_id' => 9,
                'person_id' => 8,
                'character' => 'Janessa Ritchie',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            61 => 
            array (
                'id' => 62,
                'movie_id' => 9,
                'person_id' => 6,
                'character' => 'Florian Johnston',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            62 => 
            array (
                'id' => 63,
                'movie_id' => 9,
                'person_id' => 1,
                'character' => 'Junior Deckow',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            63 => 
            array (
                'id' => 64,
                'movie_id' => 9,
                'person_id' => 4,
                'character' => 'Mr. Isom Franecki',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            64 => 
            array (
                'id' => 65,
                'movie_id' => 10,
                'person_id' => 4,
                'character' => 'Donnie Bahringer PhD',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            65 => 
            array (
                'id' => 66,
                'movie_id' => 10,
                'person_id' => 8,
                'character' => 'Ms. Melody Funk',
                'star' => 1,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
            66 => 
            array (
                'id' => 67,
                'movie_id' => 10,
                'person_id' => 3,
                'character' => 'Eladio Bode',
                'star' => 0,
                'created_at' => '2019-03-24 22:00:36',
                'updated_at' => '2019-03-24 22:00:36',
            ),
        ));
        
        
    }
}