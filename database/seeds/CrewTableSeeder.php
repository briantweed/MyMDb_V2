<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('crew')->delete();
        
        DB::table('crew')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'person_id' => 2,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'person_id' => 3,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 1,
                'person_id' => 4,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 3,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 4,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 4,
                'person_id' => 39,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 8,
                'movie_id' => 4,
                'person_id' => 40,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 9,
                'movie_id' => 5,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 10,
                'movie_id' => 6,
                'person_id' => 52,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 11,
                'movie_id' => 6,
                'person_id' => 53,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 12,
                'movie_id' => 12,
                'person_id' => 60,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 13,
                'movie_id' => 12,
                'person_id' => 40,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 14,
                'movie_id' => 2,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 15,
                'movie_id' => 2,
                'person_id' => 66,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 16,
                'movie_id' => 7,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 17,
                'movie_id' => 8,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 19,
                'movie_id' => 9,
                'person_id' => 76,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 20,
                'movie_id' => 9,
                'person_id' => 76,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 22,
                'movie_id' => 9,
                'person_id' => 75,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 23,
                'movie_id' => 9,
                'person_id' => 75,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 24,
                'movie_id' => 9,
                'person_id' => 77,
                'position' => 'Producer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 25,
                'movie_id' => 10,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 26,
                'movie_id' => 10,
                'person_id' => 88,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 27,
                'movie_id' => 10,
                'person_id' => 89,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 28,
                'movie_id' => 22,
                'person_id' => 92,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 29,
                'movie_id' => 18,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 30,
                'movie_id' => 18,
                'person_id' => 89,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 31,
                'movie_id' => 19,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 32,
                'movie_id' => 19,
                'person_id' => 89,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 33,
                'movie_id' => 20,
                'person_id' => 106,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 34,
                'movie_id' => 21,
                'person_id' => 112,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 35,
                'movie_id' => 11,
                'person_id' => 53,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 36,
                'movie_id' => 11,
                'person_id' => 53,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 37,
                'movie_id' => 11,
                'person_id' => 133,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 38,
                'movie_id' => 13,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 39,
                'movie_id' => 13,
                'person_id' => 39,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 40,
                'movie_id' => 13,
                'person_id' => 40,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 41,
                'movie_id' => 23,
                'person_id' => 145,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 42,
                'movie_id' => 23,
                'person_id' => 150,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 43,
                'movie_id' => 24,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 44,
                'movie_id' => 24,
                'person_id' => 39,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 45,
                'movie_id' => 25,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 46,
                'movie_id' => 25,
                'person_id' => 165,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 47,
                'movie_id' => 25,
                'person_id' => 166,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 48,
                'movie_id' => 25,
                'person_id' => 133,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 49,
                'movie_id' => 26,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 50,
                'movie_id' => 26,
                'person_id' => 165,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 51,
                'movie_id' => 26,
                'person_id' => 133,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 52,
                'movie_id' => 26,
                'person_id' => 166,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 53,
                'movie_id' => 27,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 54,
                'movie_id' => 27,
                'person_id' => 165,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 55,
                'movie_id' => 27,
                'person_id' => 166,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 56,
                'movie_id' => 27,
                'person_id' => 133,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 57,
                'movie_id' => 28,
                'person_id' => 175,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 58,
                'movie_id' => 28,
                'person_id' => 176,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 59,
                'movie_id' => 29,
                'person_id' => 184,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 60,
                'movie_id' => 29,
                'person_id' => 185,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 61,
                'movie_id' => 29,
                'person_id' => 186,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 62,
                'movie_id' => 30,
                'person_id' => 187,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 63,
                'movie_id' => 30,
                'person_id' => 184,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 64,
                'movie_id' => 31,
                'person_id' => 187,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 65,
                'movie_id' => 31,
                'person_id' => 184,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 66,
                'movie_id' => 30,
                'person_id' => 186,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 67,
                'movie_id' => 31,
                'person_id' => 186,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 68,
                'movie_id' => 32,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 70,
                'movie_id' => 32,
                'person_id' => 204,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 71,
                'movie_id' => 33,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 72,
                'movie_id' => 33,
                'person_id' => 212,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 73,
                'movie_id' => 33,
                'person_id' => 213,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 74,
                'movie_id' => 33,
                'person_id' => 204,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 75,
                'movie_id' => 32,
                'person_id' => 216,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 76,
                'movie_id' => 32,
                'person_id' => 213,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 77,
                'movie_id' => 33,
                'person_id' => 216,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 78,
                'movie_id' => 34,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 79,
                'movie_id' => 34,
                'person_id' => 212,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 80,
                'movie_id' => 34,
                'person_id' => 213,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 81,
                'movie_id' => 34,
                'person_id' => 204,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 82,
                'movie_id' => 35,
                'person_id' => 225,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 83,
                'movie_id' => 36,
                'person_id' => 232,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 84,
                'movie_id' => 37,
                'person_id' => 244,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 85,
                'movie_id' => 37,
                'person_id' => 244,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 86,
                'movie_id' => 37,
                'person_id' => 245,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 87,
                'movie_id' => 38,
                'person_id' => 53,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 88,
                'movie_id' => 38,
                'person_id' => 252,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 89,
                'movie_id' => 38,
                'person_id' => 252,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 90,
                'movie_id' => 39,
                'person_id' => 259,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 91,
                'movie_id' => 39,
                'person_id' => 259,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 92,
                'movie_id' => 39,
                'person_id' => 260,
                'position' => 'Composer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 93,
                'movie_id' => 40,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 94,
                'movie_id' => 40,
                'person_id' => 270,
                'position' => 'Writer',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 95,
                'movie_id' => 42,
                'person_id' => 287,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 96,
                'movie_id' => 14,
                'person_id' => 1562,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 97,
                'movie_id' => 15,
                'person_id' => 1563,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 98,
                'movie_id' => 16,
                'person_id' => 1564,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 99,
                'movie_id' => 17,
                'person_id' => 1565,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 100,
                'movie_id' => 41,
                'person_id' => 1566,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 101,
                'movie_id' => 43,
                'person_id' => 311,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 102,
                'movie_id' => 44,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 103,
                'movie_id' => 45,
                'person_id' => 1568,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 104,
                'movie_id' => 46,
                'person_id' => 1569,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 105,
                'movie_id' => 47,
                'person_id' => 1570,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 106,
                'movie_id' => 48,
                'person_id' => 1571,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 107,
                'movie_id' => 49,
                'person_id' => 1572,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 108,
                'movie_id' => 50,
                'person_id' => 1573,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 109,
                'movie_id' => 51,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 110,
                'movie_id' => 52,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 111,
                'movie_id' => 53,
                'person_id' => 1575,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 112,
                'movie_id' => 54,
                'person_id' => 1564,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 113,
                'movie_id' => 55,
                'person_id' => 1576,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 114,
                'movie_id' => 56,
                'person_id' => 1577,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 115,
                'movie_id' => 57,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 116,
                'movie_id' => 58,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 117,
                'movie_id' => 59,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 118,
                'movie_id' => 60,
                'person_id' => 1580,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 119,
                'movie_id' => 61,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 120,
                'movie_id' => 62,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 121,
                'movie_id' => 63,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 122,
                'movie_id' => 64,
                'person_id' => 1581,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 123,
                'movie_id' => 65,
                'person_id' => 1582,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 124,
                'movie_id' => 66,
                'person_id' => 1583,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 125,
                'movie_id' => 67,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 126,
                'movie_id' => 68,
                'person_id' => 1585,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 127,
                'movie_id' => 69,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 128,
                'movie_id' => 70,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 129,
                'movie_id' => 71,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 130,
                'movie_id' => 72,
                'person_id' => 1587,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 131,
                'movie_id' => 73,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 132,
                'movie_id' => 74,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 133,
                'movie_id' => 76,
                'person_id' => 445,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 134,
                'movie_id' => 77,
                'person_id' => 1376,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 135,
                'movie_id' => 78,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 136,
                'movie_id' => 79,
                'person_id' => 1589,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 137,
                'movie_id' => 80,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 138,
                'movie_id' => 81,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 139,
                'movie_id' => 82,
                'person_id' => 483,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 140,
                'movie_id' => 83,
                'person_id' => 1590,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 141,
                'movie_id' => 84,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 142,
                'movie_id' => 85,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 143,
                'movie_id' => 86,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 144,
                'movie_id' => 87,
                'person_id' => 1592,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 145,
                'movie_id' => 89,
                'person_id' => 1593,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 146,
                'movie_id' => 90,
                'person_id' => 1594,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 147,
                'movie_id' => 91,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 148,
                'movie_id' => 92,
                'person_id' => 1596,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 149,
                'movie_id' => 93,
                'person_id' => 1597,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 150,
                'movie_id' => 94,
                'person_id' => 528,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 151,
                'movie_id' => 95,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 152,
                'movie_id' => 96,
                'person_id' => 53,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 153,
                'movie_id' => 97,
                'person_id' => 1598,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 154,
                'movie_id' => 98,
                'person_id' => 1599,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 155,
                'movie_id' => 99,
                'person_id' => 1600,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 156,
                'movie_id' => 100,
                'person_id' => 1601,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 157,
                'movie_id' => 101,
                'person_id' => 1601,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 158,
                'movie_id' => 102,
                'person_id' => 1602,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 159,
                'movie_id' => 103,
                'person_id' => 1603,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 160,
                'movie_id' => 104,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 161,
                'movie_id' => 105,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 162,
                'movie_id' => 106,
                'person_id' => 88,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 163,
                'movie_id' => 107,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 164,
                'movie_id' => 108,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 165,
                'movie_id' => 109,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 166,
                'movie_id' => 110,
                'person_id' => 1604,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 168,
                'movie_id' => 112,
                'person_id' => 145,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 169,
                'movie_id' => 113,
                'person_id' => 1606,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 170,
                'movie_id' => 114,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 171,
                'movie_id' => 115,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 172,
                'movie_id' => 116,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 173,
                'movie_id' => 117,
                'person_id' => 1608,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 174,
                'movie_id' => 118,
                'person_id' => 1609,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 175,
                'movie_id' => 119,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 176,
                'movie_id' => 120,
                'person_id' => 1611,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 177,
                'movie_id' => 121,
                'person_id' => 1612,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 178,
                'movie_id' => 122,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 179,
                'movie_id' => 123,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 180,
                'movie_id' => 124,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 181,
                'movie_id' => 125,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 182,
                'movie_id' => 126,
                'person_id' => 1614,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 183,
                'movie_id' => 127,
                'person_id' => 1615,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 184,
                'movie_id' => 128,
                'person_id' => 1616,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 185,
                'movie_id' => 129,
                'person_id' => 1617,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 186,
                'movie_id' => 130,
                'person_id' => 1618,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 187,
                'movie_id' => 131,
                'person_id' => 1619,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 188,
                'movie_id' => 132,
                'person_id' => 1620,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 189,
                'movie_id' => 133,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 190,
                'movie_id' => 134,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 191,
                'movie_id' => 135,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 192,
                'movie_id' => 136,
                'person_id' => 1622,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 193,
                'movie_id' => 137,
                'person_id' => 1623,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 194,
                'movie_id' => 138,
                'person_id' => 1624,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 195,
                'movie_id' => 139,
                'person_id' => 1625,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 => 
            array (
                'id' => 196,
                'movie_id' => 140,
                'person_id' => 776,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 => 
            array (
                'id' => 197,
                'movie_id' => 141,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 => 
            array (
                'id' => 198,
                'movie_id' => 142,
                'person_id' => 1627,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 => 
            array (
                'id' => 199,
                'movie_id' => 143,
                'person_id' => 1628,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 => 
            array (
                'id' => 200,
                'movie_id' => 144,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 => 
            array (
                'id' => 201,
                'movie_id' => 145,
                'person_id' => 1630,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 => 
            array (
                'id' => 202,
                'movie_id' => 146,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 => 
            array (
                'id' => 203,
                'movie_id' => 147,
                'person_id' => 776,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 => 
            array (
                'id' => 204,
                'movie_id' => 148,
                'person_id' => 1632,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 => 
            array (
                'id' => 205,
                'movie_id' => 149,
                'person_id' => 1633,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 => 
            array (
                'id' => 206,
                'movie_id' => 150,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 => 
            array (
                'id' => 207,
                'movie_id' => 151,
                'person_id' => 1621,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 => 
            array (
                'id' => 208,
                'movie_id' => 152,
                'person_id' => 1634,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 => 
            array (
                'id' => 209,
                'movie_id' => 153,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 => 
            array (
                'id' => 210,
                'movie_id' => 154,
                'person_id' => 1624,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 => 
            array (
                'id' => 211,
                'movie_id' => 155,
                'person_id' => 1635,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 => 
            array (
                'id' => 212,
                'movie_id' => 156,
                'person_id' => 1636,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 => 
            array (
                'id' => 213,
                'movie_id' => 157,
                'person_id' => 1630,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 => 
            array (
                'id' => 214,
                'movie_id' => 158,
                'person_id' => 1637,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 => 
            array (
                'id' => 215,
                'movie_id' => 159,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 => 
            array (
                'id' => 216,
                'movie_id' => 160,
                'person_id' => 1639,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 => 
            array (
                'id' => 217,
                'movie_id' => 161,
                'person_id' => 1640,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 => 
            array (
                'id' => 218,
                'movie_id' => 162,
                'person_id' => 1640,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 => 
            array (
                'id' => 219,
                'movie_id' => 163,
                'person_id' => 1641,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 => 
            array (
                'id' => 220,
                'movie_id' => 164,
                'person_id' => 1642,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 => 
            array (
                'id' => 221,
                'movie_id' => 165,
                'person_id' => 1643,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 => 
            array (
                'id' => 222,
                'movie_id' => 171,
                'person_id' => 1644,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 => 
            array (
                'id' => 223,
                'movie_id' => 172,
                'person_id' => 1629,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 => 
            array (
                'id' => 224,
                'movie_id' => 173,
                'person_id' => 1645,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 => 
            array (
                'id' => 225,
                'movie_id' => 174,
                'person_id' => 1646,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 => 
            array (
                'id' => 226,
                'movie_id' => 175,
                'person_id' => 1647,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 => 
            array (
                'id' => 227,
                'movie_id' => 176,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 => 
            array (
                'id' => 228,
                'movie_id' => 177,
                'person_id' => 1648,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 => 
            array (
                'id' => 229,
                'movie_id' => 178,
                'person_id' => 1590,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 => 
            array (
                'id' => 230,
                'movie_id' => 179,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 => 
            array (
                'id' => 231,
                'movie_id' => 180,
                'person_id' => 1650,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 => 
            array (
                'id' => 232,
                'movie_id' => 181,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 => 
            array (
                'id' => 233,
                'movie_id' => 182,
                'person_id' => 1652,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 => 
            array (
                'id' => 234,
                'movie_id' => 183,
                'person_id' => 1653,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 => 
            array (
                'id' => 235,
                'movie_id' => 184,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 => 
            array (
                'id' => 236,
                'movie_id' => 185,
                'person_id' => 813,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 => 
            array (
                'id' => 237,
                'movie_id' => 186,
                'person_id' => 1655,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 => 
            array (
                'id' => 238,
                'movie_id' => 187,
                'person_id' => 1656,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 => 
            array (
                'id' => 239,
                'movie_id' => 188,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 => 
            array (
                'id' => 240,
                'movie_id' => 189,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 => 
            array (
                'id' => 241,
                'movie_id' => 190,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 => 
            array (
                'id' => 242,
                'movie_id' => 191,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 => 
            array (
                'id' => 243,
                'movie_id' => 192,
                'person_id' => 1607,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 => 
            array (
                'id' => 244,
                'movie_id' => 193,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 => 
            array (
                'id' => 245,
                'movie_id' => 194,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 => 
            array (
                'id' => 246,
                'movie_id' => 195,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 => 
            array (
                'id' => 247,
                'movie_id' => 196,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 => 
            array (
                'id' => 248,
                'movie_id' => 197,
                'person_id' => 1660,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 => 
            array (
                'id' => 249,
                'movie_id' => 198,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 => 
            array (
                'id' => 250,
                'movie_id' => 199,
                'person_id' => 1661,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 => 
            array (
                'id' => 251,
                'movie_id' => 200,
                'person_id' => 1662,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 => 
            array (
                'id' => 252,
                'movie_id' => 201,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 => 
            array (
                'id' => 253,
                'movie_id' => 202,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 => 
            array (
                'id' => 254,
                'movie_id' => 203,
                'person_id' => 1665,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 => 
            array (
                'id' => 255,
                'movie_id' => 204,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 => 
            array (
                'id' => 256,
                'movie_id' => 205,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 => 
            array (
                'id' => 257,
                'movie_id' => 206,
                'person_id' => 1667,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 => 
            array (
                'id' => 258,
                'movie_id' => 207,
                'person_id' => 1668,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 => 
            array (
                'id' => 259,
                'movie_id' => 208,
                'person_id' => 1669,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 => 
            array (
                'id' => 260,
                'movie_id' => 209,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 => 
            array (
                'id' => 261,
                'movie_id' => 210,
                'person_id' => 1671,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 => 
            array (
                'id' => 262,
                'movie_id' => 211,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 => 
            array (
                'id' => 263,
                'movie_id' => 213,
                'person_id' => 1672,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 => 
            array (
                'id' => 264,
                'movie_id' => 214,
                'person_id' => 1673,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 => 
            array (
                'id' => 265,
                'movie_id' => 215,
                'person_id' => 813,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 => 
            array (
                'id' => 266,
                'movie_id' => 216,
                'person_id' => 1674,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 => 
            array (
                'id' => 267,
                'movie_id' => 217,
                'person_id' => 1675,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 => 
            array (
                'id' => 268,
                'movie_id' => 218,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 => 
            array (
                'id' => 269,
                'movie_id' => 219,
                'person_id' => 1677,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 => 
            array (
                'id' => 270,
                'movie_id' => 220,
                'person_id' => 1562,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 => 
            array (
                'id' => 271,
                'movie_id' => 221,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 => 
            array (
                'id' => 272,
                'movie_id' => 222,
                'person_id' => 1678,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 => 
            array (
                'id' => 273,
                'movie_id' => 223,
                'person_id' => 1679,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 => 
            array (
                'id' => 274,
                'movie_id' => 224,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 => 
            array (
                'id' => 275,
                'movie_id' => 225,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 => 
            array (
                'id' => 276,
                'movie_id' => 226,
                'person_id' => 1680,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 => 
            array (
                'id' => 277,
                'movie_id' => 227,
                'person_id' => 1681,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 => 
            array (
                'id' => 278,
                'movie_id' => 228,
                'person_id' => 1682,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 => 
            array (
                'id' => 279,
                'movie_id' => 229,
                'person_id' => 1683,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 => 
            array (
                'id' => 280,
                'movie_id' => 230,
                'person_id' => 1684,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 => 
            array (
                'id' => 281,
                'movie_id' => 231,
                'person_id' => 1597,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 => 
            array (
                'id' => 282,
                'movie_id' => 232,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 => 
            array (
                'id' => 283,
                'movie_id' => 233,
                'person_id' => 1685,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 => 
            array (
                'id' => 284,
                'movie_id' => 234,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 => 
            array (
                'id' => 285,
                'movie_id' => 235,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 => 
            array (
                'id' => 286,
                'movie_id' => 236,
                'person_id' => 1686,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 => 
            array (
                'id' => 287,
                'movie_id' => 237,
                'person_id' => 1612,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 => 
            array (
                'id' => 288,
                'movie_id' => 238,
                'person_id' => 1687,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 => 
            array (
                'id' => 289,
                'movie_id' => 239,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 => 
            array (
                'id' => 290,
                'movie_id' => 240,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 => 
            array (
                'id' => 291,
                'movie_id' => 241,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 => 
            array (
                'id' => 292,
                'movie_id' => 242,
                'person_id' => 1689,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 => 
            array (
                'id' => 293,
                'movie_id' => 243,
                'person_id' => 1690,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 => 
            array (
                'id' => 294,
                'movie_id' => 244,
                'person_id' => 1567,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 => 
            array (
                'id' => 295,
                'movie_id' => 245,
                'person_id' => 1691,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 => 
            array (
                'id' => 296,
                'movie_id' => 246,
                'person_id' => 1692,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 => 
            array (
                'id' => 297,
                'movie_id' => 247,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 => 
            array (
                'id' => 298,
                'movie_id' => 248,
                'person_id' => 1693,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 => 
            array (
                'id' => 299,
                'movie_id' => 249,
                'person_id' => 1694,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 => 
            array (
                'id' => 300,
                'movie_id' => 250,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 => 
            array (
                'id' => 301,
                'movie_id' => 111,
                'person_id' => 1679,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 => 
            array (
                'id' => 302,
                'movie_id' => 251,
                'person_id' => 1695,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 => 
            array (
                'id' => 303,
                'movie_id' => 252,
                'person_id' => 1696,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 => 
            array (
                'id' => 304,
                'movie_id' => 253,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 => 
            array (
                'id' => 305,
                'movie_id' => 254,
                'person_id' => 1698,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 => 
            array (
                'id' => 306,
                'movie_id' => 255,
                'person_id' => 1580,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 => 
            array (
                'id' => 307,
                'movie_id' => 256,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 => 
            array (
                'id' => 308,
                'movie_id' => 257,
                'person_id' => 1700,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 => 
            array (
                'id' => 309,
                'movie_id' => 258,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 => 
            array (
                'id' => 310,
                'movie_id' => 260,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 => 
            array (
                'id' => 311,
                'movie_id' => 261,
                'person_id' => 1701,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 => 
            array (
                'id' => 312,
                'movie_id' => 262,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 => 
            array (
                'id' => 313,
                'movie_id' => 263,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 => 
            array (
                'id' => 314,
                'movie_id' => 264,
                'person_id' => 1703,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 => 
            array (
                'id' => 315,
                'movie_id' => 265,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 => 
            array (
                'id' => 316,
                'movie_id' => 266,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 => 
            array (
                'id' => 317,
                'movie_id' => 267,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 => 
            array (
                'id' => 318,
                'movie_id' => 268,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 => 
            array (
                'id' => 319,
                'movie_id' => 270,
                'person_id' => 1279,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 => 
            array (
                'id' => 320,
                'movie_id' => 271,
                'person_id' => 1704,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 => 
            array (
                'id' => 321,
                'movie_id' => 272,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 => 
            array (
                'id' => 322,
                'movie_id' => 273,
                'person_id' => 1705,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 => 
            array (
                'id' => 323,
                'movie_id' => 274,
                'person_id' => 1705,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 => 
            array (
                'id' => 324,
                'movie_id' => 275,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 => 
            array (
                'id' => 325,
                'movie_id' => 276,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 => 
            array (
                'id' => 326,
                'movie_id' => 277,
                'person_id' => 1706,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 => 
            array (
                'id' => 327,
                'movie_id' => 278,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 => 
            array (
                'id' => 328,
                'movie_id' => 279,
                'person_id' => 1707,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 => 
            array (
                'id' => 329,
                'movie_id' => 280,
                'person_id' => 1708,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 => 
            array (
                'id' => 330,
                'movie_id' => 281,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 => 
            array (
                'id' => 331,
                'movie_id' => 282,
                'person_id' => 1167,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 => 
            array (
                'id' => 332,
                'movie_id' => 283,
                'person_id' => 1709,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 => 
            array (
                'id' => 333,
                'movie_id' => 284,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 => 
            array (
                'id' => 334,
                'movie_id' => 285,
                'person_id' => 1591,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 => 
            array (
                'id' => 335,
                'movie_id' => 286,
                'person_id' => 1710,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 => 
            array (
                'id' => 336,
                'movie_id' => 287,
                'person_id' => 1576,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 => 
            array (
                'id' => 337,
                'movie_id' => 288,
                'person_id' => 1711,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 => 
            array (
                'id' => 338,
                'movie_id' => 289,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 => 
            array (
                'id' => 339,
                'movie_id' => 290,
                'person_id' => 185,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 => 
            array (
                'id' => 340,
                'movie_id' => 291,
                'person_id' => 1712,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 => 
            array (
                'id' => 341,
                'movie_id' => 292,
                'person_id' => 1713,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 => 
            array (
                'id' => 342,
                'movie_id' => 293,
                'person_id' => 145,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 => 
            array (
                'id' => 343,
                'movie_id' => 294,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 => 
            array (
                'id' => 344,
                'movie_id' => 295,
                'person_id' => 1715,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 => 
            array (
                'id' => 345,
                'movie_id' => 296,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 => 
            array (
                'id' => 346,
                'movie_id' => 297,
                'person_id' => 351,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 => 
            array (
                'id' => 347,
                'movie_id' => 298,
                'person_id' => 1717,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 => 
            array (
                'id' => 348,
                'movie_id' => 299,
                'person_id' => 287,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 => 
            array (
                'id' => 349,
                'movie_id' => 300,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 => 
            array (
                'id' => 350,
                'movie_id' => 301,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 => 
            array (
                'id' => 351,
                'movie_id' => 302,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            346 => 
            array (
                'id' => 352,
                'movie_id' => 303,
                'person_id' => 1718,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            347 => 
            array (
                'id' => 353,
                'movie_id' => 304,
                'person_id' => 1719,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            348 => 
            array (
                'id' => 354,
                'movie_id' => 305,
                'person_id' => 1720,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            349 => 
            array (
                'id' => 355,
                'movie_id' => 306,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            350 => 
            array (
                'id' => 356,
                'movie_id' => 307,
                'person_id' => 1721,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            351 => 
            array (
                'id' => 357,
                'movie_id' => 308,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            352 => 
            array (
                'id' => 358,
                'movie_id' => 309,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            353 => 
            array (
                'id' => 359,
                'movie_id' => 310,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            354 => 
            array (
                'id' => 360,
                'movie_id' => 311,
                'person_id' => 1722,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            355 => 
            array (
                'id' => 361,
                'movie_id' => 312,
                'person_id' => 1723,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            356 => 
            array (
                'id' => 362,
                'movie_id' => 313,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            357 => 
            array (
                'id' => 363,
                'movie_id' => 314,
                'person_id' => 1724,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            358 => 
            array (
                'id' => 364,
                'movie_id' => 315,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            359 => 
            array (
                'id' => 365,
                'movie_id' => 316,
                'person_id' => 1726,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            360 => 
            array (
                'id' => 366,
                'movie_id' => 317,
                'person_id' => 1727,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            361 => 
            array (
                'id' => 367,
                'movie_id' => 318,
                'person_id' => 1728,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            362 => 
            array (
                'id' => 368,
                'movie_id' => 319,
                'person_id' => 1586,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            363 => 
            array (
                'id' => 369,
                'movie_id' => 320,
                'person_id' => 1691,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            364 => 
            array (
                'id' => 370,
                'movie_id' => 321,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            365 => 
            array (
                'id' => 371,
                'movie_id' => 322,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            366 => 
            array (
                'id' => 372,
                'movie_id' => 323,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            367 => 
            array (
                'id' => 373,
                'movie_id' => 324,
                'person_id' => 1729,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            368 => 
            array (
                'id' => 374,
                'movie_id' => 325,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            369 => 
            array (
                'id' => 375,
                'movie_id' => 326,
                'person_id' => 1730,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            370 => 
            array (
                'id' => 376,
                'movie_id' => 327,
                'person_id' => 1731,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            371 => 
            array (
                'id' => 377,
                'movie_id' => 328,
                'person_id' => 1732,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            372 => 
            array (
                'id' => 378,
                'movie_id' => 329,
                'person_id' => 445,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            373 => 
            array (
                'id' => 379,
                'movie_id' => 330,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            374 => 
            array (
                'id' => 380,
                'movie_id' => 331,
                'person_id' => 1733,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            375 => 
            array (
                'id' => 381,
                'movie_id' => 332,
                'person_id' => 1734,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            376 => 
            array (
                'id' => 382,
                'movie_id' => 333,
                'person_id' => 1735,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            377 => 
            array (
                'id' => 383,
                'movie_id' => 334,
                'person_id' => 1595,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            378 => 
            array (
                'id' => 384,
                'movie_id' => 335,
                'person_id' => 1736,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            379 => 
            array (
                'id' => 385,
                'movie_id' => 336,
                'person_id' => 241,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            380 => 
            array (
                'id' => 386,
                'movie_id' => 337,
                'person_id' => 1737,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            381 => 
            array (
                'id' => 387,
                'movie_id' => 338,
                'person_id' => 244,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            382 => 
            array (
                'id' => 388,
                'movie_id' => 339,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            383 => 
            array (
                'id' => 389,
                'movie_id' => 340,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            384 => 
            array (
                'id' => 390,
                'movie_id' => 341,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            385 => 
            array (
                'id' => 391,
                'movie_id' => 342,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            386 => 
            array (
                'id' => 392,
                'movie_id' => 343,
                'person_id' => 1281,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            387 => 
            array (
                'id' => 393,
                'movie_id' => 344,
                'person_id' => 1738,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            388 => 
            array (
                'id' => 394,
                'movie_id' => 345,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            389 => 
            array (
                'id' => 395,
                'movie_id' => 346,
                'person_id' => 1739,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            390 => 
            array (
                'id' => 396,
                'movie_id' => 347,
                'person_id' => 1740,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            391 => 
            array (
                'id' => 397,
                'movie_id' => 348,
                'person_id' => 1741,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            392 => 
            array (
                'id' => 398,
                'movie_id' => 349,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            393 => 
            array (
                'id' => 399,
                'movie_id' => 350,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            394 => 
            array (
                'id' => 400,
                'movie_id' => 351,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            395 => 
            array (
                'id' => 401,
                'movie_id' => 352,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            396 => 
            array (
                'id' => 402,
                'movie_id' => 353,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            397 => 
            array (
                'id' => 403,
                'movie_id' => 354,
                'person_id' => 1657,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            398 => 
            array (
                'id' => 404,
                'movie_id' => 355,
                'person_id' => 1742,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            399 => 
            array (
                'id' => 405,
                'movie_id' => 356,
                'person_id' => 76,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            400 => 
            array (
                'id' => 406,
                'movie_id' => 357,
                'person_id' => 76,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            401 => 
            array (
                'id' => 407,
                'movie_id' => 358,
                'person_id' => 204,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            402 => 
            array (
                'id' => 408,
                'movie_id' => 359,
                'person_id' => 1743,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            403 => 
            array (
                'id' => 409,
                'movie_id' => 360,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            404 => 
            array (
                'id' => 410,
                'movie_id' => 361,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            405 => 
            array (
                'id' => 411,
                'movie_id' => 362,
                'person_id' => 1744,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            406 => 
            array (
                'id' => 412,
                'movie_id' => 363,
                'person_id' => 1744,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            407 => 
            array (
                'id' => 413,
                'movie_id' => 364,
                'person_id' => 1692,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            408 => 
            array (
                'id' => 414,
                'movie_id' => 365,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            409 => 
            array (
                'id' => 415,
                'movie_id' => 366,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            410 => 
            array (
                'id' => 416,
                'movie_id' => 367,
                'person_id' => 1746,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            411 => 
            array (
                'id' => 417,
                'movie_id' => 368,
                'person_id' => 1658,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            412 => 
            array (
                'id' => 418,
                'movie_id' => 369,
                'person_id' => 1686,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            413 => 
            array (
                'id' => 419,
                'movie_id' => 370,
                'person_id' => 1747,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            414 => 
            array (
                'id' => 420,
                'movie_id' => 371,
                'person_id' => 1335,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            415 => 
            array (
                'id' => 421,
                'movie_id' => 372,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            416 => 
            array (
                'id' => 422,
                'movie_id' => 373,
                'person_id' => 1749,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            417 => 
            array (
                'id' => 423,
                'movie_id' => 374,
                'person_id' => 1750,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            418 => 
            array (
                'id' => 424,
                'movie_id' => 375,
                'person_id' => 1694,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            419 => 
            array (
                'id' => 425,
                'movie_id' => 376,
                'person_id' => 1751,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            420 => 
            array (
                'id' => 426,
                'movie_id' => 377,
                'person_id' => 1752,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            421 => 
            array (
                'id' => 427,
                'movie_id' => 378,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            422 => 
            array (
                'id' => 428,
                'movie_id' => 379,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            423 => 
            array (
                'id' => 429,
                'movie_id' => 380,
                'person_id' => 1753,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            424 => 
            array (
                'id' => 430,
                'movie_id' => 381,
                'person_id' => 1754,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            425 => 
            array (
                'id' => 431,
                'movie_id' => 382,
                'person_id' => 1666,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            426 => 
            array (
                'id' => 432,
                'movie_id' => 383,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            427 => 
            array (
                'id' => 433,
                'movie_id' => 384,
                'person_id' => 1755,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            428 => 
            array (
                'id' => 434,
                'movie_id' => 385,
                'person_id' => 1709,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            429 => 
            array (
                'id' => 435,
                'movie_id' => 386,
                'person_id' => 1702,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            430 => 
            array (
                'id' => 436,
                'movie_id' => 387,
                'person_id' => 1756,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            431 => 
            array (
                'id' => 437,
                'movie_id' => 388,
                'person_id' => 1757,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            432 => 
            array (
                'id' => 438,
                'movie_id' => 389,
                'person_id' => 1758,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            433 => 
            array (
                'id' => 439,
                'movie_id' => 390,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            434 => 
            array (
                'id' => 440,
                'movie_id' => 391,
                'person_id' => 1759,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            435 => 
            array (
                'id' => 441,
                'movie_id' => 392,
                'person_id' => 1578,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            436 => 
            array (
                'id' => 442,
                'movie_id' => 393,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            437 => 
            array (
                'id' => 443,
                'movie_id' => 394,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            438 => 
            array (
                'id' => 444,
                'movie_id' => 395,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            439 => 
            array (
                'id' => 445,
                'movie_id' => 396,
                'person_id' => 1761,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            440 => 
            array (
                'id' => 446,
                'movie_id' => 397,
                'person_id' => 1762,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            441 => 
            array (
                'id' => 447,
                'movie_id' => 398,
                'person_id' => 1569,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            442 => 
            array (
                'id' => 448,
                'movie_id' => 399,
                'person_id' => 1585,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            443 => 
            array (
                'id' => 449,
                'movie_id' => 400,
                'person_id' => 1763,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            444 => 
            array (
                'id' => 450,
                'movie_id' => 401,
                'person_id' => 1764,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            445 => 
            array (
                'id' => 451,
                'movie_id' => 402,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            446 => 
            array (
                'id' => 452,
                'movie_id' => 403,
                'person_id' => 1765,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            447 => 
            array (
                'id' => 453,
                'movie_id' => 404,
                'person_id' => 1766,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            448 => 
            array (
                'id' => 454,
                'movie_id' => 405,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            449 => 
            array (
                'id' => 455,
                'movie_id' => 406,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            450 => 
            array (
                'id' => 456,
                'movie_id' => 407,
                'person_id' => 1767,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            451 => 
            array (
                'id' => 457,
                'movie_id' => 408,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            452 => 
            array (
                'id' => 458,
                'movie_id' => 409,
                'person_id' => 1654,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            453 => 
            array (
                'id' => 459,
                'movie_id' => 410,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            454 => 
            array (
                'id' => 460,
                'movie_id' => 411,
                'person_id' => 1168,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            455 => 
            array (
                'id' => 461,
                'movie_id' => 412,
                'person_id' => 1768,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            456 => 
            array (
                'id' => 462,
                'movie_id' => 413,
                'person_id' => 1769,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            457 => 
            array (
                'id' => 463,
                'movie_id' => 414,
                'person_id' => 1724,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            458 => 
            array (
                'id' => 464,
                'movie_id' => 415,
                'person_id' => 1768,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            459 => 
            array (
                'id' => 465,
                'movie_id' => 416,
                'person_id' => 1760,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            460 => 
            array (
                'id' => 466,
                'movie_id' => 417,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            461 => 
            array (
                'id' => 467,
                'movie_id' => 418,
                'person_id' => 1563,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            462 => 
            array (
                'id' => 468,
                'movie_id' => 419,
                'person_id' => 1770,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            463 => 
            array (
                'id' => 469,
                'movie_id' => 420,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            464 => 
            array (
                'id' => 470,
                'movie_id' => 421,
                'person_id' => 1771,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            465 => 
            array (
                'id' => 471,
                'movie_id' => 422,
                'person_id' => 1772,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            466 => 
            array (
                'id' => 472,
                'movie_id' => 423,
                'person_id' => 1773,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            467 => 
            array (
                'id' => 473,
                'movie_id' => 424,
                'person_id' => 1774,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            468 => 
            array (
                'id' => 474,
                'movie_id' => 425,
                'person_id' => 1775,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            469 => 
            array (
                'id' => 475,
                'movie_id' => 426,
                'person_id' => 1776,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            470 => 
            array (
                'id' => 476,
                'movie_id' => 427,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            471 => 
            array (
                'id' => 477,
                'movie_id' => 428,
                'person_id' => 1777,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            472 => 
            array (
                'id' => 478,
                'movie_id' => 429,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            473 => 
            array (
                'id' => 479,
                'movie_id' => 430,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            474 => 
            array (
                'id' => 480,
                'movie_id' => 431,
                'person_id' => 1748,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            475 => 
            array (
                'id' => 481,
                'movie_id' => 432,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            476 => 
            array (
                'id' => 482,
                'movie_id' => 433,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            477 => 
            array (
                'id' => 483,
                'movie_id' => 434,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            478 => 
            array (
                'id' => 484,
                'movie_id' => 435,
                'person_id' => 1778,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            479 => 
            array (
                'id' => 485,
                'movie_id' => 436,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            480 => 
            array (
                'id' => 486,
                'movie_id' => 437,
                'person_id' => 1781,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            481 => 
            array (
                'id' => 487,
                'movie_id' => 438,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            482 => 
            array (
                'id' => 488,
                'movie_id' => 439,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            483 => 
            array (
                'id' => 489,
                'movie_id' => 440,
                'person_id' => 1779,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            484 => 
            array (
                'id' => 490,
                'movie_id' => 441,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            485 => 
            array (
                'id' => 491,
                'movie_id' => 442,
                'person_id' => 1780,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            486 => 
            array (
                'id' => 492,
                'movie_id' => 443,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            487 => 
            array (
                'id' => 493,
                'movie_id' => 444,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            488 => 
            array (
                'id' => 494,
                'movie_id' => 445,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            489 => 
            array (
                'id' => 495,
                'movie_id' => 446,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            490 => 
            array (
                'id' => 496,
                'movie_id' => 447,
                'person_id' => 1782,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            491 => 
            array (
                'id' => 497,
                'movie_id' => 448,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            492 => 
            array (
                'id' => 498,
                'movie_id' => 449,
                'person_id' => 1783,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            493 => 
            array (
                'id' => 499,
                'movie_id' => 450,
                'person_id' => 1746,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            494 => 
            array (
                'id' => 500,
                'movie_id' => 451,
                'person_id' => 1784,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            495 => 
            array (
                'id' => 501,
                'movie_id' => 452,
                'person_id' => 1716,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            496 => 
            array (
                'id' => 502,
                'movie_id' => 453,
                'person_id' => 1610,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            497 => 
            array (
                'id' => 503,
                'movie_id' => 454,
                'person_id' => 1651,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            498 => 
            array (
                'id' => 504,
                'movie_id' => 455,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            499 => 
            array (
                'id' => 505,
                'movie_id' => 456,
                'person_id' => 1785,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        \DB::table('crew')->insert(array (
            0 => 
            array (
                'id' => 506,
                'movie_id' => 457,
                'person_id' => 270,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 507,
                'movie_id' => 458,
                'person_id' => 1786,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 508,
                'movie_id' => 459,
                'person_id' => 1787,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 509,
                'movie_id' => 460,
                'person_id' => 44,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 510,
                'movie_id' => 461,
                'person_id' => 1788,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 511,
                'movie_id' => 462,
                'person_id' => 1789,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 512,
                'movie_id' => 463,
                'person_id' => 1649,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 513,
                'movie_id' => 464,
                'person_id' => 1758,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 514,
                'movie_id' => 465,
                'person_id' => 65,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 515,
                'movie_id' => 466,
                'person_id' => 1790,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 516,
                'movie_id' => 467,
                'person_id' => 1791,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 517,
                'movie_id' => 468,
                'person_id' => 1792,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 518,
                'movie_id' => 469,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 519,
                'movie_id' => 470,
                'person_id' => 1738,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 520,
                'movie_id' => 471,
                'person_id' => 1793,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 521,
                'movie_id' => 472,
                'person_id' => 1794,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 522,
                'movie_id' => 473,
                'person_id' => 1795,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 523,
                'movie_id' => 474,
                'person_id' => 1508,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 524,
                'movie_id' => 475,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 525,
                'movie_id' => 477,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 526,
                'movie_id' => 478,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 527,
                'movie_id' => 479,
                'person_id' => 1699,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 528,
                'movie_id' => 480,
                'person_id' => 1688,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 529,
                'movie_id' => 481,
                'person_id' => 1588,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 530,
                'movie_id' => 482,
                'person_id' => 1770,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 531,
                'movie_id' => 483,
                'person_id' => 1796,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 532,
                'movie_id' => 484,
                'person_id' => 1677,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 533,
                'movie_id' => 485,
                'person_id' => 1714,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 534,
                'movie_id' => 486,
                'person_id' => 1797,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 535,
                'movie_id' => 487,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 536,
                'movie_id' => 488,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 537,
                'movie_id' => 489,
                'person_id' => 1798,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 => 
            array (
                'id' => 538,
                'movie_id' => 490,
                'person_id' => 1574,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 => 
            array (
                'id' => 539,
                'movie_id' => 491,
                'person_id' => 1799,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 => 
            array (
                'id' => 540,
                'movie_id' => 492,
                'person_id' => 70,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 => 
            array (
                'id' => 541,
                'movie_id' => 493,
                'person_id' => 1659,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 => 
            array (
                'id' => 542,
                'movie_id' => 494,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 => 
            array (
                'id' => 543,
                'movie_id' => 495,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 => 
            array (
                'id' => 544,
                'movie_id' => 496,
                'person_id' => 1664,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 => 
            array (
                'id' => 545,
                'movie_id' => 497,
                'person_id' => 1800,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 => 
            array (
                'id' => 546,
                'movie_id' => 498,
                'person_id' => 39,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 => 
            array (
                'id' => 547,
                'movie_id' => 499,
                'person_id' => 1663,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 => 
            array (
                'id' => 548,
                'movie_id' => 500,
                'person_id' => 1801,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 => 
            array (
                'id' => 549,
                'movie_id' => 501,
                'person_id' => 1279,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 => 
            array (
                'id' => 550,
                'movie_id' => 502,
                'person_id' => 1689,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 => 
            array (
                'id' => 551,
                'movie_id' => 503,
                'person_id' => 1227,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 => 
            array (
                'id' => 552,
                'movie_id' => 504,
                'person_id' => 187,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 => 
            array (
                'id' => 553,
                'movie_id' => 505,
                'person_id' => 269,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 => 
            array (
                'id' => 554,
                'movie_id' => 506,
                'person_id' => 1613,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 => 
            array (
                'id' => 555,
                'movie_id' => 507,
                'person_id' => 1670,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 => 
            array (
                'id' => 556,
                'movie_id' => 508,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 => 
            array (
                'id' => 557,
                'movie_id' => 509,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 => 
            array (
                'id' => 558,
                'movie_id' => 510,
                'person_id' => 1802,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 => 
            array (
                'id' => 559,
                'movie_id' => 511,
                'person_id' => 105,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 => 
            array (
                'id' => 560,
                'movie_id' => 512,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 => 
            array (
                'id' => 561,
                'movie_id' => 513,
                'person_id' => 1053,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 => 
            array (
                'id' => 562,
                'movie_id' => 514,
                'person_id' => 1803,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 => 
            array (
                'id' => 563,
                'movie_id' => 515,
                'person_id' => 165,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 => 
            array (
                'id' => 564,
                'movie_id' => 516,
                'person_id' => 1804,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 => 
            array (
                'id' => 565,
                'movie_id' => 517,
                'person_id' => 1805,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 => 
            array (
                'id' => 566,
                'movie_id' => 518,
                'person_id' => 1806,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 => 
            array (
                'id' => 567,
                'movie_id' => 519,
                'person_id' => 1807,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 => 
            array (
                'id' => 568,
                'movie_id' => 520,
                'person_id' => 1792,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 => 
            array (
                'id' => 569,
                'movie_id' => 521,
                'person_id' => 1808,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 => 
            array (
                'id' => 570,
                'movie_id' => 522,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 => 
            array (
                'id' => 571,
                'movie_id' => 523,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 => 
            array (
                'id' => 572,
                'movie_id' => 524,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 => 
            array (
                'id' => 573,
                'movie_id' => 525,
                'person_id' => 1843,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 => 
            array (
                'id' => 574,
                'movie_id' => 526,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 => 
            array (
                'id' => 575,
                'movie_id' => 527,
                'person_id' => 1844,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 => 
            array (
                'id' => 576,
                'movie_id' => 528,
                'person_id' => 1845,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 => 
            array (
                'id' => 577,
                'movie_id' => 529,
                'person_id' => 1623,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 => 
            array (
                'id' => 578,
                'movie_id' => 530,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 => 
            array (
                'id' => 579,
                'movie_id' => 531,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 => 
            array (
                'id' => 580,
                'movie_id' => 532,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 => 
            array (
                'id' => 581,
                'movie_id' => 533,
                'person_id' => 1847,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 => 
            array (
                'id' => 582,
                'movie_id' => 534,
                'person_id' => 1848,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 => 
            array (
                'id' => 583,
                'movie_id' => 535,
                'person_id' => 1849,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 => 
            array (
                'id' => 584,
                'movie_id' => 536,
                'person_id' => 1850,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 => 
            array (
                'id' => 585,
                'movie_id' => 537,
                'person_id' => 1851,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 => 
            array (
                'id' => 586,
                'movie_id' => 538,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 => 
            array (
                'id' => 587,
                'movie_id' => 539,
                'person_id' => 1852,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 => 
            array (
                'id' => 588,
                'movie_id' => 540,
                'person_id' => 1853,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 => 
            array (
                'id' => 589,
                'movie_id' => 541,
                'person_id' => 1854,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 => 
            array (
                'id' => 590,
                'movie_id' => 542,
                'person_id' => 1851,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 => 
            array (
                'id' => 591,
                'movie_id' => 543,
                'person_id' => 1855,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 => 
            array (
                'id' => 592,
                'movie_id' => 544,
                'person_id' => 1856,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 => 
            array (
                'id' => 593,
                'movie_id' => 545,
                'person_id' => 1848,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 => 
            array (
                'id' => 594,
                'movie_id' => 546,
                'person_id' => 1617,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 => 
            array (
                'id' => 595,
                'movie_id' => 547,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 => 
            array (
                'id' => 596,
                'movie_id' => 548,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 => 
            array (
                'id' => 597,
                'movie_id' => 549,
                'person_id' => 1857,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 => 
            array (
                'id' => 598,
                'movie_id' => 550,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 => 
            array (
                'id' => 599,
                'movie_id' => 551,
                'person_id' => 1858,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 => 
            array (
                'id' => 600,
                'movie_id' => 552,
                'person_id' => 1859,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 => 
            array (
                'id' => 601,
                'movie_id' => 553,
                'person_id' => 1627,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 => 
            array (
                'id' => 602,
                'movie_id' => 554,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 => 
            array (
                'id' => 603,
                'movie_id' => 555,
                'person_id' => 1631,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 => 
            array (
                'id' => 604,
                'movie_id' => 556,
                'person_id' => 1843,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 => 
            array (
                'id' => 605,
                'movie_id' => 557,
                'person_id' => 1861,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 => 
            array (
                'id' => 606,
                'movie_id' => 558,
                'person_id' => 1862,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 => 
            array (
                'id' => 607,
                'movie_id' => 559,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 => 
            array (
                'id' => 608,
                'movie_id' => 560,
                'person_id' => 1622,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 => 
            array (
                'id' => 609,
                'movie_id' => 561,
                'person_id' => 1863,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 => 
            array (
                'id' => 610,
                'movie_id' => 562,
                'person_id' => 1864,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 => 
            array (
                'id' => 611,
                'movie_id' => 563,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 => 
            array (
                'id' => 612,
                'movie_id' => 564,
                'person_id' => 1626,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 => 
            array (
                'id' => 613,
                'movie_id' => 565,
                'person_id' => 1846,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 => 
            array (
                'id' => 614,
                'movie_id' => 566,
                'person_id' => 1625,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 => 
            array (
                'id' => 615,
                'movie_id' => 567,
                'person_id' => 1865,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 => 
            array (
                'id' => 616,
                'movie_id' => 568,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 => 
            array (
                'id' => 617,
                'movie_id' => 569,
                'person_id' => 1917,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 => 
            array (
                'id' => 618,
                'movie_id' => 570,
                'person_id' => 1860,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 => 
            array (
                'id' => 619,
                'movie_id' => 571,
                'person_id' => 1918,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 => 
            array (
                'id' => 620,
                'movie_id' => 572,
                'person_id' => 1919,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 => 
            array (
                'id' => 621,
                'movie_id' => 573,
                'person_id' => 1920,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 => 
            array (
                'id' => 622,
                'movie_id' => 574,
                'person_id' => 1741,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 => 
            array (
                'id' => 623,
                'movie_id' => 575,
                'person_id' => 1600,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 => 
            array (
                'id' => 624,
                'movie_id' => 576,
                'person_id' => 1921,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 => 
            array (
                'id' => 625,
                'movie_id' => 577,
                'person_id' => 1922,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 => 
            array (
                'id' => 626,
                'movie_id' => 578,
                'person_id' => 1923,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 => 
            array (
                'id' => 627,
                'movie_id' => 579,
                'person_id' => 1924,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 => 
            array (
                'id' => 628,
                'movie_id' => 580,
                'person_id' => 1925,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 => 
            array (
                'id' => 629,
                'movie_id' => 582,
                'person_id' => 1926,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 => 
            array (
                'id' => 630,
                'movie_id' => 583,
                'person_id' => 1927,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 => 
            array (
                'id' => 631,
                'movie_id' => 584,
                'person_id' => 1928,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 => 
            array (
                'id' => 632,
                'movie_id' => 585,
                'person_id' => 1929,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 => 
            array (
                'id' => 633,
                'movie_id' => 586,
                'person_id' => 1930,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 => 
            array (
                'id' => 634,
                'movie_id' => 587,
                'person_id' => 1931,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 => 
            array (
                'id' => 635,
                'movie_id' => 588,
                'person_id' => 1932,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 => 
            array (
                'id' => 636,
                'movie_id' => 589,
                'person_id' => 1932,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 => 
            array (
                'id' => 637,
                'movie_id' => 590,
                'person_id' => 1933,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 => 
            array (
                'id' => 638,
                'movie_id' => 591,
                'person_id' => 1934,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 => 
            array (
                'id' => 639,
                'movie_id' => 592,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 => 
            array (
                'id' => 640,
                'movie_id' => 593,
                'person_id' => 1745,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 => 
            array (
                'id' => 641,
                'movie_id' => 594,
                'person_id' => 1935,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 => 
            array (
                'id' => 642,
                'movie_id' => 595,
                'person_id' => 1936,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 => 
            array (
                'id' => 643,
                'movie_id' => 596,
                'person_id' => 1937,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 => 
            array (
                'id' => 644,
                'movie_id' => 597,
                'person_id' => 1109,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 => 
            array (
                'id' => 645,
                'movie_id' => 598,
                'person_id' => 1938,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 => 
            array (
                'id' => 646,
                'movie_id' => 599,
                'person_id' => 1939,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 => 
            array (
                'id' => 647,
                'movie_id' => 600,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 => 
            array (
                'id' => 648,
                'movie_id' => 601,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 => 
            array (
                'id' => 649,
                'movie_id' => 602,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 => 
            array (
                'id' => 650,
                'movie_id' => 603,
                'person_id' => 1940,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 => 
            array (
                'id' => 651,
                'movie_id' => 604,
                'person_id' => 1795,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 => 
            array (
                'id' => 652,
                'movie_id' => 605,
                'person_id' => 1941,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 => 
            array (
                'id' => 653,
                'movie_id' => 606,
                'person_id' => 570,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 => 
            array (
                'id' => 654,
                'movie_id' => 607,
                'person_id' => 570,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 => 
            array (
                'id' => 655,
                'movie_id' => 608,
                'person_id' => 1878,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 => 
            array (
                'id' => 656,
                'movie_id' => 609,
                'person_id' => 1941,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 => 
            array (
                'id' => 657,
                'movie_id' => 610,
                'person_id' => 1942,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 => 
            array (
                'id' => 658,
                'movie_id' => 611,
                'person_id' => 1897,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 => 
            array (
                'id' => 659,
                'movie_id' => 612,
                'person_id' => 1897,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 => 
            array (
                'id' => 660,
                'movie_id' => 613,
                'person_id' => 1943,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 => 
            array (
                'id' => 661,
                'movie_id' => 615,
                'person_id' => 1944,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 => 
            array (
                'id' => 662,
                'movie_id' => 616,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 => 
            array (
                'id' => 663,
                'movie_id' => 617,
                'person_id' => 1584,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 => 
            array (
                'id' => 664,
                'movie_id' => 646,
                'person_id' => 1991,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 => 
            array (
                'id' => 665,
                'movie_id' => 670,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 => 
            array (
                'id' => 666,
                'movie_id' => 706,
                'person_id' => 53,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 => 
            array (
                'id' => 667,
                'movie_id' => 707,
                'person_id' => 1676,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 => 
            array (
                'id' => 668,
                'movie_id' => 708,
                'person_id' => 2073,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 => 
            array (
                'id' => 669,
                'movie_id' => 709,
                'person_id' => 1579,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 => 
            array (
                'id' => 670,
                'movie_id' => 710,
                'person_id' => 1638,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 => 
            array (
                'id' => 671,
                'movie_id' => 711,
                'person_id' => 1167,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 => 
            array (
                'id' => 672,
                'movie_id' => 712,
                'person_id' => 1636,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 => 
            array (
                'id' => 673,
                'movie_id' => 713,
                'person_id' => 30,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 => 
            array (
                'id' => 674,
                'movie_id' => 714,
                'person_id' => 2074,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 => 
            array (
                'id' => 675,
                'movie_id' => 715,
                'person_id' => 2074,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 => 
            array (
                'id' => 676,
                'movie_id' => 719,
                'person_id' => 2085,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 => 
            array (
                'id' => 677,
                'movie_id' => 720,
                'person_id' => 2086,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 => 
            array (
                'id' => 678,
                'movie_id' => 721,
                'person_id' => 1697,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 => 
            array (
                'id' => 679,
                'movie_id' => 722,
                'person_id' => 2087,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 => 
            array (
                'id' => 680,
                'movie_id' => 723,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 => 
            array (
                'id' => 681,
                'movie_id' => 724,
                'person_id' => 2089,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 => 
            array (
                'id' => 682,
                'movie_id' => 725,
                'person_id' => 2090,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 => 
            array (
                'id' => 683,
                'movie_id' => 726,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 => 
            array (
                'id' => 684,
                'movie_id' => 727,
                'person_id' => 2091,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 => 
            array (
                'id' => 685,
                'movie_id' => 728,
                'person_id' => 2092,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 => 
            array (
                'id' => 686,
                'movie_id' => 729,
                'person_id' => 2093,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 => 
            array (
                'id' => 687,
                'movie_id' => 730,
                'person_id' => 2090,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 => 
            array (
                'id' => 688,
                'movie_id' => 731,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 => 
            array (
                'id' => 689,
                'movie_id' => 732,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 => 
            array (
                'id' => 690,
                'movie_id' => 733,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 => 
            array (
                'id' => 691,
                'movie_id' => 734,
                'person_id' => 2088,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 => 
            array (
                'id' => 692,
                'movie_id' => 735,
                'person_id' => 2095,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 => 
            array (
                'id' => 693,
                'movie_id' => 736,
                'person_id' => 2094,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 => 
            array (
                'id' => 694,
                'movie_id' => 740,
                'person_id' => 1724,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 => 
            array (
                'id' => 696,
                'movie_id' => 743,
                'person_id' => 1725,
                'position' => 'Director',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
