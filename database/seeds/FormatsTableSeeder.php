<?php

use Illuminate\Database\Seeder;

class FormatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('formats')->delete();
        
        \DB::table('formats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'DVD',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'Blu-Ray',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'Digital',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
