<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('certificates')->delete();
        
        DB::table('certificates')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'U',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'PG',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 4,
                'title' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 5,
                'title' => '12A',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 6,
                'title' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 7,
                'title' => '18',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
