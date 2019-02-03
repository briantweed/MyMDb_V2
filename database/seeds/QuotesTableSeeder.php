<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quotes')->delete();
        
        \DB::table('quotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 8,
                'text' => 'Tell these guys where the pages are so no one else gets hurt',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 9,
                'text' => 'Sooner or later you&#039;re going to realize that there&#039;s a difference between knowing the page and finding the page.',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 10,
                'text' => 'This is not the page you&#039;re looking for',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 => 
            array (
                'id' => 4,
                'movie_id' => 22,
                'text' => 'What&#039;s wrong? Have some trouble?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 => 
            array (
                'id' => 5,
                'movie_id' => 25,
                'text' => 'Damn! Where is that page?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 => 
            array (
                'id' => 6,
                'movie_id' => 33,
                'text' => 'We are tonight&#039;s entertainment! I only have one question. Where is the page?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 => 
            array (
                'id' => 7,
                'movie_id' => 37,
                'text' => 'Empty. The opposite of full. This page is supposed to be full! Anyone care to explain?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 => 
            array (
                'id' => 8,
                'movie_id' => 55,
                'text' => 'You don&#039;t think people are going to drive down and not see the page?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 => 
            array (
                'id' => 9,
                'movie_id' => 96,
                'text' => 'Boy, it sure would be nice if we had some results, don&#039;t you think?',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 => 
            array (
                'id' => 10,
                'movie_id' => 171,
                'text' => 'What we got here is ... failure to communicate.',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}
