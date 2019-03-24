<?php

use Illuminate\Database\Seeder;

class FakeMoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movies')->delete();
        
        \DB::table('movies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fugit Illum Nihil Et Quos',
                'slug' => 'fugit-illum-nihil-et-quos',
                'sort_name' => 'fugit illum nihil et quos',
                'imdb_id' => 'tt251134',
                'released' => 2006,
                'rating' => 6,
                'running_time' => 131,
                'image' => 'poster.jpg',
                'certificate_id' => 4,
                'format_id' => 2,
                'studio_id' => 6,
                'duplicate' => 0,
                'bio' => 'Sunt maxime veritatis cupiditate voluptas quia maxime. Aut corporis dignissimos modi. Quis harum iusto praesentium eaque facilis aut. Eos quam enim repellat sequi enim qui et.',
                'purchased' => '2017-11-09 16:48:49',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Voluptas Et Eveniet Alias Laudantium',
                'slug' => 'voluptas-et-eveniet-alias-laudantium',
                'sort_name' => 'voluptas et eveniet alias laudantium',
                'imdb_id' => 'tt185584',
                'released' => 2006,
                'rating' => 2,
                'running_time' => 90,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 3,
                'duplicate' => 0,
                'bio' => 'Optio et error dolor distinctio amet quaerat quaerat asperiores. Consequatur assumenda est et quis. Id nam aliquid incidunt amet itaque corrupti praesentium. Et magnam mollitia dolores vero optio ipsum.',
                'purchased' => '2008-07-20 05:38:49',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Et Aut Voluptatum Sed',
                'slug' => 'et-aut-voluptatum-sed',
                'sort_name' => 'et aut voluptatum sed',
                'imdb_id' => 'tt220034',
                'released' => 2006,
                'rating' => 7,
                'running_time' => 100,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 3,
                'studio_id' => 31,
                'duplicate' => 0,
                'bio' => 'Quis saepe et sunt est esse commodi at id. Officia rerum excepturi architecto ea dolorum velit doloribus ut. Rem sint in ut rerum quibusdam quis quaerat. Facere eligendi animi reiciendis cumque.',
                'purchased' => '2014-01-29 17:26:56',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Veritatis Ea Eos Qui Et',
                'slug' => 'veritatis-ea-eos-qui-et',
                'sort_name' => 'veritatis ea eos qui et',
                'imdb_id' => 'tt783740',
                'released' => 1981,
                'rating' => 9,
                'running_time' => 135,
                'image' => 'poster.jpg',
                'certificate_id' => 3,
                'format_id' => 1,
                'studio_id' => 2,
                'duplicate' => 0,
                'bio' => 'Ut ut distinctio dolorem illum sapiente autem. Quae sed ad aut dignissimos quasi. Odit doloribus velit aliquid fugit ipsa.',
                'purchased' => '2008-05-03 09:50:41',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ducimus Voluptatem Labore',
                'slug' => 'ducimus-voluptatem-labore',
                'sort_name' => 'ducimus voluptatem labore',
                'imdb_id' => 'tt879168',
                'released' => 1988,
                'rating' => 10,
                'running_time' => 103,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 1,
                'studio_id' => 3,
                'duplicate' => 0,
                'bio' => 'Nihil suscipit sit ea placeat soluta delectus fugit. Et dolores repellendus qui ipsam ut maxime. Voluptatem et quis et dolor. Possimus corporis dolorem voluptatum unde assumenda.',
                'purchased' => '2000-12-27 14:32:46',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ut Itaque',
                'slug' => 'ut-itaque',
                'sort_name' => 'ut itaque',
                'imdb_id' => 'tt795930',
                'released' => 1984,
                'rating' => 8,
                'running_time' => 111,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 3,
                'studio_id' => 5,
                'duplicate' => 0,
                'bio' => 'Accusantium sed nihil ut vitae corporis repellendus qui. Quaerat sint assumenda quo consequatur. Quas numquam voluptatibus consequuntur est. Possimus voluptatem omnis et tenetur animi quam. Quia consectetur reprehenderit et eaque a autem.',
                'purchased' => '2006-12-04 10:28:28',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Voluptatem Quibusdam',
                'slug' => 'voluptatem-quibusdam',
                'sort_name' => 'voluptatem quibusdam',
                'imdb_id' => 'tt364953',
                'released' => 2001,
                'rating' => 2,
                'running_time' => 143,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 3,
                'studio_id' => 10,
                'duplicate' => 0,
                'bio' => 'Repellendus mollitia voluptas maxime molestiae et quae. Sint et quis dolorum impedit voluptas doloremque.',
                'purchased' => '2006-03-21 18:24:56',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Eius Eveniet Cum',
                'slug' => 'eius-eveniet-cum',
                'sort_name' => 'eius eveniet cum',
                'imdb_id' => 'tt896249',
                'released' => 2017,
                'rating' => 5,
                'running_time' => 105,
                'image' => 'poster.jpg',
                'certificate_id' => 4,
                'format_id' => 2,
                'studio_id' => 32,
                'duplicate' => 0,
                'bio' => 'Aut alias dicta sint quae voluptas aliquid excepturi saepe. Deserunt aut rerum illo doloribus dolores omnis voluptates. Eos laboriosam dicta recusandae vitae.',
                'purchased' => '2017-10-24 02:59:51',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Voluptas Odio Ut Dolorum Occaecati',
                'slug' => 'voluptas-odio-ut-dolorum-occaecati',
                'sort_name' => 'voluptas odio ut dolorum occaecati',
                'imdb_id' => 'tt756628',
                'released' => 1986,
                'rating' => 9,
                'running_time' => 135,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 2,
                'studio_id' => 29,
                'duplicate' => 0,
                'bio' => 'Commodi et aliquam consequuntur eligendi qui culpa aliquam aliquam. Aliquam natus doloremque explicabo quidem rem. Aut voluptatem error voluptas ipsum pariatur. Ut nihil esse aut provident.',
                'purchased' => '2013-06-22 04:50:12',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Consequatur Ut Ut',
                'slug' => 'consequatur-ut-ut',
                'sort_name' => 'consequatur ut ut',
                'imdb_id' => 'tt948255',
                'released' => 1991,
                'rating' => 5,
                'running_time' => 121,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 3,
                'studio_id' => 27,
                'duplicate' => 0,
                'bio' => 'Quo incidunt et sequi suscipit temporibus consectetur at. Error ipsa similique dolor natus ut. Eum dolore minima temporibus atque.',
                'purchased' => '2018-08-29 15:14:02',
                'created_at' => '2019-03-24 21:58:43',
                'updated_at' => '2019-03-24 21:58:43',
            ),
        ));
        
        
    }
}