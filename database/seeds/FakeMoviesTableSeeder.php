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
                'name' => 'est itaque',
                'slug' => 'est-itaque',
                'sort_name' => 'est itaque',
                'imdb_id' => 'tt186346',
                'released' => 1981,
                'rating' => 1,
                'running_time' => 92,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 2,
                'studio_id' => 13,
                'duplicate' => 0,
                'bio' => 'Magni blanditiis sunt suscipit reiciendis ea. Rerum necessitatibus consequuntur et id. Quo beatae architecto veritatis quisquam aut consequatur qui. Veniam nisi optio ut repellendus mollitia temporibus qui. Eaque voluptas dolor reiciendis et enim a aspernatur.',
                'purchased' => '2013-10-03 04:10:02',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ut labore rerum adipisci nisi',
                'slug' => 'ut-labore-rerum-adipisci-nisi',
                'sort_name' => 'ut labore rerum adipisci nisi',
                'imdb_id' => 'tt260062',
                'released' => 2017,
                'rating' => 8,
                'running_time' => 137,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 3,
                'studio_id' => 1,
                'duplicate' => 0,
                'bio' => 'Vel earum consequatur et est voluptatem sit vel exercitationem. Et provident in sit accusamus quos labore aliquid sequi. Quo quibusdam aut pariatur eos facilis id aliquam.',
                'purchased' => '2011-01-09 19:09:22',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'aspernatur esse perspiciatis',
                'slug' => 'aspernatur-esse-perspiciatis',
                'sort_name' => 'aspernatur esse perspiciatis',
                'imdb_id' => 'tt720123',
                'released' => 2018,
                'rating' => 4,
                'running_time' => 107,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 2,
                'studio_id' => 19,
                'duplicate' => 0,
                'bio' => 'Aut ea voluptates dignissimos vitae eaque praesentium molestias perferendis. Nostrum iusto quis qui voluptas nesciunt error quo. Suscipit exercitationem exercitationem deleniti earum est quisquam.',
                'purchased' => '2013-04-11 06:22:43',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cupiditate ipsa',
                'slug' => 'cupiditate-ipsa',
                'sort_name' => 'cupiditate ipsa',
                'imdb_id' => 'tt571349',
                'released' => 2009,
                'rating' => 10,
                'running_time' => 115,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 2,
                'studio_id' => 5,
                'duplicate' => 0,
                'bio' => 'Maiores reprehenderit vel quam reprehenderit. Dolor perspiciatis vitae quis. Odit nihil asperiores vel distinctio praesentium laboriosam porro.',
                'purchased' => '2000-05-13 16:43:56',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'et aut',
                'slug' => 'et-aut',
                'sort_name' => 'et aut',
                'imdb_id' => 'tt672766',
                'released' => 1999,
                'rating' => 3,
                'running_time' => 113,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 3,
                'studio_id' => 8,
                'duplicate' => 0,
                'bio' => 'Quos minima ullam ipsa in placeat. Quos aliquam occaecati pariatur quasi. Quisquam accusamus debitis excepturi dolor.',
                'purchased' => '2000-04-04 05:10:17',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'magni',
                'slug' => 'magni',
                'sort_name' => 'magni',
                'imdb_id' => 'tt918847',
                'released' => 1985,
                'rating' => 6,
                'running_time' => 109,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 4,
                'duplicate' => 0,
                'bio' => 'Ut et dolor quo debitis. Ut doloremque ipsum et consequatur provident sit quia. Similique maiores iste voluptatem veniam sit amet. Rerum dolores deleniti possimus incidunt aut et. Quia nesciunt sit corporis enim.',
                'purchased' => '2018-11-21 23:06:51',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'occaecati aperiam nostrum nihil veritatis',
                'slug' => 'occaecati-aperiam-nostrum-nihil-veritatis',
                'sort_name' => 'occaecati aperiam nostrum nihil veritatis',
                'imdb_id' => 'tt551577',
                'released' => 1996,
                'rating' => 9,
                'running_time' => 106,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 3,
                'studio_id' => 3,
                'duplicate' => 0,
                'bio' => 'Quia quis aperiam rerum maiores odit sit consequatur labore. Enim quidem praesentium libero facere ratione ut blanditiis. Dolor dignissimos modi est laboriosam quidem natus. Enim delectus iusto esse est fugiat eum ut.',
                'purchased' => '2002-09-29 10:46:29',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'pariatur sint architecto non debitis',
                'slug' => 'pariatur-sint-architecto-non-debitis',
                'sort_name' => 'pariatur sint architecto non debitis',
                'imdb_id' => 'tt283719',
                'released' => 1982,
                'rating' => 4,
                'running_time' => 141,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 3,
                'studio_id' => 31,
                'duplicate' => 0,
                'bio' => 'Minus optio velit et ut nemo enim ut. Porro porro dolor mollitia dolorem veniam enim. Id officia tempora tempora.',
                'purchased' => '2006-01-01 20:51:08',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'dignissimos ea ipsum illo quo',
                'slug' => 'dignissimos-ea-ipsum-illo-quo',
                'sort_name' => 'dignissimos ea ipsum illo quo',
                'imdb_id' => 'tt228655',
                'released' => 1981,
                'rating' => 4,
                'running_time' => 138,
                'image' => 'poster.jpg',
                'certificate_id' => 3,
                'format_id' => 2,
                'studio_id' => 23,
                'duplicate' => 0,
                'bio' => 'Sunt sed et id consequatur eligendi quia. Nihil aut at consequatur doloremque maiores eum.',
                'purchased' => '2016-12-07 16:26:26',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'asperiores',
                'slug' => 'asperiores',
                'sort_name' => 'asperiores',
                'imdb_id' => 'tt217005',
                'released' => 1996,
                'rating' => 9,
                'running_time' => 96,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 1,
                'studio_id' => 20,
                'duplicate' => 0,
                'bio' => 'Veniam cupiditate natus dolorum explicabo autem rerum. Labore fugit nihil dolorum sit magni perspiciatis error. Nostrum sit illum dolorum a placeat. Eius deserunt commodi beatae earum sequi quis omnis iste.',
                'purchased' => '2014-05-10 00:19:52',
                'created_at' => '2019-03-24 21:37:25',
                'updated_at' => '2019-03-24 21:37:25',
            ),
        ));
        
        
    }
}