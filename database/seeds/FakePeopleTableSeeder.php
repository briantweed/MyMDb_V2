<?php

use Illuminate\Database\Seeder;

class FakePeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people')->delete();
        
        \DB::table('people')->insert(array (
            0 => 
            array (
                'id' => 1,
                'forename' => 'Aileen',
                'surname' => 'Mayert',
                'slug' => 'aileen-mayert',
                'birthday' => '1962-08-08',
                'deceased' => NULL,
                'imdb_id' => 'nm309689',
                'image' => 'headshot.jpg',
                'bio' => 'Deserunt eum eveniet sit illo commodi aliquid exercitationem. Est dolore natus vero aut sunt iusto repudiandae. Numquam ut consectetur autem inventore deserunt quia. Rerum veritatis nam aut minima nihil. Aliquam natus minima dolore in hic quis officia.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            1 => 
            array (
                'id' => 2,
                'forename' => 'Sarina',
                'surname' => 'Heidenreich',
                'slug' => 'sarina-heidenreich',
                'birthday' => '1946-03-29',
                'deceased' => NULL,
                'imdb_id' => 'nm662663',
                'image' => 'headshot.jpg',
                'bio' => 'Architecto voluptate iste veritatis voluptatem vel rerum. Est culpa culpa suscipit qui et velit. Molestiae eius illo nisi veniam quis.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            2 => 
            array (
                'id' => 3,
                'forename' => 'Misael',
                'surname' => 'Gleichner',
                'slug' => 'misael-gleichner',
                'birthday' => '1947-06-30',
                'deceased' => NULL,
                'imdb_id' => 'nm913060',
                'image' => 'headshot.jpg',
                'bio' => 'Commodi explicabo quidem eum ut praesentium sed ad est. Excepturi omnis excepturi possimus. Dignissimos modi minima reiciendis in. Facilis nam nulla quia dolorem.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            3 => 
            array (
                'id' => 4,
                'forename' => 'Reva',
                'surname' => 'Kunde',
                'slug' => 'reva-kunde',
                'birthday' => '1945-11-19',
                'deceased' => '2019-02-19',
                'imdb_id' => 'nm243726',
                'image' => 'headshot.jpg',
                'bio' => 'Libero aut magni blanditiis doloremque ipsam quo. Tempore officia odit et et doloribus omnis consectetur. Corporis velit ipsam minus et qui vero et aut. Praesentium deleniti similique dignissimos suscipit deleniti minima dolores.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            4 => 
            array (
                'id' => 5,
                'forename' => 'Christine',
                'surname' => 'O\'Reilly',
                'slug' => 'christine-oreilly',
                'birthday' => '1973-01-03',
                'deceased' => NULL,
                'imdb_id' => 'nm757508',
                'image' => 'headshot.jpg',
                'bio' => 'Est tenetur et est consequatur maiores aliquam officia. Quis laborum rerum maiores maxime placeat. Laborum provident cupiditate deleniti consectetur non non voluptas. In debitis voluptate eaque.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            5 => 
            array (
                'id' => 6,
                'forename' => 'Milford',
                'surname' => 'Simonis',
                'slug' => 'milford-simonis',
                'birthday' => '1971-10-13',
                'deceased' => NULL,
                'imdb_id' => 'nm889677',
                'image' => 'headshot.jpg',
                'bio' => 'Explicabo quam in quia. Ut praesentium ut qui ipsa aut dolor. Ea ut dolorum ut dolor et occaecati culpa consectetur. Et sit autem blanditiis omnis ad ab.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            6 => 
            array (
                'id' => 7,
                'forename' => 'Reginald',
                'surname' => 'Bergnaum',
                'slug' => 'reginald-bergnaum',
                'birthday' => '1957-08-15',
                'deceased' => NULL,
                'imdb_id' => 'nm375870',
                'image' => 'headshot.jpg',
                'bio' => 'In perspiciatis voluptatem consectetur consequatur iure tempore. Labore et in est est officiis facere dicta. Eos quod consequatur reprehenderit minus.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            7 => 
            array (
                'id' => 8,
                'forename' => 'Madie',
                'surname' => 'Wisoky',
                'slug' => 'madie-wisoky',
                'birthday' => '1989-08-04',
                'deceased' => NULL,
                'imdb_id' => 'nm401549',
                'image' => 'headshot.jpg',
                'bio' => 'Expedita quidem aut consectetur nesciunt aspernatur et et. Voluptas similique et cum deleniti soluta aut iusto. Modi dolor voluptates eum consectetur porro quas voluptatem.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            8 => 
            array (
                'id' => 9,
                'forename' => 'Carli',
                'surname' => 'Abshire',
                'slug' => 'carli-abshire',
                'birthday' => '1975-08-01',
                'deceased' => NULL,
                'imdb_id' => 'nm150059',
                'image' => 'headshot.jpg',
                'bio' => 'Molestiae vitae eum quasi sint. Id delectus et harum deserunt voluptas.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
            9 => 
            array (
                'id' => 10,
                'forename' => 'Viola',
                'surname' => 'Lubowitz',
                'slug' => 'viola-lubowitz',
                'birthday' => '1946-02-07',
                'deceased' => NULL,
                'imdb_id' => 'nm244044',
                'image' => 'headshot.jpg',
                'bio' => 'Voluptatem labore aut doloribus ipsa reiciendis ab. Id omnis et assumenda ab quos magnam. Nihil quia dicta vel dolor in nesciunt. Sint dolor possimus nisi qui.',
                'created_at' => '2019-03-24 21:59:39',
                'updated_at' => '2019-03-24 21:59:39',
            ),
        ));
        
        
    }
}