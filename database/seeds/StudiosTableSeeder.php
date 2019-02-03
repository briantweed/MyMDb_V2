<?php

use Illuminate\Database\Seeder;

class StudiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('studios')->delete();
        
        \DB::table('studios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '20th Century Fox',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Canon',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Columbia',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Disney',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Disney Marvel',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Disney Pixar',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dreamworks',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lionsgate',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'MGM',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'New Line Cinema',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Orion',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Paramount',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Sony',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Summit',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'TriStar',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Touchstone',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'United Artist',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Universal',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Warner Brothers',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Manga Entertainment',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Unknown',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Independent',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Fox Searchlight',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Gaumont',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Pathe',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Polygram',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Miramax',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Golden Harvest',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Weinstein Company',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Momentum',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'HBO',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'AMC',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
