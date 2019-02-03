<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('genre_movie')->delete();
        
        DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 1,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 1,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 2,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 2,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 2,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 3,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 3,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 4,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 11,
                'movie_id' => 4,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 12,
                'movie_id' => 4,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 13,
                'movie_id' => 5,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 14,
                'movie_id' => 5,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 15,
                'movie_id' => 6,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 16,
                'movie_id' => 6,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 17,
                'movie_id' => 6,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 18,
                'movie_id' => 7,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 19,
                'movie_id' => 8,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 20,
                'movie_id' => 8,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 21,
                'movie_id' => 9,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 22,
                'movie_id' => 9,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 23,
                'movie_id' => 10,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 24,
                'movie_id' => 10,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 25,
                'movie_id' => 10,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 26,
                'movie_id' => 10,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 27,
                'movie_id' => 11,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 28,
                'movie_id' => 11,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 29,
                'movie_id' => 11,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 30,
                'movie_id' => 12,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 31,
                'movie_id' => 12,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 32,
                'movie_id' => 12,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 33,
                'movie_id' => 13,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 34,
                'movie_id' => 13,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 35,
                'movie_id' => 14,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 36,
                'movie_id' => 14,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 37,
                'movie_id' => 14,
                'genre_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 38,
                'movie_id' => 14,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 39,
                'movie_id' => 15,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 40,
                'movie_id' => 15,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 41,
                'movie_id' => 15,
                'genre_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 42,
                'movie_id' => 15,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 43,
                'movie_id' => 16,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 44,
                'movie_id' => 16,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 45,
                'movie_id' => 17,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 46,
                'movie_id' => 17,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 47,
                'movie_id' => 17,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 48,
                'movie_id' => 17,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 49,
                'movie_id' => 17,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 50,
                'movie_id' => 18,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 51,
                'movie_id' => 18,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 52,
                'movie_id' => 18,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 53,
                'movie_id' => 19,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 54,
                'movie_id' => 19,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 55,
                'movie_id' => 19,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 56,
                'movie_id' => 20,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 57,
                'movie_id' => 20,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 58,
                'movie_id' => 20,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 59,
                'movie_id' => 20,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 60,
                'movie_id' => 21,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 61,
                'movie_id' => 21,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 62,
                'movie_id' => 21,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 63,
                'movie_id' => 21,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 64,
                'movie_id' => 22,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 65,
                'movie_id' => 22,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 66,
                'movie_id' => 22,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 67,
                'movie_id' => 23,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 68,
                'movie_id' => 23,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 69,
                'movie_id' => 23,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 70,
                'movie_id' => 23,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 71,
                'movie_id' => 24,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 72,
                'movie_id' => 24,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 73,
                'movie_id' => 24,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 74,
                'movie_id' => 24,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 75,
                'movie_id' => 25,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 76,
                'movie_id' => 25,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 77,
                'movie_id' => 25,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 78,
                'movie_id' => 26,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 79,
                'movie_id' => 26,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 80,
                'movie_id' => 26,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 81,
                'movie_id' => 27,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 82,
                'movie_id' => 27,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 83,
                'movie_id' => 27,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 84,
                'movie_id' => 28,
                'genre_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 85,
                'movie_id' => 28,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 86,
                'movie_id' => 28,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 87,
                'movie_id' => 28,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 88,
                'movie_id' => 29,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 89,
                'movie_id' => 29,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 90,
                'movie_id' => 29,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 91,
                'movie_id' => 30,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 92,
                'movie_id' => 30,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 93,
                'movie_id' => 31,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 94,
                'movie_id' => 31,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 95,
                'movie_id' => 32,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 96,
                'movie_id' => 32,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 97,
                'movie_id' => 33,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 98,
                'movie_id' => 33,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 99,
                'movie_id' => 33,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 100,
                'movie_id' => 34,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 101,
                'movie_id' => 34,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 102,
                'movie_id' => 35,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 103,
                'movie_id' => 35,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 104,
                'movie_id' => 36,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 105,
                'movie_id' => 36,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 106,
                'movie_id' => 37,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 107,
                'movie_id' => 37,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 108,
                'movie_id' => 37,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 109,
                'movie_id' => 38,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 110,
                'movie_id' => 38,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 111,
                'movie_id' => 38,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 112,
                'movie_id' => 39,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 113,
                'movie_id' => 39,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 114,
                'movie_id' => 40,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 115,
                'movie_id' => 40,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 116,
                'movie_id' => 41,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 117,
                'movie_id' => 41,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 118,
                'movie_id' => 41,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 119,
                'movie_id' => 42,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 120,
                'movie_id' => 42,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 121,
                'movie_id' => 42,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 122,
                'movie_id' => 43,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 123,
                'movie_id' => 44,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 124,
                'movie_id' => 44,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 125,
                'movie_id' => 44,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 126,
                'movie_id' => 45,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 127,
                'movie_id' => 45,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 128,
                'movie_id' => 45,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 129,
                'movie_id' => 46,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 130,
                'movie_id' => 46,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 131,
                'movie_id' => 46,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 132,
                'movie_id' => 46,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 133,
                'movie_id' => 47,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 134,
                'movie_id' => 47,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 135,
                'movie_id' => 48,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 136,
                'movie_id' => 48,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 137,
                'movie_id' => 49,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 138,
                'movie_id' => 49,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 139,
                'movie_id' => 50,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 140,
                'movie_id' => 50,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 141,
                'movie_id' => 50,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 142,
                'movie_id' => 50,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 143,
                'movie_id' => 50,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 144,
                'movie_id' => 50,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 145,
                'movie_id' => 51,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 146,
                'movie_id' => 51,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 147,
                'movie_id' => 52,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 148,
                'movie_id' => 52,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 149,
                'movie_id' => 53,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 150,
                'movie_id' => 53,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 151,
                'movie_id' => 54,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 152,
                'movie_id' => 54,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 153,
                'movie_id' => 54,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 154,
                'movie_id' => 55,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 155,
                'movie_id' => 55,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 156,
                'movie_id' => 55,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 157,
                'movie_id' => 56,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 158,
                'movie_id' => 56,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 159,
                'movie_id' => 56,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 160,
                'movie_id' => 57,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 161,
                'movie_id' => 57,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 162,
                'movie_id' => 57,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 163,
                'movie_id' => 58,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 164,
                'movie_id' => 58,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 165,
                'movie_id' => 58,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 166,
                'movie_id' => 58,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 167,
                'movie_id' => 59,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 168,
                'movie_id' => 59,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 169,
                'movie_id' => 59,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 170,
                'movie_id' => 59,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 171,
                'movie_id' => 60,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 172,
                'movie_id' => 60,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 173,
                'movie_id' => 60,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 174,
                'movie_id' => 60,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 175,
                'movie_id' => 61,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 176,
                'movie_id' => 61,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 177,
                'movie_id' => 61,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 178,
                'movie_id' => 61,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 179,
                'movie_id' => 62,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 180,
                'movie_id' => 62,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 181,
                'movie_id' => 62,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 182,
                'movie_id' => 62,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 183,
                'movie_id' => 63,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 184,
                'movie_id' => 63,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 185,
                'movie_id' => 63,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 186,
                'movie_id' => 63,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 187,
                'movie_id' => 64,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 188,
                'movie_id' => 64,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 189,
                'movie_id' => 64,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 190,
                'movie_id' => 64,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 191,
                'movie_id' => 65,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 192,
                'movie_id' => 65,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 193,
                'movie_id' => 65,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 194,
                'movie_id' => 65,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 195,
                'movie_id' => 65,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 196,
                'movie_id' => 66,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 197,
                'movie_id' => 67,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 198,
                'movie_id' => 67,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 199,
                'movie_id' => 67,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 200,
                'movie_id' => 67,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 201,
                'movie_id' => 67,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 202,
                'movie_id' => 68,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 203,
                'movie_id' => 68,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 204,
                'movie_id' => 68,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 205,
                'movie_id' => 68,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 206,
                'movie_id' => 69,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 207,
                'movie_id' => 69,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 208,
                'movie_id' => 69,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 209,
                'movie_id' => 70,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 210,
                'movie_id' => 70,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 211,
                'movie_id' => 70,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 212,
                'movie_id' => 71,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 213,
                'movie_id' => 71,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 214,
                'movie_id' => 71,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 215,
                'movie_id' => 71,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 216,
                'movie_id' => 72,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 217,
                'movie_id' => 72,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 218,
                'movie_id' => 72,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 219,
                'movie_id' => 72,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 220,
                'movie_id' => 72,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 221,
                'movie_id' => 73,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 222,
                'movie_id' => 73,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 223,
                'movie_id' => 73,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 224,
                'movie_id' => 74,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 225,
                'movie_id' => 74,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 226,
                'movie_id' => 74,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 227,
                'movie_id' => 74,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 228,
                'movie_id' => 76,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 229,
                'movie_id' => 76,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 230,
                'movie_id' => 76,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 231,
                'movie_id' => 77,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 232,
                'movie_id' => 77,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 233,
                'movie_id' => 77,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 234,
                'movie_id' => 78,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 235,
                'movie_id' => 78,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 236,
                'movie_id' => 79,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 237,
                'movie_id' => 79,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 238,
                'movie_id' => 79,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 239,
                'movie_id' => 79,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 240,
                'movie_id' => 80,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 241,
                'movie_id' => 80,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 242,
                'movie_id' => 80,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 243,
                'movie_id' => 81,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 244,
                'movie_id' => 81,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 245,
                'movie_id' => 81,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 246,
                'movie_id' => 82,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 247,
                'movie_id' => 82,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 248,
                'movie_id' => 82,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 249,
                'movie_id' => 83,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 250,
                'movie_id' => 83,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 251,
                'movie_id' => 83,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 252,
                'movie_id' => 83,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 253,
                'movie_id' => 84,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 254,
                'movie_id' => 84,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 255,
                'movie_id' => 85,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 256,
                'movie_id' => 85,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 257,
                'movie_id' => 85,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 258,
                'movie_id' => 85,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 259,
                'movie_id' => 85,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 260,
                'movie_id' => 86,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 261,
                'movie_id' => 86,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 262,
                'movie_id' => 86,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 263,
                'movie_id' => 87,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 264,
                'movie_id' => 87,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 265,
                'movie_id' => 87,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 266,
                'movie_id' => 87,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 267,
                'movie_id' => 87,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 268,
                'movie_id' => 88,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 269,
                'movie_id' => 89,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 270,
                'movie_id' => 89,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 271,
                'movie_id' => 89,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 272,
                'movie_id' => 90,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 273,
                'movie_id' => 90,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 274,
                'movie_id' => 90,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 275,
                'movie_id' => 91,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 276,
                'movie_id' => 91,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 277,
                'movie_id' => 91,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 278,
                'movie_id' => 91,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 279,
                'movie_id' => 91,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 280,
                'movie_id' => 92,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 281,
                'movie_id' => 92,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 282,
                'movie_id' => 92,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 283,
                'movie_id' => 92,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 284,
                'movie_id' => 93,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 285,
                'movie_id' => 93,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 286,
                'movie_id' => 93,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 287,
                'movie_id' => 93,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 288,
                'movie_id' => 94,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 289,
                'movie_id' => 95,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 290,
                'movie_id' => 95,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 291,
                'movie_id' => 95,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 292,
                'movie_id' => 96,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 293,
                'movie_id' => 96,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 294,
                'movie_id' => 96,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 295,
                'movie_id' => 96,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 296,
                'movie_id' => 97,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 297,
                'movie_id' => 97,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 298,
                'movie_id' => 97,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 299,
                'movie_id' => 98,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 300,
                'movie_id' => 98,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 301,
                'movie_id' => 99,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 302,
                'movie_id' => 99,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 303,
                'movie_id' => 99,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 304,
                'movie_id' => 99,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 305,
                'movie_id' => 99,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 306,
                'movie_id' => 100,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 307,
                'movie_id' => 100,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 308,
                'movie_id' => 100,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 309,
                'movie_id' => 101,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 310,
                'movie_id' => 101,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 311,
                'movie_id' => 101,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 312,
                'movie_id' => 102,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 313,
                'movie_id' => 102,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 314,
                'movie_id' => 102,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 315,
                'movie_id' => 102,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 316,
                'movie_id' => 103,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 317,
                'movie_id' => 103,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 318,
                'movie_id' => 103,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 319,
                'movie_id' => 103,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 320,
                'movie_id' => 104,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 321,
                'movie_id' => 104,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 322,
                'movie_id' => 104,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 323,
                'movie_id' => 104,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 324,
                'movie_id' => 105,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 325,
                'movie_id' => 105,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 326,
                'movie_id' => 105,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 327,
                'movie_id' => 105,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 328,
                'movie_id' => 106,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 329,
                'movie_id' => 106,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 330,
                'movie_id' => 106,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 331,
                'movie_id' => 106,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 332,
                'movie_id' => 107,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 333,
                'movie_id' => 107,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 334,
                'movie_id' => 107,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 335,
                'movie_id' => 107,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 336,
                'movie_id' => 107,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 337,
                'movie_id' => 108,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 338,
                'movie_id' => 108,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 339,
                'movie_id' => 109,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 340,
                'movie_id' => 109,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 341,
                'movie_id' => 110,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 342,
                'movie_id' => 110,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 343,
                'movie_id' => 111,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 344,
                'movie_id' => 111,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 345,
                'movie_id' => 112,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 346,
                'movie_id' => 112,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            346 => 
            array (
                'id' => 347,
                'movie_id' => 112,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            347 => 
            array (
                'id' => 348,
                'movie_id' => 113,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            348 => 
            array (
                'id' => 349,
                'movie_id' => 113,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            349 => 
            array (
                'id' => 350,
                'movie_id' => 113,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            350 => 
            array (
                'id' => 351,
                'movie_id' => 114,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            351 => 
            array (
                'id' => 352,
                'movie_id' => 114,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            352 => 
            array (
                'id' => 353,
                'movie_id' => 114,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            353 => 
            array (
                'id' => 354,
                'movie_id' => 115,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            354 => 
            array (
                'id' => 355,
                'movie_id' => 115,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            355 => 
            array (
                'id' => 356,
                'movie_id' => 115,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            356 => 
            array (
                'id' => 357,
                'movie_id' => 116,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            357 => 
            array (
                'id' => 358,
                'movie_id' => 116,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            358 => 
            array (
                'id' => 359,
                'movie_id' => 116,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            359 => 
            array (
                'id' => 360,
                'movie_id' => 117,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            360 => 
            array (
                'id' => 361,
                'movie_id' => 117,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            361 => 
            array (
                'id' => 362,
                'movie_id' => 117,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            362 => 
            array (
                'id' => 363,
                'movie_id' => 118,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            363 => 
            array (
                'id' => 364,
                'movie_id' => 118,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            364 => 
            array (
                'id' => 365,
                'movie_id' => 118,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            365 => 
            array (
                'id' => 366,
                'movie_id' => 118,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            366 => 
            array (
                'id' => 367,
                'movie_id' => 119,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            367 => 
            array (
                'id' => 368,
                'movie_id' => 119,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            368 => 
            array (
                'id' => 369,
                'movie_id' => 119,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            369 => 
            array (
                'id' => 370,
                'movie_id' => 119,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            370 => 
            array (
                'id' => 371,
                'movie_id' => 119,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            371 => 
            array (
                'id' => 372,
                'movie_id' => 120,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            372 => 
            array (
                'id' => 373,
                'movie_id' => 120,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            373 => 
            array (
                'id' => 374,
                'movie_id' => 120,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            374 => 
            array (
                'id' => 375,
                'movie_id' => 120,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            375 => 
            array (
                'id' => 376,
                'movie_id' => 121,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            376 => 
            array (
                'id' => 377,
                'movie_id' => 121,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            377 => 
            array (
                'id' => 378,
                'movie_id' => 121,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            378 => 
            array (
                'id' => 379,
                'movie_id' => 121,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            379 => 
            array (
                'id' => 380,
                'movie_id' => 122,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            380 => 
            array (
                'id' => 381,
                'movie_id' => 122,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            381 => 
            array (
                'id' => 382,
                'movie_id' => 122,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            382 => 
            array (
                'id' => 383,
                'movie_id' => 123,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            383 => 
            array (
                'id' => 384,
                'movie_id' => 123,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            384 => 
            array (
                'id' => 385,
                'movie_id' => 123,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            385 => 
            array (
                'id' => 386,
                'movie_id' => 123,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            386 => 
            array (
                'id' => 387,
                'movie_id' => 124,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            387 => 
            array (
                'id' => 388,
                'movie_id' => 124,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            388 => 
            array (
                'id' => 389,
                'movie_id' => 124,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            389 => 
            array (
                'id' => 390,
                'movie_id' => 125,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            390 => 
            array (
                'id' => 391,
                'movie_id' => 125,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            391 => 
            array (
                'id' => 392,
                'movie_id' => 125,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            392 => 
            array (
                'id' => 393,
                'movie_id' => 125,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            393 => 
            array (
                'id' => 394,
                'movie_id' => 126,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            394 => 
            array (
                'id' => 395,
                'movie_id' => 126,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            395 => 
            array (
                'id' => 396,
                'movie_id' => 126,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            396 => 
            array (
                'id' => 397,
                'movie_id' => 126,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            397 => 
            array (
                'id' => 398,
                'movie_id' => 127,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            398 => 
            array (
                'id' => 399,
                'movie_id' => 127,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            399 => 
            array (
                'id' => 400,
                'movie_id' => 127,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            400 => 
            array (
                'id' => 401,
                'movie_id' => 127,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            401 => 
            array (
                'id' => 402,
                'movie_id' => 127,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            402 => 
            array (
                'id' => 403,
                'movie_id' => 128,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            403 => 
            array (
                'id' => 404,
                'movie_id' => 128,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            404 => 
            array (
                'id' => 405,
                'movie_id' => 128,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            405 => 
            array (
                'id' => 406,
                'movie_id' => 129,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            406 => 
            array (
                'id' => 407,
                'movie_id' => 129,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            407 => 
            array (
                'id' => 408,
                'movie_id' => 129,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            408 => 
            array (
                'id' => 409,
                'movie_id' => 129,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            409 => 
            array (
                'id' => 410,
                'movie_id' => 129,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            410 => 
            array (
                'id' => 411,
                'movie_id' => 130,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            411 => 
            array (
                'id' => 412,
                'movie_id' => 130,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            412 => 
            array (
                'id' => 413,
                'movie_id' => 130,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            413 => 
            array (
                'id' => 414,
                'movie_id' => 130,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            414 => 
            array (
                'id' => 415,
                'movie_id' => 130,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            415 => 
            array (
                'id' => 416,
                'movie_id' => 130,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            416 => 
            array (
                'id' => 417,
                'movie_id' => 131,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            417 => 
            array (
                'id' => 418,
                'movie_id' => 131,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            418 => 
            array (
                'id' => 419,
                'movie_id' => 131,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            419 => 
            array (
                'id' => 420,
                'movie_id' => 131,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            420 => 
            array (
                'id' => 421,
                'movie_id' => 132,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            421 => 
            array (
                'id' => 422,
                'movie_id' => 132,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            422 => 
            array (
                'id' => 423,
                'movie_id' => 132,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            423 => 
            array (
                'id' => 424,
                'movie_id' => 132,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            424 => 
            array (
                'id' => 425,
                'movie_id' => 132,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            425 => 
            array (
                'id' => 426,
                'movie_id' => 133,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            426 => 
            array (
                'id' => 427,
                'movie_id' => 133,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            427 => 
            array (
                'id' => 428,
                'movie_id' => 133,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            428 => 
            array (
                'id' => 429,
                'movie_id' => 133,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            429 => 
            array (
                'id' => 430,
                'movie_id' => 134,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            430 => 
            array (
                'id' => 431,
                'movie_id' => 134,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            431 => 
            array (
                'id' => 432,
                'movie_id' => 134,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            432 => 
            array (
                'id' => 433,
                'movie_id' => 134,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            433 => 
            array (
                'id' => 434,
                'movie_id' => 135,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            434 => 
            array (
                'id' => 435,
                'movie_id' => 135,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            435 => 
            array (
                'id' => 436,
                'movie_id' => 135,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            436 => 
            array (
                'id' => 437,
                'movie_id' => 135,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            437 => 
            array (
                'id' => 438,
                'movie_id' => 136,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            438 => 
            array (
                'id' => 439,
                'movie_id' => 136,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            439 => 
            array (
                'id' => 440,
                'movie_id' => 136,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            440 => 
            array (
                'id' => 441,
                'movie_id' => 136,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            441 => 
            array (
                'id' => 442,
                'movie_id' => 137,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            442 => 
            array (
                'id' => 443,
                'movie_id' => 137,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            443 => 
            array (
                'id' => 444,
                'movie_id' => 137,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            444 => 
            array (
                'id' => 445,
                'movie_id' => 137,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            445 => 
            array (
                'id' => 446,
                'movie_id' => 138,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            446 => 
            array (
                'id' => 447,
                'movie_id' => 138,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            447 => 
            array (
                'id' => 448,
                'movie_id' => 138,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            448 => 
            array (
                'id' => 449,
                'movie_id' => 138,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            449 => 
            array (
                'id' => 450,
                'movie_id' => 139,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            450 => 
            array (
                'id' => 451,
                'movie_id' => 139,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            451 => 
            array (
                'id' => 452,
                'movie_id' => 139,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            452 => 
            array (
                'id' => 453,
                'movie_id' => 139,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            453 => 
            array (
                'id' => 454,
                'movie_id' => 139,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            454 => 
            array (
                'id' => 455,
                'movie_id' => 139,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            455 => 
            array (
                'id' => 456,
                'movie_id' => 140,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            456 => 
            array (
                'id' => 457,
                'movie_id' => 140,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            457 => 
            array (
                'id' => 458,
                'movie_id' => 140,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            458 => 
            array (
                'id' => 459,
                'movie_id' => 140,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            459 => 
            array (
                'id' => 460,
                'movie_id' => 141,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            460 => 
            array (
                'id' => 461,
                'movie_id' => 141,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            461 => 
            array (
                'id' => 462,
                'movie_id' => 141,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            462 => 
            array (
                'id' => 463,
                'movie_id' => 141,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            463 => 
            array (
                'id' => 464,
                'movie_id' => 141,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            464 => 
            array (
                'id' => 465,
                'movie_id' => 142,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            465 => 
            array (
                'id' => 466,
                'movie_id' => 142,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            466 => 
            array (
                'id' => 467,
                'movie_id' => 142,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            467 => 
            array (
                'id' => 468,
                'movie_id' => 142,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            468 => 
            array (
                'id' => 469,
                'movie_id' => 143,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            469 => 
            array (
                'id' => 470,
                'movie_id' => 143,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            470 => 
            array (
                'id' => 471,
                'movie_id' => 143,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            471 => 
            array (
                'id' => 472,
                'movie_id' => 143,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            472 => 
            array (
                'id' => 473,
                'movie_id' => 143,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            473 => 
            array (
                'id' => 474,
                'movie_id' => 144,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            474 => 
            array (
                'id' => 475,
                'movie_id' => 144,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            475 => 
            array (
                'id' => 476,
                'movie_id' => 144,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            476 => 
            array (
                'id' => 477,
                'movie_id' => 144,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            477 => 
            array (
                'id' => 478,
                'movie_id' => 144,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            478 => 
            array (
                'id' => 479,
                'movie_id' => 145,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            479 => 
            array (
                'id' => 480,
                'movie_id' => 145,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            480 => 
            array (
                'id' => 481,
                'movie_id' => 145,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            481 => 
            array (
                'id' => 482,
                'movie_id' => 145,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            482 => 
            array (
                'id' => 483,
                'movie_id' => 146,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            483 => 
            array (
                'id' => 484,
                'movie_id' => 146,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            484 => 
            array (
                'id' => 485,
                'movie_id' => 146,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            485 => 
            array (
                'id' => 486,
                'movie_id' => 146,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            486 => 
            array (
                'id' => 487,
                'movie_id' => 146,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            487 => 
            array (
                'id' => 488,
                'movie_id' => 147,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            488 => 
            array (
                'id' => 489,
                'movie_id' => 147,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            489 => 
            array (
                'id' => 490,
                'movie_id' => 147,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            490 => 
            array (
                'id' => 491,
                'movie_id' => 147,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            491 => 
            array (
                'id' => 492,
                'movie_id' => 148,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            492 => 
            array (
                'id' => 493,
                'movie_id' => 148,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            493 => 
            array (
                'id' => 494,
                'movie_id' => 148,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            494 => 
            array (
                'id' => 495,
                'movie_id' => 148,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            495 => 
            array (
                'id' => 496,
                'movie_id' => 148,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            496 => 
            array (
                'id' => 497,
                'movie_id' => 149,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            497 => 
            array (
                'id' => 498,
                'movie_id' => 149,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            498 => 
            array (
                'id' => 499,
                'movie_id' => 149,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            499 => 
            array (
                'id' => 500,
                'movie_id' => 149,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 501,
                'movie_id' => 149,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 502,
                'movie_id' => 149,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 503,
                'movie_id' => 149,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 504,
                'movie_id' => 150,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 505,
                'movie_id' => 150,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 506,
                'movie_id' => 150,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 507,
                'movie_id' => 150,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 508,
                'movie_id' => 150,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 509,
                'movie_id' => 151,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 510,
                'movie_id' => 151,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 511,
                'movie_id' => 151,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 512,
                'movie_id' => 151,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 513,
                'movie_id' => 151,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 514,
                'movie_id' => 152,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 515,
                'movie_id' => 152,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 516,
                'movie_id' => 152,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 517,
                'movie_id' => 152,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 518,
                'movie_id' => 152,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 519,
                'movie_id' => 153,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 520,
                'movie_id' => 153,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 521,
                'movie_id' => 153,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 522,
                'movie_id' => 153,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 523,
                'movie_id' => 154,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 524,
                'movie_id' => 154,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 525,
                'movie_id' => 154,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 526,
                'movie_id' => 154,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 527,
                'movie_id' => 155,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 528,
                'movie_id' => 155,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 529,
                'movie_id' => 155,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 530,
                'movie_id' => 155,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 531,
                'movie_id' => 156,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 532,
                'movie_id' => 156,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 533,
                'movie_id' => 156,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 534,
                'movie_id' => 156,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 535,
                'movie_id' => 156,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 536,
                'movie_id' => 157,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 537,
                'movie_id' => 157,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 538,
                'movie_id' => 158,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 539,
                'movie_id' => 158,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 540,
                'movie_id' => 158,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 541,
                'movie_id' => 159,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 542,
                'movie_id' => 159,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 543,
                'movie_id' => 159,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 544,
                'movie_id' => 159,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 545,
                'movie_id' => 160,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 546,
                'movie_id' => 160,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 547,
                'movie_id' => 160,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 548,
                'movie_id' => 160,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 549,
                'movie_id' => 161,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 550,
                'movie_id' => 161,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 551,
                'movie_id' => 161,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 552,
                'movie_id' => 161,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 553,
                'movie_id' => 161,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 554,
                'movie_id' => 161,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 555,
                'movie_id' => 162,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 556,
                'movie_id' => 162,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 557,
                'movie_id' => 162,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 558,
                'movie_id' => 162,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 559,
                'movie_id' => 162,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 560,
                'movie_id' => 163,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 561,
                'movie_id' => 163,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 562,
                'movie_id' => 163,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 563,
                'movie_id' => 163,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 564,
                'movie_id' => 163,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 565,
                'movie_id' => 164,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 566,
                'movie_id' => 164,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 567,
                'movie_id' => 164,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 568,
                'movie_id' => 164,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 569,
                'movie_id' => 164,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 570,
                'movie_id' => 164,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 571,
                'movie_id' => 165,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 572,
                'movie_id' => 165,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 573,
                'movie_id' => 165,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 574,
                'movie_id' => 165,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 575,
                'movie_id' => 165,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 576,
                'movie_id' => 166,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 577,
                'movie_id' => 166,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 578,
                'movie_id' => 166,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 579,
                'movie_id' => 167,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 580,
                'movie_id' => 167,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 581,
                'movie_id' => 167,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 582,
                'movie_id' => 168,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 583,
                'movie_id' => 168,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 584,
                'movie_id' => 168,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 585,
                'movie_id' => 169,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 586,
                'movie_id' => 169,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 587,
                'movie_id' => 169,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 588,
                'movie_id' => 170,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 589,
                'movie_id' => 170,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 590,
                'movie_id' => 170,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 591,
                'movie_id' => 171,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 592,
                'movie_id' => 171,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 593,
                'movie_id' => 172,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 594,
                'movie_id' => 172,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 595,
                'movie_id' => 172,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 596,
                'movie_id' => 172,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 597,
                'movie_id' => 172,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 598,
                'movie_id' => 172,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 599,
                'movie_id' => 173,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 600,
                'movie_id' => 174,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 601,
                'movie_id' => 174,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 602,
                'movie_id' => 174,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 603,
                'movie_id' => 175,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 604,
                'movie_id' => 175,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 605,
                'movie_id' => 175,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 606,
                'movie_id' => 176,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 607,
                'movie_id' => 176,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 608,
                'movie_id' => 177,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 609,
                'movie_id' => 177,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 610,
                'movie_id' => 177,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 611,
                'movie_id' => 178,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 612,
                'movie_id' => 178,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 613,
                'movie_id' => 178,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 614,
                'movie_id' => 179,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 615,
                'movie_id' => 179,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 616,
                'movie_id' => 180,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 617,
                'movie_id' => 181,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 618,
                'movie_id' => 181,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 619,
                'movie_id' => 182,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 620,
                'movie_id' => 182,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 621,
                'movie_id' => 183,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 622,
                'movie_id' => 183,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 623,
                'movie_id' => 184,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 624,
                'movie_id' => 184,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 625,
                'movie_id' => 185,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 626,
                'movie_id' => 185,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 627,
                'movie_id' => 185,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 628,
                'movie_id' => 185,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 629,
                'movie_id' => 186,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 630,
                'movie_id' => 186,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 631,
                'movie_id' => 186,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 632,
                'movie_id' => 187,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 633,
                'movie_id' => 187,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 634,
                'movie_id' => 187,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 635,
                'movie_id' => 187,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 636,
                'movie_id' => 188,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 637,
                'movie_id' => 188,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 638,
                'movie_id' => 189,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 639,
                'movie_id' => 189,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 640,
                'movie_id' => 189,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 641,
                'movie_id' => 189,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 642,
                'movie_id' => 190,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 643,
                'movie_id' => 190,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 644,
                'movie_id' => 190,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 645,
                'movie_id' => 191,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 646,
                'movie_id' => 191,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 647,
                'movie_id' => 191,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 648,
                'movie_id' => 191,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 649,
                'movie_id' => 191,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 650,
                'movie_id' => 192,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 651,
                'movie_id' => 192,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 652,
                'movie_id' => 192,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 653,
                'movie_id' => 192,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 654,
                'movie_id' => 193,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 655,
                'movie_id' => 193,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 656,
                'movie_id' => 194,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 657,
                'movie_id' => 195,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 658,
                'movie_id' => 195,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 659,
                'movie_id' => 195,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 660,
                'movie_id' => 196,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 661,
                'movie_id' => 197,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 662,
                'movie_id' => 197,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 663,
                'movie_id' => 197,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 664,
                'movie_id' => 198,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 665,
                'movie_id' => 198,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 666,
                'movie_id' => 198,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 667,
                'movie_id' => 198,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 668,
                'movie_id' => 199,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 669,
                'movie_id' => 199,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 670,
                'movie_id' => 199,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 671,
                'movie_id' => 199,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 672,
                'movie_id' => 200,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 673,
                'movie_id' => 200,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 674,
                'movie_id' => 200,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 675,
                'movie_id' => 201,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 676,
                'movie_id' => 201,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 677,
                'movie_id' => 201,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 678,
                'movie_id' => 201,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 679,
                'movie_id' => 202,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 680,
                'movie_id' => 202,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 681,
                'movie_id' => 202,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 682,
                'movie_id' => 202,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 683,
                'movie_id' => 203,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 684,
                'movie_id' => 203,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 685,
                'movie_id' => 203,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 686,
                'movie_id' => 203,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 687,
                'movie_id' => 204,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 688,
                'movie_id' => 204,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 689,
                'movie_id' => 205,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 690,
                'movie_id' => 205,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 691,
                'movie_id' => 205,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 692,
                'movie_id' => 205,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 693,
                'movie_id' => 206,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 694,
                'movie_id' => 206,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 695,
                'movie_id' => 206,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 696,
                'movie_id' => 207,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 697,
                'movie_id' => 207,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 698,
                'movie_id' => 207,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 699,
                'movie_id' => 207,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 700,
                'movie_id' => 208,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 701,
                'movie_id' => 208,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 702,
                'movie_id' => 209,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 703,
                'movie_id' => 210,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 704,
                'movie_id' => 210,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 705,
                'movie_id' => 210,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 706,
                'movie_id' => 211,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 707,
                'movie_id' => 211,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 708,
                'movie_id' => 211,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 709,
                'movie_id' => 211,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 710,
                'movie_id' => 213,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 711,
                'movie_id' => 213,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 712,
                'movie_id' => 213,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 713,
                'movie_id' => 214,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 714,
                'movie_id' => 214,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 715,
                'movie_id' => 215,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 716,
                'movie_id' => 215,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 717,
                'movie_id' => 215,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 718,
                'movie_id' => 215,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 719,
                'movie_id' => 216,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 720,
                'movie_id' => 216,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 721,
                'movie_id' => 216,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 722,
                'movie_id' => 217,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 723,
                'movie_id' => 218,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 724,
                'movie_id' => 218,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 725,
                'movie_id' => 219,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 726,
                'movie_id' => 219,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 727,
                'movie_id' => 219,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 728,
                'movie_id' => 219,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 729,
                'movie_id' => 220,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 730,
                'movie_id' => 220,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 731,
                'movie_id' => 220,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 732,
                'movie_id' => 221,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 733,
                'movie_id' => 221,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 734,
                'movie_id' => 221,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 735,
                'movie_id' => 222,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 736,
                'movie_id' => 222,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 737,
                'movie_id' => 222,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 738,
                'movie_id' => 222,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 739,
                'movie_id' => 223,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 740,
                'movie_id' => 223,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 741,
                'movie_id' => 223,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 742,
                'movie_id' => 223,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 743,
                'movie_id' => 223,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 744,
                'movie_id' => 224,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 745,
                'movie_id' => 224,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 746,
                'movie_id' => 224,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 747,
                'movie_id' => 224,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 748,
                'movie_id' => 225,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 749,
                'movie_id' => 225,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 750,
                'movie_id' => 225,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 751,
                'movie_id' => 226,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 752,
                'movie_id' => 226,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 753,
                'movie_id' => 226,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 754,
                'movie_id' => 227,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 755,
                'movie_id' => 227,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 756,
                'movie_id' => 228,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 757,
                'movie_id' => 229,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 758,
                'movie_id' => 229,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 759,
                'movie_id' => 230,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 760,
                'movie_id' => 230,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 761,
                'movie_id' => 230,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 762,
                'movie_id' => 231,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 763,
                'movie_id' => 231,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 764,
                'movie_id' => 231,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 765,
                'movie_id' => 231,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 766,
                'movie_id' => 232,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 767,
                'movie_id' => 232,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 768,
                'movie_id' => 233,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 769,
                'movie_id' => 233,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 770,
                'movie_id' => 233,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 771,
                'movie_id' => 234,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 772,
                'movie_id' => 234,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 773,
                'movie_id' => 234,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 774,
                'movie_id' => 234,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 775,
                'movie_id' => 235,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 776,
                'movie_id' => 235,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 777,
                'movie_id' => 235,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 778,
                'movie_id' => 235,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 779,
                'movie_id' => 236,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 780,
                'movie_id' => 236,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 781,
                'movie_id' => 236,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 782,
                'movie_id' => 237,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 783,
                'movie_id' => 237,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 784,
                'movie_id' => 237,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 785,
                'movie_id' => 238,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 786,
                'movie_id' => 239,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 787,
                'movie_id' => 239,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 788,
                'movie_id' => 239,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 789,
                'movie_id' => 240,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 790,
                'movie_id' => 240,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 791,
                'movie_id' => 241,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 792,
                'movie_id' => 241,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 793,
                'movie_id' => 242,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 794,
                'movie_id' => 242,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 795,
                'movie_id' => 242,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 796,
                'movie_id' => 243,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 797,
                'movie_id' => 243,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 798,
                'movie_id' => 243,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 799,
                'movie_id' => 244,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 800,
                'movie_id' => 244,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 801,
                'movie_id' => 244,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 802,
                'movie_id' => 244,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 803,
                'movie_id' => 245,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 804,
                'movie_id' => 245,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 805,
                'movie_id' => 245,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 806,
                'movie_id' => 245,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 807,
                'movie_id' => 246,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 808,
                'movie_id' => 246,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 809,
                'movie_id' => 246,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 810,
                'movie_id' => 246,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 811,
                'movie_id' => 247,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 812,
                'movie_id' => 247,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 813,
                'movie_id' => 247,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 814,
                'movie_id' => 248,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 815,
                'movie_id' => 248,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 816,
                'movie_id' => 248,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 817,
                'movie_id' => 249,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 818,
                'movie_id' => 249,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 819,
                'movie_id' => 250,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 820,
                'movie_id' => 250,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 821,
                'movie_id' => 250,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 822,
                'movie_id' => 251,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 823,
                'movie_id' => 251,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 824,
                'movie_id' => 251,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 825,
                'movie_id' => 252,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 826,
                'movie_id' => 252,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 827,
                'movie_id' => 252,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 828,
                'movie_id' => 253,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 829,
                'movie_id' => 253,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 830,
                'movie_id' => 253,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 831,
                'movie_id' => 254,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 832,
                'movie_id' => 254,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 833,
                'movie_id' => 254,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 834,
                'movie_id' => 255,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 835,
                'movie_id' => 255,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 836,
                'movie_id' => 255,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 837,
                'movie_id' => 256,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 838,
                'movie_id' => 256,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 839,
                'movie_id' => 257,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 840,
                'movie_id' => 257,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 841,
                'movie_id' => 258,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 842,
                'movie_id' => 258,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 843,
                'movie_id' => 258,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 844,
                'movie_id' => 260,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 845,
                'movie_id' => 260,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 846,
                'movie_id' => 260,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            346 => 
            array (
                'id' => 847,
                'movie_id' => 261,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            347 => 
            array (
                'id' => 848,
                'movie_id' => 261,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            348 => 
            array (
                'id' => 849,
                'movie_id' => 261,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            349 => 
            array (
                'id' => 850,
                'movie_id' => 262,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            350 => 
            array (
                'id' => 851,
                'movie_id' => 262,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            351 => 
            array (
                'id' => 852,
                'movie_id' => 262,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            352 => 
            array (
                'id' => 853,
                'movie_id' => 262,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            353 => 
            array (
                'id' => 854,
                'movie_id' => 262,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            354 => 
            array (
                'id' => 855,
                'movie_id' => 263,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            355 => 
            array (
                'id' => 856,
                'movie_id' => 263,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            356 => 
            array (
                'id' => 857,
                'movie_id' => 264,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            357 => 
            array (
                'id' => 858,
                'movie_id' => 264,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            358 => 
            array (
                'id' => 859,
                'movie_id' => 264,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            359 => 
            array (
                'id' => 860,
                'movie_id' => 265,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            360 => 
            array (
                'id' => 861,
                'movie_id' => 265,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            361 => 
            array (
                'id' => 862,
                'movie_id' => 265,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            362 => 
            array (
                'id' => 863,
                'movie_id' => 266,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            363 => 
            array (
                'id' => 864,
                'movie_id' => 266,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            364 => 
            array (
                'id' => 865,
                'movie_id' => 266,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            365 => 
            array (
                'id' => 866,
                'movie_id' => 267,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            366 => 
            array (
                'id' => 867,
                'movie_id' => 267,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            367 => 
            array (
                'id' => 868,
                'movie_id' => 267,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            368 => 
            array (
                'id' => 869,
                'movie_id' => 267,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            369 => 
            array (
                'id' => 870,
                'movie_id' => 268,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            370 => 
            array (
                'id' => 871,
                'movie_id' => 270,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            371 => 
            array (
                'id' => 872,
                'movie_id' => 271,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            372 => 
            array (
                'id' => 873,
                'movie_id' => 272,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            373 => 
            array (
                'id' => 874,
                'movie_id' => 272,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            374 => 
            array (
                'id' => 875,
                'movie_id' => 273,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            375 => 
            array (
                'id' => 876,
                'movie_id' => 273,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            376 => 
            array (
                'id' => 877,
                'movie_id' => 273,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            377 => 
            array (
                'id' => 878,
                'movie_id' => 274,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            378 => 
            array (
                'id' => 879,
                'movie_id' => 274,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            379 => 
            array (
                'id' => 880,
                'movie_id' => 274,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            380 => 
            array (
                'id' => 881,
                'movie_id' => 274,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            381 => 
            array (
                'id' => 882,
                'movie_id' => 274,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            382 => 
            array (
                'id' => 883,
                'movie_id' => 275,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            383 => 
            array (
                'id' => 884,
                'movie_id' => 275,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            384 => 
            array (
                'id' => 885,
                'movie_id' => 275,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            385 => 
            array (
                'id' => 886,
                'movie_id' => 276,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            386 => 
            array (
                'id' => 887,
                'movie_id' => 276,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            387 => 
            array (
                'id' => 888,
                'movie_id' => 276,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            388 => 
            array (
                'id' => 889,
                'movie_id' => 276,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            389 => 
            array (
                'id' => 890,
                'movie_id' => 276,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            390 => 
            array (
                'id' => 891,
                'movie_id' => 276,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            391 => 
            array (
                'id' => 892,
                'movie_id' => 277,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            392 => 
            array (
                'id' => 893,
                'movie_id' => 277,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            393 => 
            array (
                'id' => 894,
                'movie_id' => 278,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            394 => 
            array (
                'id' => 895,
                'movie_id' => 278,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            395 => 
            array (
                'id' => 896,
                'movie_id' => 278,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            396 => 
            array (
                'id' => 897,
                'movie_id' => 279,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            397 => 
            array (
                'id' => 898,
                'movie_id' => 279,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            398 => 
            array (
                'id' => 899,
                'movie_id' => 280,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            399 => 
            array (
                'id' => 900,
                'movie_id' => 281,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            400 => 
            array (
                'id' => 901,
                'movie_id' => 281,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            401 => 
            array (
                'id' => 902,
                'movie_id' => 282,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            402 => 
            array (
                'id' => 903,
                'movie_id' => 282,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            403 => 
            array (
                'id' => 904,
                'movie_id' => 283,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            404 => 
            array (
                'id' => 905,
                'movie_id' => 283,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            405 => 
            array (
                'id' => 906,
                'movie_id' => 283,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            406 => 
            array (
                'id' => 907,
                'movie_id' => 283,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            407 => 
            array (
                'id' => 908,
                'movie_id' => 283,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            408 => 
            array (
                'id' => 909,
                'movie_id' => 284,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            409 => 
            array (
                'id' => 910,
                'movie_id' => 284,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            410 => 
            array (
                'id' => 911,
                'movie_id' => 284,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            411 => 
            array (
                'id' => 912,
                'movie_id' => 285,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            412 => 
            array (
                'id' => 913,
                'movie_id' => 285,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            413 => 
            array (
                'id' => 914,
                'movie_id' => 285,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            414 => 
            array (
                'id' => 915,
                'movie_id' => 286,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            415 => 
            array (
                'id' => 916,
                'movie_id' => 286,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            416 => 
            array (
                'id' => 917,
                'movie_id' => 286,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            417 => 
            array (
                'id' => 918,
                'movie_id' => 286,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            418 => 
            array (
                'id' => 919,
                'movie_id' => 287,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            419 => 
            array (
                'id' => 920,
                'movie_id' => 287,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            420 => 
            array (
                'id' => 921,
                'movie_id' => 288,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            421 => 
            array (
                'id' => 922,
                'movie_id' => 288,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            422 => 
            array (
                'id' => 923,
                'movie_id' => 288,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            423 => 
            array (
                'id' => 924,
                'movie_id' => 289,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            424 => 
            array (
                'id' => 925,
                'movie_id' => 289,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            425 => 
            array (
                'id' => 926,
                'movie_id' => 290,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            426 => 
            array (
                'id' => 927,
                'movie_id' => 290,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            427 => 
            array (
                'id' => 928,
                'movie_id' => 291,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            428 => 
            array (
                'id' => 929,
                'movie_id' => 291,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            429 => 
            array (
                'id' => 930,
                'movie_id' => 291,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            430 => 
            array (
                'id' => 931,
                'movie_id' => 291,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            431 => 
            array (
                'id' => 932,
                'movie_id' => 291,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            432 => 
            array (
                'id' => 933,
                'movie_id' => 292,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            433 => 
            array (
                'id' => 934,
                'movie_id' => 293,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            434 => 
            array (
                'id' => 935,
                'movie_id' => 293,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            435 => 
            array (
                'id' => 936,
                'movie_id' => 293,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            436 => 
            array (
                'id' => 937,
                'movie_id' => 293,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            437 => 
            array (
                'id' => 938,
                'movie_id' => 294,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            438 => 
            array (
                'id' => 939,
                'movie_id' => 294,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            439 => 
            array (
                'id' => 940,
                'movie_id' => 294,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            440 => 
            array (
                'id' => 941,
                'movie_id' => 295,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            441 => 
            array (
                'id' => 942,
                'movie_id' => 295,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            442 => 
            array (
                'id' => 943,
                'movie_id' => 296,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            443 => 
            array (
                'id' => 944,
                'movie_id' => 296,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            444 => 
            array (
                'id' => 945,
                'movie_id' => 296,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            445 => 
            array (
                'id' => 946,
                'movie_id' => 296,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            446 => 
            array (
                'id' => 947,
                'movie_id' => 296,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            447 => 
            array (
                'id' => 948,
                'movie_id' => 297,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            448 => 
            array (
                'id' => 949,
                'movie_id' => 297,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            449 => 
            array (
                'id' => 950,
                'movie_id' => 297,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            450 => 
            array (
                'id' => 951,
                'movie_id' => 298,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            451 => 
            array (
                'id' => 952,
                'movie_id' => 299,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            452 => 
            array (
                'id' => 953,
                'movie_id' => 299,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            453 => 
            array (
                'id' => 954,
                'movie_id' => 299,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            454 => 
            array (
                'id' => 955,
                'movie_id' => 299,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            455 => 
            array (
                'id' => 956,
                'movie_id' => 300,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            456 => 
            array (
                'id' => 957,
                'movie_id' => 300,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            457 => 
            array (
                'id' => 958,
                'movie_id' => 301,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            458 => 
            array (
                'id' => 959,
                'movie_id' => 301,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            459 => 
            array (
                'id' => 960,
                'movie_id' => 302,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            460 => 
            array (
                'id' => 961,
                'movie_id' => 302,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            461 => 
            array (
                'id' => 962,
                'movie_id' => 303,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            462 => 
            array (
                'id' => 963,
                'movie_id' => 303,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            463 => 
            array (
                'id' => 964,
                'movie_id' => 303,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            464 => 
            array (
                'id' => 965,
                'movie_id' => 304,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            465 => 
            array (
                'id' => 966,
                'movie_id' => 304,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            466 => 
            array (
                'id' => 967,
                'movie_id' => 304,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            467 => 
            array (
                'id' => 968,
                'movie_id' => 304,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            468 => 
            array (
                'id' => 969,
                'movie_id' => 305,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            469 => 
            array (
                'id' => 970,
                'movie_id' => 305,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            470 => 
            array (
                'id' => 971,
                'movie_id' => 305,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            471 => 
            array (
                'id' => 972,
                'movie_id' => 306,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            472 => 
            array (
                'id' => 973,
                'movie_id' => 306,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            473 => 
            array (
                'id' => 974,
                'movie_id' => 307,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            474 => 
            array (
                'id' => 975,
                'movie_id' => 307,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            475 => 
            array (
                'id' => 976,
                'movie_id' => 307,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            476 => 
            array (
                'id' => 977,
                'movie_id' => 307,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            477 => 
            array (
                'id' => 978,
                'movie_id' => 308,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            478 => 
            array (
                'id' => 979,
                'movie_id' => 308,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            479 => 
            array (
                'id' => 980,
                'movie_id' => 309,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            480 => 
            array (
                'id' => 981,
                'movie_id' => 309,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            481 => 
            array (
                'id' => 982,
                'movie_id' => 309,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            482 => 
            array (
                'id' => 983,
                'movie_id' => 309,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            483 => 
            array (
                'id' => 984,
                'movie_id' => 309,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            484 => 
            array (
                'id' => 985,
                'movie_id' => 310,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            485 => 
            array (
                'id' => 986,
                'movie_id' => 310,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            486 => 
            array (
                'id' => 987,
                'movie_id' => 310,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            487 => 
            array (
                'id' => 988,
                'movie_id' => 310,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            488 => 
            array (
                'id' => 989,
                'movie_id' => 310,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            489 => 
            array (
                'id' => 990,
                'movie_id' => 311,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            490 => 
            array (
                'id' => 991,
                'movie_id' => 311,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            491 => 
            array (
                'id' => 992,
                'movie_id' => 311,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            492 => 
            array (
                'id' => 993,
                'movie_id' => 311,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            493 => 
            array (
                'id' => 994,
                'movie_id' => 311,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            494 => 
            array (
                'id' => 995,
                'movie_id' => 312,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            495 => 
            array (
                'id' => 996,
                'movie_id' => 312,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            496 => 
            array (
                'id' => 997,
                'movie_id' => 313,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            497 => 
            array (
                'id' => 998,
                'movie_id' => 313,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            498 => 
            array (
                'id' => 999,
                'movie_id' => 314,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            499 => 
            array (
                'id' => 1000,
                'movie_id' => 314,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'movie_id' => 314,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 1002,
                'movie_id' => 315,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 1003,
                'movie_id' => 315,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 1004,
                'movie_id' => 316,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 1005,
                'movie_id' => 316,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 1006,
                'movie_id' => 316,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 1007,
                'movie_id' => 317,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 1008,
                'movie_id' => 317,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 1009,
                'movie_id' => 318,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 1010,
                'movie_id' => 318,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 1011,
                'movie_id' => 319,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 1012,
                'movie_id' => 319,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 1013,
                'movie_id' => 319,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 1014,
                'movie_id' => 320,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 1015,
                'movie_id' => 320,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 1016,
                'movie_id' => 320,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 1017,
                'movie_id' => 321,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 1018,
                'movie_id' => 321,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 1019,
                'movie_id' => 322,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 1020,
                'movie_id' => 322,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 1021,
                'movie_id' => 323,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 1022,
                'movie_id' => 323,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 1023,
                'movie_id' => 324,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 1024,
                'movie_id' => 324,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 1025,
                'movie_id' => 324,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 1026,
                'movie_id' => 324,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 1027,
                'movie_id' => 324,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 1028,
                'movie_id' => 324,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 1029,
                'movie_id' => 325,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 1030,
                'movie_id' => 325,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 1031,
                'movie_id' => 325,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 1032,
                'movie_id' => 326,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 1033,
                'movie_id' => 326,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 1034,
                'movie_id' => 326,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 1035,
                'movie_id' => 327,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 1036,
                'movie_id' => 327,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 1037,
                'movie_id' => 327,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 1038,
                'movie_id' => 327,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 1039,
                'movie_id' => 328,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 1040,
                'movie_id' => 328,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 1041,
                'movie_id' => 328,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 1042,
                'movie_id' => 329,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 1043,
                'movie_id' => 329,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 1044,
                'movie_id' => 329,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 1045,
                'movie_id' => 330,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 1046,
                'movie_id' => 330,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 1047,
                'movie_id' => 331,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 1048,
                'movie_id' => 331,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 1049,
                'movie_id' => 331,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 1050,
                'movie_id' => 332,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 1051,
                'movie_id' => 332,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 1052,
                'movie_id' => 332,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 1053,
                'movie_id' => 333,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 1054,
                'movie_id' => 333,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 1055,
                'movie_id' => 334,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 1056,
                'movie_id' => 334,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 1057,
                'movie_id' => 334,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 1058,
                'movie_id' => 334,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 1059,
                'movie_id' => 335,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 1060,
                'movie_id' => 335,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 1061,
                'movie_id' => 335,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 1062,
                'movie_id' => 335,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 1063,
                'movie_id' => 336,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 1064,
                'movie_id' => 336,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 1065,
                'movie_id' => 337,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 1066,
                'movie_id' => 337,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 1067,
                'movie_id' => 337,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 1068,
                'movie_id' => 337,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 1069,
                'movie_id' => 338,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 1070,
                'movie_id' => 338,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 1071,
                'movie_id' => 338,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 1072,
                'movie_id' => 339,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 1073,
                'movie_id' => 339,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 1074,
                'movie_id' => 339,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 1075,
                'movie_id' => 340,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 1076,
                'movie_id' => 340,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 1077,
                'movie_id' => 340,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 1078,
                'movie_id' => 341,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 1079,
                'movie_id' => 341,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 1080,
                'movie_id' => 341,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 1081,
                'movie_id' => 342,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 1082,
                'movie_id' => 342,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 1083,
                'movie_id' => 342,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 1084,
                'movie_id' => 343,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 1085,
                'movie_id' => 344,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 1086,
                'movie_id' => 344,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 1087,
                'movie_id' => 345,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 1088,
                'movie_id' => 345,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 1089,
                'movie_id' => 346,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 1090,
                'movie_id' => 346,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 1091,
                'movie_id' => 346,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 1092,
                'movie_id' => 346,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 1093,
                'movie_id' => 346,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 1094,
                'movie_id' => 347,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 1095,
                'movie_id' => 347,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 1096,
                'movie_id' => 347,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 1097,
                'movie_id' => 348,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 1098,
                'movie_id' => 348,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 1099,
                'movie_id' => 348,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 1100,
                'movie_id' => 348,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 1101,
                'movie_id' => 349,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 1102,
                'movie_id' => 349,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 1103,
                'movie_id' => 349,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 1104,
                'movie_id' => 349,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 1105,
                'movie_id' => 349,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 1106,
                'movie_id' => 349,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 1107,
                'movie_id' => 350,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 1108,
                'movie_id' => 350,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 1109,
                'movie_id' => 350,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 1110,
                'movie_id' => 351,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 1111,
                'movie_id' => 351,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 1112,
                'movie_id' => 352,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 1113,
                'movie_id' => 352,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 1114,
                'movie_id' => 352,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 1115,
                'movie_id' => 352,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 1116,
                'movie_id' => 352,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 1117,
                'movie_id' => 353,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 1118,
                'movie_id' => 354,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 1119,
                'movie_id' => 354,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 1120,
                'movie_id' => 355,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 1121,
                'movie_id' => 355,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 1122,
                'movie_id' => 355,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 1123,
                'movie_id' => 355,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 1124,
                'movie_id' => 356,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 1125,
                'movie_id' => 356,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 1126,
                'movie_id' => 357,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 1127,
                'movie_id' => 357,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 1128,
                'movie_id' => 358,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 1129,
                'movie_id' => 358,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 1130,
                'movie_id' => 359,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 1131,
                'movie_id' => 360,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 1132,
                'movie_id' => 360,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 1133,
                'movie_id' => 360,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 1134,
                'movie_id' => 361,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 1135,
                'movie_id' => 362,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 1136,
                'movie_id' => 362,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 1137,
                'movie_id' => 362,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 1138,
                'movie_id' => 363,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 1139,
                'movie_id' => 363,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 1140,
                'movie_id' => 363,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 1141,
                'movie_id' => 363,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 1142,
                'movie_id' => 364,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 1143,
                'movie_id' => 364,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 1144,
                'movie_id' => 364,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 1145,
                'movie_id' => 364,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 1146,
                'movie_id' => 365,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 1147,
                'movie_id' => 365,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 1148,
                'movie_id' => 365,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 1149,
                'movie_id' => 366,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 1150,
                'movie_id' => 366,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 1151,
                'movie_id' => 366,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 1152,
                'movie_id' => 366,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 1153,
                'movie_id' => 367,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 1154,
                'movie_id' => 367,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 1155,
                'movie_id' => 367,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 1156,
                'movie_id' => 368,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 1157,
                'movie_id' => 369,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 1158,
                'movie_id' => 369,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 1159,
                'movie_id' => 369,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 1160,
                'movie_id' => 369,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 1161,
                'movie_id' => 370,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 1162,
                'movie_id' => 370,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 1163,
                'movie_id' => 370,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 1164,
                'movie_id' => 370,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 1165,
                'movie_id' => 370,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 1166,
                'movie_id' => 371,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 1167,
                'movie_id' => 371,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 1168,
                'movie_id' => 371,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 1169,
                'movie_id' => 371,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 1170,
                'movie_id' => 372,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 1171,
                'movie_id' => 373,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 1172,
                'movie_id' => 374,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 1173,
                'movie_id' => 374,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 1174,
                'movie_id' => 375,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 1175,
                'movie_id' => 375,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 1176,
                'movie_id' => 376,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 1177,
                'movie_id' => 376,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 1178,
                'movie_id' => 377,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 1179,
                'movie_id' => 377,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 1180,
                'movie_id' => 377,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 1181,
                'movie_id' => 378,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 1182,
                'movie_id' => 378,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 1183,
                'movie_id' => 378,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 1184,
                'movie_id' => 378,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 1185,
                'movie_id' => 379,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 1186,
                'movie_id' => 379,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 1187,
                'movie_id' => 380,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 1188,
                'movie_id' => 381,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 1189,
                'movie_id' => 382,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 1190,
                'movie_id' => 382,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 1191,
                'movie_id' => 382,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 1192,
                'movie_id' => 383,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 1193,
                'movie_id' => 383,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 1194,
                'movie_id' => 384,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 1195,
                'movie_id' => 384,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 1196,
                'movie_id' => 385,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 1197,
                'movie_id' => 385,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 1198,
                'movie_id' => 386,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 1199,
                'movie_id' => 386,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 1200,
                'movie_id' => 386,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 1201,
                'movie_id' => 386,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 1202,
                'movie_id' => 387,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 1203,
                'movie_id' => 387,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 1204,
                'movie_id' => 387,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 1205,
                'movie_id' => 388,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 1206,
                'movie_id' => 389,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 1207,
                'movie_id' => 390,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 1208,
                'movie_id' => 391,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 1209,
                'movie_id' => 391,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 1210,
                'movie_id' => 391,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 1211,
                'movie_id' => 392,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 1212,
                'movie_id' => 392,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 1213,
                'movie_id' => 392,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 1214,
                'movie_id' => 393,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 1215,
                'movie_id' => 393,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 1216,
                'movie_id' => 393,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 1217,
                'movie_id' => 394,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 1218,
                'movie_id' => 394,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 1219,
                'movie_id' => 394,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 1220,
                'movie_id' => 395,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 1221,
                'movie_id' => 395,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 1222,
                'movie_id' => 395,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 1223,
                'movie_id' => 396,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 1224,
                'movie_id' => 396,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 1225,
                'movie_id' => 396,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 1226,
                'movie_id' => 397,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 1227,
                'movie_id' => 397,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 1228,
                'movie_id' => 397,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 1229,
                'movie_id' => 398,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 1230,
                'movie_id' => 398,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 1231,
                'movie_id' => 399,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 1232,
                'movie_id' => 399,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 1233,
                'movie_id' => 399,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 1234,
                'movie_id' => 400,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 1235,
                'movie_id' => 400,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 1236,
                'movie_id' => 400,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 1237,
                'movie_id' => 401,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 1238,
                'movie_id' => 402,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 1239,
                'movie_id' => 402,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 1240,
                'movie_id' => 402,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 1241,
                'movie_id' => 403,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 1242,
                'movie_id' => 403,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 1243,
                'movie_id' => 404,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 1244,
                'movie_id' => 404,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 1245,
                'movie_id' => 404,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 1246,
                'movie_id' => 404,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 1247,
                'movie_id' => 405,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 1248,
                'movie_id' => 405,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 1249,
                'movie_id' => 405,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 1250,
                'movie_id' => 405,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 1251,
                'movie_id' => 405,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 1252,
                'movie_id' => 406,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 1253,
                'movie_id' => 406,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 1254,
                'movie_id' => 406,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 1255,
                'movie_id' => 407,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 1256,
                'movie_id' => 407,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 1257,
                'movie_id' => 408,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 1258,
                'movie_id' => 408,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 1259,
                'movie_id' => 409,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 1260,
                'movie_id' => 409,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 1261,
                'movie_id' => 409,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 1262,
                'movie_id' => 410,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 1263,
                'movie_id' => 410,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 1264,
                'movie_id' => 411,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 1265,
                'movie_id' => 411,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 1266,
                'movie_id' => 412,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 1267,
                'movie_id' => 412,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 1268,
                'movie_id' => 412,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 1269,
                'movie_id' => 413,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 1270,
                'movie_id' => 413,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 1271,
                'movie_id' => 413,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 1272,
                'movie_id' => 413,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 1273,
                'movie_id' => 414,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 1274,
                'movie_id' => 414,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 1275,
                'movie_id' => 414,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 1276,
                'movie_id' => 414,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 1277,
                'movie_id' => 415,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 1278,
                'movie_id' => 415,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 1279,
                'movie_id' => 415,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 1280,
                'movie_id' => 415,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 1281,
                'movie_id' => 416,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 1282,
                'movie_id' => 416,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 1283,
                'movie_id' => 417,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 1284,
                'movie_id' => 417,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 1285,
                'movie_id' => 417,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 1286,
                'movie_id' => 418,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 1287,
                'movie_id' => 418,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 1288,
                'movie_id' => 418,
                'genre_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 1289,
                'movie_id' => 418,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 1290,
                'movie_id' => 419,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 1291,
                'movie_id' => 419,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 1292,
                'movie_id' => 419,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 1293,
                'movie_id' => 419,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 1294,
                'movie_id' => 420,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 1295,
                'movie_id' => 420,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 1296,
                'movie_id' => 420,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 1297,
                'movie_id' => 420,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 1298,
                'movie_id' => 421,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 1299,
                'movie_id' => 421,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 1300,
                'movie_id' => 421,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 1301,
                'movie_id' => 421,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 1302,
                'movie_id' => 422,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 1303,
                'movie_id' => 423,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 1304,
                'movie_id' => 423,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 1305,
                'movie_id' => 424,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 1306,
                'movie_id' => 424,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 1307,
                'movie_id' => 424,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 1308,
                'movie_id' => 424,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 1309,
                'movie_id' => 425,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 1310,
                'movie_id' => 425,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 1311,
                'movie_id' => 426,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 1312,
                'movie_id' => 426,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 1313,
                'movie_id' => 426,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 1314,
                'movie_id' => 427,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 1315,
                'movie_id' => 427,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 1316,
                'movie_id' => 428,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 1317,
                'movie_id' => 428,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 1318,
                'movie_id' => 429,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 1319,
                'movie_id' => 429,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 1320,
                'movie_id' => 430,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 1321,
                'movie_id' => 430,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 1322,
                'movie_id' => 431,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 1323,
                'movie_id' => 431,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 1324,
                'movie_id' => 432,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 1325,
                'movie_id' => 432,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 1326,
                'movie_id' => 432,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 1327,
                'movie_id' => 433,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 1328,
                'movie_id' => 433,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 1329,
                'movie_id' => 433,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 1330,
                'movie_id' => 434,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 1331,
                'movie_id' => 434,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 1332,
                'movie_id' => 434,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 1333,
                'movie_id' => 435,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 1334,
                'movie_id' => 435,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 1335,
                'movie_id' => 435,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 1336,
                'movie_id' => 436,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 1337,
                'movie_id' => 436,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 1338,
                'movie_id' => 436,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 1339,
                'movie_id' => 437,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 1340,
                'movie_id' => 437,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 1341,
                'movie_id' => 437,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 1342,
                'movie_id' => 438,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 1343,
                'movie_id' => 438,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 1344,
                'movie_id' => 438,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 1345,
                'movie_id' => 439,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 1346,
                'movie_id' => 439,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            346 => 
            array (
                'id' => 1347,
                'movie_id' => 439,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            347 => 
            array (
                'id' => 1348,
                'movie_id' => 440,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            348 => 
            array (
                'id' => 1349,
                'movie_id' => 440,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            349 => 
            array (
                'id' => 1350,
                'movie_id' => 440,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            350 => 
            array (
                'id' => 1351,
                'movie_id' => 441,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            351 => 
            array (
                'id' => 1352,
                'movie_id' => 441,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            352 => 
            array (
                'id' => 1353,
                'movie_id' => 441,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            353 => 
            array (
                'id' => 1354,
                'movie_id' => 441,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            354 => 
            array (
                'id' => 1355,
                'movie_id' => 442,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            355 => 
            array (
                'id' => 1356,
                'movie_id' => 442,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            356 => 
            array (
                'id' => 1357,
                'movie_id' => 442,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            357 => 
            array (
                'id' => 1358,
                'movie_id' => 442,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            358 => 
            array (
                'id' => 1359,
                'movie_id' => 443,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            359 => 
            array (
                'id' => 1360,
                'movie_id' => 443,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            360 => 
            array (
                'id' => 1361,
                'movie_id' => 443,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            361 => 
            array (
                'id' => 1362,
                'movie_id' => 444,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            362 => 
            array (
                'id' => 1363,
                'movie_id' => 444,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            363 => 
            array (
                'id' => 1364,
                'movie_id' => 444,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            364 => 
            array (
                'id' => 1365,
                'movie_id' => 445,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            365 => 
            array (
                'id' => 1366,
                'movie_id' => 445,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            366 => 
            array (
                'id' => 1367,
                'movie_id' => 445,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            367 => 
            array (
                'id' => 1368,
                'movie_id' => 446,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            368 => 
            array (
                'id' => 1369,
                'movie_id' => 446,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            369 => 
            array (
                'id' => 1370,
                'movie_id' => 446,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            370 => 
            array (
                'id' => 1371,
                'movie_id' => 447,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            371 => 
            array (
                'id' => 1372,
                'movie_id' => 447,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            372 => 
            array (
                'id' => 1373,
                'movie_id' => 447,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            373 => 
            array (
                'id' => 1374,
                'movie_id' => 448,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            374 => 
            array (
                'id' => 1375,
                'movie_id' => 448,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            375 => 
            array (
                'id' => 1376,
                'movie_id' => 448,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            376 => 
            array (
                'id' => 1377,
                'movie_id' => 448,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            377 => 
            array (
                'id' => 1378,
                'movie_id' => 449,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            378 => 
            array (
                'id' => 1379,
                'movie_id' => 449,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            379 => 
            array (
                'id' => 1380,
                'movie_id' => 449,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            380 => 
            array (
                'id' => 1381,
                'movie_id' => 450,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            381 => 
            array (
                'id' => 1382,
                'movie_id' => 450,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            382 => 
            array (
                'id' => 1383,
                'movie_id' => 450,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            383 => 
            array (
                'id' => 1384,
                'movie_id' => 451,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            384 => 
            array (
                'id' => 1385,
                'movie_id' => 451,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            385 => 
            array (
                'id' => 1386,
                'movie_id' => 451,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            386 => 
            array (
                'id' => 1387,
                'movie_id' => 452,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            387 => 
            array (
                'id' => 1388,
                'movie_id' => 452,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            388 => 
            array (
                'id' => 1389,
                'movie_id' => 452,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            389 => 
            array (
                'id' => 1390,
                'movie_id' => 453,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            390 => 
            array (
                'id' => 1391,
                'movie_id' => 453,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            391 => 
            array (
                'id' => 1392,
                'movie_id' => 454,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            392 => 
            array (
                'id' => 1393,
                'movie_id' => 454,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            393 => 
            array (
                'id' => 1394,
                'movie_id' => 454,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            394 => 
            array (
                'id' => 1395,
                'movie_id' => 455,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            395 => 
            array (
                'id' => 1396,
                'movie_id' => 455,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            396 => 
            array (
                'id' => 1397,
                'movie_id' => 455,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            397 => 
            array (
                'id' => 1398,
                'movie_id' => 456,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            398 => 
            array (
                'id' => 1399,
                'movie_id' => 457,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            399 => 
            array (
                'id' => 1400,
                'movie_id' => 457,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            400 => 
            array (
                'id' => 1401,
                'movie_id' => 458,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            401 => 
            array (
                'id' => 1402,
                'movie_id' => 458,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            402 => 
            array (
                'id' => 1403,
                'movie_id' => 458,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            403 => 
            array (
                'id' => 1404,
                'movie_id' => 458,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            404 => 
            array (
                'id' => 1405,
                'movie_id' => 459,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            405 => 
            array (
                'id' => 1406,
                'movie_id' => 459,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            406 => 
            array (
                'id' => 1407,
                'movie_id' => 460,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            407 => 
            array (
                'id' => 1408,
                'movie_id' => 460,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            408 => 
            array (
                'id' => 1409,
                'movie_id' => 460,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            409 => 
            array (
                'id' => 1410,
                'movie_id' => 460,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            410 => 
            array (
                'id' => 1411,
                'movie_id' => 461,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            411 => 
            array (
                'id' => 1412,
                'movie_id' => 461,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            412 => 
            array (
                'id' => 1413,
                'movie_id' => 461,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            413 => 
            array (
                'id' => 1414,
                'movie_id' => 461,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            414 => 
            array (
                'id' => 1415,
                'movie_id' => 462,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            415 => 
            array (
                'id' => 1416,
                'movie_id' => 462,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            416 => 
            array (
                'id' => 1417,
                'movie_id' => 463,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            417 => 
            array (
                'id' => 1418,
                'movie_id' => 463,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            418 => 
            array (
                'id' => 1419,
                'movie_id' => 464,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            419 => 
            array (
                'id' => 1420,
                'movie_id' => 464,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            420 => 
            array (
                'id' => 1421,
                'movie_id' => 464,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            421 => 
            array (
                'id' => 1422,
                'movie_id' => 465,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            422 => 
            array (
                'id' => 1423,
                'movie_id' => 465,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            423 => 
            array (
                'id' => 1424,
                'movie_id' => 465,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            424 => 
            array (
                'id' => 1425,
                'movie_id' => 466,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            425 => 
            array (
                'id' => 1426,
                'movie_id' => 466,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            426 => 
            array (
                'id' => 1427,
                'movie_id' => 466,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            427 => 
            array (
                'id' => 1428,
                'movie_id' => 467,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            428 => 
            array (
                'id' => 1429,
                'movie_id' => 467,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            429 => 
            array (
                'id' => 1430,
                'movie_id' => 467,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            430 => 
            array (
                'id' => 1431,
                'movie_id' => 468,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            431 => 
            array (
                'id' => 1432,
                'movie_id' => 468,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            432 => 
            array (
                'id' => 1433,
                'movie_id' => 468,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            433 => 
            array (
                'id' => 1434,
                'movie_id' => 469,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            434 => 
            array (
                'id' => 1435,
                'movie_id' => 469,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            435 => 
            array (
                'id' => 1436,
                'movie_id' => 470,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            436 => 
            array (
                'id' => 1437,
                'movie_id' => 470,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            437 => 
            array (
                'id' => 1438,
                'movie_id' => 471,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            438 => 
            array (
                'id' => 1439,
                'movie_id' => 471,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            439 => 
            array (
                'id' => 1440,
                'movie_id' => 472,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            440 => 
            array (
                'id' => 1441,
                'movie_id' => 472,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            441 => 
            array (
                'id' => 1442,
                'movie_id' => 472,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            442 => 
            array (
                'id' => 1443,
                'movie_id' => 473,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            443 => 
            array (
                'id' => 1444,
                'movie_id' => 473,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            444 => 
            array (
                'id' => 1445,
                'movie_id' => 473,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            445 => 
            array (
                'id' => 1446,
                'movie_id' => 473,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            446 => 
            array (
                'id' => 1447,
                'movie_id' => 473,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            447 => 
            array (
                'id' => 1448,
                'movie_id' => 474,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            448 => 
            array (
                'id' => 1449,
                'movie_id' => 474,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            449 => 
            array (
                'id' => 1450,
                'movie_id' => 474,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            450 => 
            array (
                'id' => 1451,
                'movie_id' => 474,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            451 => 
            array (
                'id' => 1452,
                'movie_id' => 475,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            452 => 
            array (
                'id' => 1453,
                'movie_id' => 475,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            453 => 
            array (
                'id' => 1454,
                'movie_id' => 477,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            454 => 
            array (
                'id' => 1455,
                'movie_id' => 477,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            455 => 
            array (
                'id' => 1456,
                'movie_id' => 478,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            456 => 
            array (
                'id' => 1457,
                'movie_id' => 478,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            457 => 
            array (
                'id' => 1458,
                'movie_id' => 478,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            458 => 
            array (
                'id' => 1459,
                'movie_id' => 479,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            459 => 
            array (
                'id' => 1460,
                'movie_id' => 479,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            460 => 
            array (
                'id' => 1461,
                'movie_id' => 480,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            461 => 
            array (
                'id' => 1462,
                'movie_id' => 480,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            462 => 
            array (
                'id' => 1463,
                'movie_id' => 480,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            463 => 
            array (
                'id' => 1464,
                'movie_id' => 481,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            464 => 
            array (
                'id' => 1465,
                'movie_id' => 481,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            465 => 
            array (
                'id' => 1466,
                'movie_id' => 481,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            466 => 
            array (
                'id' => 1467,
                'movie_id' => 481,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            467 => 
            array (
                'id' => 1468,
                'movie_id' => 482,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            468 => 
            array (
                'id' => 1469,
                'movie_id' => 482,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            469 => 
            array (
                'id' => 1470,
                'movie_id' => 483,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            470 => 
            array (
                'id' => 1471,
                'movie_id' => 483,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            471 => 
            array (
                'id' => 1472,
                'movie_id' => 483,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            472 => 
            array (
                'id' => 1473,
                'movie_id' => 483,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            473 => 
            array (
                'id' => 1474,
                'movie_id' => 483,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            474 => 
            array (
                'id' => 1475,
                'movie_id' => 484,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            475 => 
            array (
                'id' => 1476,
                'movie_id' => 484,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            476 => 
            array (
                'id' => 1477,
                'movie_id' => 484,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            477 => 
            array (
                'id' => 1478,
                'movie_id' => 485,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            478 => 
            array (
                'id' => 1479,
                'movie_id' => 485,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            479 => 
            array (
                'id' => 1480,
                'movie_id' => 485,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            480 => 
            array (
                'id' => 1481,
                'movie_id' => 485,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            481 => 
            array (
                'id' => 1482,
                'movie_id' => 486,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            482 => 
            array (
                'id' => 1483,
                'movie_id' => 486,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            483 => 
            array (
                'id' => 1484,
                'movie_id' => 487,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            484 => 
            array (
                'id' => 1485,
                'movie_id' => 487,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            485 => 
            array (
                'id' => 1486,
                'movie_id' => 487,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            486 => 
            array (
                'id' => 1487,
                'movie_id' => 487,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            487 => 
            array (
                'id' => 1488,
                'movie_id' => 488,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            488 => 
            array (
                'id' => 1489,
                'movie_id' => 488,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            489 => 
            array (
                'id' => 1490,
                'movie_id' => 489,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            490 => 
            array (
                'id' => 1491,
                'movie_id' => 489,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            491 => 
            array (
                'id' => 1492,
                'movie_id' => 490,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            492 => 
            array (
                'id' => 1493,
                'movie_id' => 490,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            493 => 
            array (
                'id' => 1494,
                'movie_id' => 491,
                'genre_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            494 => 
            array (
                'id' => 1495,
                'movie_id' => 491,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            495 => 
            array (
                'id' => 1496,
                'movie_id' => 491,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            496 => 
            array (
                'id' => 1497,
                'movie_id' => 492,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            497 => 
            array (
                'id' => 1498,
                'movie_id' => 492,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            498 => 
            array (
                'id' => 1499,
                'movie_id' => 492,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            499 => 
            array (
                'id' => 1500,
                'movie_id' => 493,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'movie_id' => 493,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 1502,
                'movie_id' => 493,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 1503,
                'movie_id' => 494,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 1504,
                'movie_id' => 494,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 1505,
                'movie_id' => 494,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 1506,
                'movie_id' => 495,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 1507,
                'movie_id' => 495,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 1508,
                'movie_id' => 495,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 1509,
                'movie_id' => 495,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 1510,
                'movie_id' => 496,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 1511,
                'movie_id' => 497,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 1512,
                'movie_id' => 497,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 1513,
                'movie_id' => 497,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 1514,
                'movie_id' => 498,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 1515,
                'movie_id' => 498,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 1516,
                'movie_id' => 498,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 1517,
                'movie_id' => 499,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 1518,
                'movie_id' => 499,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 1519,
                'movie_id' => 499,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 1520,
                'movie_id' => 499,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 1521,
                'movie_id' => 500,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 1522,
                'movie_id' => 501,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 1523,
                'movie_id' => 501,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 1524,
                'movie_id' => 501,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 1525,
                'movie_id' => 502,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 1526,
                'movie_id' => 502,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 1527,
                'movie_id' => 502,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 1528,
                'movie_id' => 502,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 1529,
                'movie_id' => 503,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 1530,
                'movie_id' => 504,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 1531,
                'movie_id' => 504,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 1532,
                'movie_id' => 504,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 1533,
                'movie_id' => 504,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 1534,
                'movie_id' => 504,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 1535,
                'movie_id' => 505,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 1536,
                'movie_id' => 505,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 1537,
                'movie_id' => 505,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 1538,
                'movie_id' => 506,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 1539,
                'movie_id' => 506,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 1540,
                'movie_id' => 506,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 1541,
                'movie_id' => 507,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 1542,
                'movie_id' => 507,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 1543,
                'movie_id' => 507,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 1544,
                'movie_id' => 508,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 1545,
                'movie_id' => 508,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 1546,
                'movie_id' => 508,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 1547,
                'movie_id' => 509,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 1548,
                'movie_id' => 509,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 1549,
                'movie_id' => 509,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 1550,
                'movie_id' => 510,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 1551,
                'movie_id' => 510,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 1552,
                'movie_id' => 510,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 1553,
                'movie_id' => 510,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 1554,
                'movie_id' => 510,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 1555,
                'movie_id' => 511,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 1556,
                'movie_id' => 511,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 1557,
                'movie_id' => 511,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 1558,
                'movie_id' => 512,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 1559,
                'movie_id' => 512,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 1560,
                'movie_id' => 512,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 1561,
                'movie_id' => 512,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 1562,
                'movie_id' => 513,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 1563,
                'movie_id' => 513,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 1564,
                'movie_id' => 513,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 1565,
                'movie_id' => 514,
                'genre_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 1566,
                'movie_id' => 514,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 1567,
                'movie_id' => 515,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 1568,
                'movie_id' => 515,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 1569,
                'movie_id' => 515,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 1570,
                'movie_id' => 515,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 1571,
                'movie_id' => 515,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 1572,
                'movie_id' => 516,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 1573,
                'movie_id' => 516,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 1574,
                'movie_id' => 516,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 1575,
                'movie_id' => 516,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 1576,
                'movie_id' => 517,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 1577,
                'movie_id' => 517,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 1578,
                'movie_id' => 517,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 1579,
                'movie_id' => 517,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 1580,
                'movie_id' => 518,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 1581,
                'movie_id' => 518,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 1582,
                'movie_id' => 519,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 1583,
                'movie_id' => 519,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 1584,
                'movie_id' => 519,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 1585,
                'movie_id' => 520,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 1586,
                'movie_id' => 520,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 1587,
                'movie_id' => 520,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 1588,
                'movie_id' => 521,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 1589,
                'movie_id' => 521,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 1590,
                'movie_id' => 521,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 1591,
                'movie_id' => 257,
                'genre_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 1592,
                'movie_id' => 49,
                'genre_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 1593,
                'movie_id' => 9,
                'genre_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 1594,
                'movie_id' => 356,
                'genre_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 1595,
                'movie_id' => 357,
                'genre_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 1596,
                'movie_id' => 522,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 1597,
                'movie_id' => 522,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 1598,
                'movie_id' => 522,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 1599,
                'movie_id' => 523,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 1600,
                'movie_id' => 523,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 1601,
                'movie_id' => 523,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 1602,
                'movie_id' => 523,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 1603,
                'movie_id' => 523,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 1604,
                'movie_id' => 524,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 1605,
                'movie_id' => 524,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 1606,
                'movie_id' => 524,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 1607,
                'movie_id' => 524,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 1608,
                'movie_id' => 525,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 1609,
                'movie_id' => 525,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 1610,
                'movie_id' => 526,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 1611,
                'movie_id' => 526,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 1612,
                'movie_id' => 526,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 1613,
                'movie_id' => 526,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 1614,
                'movie_id' => 526,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 1615,
                'movie_id' => 526,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 1616,
                'movie_id' => 526,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 1617,
                'movie_id' => 527,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 1618,
                'movie_id' => 527,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 1619,
                'movie_id' => 527,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 1620,
                'movie_id' => 527,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 1621,
                'movie_id' => 527,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 1622,
                'movie_id' => 527,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 1623,
                'movie_id' => 528,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 1624,
                'movie_id' => 528,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 1625,
                'movie_id' => 528,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 1626,
                'movie_id' => 528,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 1627,
                'movie_id' => 528,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 1628,
                'movie_id' => 528,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 1629,
                'movie_id' => 529,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 1630,
                'movie_id' => 529,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 1631,
                'movie_id' => 530,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 1632,
                'movie_id' => 530,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 1633,
                'movie_id' => 530,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 1634,
                'movie_id' => 530,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 1635,
                'movie_id' => 530,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 1636,
                'movie_id' => 531,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 1637,
                'movie_id' => 531,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 1638,
                'movie_id' => 531,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 1639,
                'movie_id' => 531,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 1640,
                'movie_id' => 531,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 1641,
                'movie_id' => 532,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 1642,
                'movie_id' => 532,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 1643,
                'movie_id' => 532,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 1644,
                'movie_id' => 532,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 1645,
                'movie_id' => 532,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 1646,
                'movie_id' => 532,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 1647,
                'movie_id' => 533,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 1648,
                'movie_id' => 533,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 1649,
                'movie_id' => 533,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 1650,
                'movie_id' => 533,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 1651,
                'movie_id' => 533,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 1652,
                'movie_id' => 534,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 1653,
                'movie_id' => 534,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 1654,
                'movie_id' => 534,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 1655,
                'movie_id' => 534,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 1656,
                'movie_id' => 535,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 1657,
                'movie_id' => 535,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 1658,
                'movie_id' => 535,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 1659,
                'movie_id' => 535,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 1660,
                'movie_id' => 536,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 1661,
                'movie_id' => 536,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 1662,
                'movie_id' => 536,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 1663,
                'movie_id' => 536,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 1664,
                'movie_id' => 536,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 1665,
                'movie_id' => 537,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 1666,
                'movie_id' => 537,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 1667,
                'movie_id' => 537,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 1668,
                'movie_id' => 537,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 1669,
                'movie_id' => 537,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 1670,
                'movie_id' => 538,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 1671,
                'movie_id' => 538,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 1672,
                'movie_id' => 538,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 1673,
                'movie_id' => 538,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 1674,
                'movie_id' => 538,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 1675,
                'movie_id' => 539,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 1676,
                'movie_id' => 539,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 1677,
                'movie_id' => 539,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 1678,
                'movie_id' => 539,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 1679,
                'movie_id' => 540,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 1680,
                'movie_id' => 540,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 1681,
                'movie_id' => 540,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 1682,
                'movie_id' => 540,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 1683,
                'movie_id' => 540,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 1684,
                'movie_id' => 541,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 1685,
                'movie_id' => 541,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 1686,
                'movie_id' => 541,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 1687,
                'movie_id' => 542,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 1688,
                'movie_id' => 542,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 1689,
                'movie_id' => 542,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 1690,
                'movie_id' => 542,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 1691,
                'movie_id' => 542,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 1692,
                'movie_id' => 543,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 1693,
                'movie_id' => 543,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 1694,
                'movie_id' => 543,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 1695,
                'movie_id' => 543,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 1696,
                'movie_id' => 543,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 1697,
                'movie_id' => 544,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 1698,
                'movie_id' => 544,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 1699,
                'movie_id' => 544,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 1700,
                'movie_id' => 544,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 1701,
                'movie_id' => 544,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 1702,
                'movie_id' => 545,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 1703,
                'movie_id' => 545,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 1704,
                'movie_id' => 545,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 1705,
                'movie_id' => 545,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 1706,
                'movie_id' => 546,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 1707,
                'movie_id' => 546,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 1708,
                'movie_id' => 546,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 1709,
                'movie_id' => 546,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 1710,
                'movie_id' => 546,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 1711,
                'movie_id' => 547,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 1712,
                'movie_id' => 547,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 1713,
                'movie_id' => 547,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 1714,
                'movie_id' => 547,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 1715,
                'movie_id' => 547,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 1716,
                'movie_id' => 547,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 1717,
                'movie_id' => 547,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 1718,
                'movie_id' => 548,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 1719,
                'movie_id' => 548,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 1720,
                'movie_id' => 548,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 1721,
                'movie_id' => 548,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 1722,
                'movie_id' => 549,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 1723,
                'movie_id' => 549,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 1724,
                'movie_id' => 549,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 1725,
                'movie_id' => 549,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 1726,
                'movie_id' => 550,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 1727,
                'movie_id' => 550,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 1728,
                'movie_id' => 550,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 1729,
                'movie_id' => 550,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 1730,
                'movie_id' => 550,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 1731,
                'movie_id' => 550,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 1732,
                'movie_id' => 550,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 1733,
                'movie_id' => 550,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 1734,
                'movie_id' => 551,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 1735,
                'movie_id' => 551,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 1736,
                'movie_id' => 551,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 1737,
                'movie_id' => 551,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 1738,
                'movie_id' => 551,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 1739,
                'movie_id' => 552,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 1740,
                'movie_id' => 552,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 1741,
                'movie_id' => 552,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 1742,
                'movie_id' => 553,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 1743,
                'movie_id' => 553,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 1744,
                'movie_id' => 553,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 1745,
                'movie_id' => 553,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 1746,
                'movie_id' => 553,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 1747,
                'movie_id' => 554,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 1748,
                'movie_id' => 554,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 1749,
                'movie_id' => 554,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 1750,
                'movie_id' => 554,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 1751,
                'movie_id' => 555,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 1752,
                'movie_id' => 555,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 1753,
                'movie_id' => 555,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 1754,
                'movie_id' => 555,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 1755,
                'movie_id' => 555,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 1756,
                'movie_id' => 556,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 1757,
                'movie_id' => 556,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 1758,
                'movie_id' => 556,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 1759,
                'movie_id' => 556,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 1760,
                'movie_id' => 556,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 1761,
                'movie_id' => 557,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 1762,
                'movie_id' => 557,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 1763,
                'movie_id' => 557,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 1764,
                'movie_id' => 557,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 1765,
                'movie_id' => 558,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 1766,
                'movie_id' => 558,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 1767,
                'movie_id' => 558,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 1768,
                'movie_id' => 558,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 1769,
                'movie_id' => 559,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 1770,
                'movie_id' => 559,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 1771,
                'movie_id' => 559,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 1772,
                'movie_id' => 559,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 1773,
                'movie_id' => 559,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 1774,
                'movie_id' => 560,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 1775,
                'movie_id' => 560,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 1776,
                'movie_id' => 560,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 1777,
                'movie_id' => 560,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 1778,
                'movie_id' => 561,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 1779,
                'movie_id' => 561,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 1780,
                'movie_id' => 561,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 1781,
                'movie_id' => 561,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 1782,
                'movie_id' => 561,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 1783,
                'movie_id' => 561,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 1784,
                'movie_id' => 561,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 1785,
                'movie_id' => 562,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 1786,
                'movie_id' => 562,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 1787,
                'movie_id' => 562,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 1788,
                'movie_id' => 562,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 1789,
                'movie_id' => 563,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 1790,
                'movie_id' => 563,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 1791,
                'movie_id' => 563,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 1792,
                'movie_id' => 563,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 1793,
                'movie_id' => 563,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 1794,
                'movie_id' => 564,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 1795,
                'movie_id' => 564,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 1796,
                'movie_id' => 564,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 1797,
                'movie_id' => 564,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 1798,
                'movie_id' => 564,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 1799,
                'movie_id' => 565,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 1800,
                'movie_id' => 565,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 1801,
                'movie_id' => 565,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 1802,
                'movie_id' => 565,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 1803,
                'movie_id' => 565,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 1804,
                'movie_id' => 565,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 1805,
                'movie_id' => 566,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 1806,
                'movie_id' => 566,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 1807,
                'movie_id' => 566,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 1808,
                'movie_id' => 566,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 1809,
                'movie_id' => 567,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 1810,
                'movie_id' => 567,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 1811,
                'movie_id' => 566,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 1812,
                'movie_id' => 567,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 1813,
                'movie_id' => 568,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 1814,
                'movie_id' => 568,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 1815,
                'movie_id' => 568,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 1816,
                'movie_id' => 568,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 1817,
                'movie_id' => 569,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 1818,
                'movie_id' => 569,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 1819,
                'movie_id' => 569,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 1820,
                'movie_id' => 569,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 1821,
                'movie_id' => 570,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 1822,
                'movie_id' => 570,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 1823,
                'movie_id' => 570,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 1824,
                'movie_id' => 570,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 1825,
                'movie_id' => 571,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 1826,
                'movie_id' => 571,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 1827,
                'movie_id' => 571,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 1828,
                'movie_id' => 572,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 1829,
                'movie_id' => 572,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 1830,
                'movie_id' => 572,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 1831,
                'movie_id' => 573,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 1832,
                'movie_id' => 573,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 1833,
                'movie_id' => 573,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 1834,
                'movie_id' => 573,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 1835,
                'movie_id' => 573,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 1836,
                'movie_id' => 574,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 1837,
                'movie_id' => 574,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 1838,
                'movie_id' => 574,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 1839,
                'movie_id' => 574,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 1840,
                'movie_id' => 574,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 1841,
                'movie_id' => 575,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 1842,
                'movie_id' => 575,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 1843,
                'movie_id' => 575,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 1844,
                'movie_id' => 575,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 1845,
                'movie_id' => 575,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 1846,
                'movie_id' => 576,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            346 => 
            array (
                'id' => 1847,
                'movie_id' => 576,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            347 => 
            array (
                'id' => 1848,
                'movie_id' => 576,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            348 => 
            array (
                'id' => 1849,
                'movie_id' => 577,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            349 => 
            array (
                'id' => 1850,
                'movie_id' => 577,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            350 => 
            array (
                'id' => 1851,
                'movie_id' => 577,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            351 => 
            array (
                'id' => 1852,
                'movie_id' => 578,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            352 => 
            array (
                'id' => 1853,
                'movie_id' => 578,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            353 => 
            array (
                'id' => 1854,
                'movie_id' => 578,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            354 => 
            array (
                'id' => 1855,
                'movie_id' => 578,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            355 => 
            array (
                'id' => 1856,
                'movie_id' => 579,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            356 => 
            array (
                'id' => 1857,
                'movie_id' => 579,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            357 => 
            array (
                'id' => 1858,
                'movie_id' => 579,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            358 => 
            array (
                'id' => 1859,
                'movie_id' => 579,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            359 => 
            array (
                'id' => 1860,
                'movie_id' => 580,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            360 => 
            array (
                'id' => 1861,
                'movie_id' => 580,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            361 => 
            array (
                'id' => 1862,
                'movie_id' => 580,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            362 => 
            array (
                'id' => 1863,
                'movie_id' => 580,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            363 => 
            array (
                'id' => 1864,
                'movie_id' => 581,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            364 => 
            array (
                'id' => 1865,
                'movie_id' => 581,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            365 => 
            array (
                'id' => 1866,
                'movie_id' => 581,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            366 => 
            array (
                'id' => 1867,
                'movie_id' => 581,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            367 => 
            array (
                'id' => 1868,
                'movie_id' => 581,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            368 => 
            array (
                'id' => 1869,
                'movie_id' => 582,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            369 => 
            array (
                'id' => 1870,
                'movie_id' => 582,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            370 => 
            array (
                'id' => 1871,
                'movie_id' => 582,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            371 => 
            array (
                'id' => 1872,
                'movie_id' => 582,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            372 => 
            array (
                'id' => 1873,
                'movie_id' => 582,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            373 => 
            array (
                'id' => 1874,
                'movie_id' => 582,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            374 => 
            array (
                'id' => 1875,
                'movie_id' => 582,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            375 => 
            array (
                'id' => 1876,
                'movie_id' => 582,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            376 => 
            array (
                'id' => 1877,
                'movie_id' => 583,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            377 => 
            array (
                'id' => 1878,
                'movie_id' => 583,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            378 => 
            array (
                'id' => 1879,
                'movie_id' => 583,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            379 => 
            array (
                'id' => 1880,
                'movie_id' => 583,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            380 => 
            array (
                'id' => 1881,
                'movie_id' => 584,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            381 => 
            array (
                'id' => 1882,
                'movie_id' => 584,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            382 => 
            array (
                'id' => 1883,
                'movie_id' => 584,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            383 => 
            array (
                'id' => 1884,
                'movie_id' => 584,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            384 => 
            array (
                'id' => 1885,
                'movie_id' => 584,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            385 => 
            array (
                'id' => 1886,
                'movie_id' => 584,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            386 => 
            array (
                'id' => 1887,
                'movie_id' => 585,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            387 => 
            array (
                'id' => 1888,
                'movie_id' => 585,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            388 => 
            array (
                'id' => 1889,
                'movie_id' => 585,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            389 => 
            array (
                'id' => 1890,
                'movie_id' => 586,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            390 => 
            array (
                'id' => 1891,
                'movie_id' => 586,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            391 => 
            array (
                'id' => 1892,
                'movie_id' => 586,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            392 => 
            array (
                'id' => 1893,
                'movie_id' => 586,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            393 => 
            array (
                'id' => 1894,
                'movie_id' => 586,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            394 => 
            array (
                'id' => 1895,
                'movie_id' => 587,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            395 => 
            array (
                'id' => 1896,
                'movie_id' => 587,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            396 => 
            array (
                'id' => 1897,
                'movie_id' => 587,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            397 => 
            array (
                'id' => 1898,
                'movie_id' => 587,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            398 => 
            array (
                'id' => 1899,
                'movie_id' => 588,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            399 => 
            array (
                'id' => 1900,
                'movie_id' => 588,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            400 => 
            array (
                'id' => 1901,
                'movie_id' => 588,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            401 => 
            array (
                'id' => 1902,
                'movie_id' => 588,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            402 => 
            array (
                'id' => 1903,
                'movie_id' => 589,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            403 => 
            array (
                'id' => 1904,
                'movie_id' => 589,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            404 => 
            array (
                'id' => 1905,
                'movie_id' => 589,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            405 => 
            array (
                'id' => 1906,
                'movie_id' => 589,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            406 => 
            array (
                'id' => 1907,
                'movie_id' => 589,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            407 => 
            array (
                'id' => 1908,
                'movie_id' => 590,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            408 => 
            array (
                'id' => 1909,
                'movie_id' => 590,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            409 => 
            array (
                'id' => 1910,
                'movie_id' => 590,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            410 => 
            array (
                'id' => 1911,
                'movie_id' => 590,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            411 => 
            array (
                'id' => 1912,
                'movie_id' => 591,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            412 => 
            array (
                'id' => 1913,
                'movie_id' => 591,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            413 => 
            array (
                'id' => 1914,
                'movie_id' => 591,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            414 => 
            array (
                'id' => 1915,
                'movie_id' => 591,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            415 => 
            array (
                'id' => 1916,
                'movie_id' => 591,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            416 => 
            array (
                'id' => 1917,
                'movie_id' => 591,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            417 => 
            array (
                'id' => 1918,
                'movie_id' => 592,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            418 => 
            array (
                'id' => 1919,
                'movie_id' => 592,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            419 => 
            array (
                'id' => 1920,
                'movie_id' => 592,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            420 => 
            array (
                'id' => 1921,
                'movie_id' => 592,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            421 => 
            array (
                'id' => 1922,
                'movie_id' => 592,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            422 => 
            array (
                'id' => 1923,
                'movie_id' => 593,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            423 => 
            array (
                'id' => 1924,
                'movie_id' => 593,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            424 => 
            array (
                'id' => 1925,
                'movie_id' => 593,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            425 => 
            array (
                'id' => 1926,
                'movie_id' => 593,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            426 => 
            array (
                'id' => 1927,
                'movie_id' => 593,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            427 => 
            array (
                'id' => 1928,
                'movie_id' => 594,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            428 => 
            array (
                'id' => 1929,
                'movie_id' => 594,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            429 => 
            array (
                'id' => 1930,
                'movie_id' => 594,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            430 => 
            array (
                'id' => 1931,
                'movie_id' => 594,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            431 => 
            array (
                'id' => 1932,
                'movie_id' => 594,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            432 => 
            array (
                'id' => 1933,
                'movie_id' => 595,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            433 => 
            array (
                'id' => 1934,
                'movie_id' => 595,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            434 => 
            array (
                'id' => 1935,
                'movie_id' => 595,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            435 => 
            array (
                'id' => 1936,
                'movie_id' => 595,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            436 => 
            array (
                'id' => 1937,
                'movie_id' => 595,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            437 => 
            array (
                'id' => 1938,
                'movie_id' => 596,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            438 => 
            array (
                'id' => 1939,
                'movie_id' => 596,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            439 => 
            array (
                'id' => 1940,
                'movie_id' => 596,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            440 => 
            array (
                'id' => 1941,
                'movie_id' => 596,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            441 => 
            array (
                'id' => 1942,
                'movie_id' => 597,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            442 => 
            array (
                'id' => 1943,
                'movie_id' => 597,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            443 => 
            array (
                'id' => 1944,
                'movie_id' => 598,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            444 => 
            array (
                'id' => 1945,
                'movie_id' => 598,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            445 => 
            array (
                'id' => 1946,
                'movie_id' => 598,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            446 => 
            array (
                'id' => 1947,
                'movie_id' => 599,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            447 => 
            array (
                'id' => 1948,
                'movie_id' => 599,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            448 => 
            array (
                'id' => 1949,
                'movie_id' => 599,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            449 => 
            array (
                'id' => 1950,
                'movie_id' => 600,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            450 => 
            array (
                'id' => 1951,
                'movie_id' => 600,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            451 => 
            array (
                'id' => 1952,
                'movie_id' => 600,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            452 => 
            array (
                'id' => 1953,
                'movie_id' => 600,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            453 => 
            array (
                'id' => 1954,
                'movie_id' => 600,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            454 => 
            array (
                'id' => 1955,
                'movie_id' => 601,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            455 => 
            array (
                'id' => 1956,
                'movie_id' => 601,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            456 => 
            array (
                'id' => 1957,
                'movie_id' => 601,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            457 => 
            array (
                'id' => 1958,
                'movie_id' => 601,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            458 => 
            array (
                'id' => 1959,
                'movie_id' => 601,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            459 => 
            array (
                'id' => 1960,
                'movie_id' => 602,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            460 => 
            array (
                'id' => 1961,
                'movie_id' => 602,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            461 => 
            array (
                'id' => 1962,
                'movie_id' => 602,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            462 => 
            array (
                'id' => 1963,
                'movie_id' => 602,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            463 => 
            array (
                'id' => 1964,
                'movie_id' => 602,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            464 => 
            array (
                'id' => 1965,
                'movie_id' => 603,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            465 => 
            array (
                'id' => 1966,
                'movie_id' => 603,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            466 => 
            array (
                'id' => 1967,
                'movie_id' => 603,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            467 => 
            array (
                'id' => 1968,
                'movie_id' => 603,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            468 => 
            array (
                'id' => 1969,
                'movie_id' => 604,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            469 => 
            array (
                'id' => 1970,
                'movie_id' => 604,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            470 => 
            array (
                'id' => 1971,
                'movie_id' => 604,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            471 => 
            array (
                'id' => 1972,
                'movie_id' => 604,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            472 => 
            array (
                'id' => 1973,
                'movie_id' => 605,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            473 => 
            array (
                'id' => 1974,
                'movie_id' => 605,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            474 => 
            array (
                'id' => 1975,
                'movie_id' => 605,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            475 => 
            array (
                'id' => 1976,
                'movie_id' => 605,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            476 => 
            array (
                'id' => 1977,
                'movie_id' => 605,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            477 => 
            array (
                'id' => 1978,
                'movie_id' => 606,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            478 => 
            array (
                'id' => 1979,
                'movie_id' => 606,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            479 => 
            array (
                'id' => 1980,
                'movie_id' => 606,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            480 => 
            array (
                'id' => 1981,
                'movie_id' => 607,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            481 => 
            array (
                'id' => 1982,
                'movie_id' => 607,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            482 => 
            array (
                'id' => 1983,
                'movie_id' => 607,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            483 => 
            array (
                'id' => 1984,
                'movie_id' => 608,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            484 => 
            array (
                'id' => 1985,
                'movie_id' => 608,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            485 => 
            array (
                'id' => 1986,
                'movie_id' => 608,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            486 => 
            array (
                'id' => 1987,
                'movie_id' => 608,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            487 => 
            array (
                'id' => 1988,
                'movie_id' => 609,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            488 => 
            array (
                'id' => 1989,
                'movie_id' => 609,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            489 => 
            array (
                'id' => 1990,
                'movie_id' => 609,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            490 => 
            array (
                'id' => 1991,
                'movie_id' => 609,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            491 => 
            array (
                'id' => 1992,
                'movie_id' => 610,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            492 => 
            array (
                'id' => 1993,
                'movie_id' => 610,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            493 => 
            array (
                'id' => 1994,
                'movie_id' => 610,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            494 => 
            array (
                'id' => 1995,
                'movie_id' => 610,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            495 => 
            array (
                'id' => 1996,
                'movie_id' => 610,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            496 => 
            array (
                'id' => 1997,
                'movie_id' => 611,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            497 => 
            array (
                'id' => 1998,
                'movie_id' => 611,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            498 => 
            array (
                'id' => 1999,
                'movie_id' => 611,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            499 => 
            array (
                'id' => 2000,
                'movie_id' => 611,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        \DB::table('genre_movie')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'movie_id' => 612,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2002,
                'movie_id' => 612,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 2003,
                'movie_id' => 612,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 2004,
                'movie_id' => 612,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 2005,
                'movie_id' => 613,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 2006,
                'movie_id' => 613,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 2007,
                'movie_id' => 613,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 2008,
                'movie_id' => 613,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 2009,
                'movie_id' => 614,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 2010,
                'movie_id' => 614,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 2011,
                'movie_id' => 614,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 2012,
                'movie_id' => 615,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 2013,
                'movie_id' => 615,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 2014,
                'movie_id' => 615,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 2015,
                'movie_id' => 615,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 2017,
                'movie_id' => 616,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 2018,
                'movie_id' => 616,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 2019,
                'movie_id' => 616,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 2020,
                'movie_id' => 617,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 2021,
                'movie_id' => 617,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 2022,
                'movie_id' => 617,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 2023,
                'movie_id' => 618,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 2024,
                'movie_id' => 619,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 2025,
                'movie_id' => 620,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 2026,
                'movie_id' => 621,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 2027,
                'movie_id' => 622,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 2028,
                'movie_id' => 623,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 2029,
                'movie_id' => 624,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 2030,
                'movie_id' => 625,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 2031,
                'movie_id' => 626,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 2032,
                'movie_id' => 626,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 2033,
                'movie_id' => 626,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 2034,
                'movie_id' => 627,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 2035,
                'movie_id' => 627,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 2036,
                'movie_id' => 627,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 2037,
                'movie_id' => 628,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 2038,
                'movie_id' => 628,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 2039,
                'movie_id' => 628,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 2040,
                'movie_id' => 629,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 2041,
                'movie_id' => 629,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 2042,
                'movie_id' => 629,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 2043,
                'movie_id' => 630,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 2044,
                'movie_id' => 630,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 2045,
                'movie_id' => 630,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 2046,
                'movie_id' => 631,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 2047,
                'movie_id' => 631,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 2048,
                'movie_id' => 631,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 2049,
                'movie_id' => 632,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 2050,
                'movie_id' => 632,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 2051,
                'movie_id' => 632,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 2052,
                'movie_id' => 632,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 2053,
                'movie_id' => 632,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 2054,
                'movie_id' => 633,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 2055,
                'movie_id' => 633,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 2056,
                'movie_id' => 633,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 2057,
                'movie_id' => 633,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 2058,
                'movie_id' => 633,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 2059,
                'movie_id' => 634,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 2060,
                'movie_id' => 634,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 2061,
                'movie_id' => 634,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 2062,
                'movie_id' => 634,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 2063,
                'movie_id' => 634,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 2064,
                'movie_id' => 635,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 2065,
                'movie_id' => 635,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 2066,
                'movie_id' => 635,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 2067,
                'movie_id' => 635,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 2068,
                'movie_id' => 635,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 2069,
                'movie_id' => 636,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 2070,
                'movie_id' => 636,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 2071,
                'movie_id' => 636,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 2072,
                'movie_id' => 636,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 2073,
                'movie_id' => 636,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 2074,
                'movie_id' => 637,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 2075,
                'movie_id' => 637,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 2076,
                'movie_id' => 637,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 2077,
                'movie_id' => 637,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 2078,
                'movie_id' => 637,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 2079,
                'movie_id' => 638,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 2080,
                'movie_id' => 638,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 2081,
                'movie_id' => 638,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 2082,
                'movie_id' => 638,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 2083,
                'movie_id' => 638,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 2084,
                'movie_id' => 639,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 2085,
                'movie_id' => 639,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 2086,
                'movie_id' => 639,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 2087,
                'movie_id' => 639,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 2088,
                'movie_id' => 639,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 2089,
                'movie_id' => 640,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 2090,
                'movie_id' => 640,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 2091,
                'movie_id' => 640,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 2092,
                'movie_id' => 640,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 2093,
                'movie_id' => 640,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 2094,
                'movie_id' => 641,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 2095,
                'movie_id' => 641,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 2096,
                'movie_id' => 641,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 2097,
                'movie_id' => 641,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 2098,
                'movie_id' => 641,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 2099,
                'movie_id' => 642,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 2100,
                'movie_id' => 642,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 2101,
                'movie_id' => 642,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 2102,
                'movie_id' => 643,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 2103,
                'movie_id' => 643,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 2104,
                'movie_id' => 643,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 2105,
                'movie_id' => 646,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 2106,
                'movie_id' => 646,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 2107,
                'movie_id' => 646,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 2108,
                'movie_id' => 647,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 2109,
                'movie_id' => 647,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 2110,
                'movie_id' => 647,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 2111,
                'movie_id' => 647,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 2112,
                'movie_id' => 647,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 2113,
                'movie_id' => 648,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 2114,
                'movie_id' => 648,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 2115,
                'movie_id' => 648,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 2116,
                'movie_id' => 649,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 2117,
                'movie_id' => 649,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 2118,
                'movie_id' => 649,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 2119,
                'movie_id' => 650,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 2120,
                'movie_id' => 650,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 2121,
                'movie_id' => 650,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 2122,
                'movie_id' => 651,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 2123,
                'movie_id' => 651,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 2124,
                'movie_id' => 651,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 2125,
                'movie_id' => 652,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 2126,
                'movie_id' => 652,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 2127,
                'movie_id' => 652,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 2128,
                'movie_id' => 653,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 2129,
                'movie_id' => 653,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 2130,
                'movie_id' => 653,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 2131,
                'movie_id' => 654,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 2132,
                'movie_id' => 654,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 2133,
                'movie_id' => 654,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 2134,
                'movie_id' => 655,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 2135,
                'movie_id' => 655,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 2136,
                'movie_id' => 655,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 2137,
                'movie_id' => 656,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 2138,
                'movie_id' => 656,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 2139,
                'movie_id' => 657,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 2140,
                'movie_id' => 657,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 2141,
                'movie_id' => 658,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 2142,
                'movie_id' => 658,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 2143,
                'movie_id' => 659,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 2144,
                'movie_id' => 659,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 2145,
                'movie_id' => 660,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 2146,
                'movie_id' => 660,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 2147,
                'movie_id' => 661,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 2148,
                'movie_id' => 661,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 2149,
                'movie_id' => 662,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 2150,
                'movie_id' => 662,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 2151,
                'movie_id' => 663,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 2152,
                'movie_id' => 663,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 2153,
                'movie_id' => 664,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 2154,
                'movie_id' => 664,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 2155,
                'movie_id' => 665,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 2156,
                'movie_id' => 665,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 2157,
                'movie_id' => 666,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 2158,
                'movie_id' => 667,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 2159,
                'movie_id' => 668,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 2160,
                'movie_id' => 669,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 2161,
                'movie_id' => 669,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 2162,
                'movie_id' => 669,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 2163,
                'movie_id' => 717,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 2164,
                'movie_id' => 718,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 2165,
                'movie_id' => 670,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 2166,
                'movie_id' => 671,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 2167,
                'movie_id' => 671,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 2168,
                'movie_id' => 672,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 2169,
                'movie_id' => 672,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 2170,
                'movie_id' => 673,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 2171,
                'movie_id' => 673,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 2172,
                'movie_id' => 674,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 2173,
                'movie_id' => 674,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 2174,
                'movie_id' => 675,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 2175,
                'movie_id' => 675,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 2176,
                'movie_id' => 676,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 2177,
                'movie_id' => 676,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 2178,
                'movie_id' => 677,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 2179,
                'movie_id' => 677,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 2180,
                'movie_id' => 678,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 2181,
                'movie_id' => 678,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 2182,
                'movie_id' => 679,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 2183,
                'movie_id' => 679,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 2184,
                'movie_id' => 679,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 2185,
                'movie_id' => 679,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 2186,
                'movie_id' => 680,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 2187,
                'movie_id' => 681,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 2188,
                'movie_id' => 681,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 2189,
                'movie_id' => 682,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 2190,
                'movie_id' => 682,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 2191,
                'movie_id' => 682,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 2192,
                'movie_id' => 682,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 2193,
                'movie_id' => 683,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 2194,
                'movie_id' => 683,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 2195,
                'movie_id' => 683,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 2196,
                'movie_id' => 683,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 2197,
                'movie_id' => 684,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 2198,
                'movie_id' => 684,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 2199,
                'movie_id' => 684,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 2200,
                'movie_id' => 684,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 2201,
                'movie_id' => 685,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 2202,
                'movie_id' => 685,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 2203,
                'movie_id' => 685,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 2204,
                'movie_id' => 685,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 2205,
                'movie_id' => 686,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 2206,
                'movie_id' => 686,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 2207,
                'movie_id' => 686,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 2208,
                'movie_id' => 686,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 2209,
                'movie_id' => 687,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 2210,
                'movie_id' => 687,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 2211,
                'movie_id' => 687,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 2212,
                'movie_id' => 687,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 2213,
                'movie_id' => 688,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 2214,
                'movie_id' => 688,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 2215,
                'movie_id' => 688,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 2216,
                'movie_id' => 688,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 2217,
                'movie_id' => 689,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 2218,
                'movie_id' => 689,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 2219,
                'movie_id' => 689,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 2220,
                'movie_id' => 689,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 2221,
                'movie_id' => 690,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 2222,
                'movie_id' => 690,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 2223,
                'movie_id' => 690,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 2224,
                'movie_id' => 691,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 2225,
                'movie_id' => 691,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 2226,
                'movie_id' => 691,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 2227,
                'movie_id' => 692,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 2228,
                'movie_id' => 692,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 2229,
                'movie_id' => 692,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 2230,
                'movie_id' => 693,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 2231,
                'movie_id' => 693,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 2232,
                'movie_id' => 694,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 2233,
                'movie_id' => 694,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 2234,
                'movie_id' => 695,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 2235,
                'movie_id' => 695,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 2236,
                'movie_id' => 696,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 2237,
                'movie_id' => 696,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 2238,
                'movie_id' => 697,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 2239,
                'movie_id' => 697,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 2240,
                'movie_id' => 698,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 2241,
                'movie_id' => 698,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 2242,
                'movie_id' => 699,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 2243,
                'movie_id' => 699,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 2244,
                'movie_id' => 700,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 2245,
                'movie_id' => 700,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 2246,
                'movie_id' => 701,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 2247,
                'movie_id' => 701,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 2248,
                'movie_id' => 702,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 2249,
                'movie_id' => 702,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 2250,
                'movie_id' => 703,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 2251,
                'movie_id' => 703,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 2252,
                'movie_id' => 704,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 2253,
                'movie_id' => 704,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 2254,
                'movie_id' => 705,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 2255,
                'movie_id' => 705,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 2256,
                'movie_id' => 706,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 2257,
                'movie_id' => 706,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 2258,
                'movie_id' => 706,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 2259,
                'movie_id' => 707,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 2260,
                'movie_id' => 707,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 2261,
                'movie_id' => 707,
                'genre_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 2262,
                'movie_id' => 707,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 2263,
                'movie_id' => 708,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 2264,
                'movie_id' => 708,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 2265,
                'movie_id' => 708,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 2266,
                'movie_id' => 709,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 2267,
                'movie_id' => 709,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 2268,
                'movie_id' => 710,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 2269,
                'movie_id' => 710,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 2270,
                'movie_id' => 710,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 2271,
                'movie_id' => 710,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 2272,
                'movie_id' => 710,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 2273,
                'movie_id' => 710,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 2274,
                'movie_id' => 711,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 2275,
                'movie_id' => 711,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 2276,
                'movie_id' => 711,
                'genre_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 2277,
                'movie_id' => 711,
                'genre_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 2278,
                'movie_id' => 712,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 2279,
                'movie_id' => 712,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 2280,
                'movie_id' => 712,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 2281,
                'movie_id' => 712,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 2282,
                'movie_id' => 712,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 2283,
                'movie_id' => 712,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 2284,
                'movie_id' => 713,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 2285,
                'movie_id' => 713,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 2286,
                'movie_id' => 713,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 2287,
                'movie_id' => 714,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 2288,
                'movie_id' => 714,
                'genre_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 2289,
                'movie_id' => 714,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 2290,
                'movie_id' => 714,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 2291,
                'movie_id' => 715,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 2292,
                'movie_id' => 715,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 2293,
                'movie_id' => 715,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 2294,
                'movie_id' => 716,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 2295,
                'movie_id' => 716,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 2296,
                'movie_id' => 716,
                'genre_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 2297,
                'movie_id' => 716,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 2298,
                'movie_id' => 722,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 2299,
                'movie_id' => 719,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 2300,
                'movie_id' => 719,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 2301,
                'movie_id' => 720,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 2302,
                'movie_id' => 720,
                'genre_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 2303,
                'movie_id' => 721,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 2304,
                'movie_id' => 721,
                'genre_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 2305,
                'movie_id' => 723,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 2306,
                'movie_id' => 723,
                'genre_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 2307,
                'movie_id' => 724,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 2308,
                'movie_id' => 725,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 2309,
                'movie_id' => 725,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 2310,
                'movie_id' => 726,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 2311,
                'movie_id' => 726,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 2312,
                'movie_id' => 727,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 2313,
                'movie_id' => 728,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 2314,
                'movie_id' => 729,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 2315,
                'movie_id' => 729,
                'genre_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 2316,
                'movie_id' => 730,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 2317,
                'movie_id' => 730,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 2318,
                'movie_id' => 731,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 2319,
                'movie_id' => 731,
                'genre_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 2320,
                'movie_id' => 731,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 2321,
                'movie_id' => 731,
                'genre_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 2322,
                'movie_id' => 732,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 2323,
                'movie_id' => 732,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 2324,
                'movie_id' => 733,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 2325,
                'movie_id' => 734,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 2326,
                'movie_id' => 735,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 2327,
                'movie_id' => 735,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 2328,
                'movie_id' => 736,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 2329,
                'movie_id' => 737,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 2330,
                'movie_id' => 737,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 2331,
                'movie_id' => 737,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 2332,
                'movie_id' => 737,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 2333,
                'movie_id' => 737,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 2334,
                'movie_id' => 738,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 2335,
                'movie_id' => 738,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 2336,
                'movie_id' => 738,
                'genre_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 2337,
                'movie_id' => 738,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 2338,
                'movie_id' => 738,
                'genre_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 2339,
                'movie_id' => 739,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 2340,
                'movie_id' => 739,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 2341,
                'movie_id' => 739,
                'genre_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 2342,
                'movie_id' => 739,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 2343,
                'movie_id' => 740,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 2344,
                'movie_id' => 740,
                'genre_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 2345,
                'movie_id' => 740,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 2346,
                'movie_id' => 745,
                'genre_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 2347,
                'movie_id' => 745,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
