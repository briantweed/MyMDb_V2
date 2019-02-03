<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'word' => 'Aliens',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            1 => 
            array (
                'id' => 2,
                'word' => 'Dragon',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            2 => 
            array (
                'id' => 3,
                'word' => 'Magic',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            3 => 
            array (
                'id' => 4,
                'word' => 'MCU',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            4 => 
            array (
                'id' => 5,
                'word' => 'Bond',
                'created_at' => '2016-02-01 16:49:40',
                'updated_at' => '2016-02-01 16:49:40',
            ),
            5 => 
            array (
                'id' => 6,
                'word' => 'TV',
                'created_at' => '2016-02-20 14:02:00',
                'updated_at' => '2016-02-20 14:02:00',
            ),
            6 => 
            array (
                'id' => 7,
                'word' => 'Laurel',
                'created_at' => '2016-02-21 15:37:30',
                'updated_at' => '2016-02-21 15:37:30',
            ),
            7 => 
            array (
                'id' => 8,
                'word' => 'Hardy',
                'created_at' => '2016-02-21 15:37:36',
                'updated_at' => '2016-02-21 15:37:36',
            ),
        ));
        
        
    }
}
