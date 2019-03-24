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
                'name' => 'Ms. Trinity Pfeffer IV',
                'slug' => 'ms-trinity-pfeffer-iv',
                'sort_name' => 'Ms. Trinity Pfeffer IV',
                'imdb_id' => 'tt723555',
                'released' => 1970,
                'rating' => 2,
                'running_time' => 119,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 12,
                'duplicate' => 0,
                'bio' => 'Quae blanditiis alias soluta illo aut ratione saepe. Corrupti quod error architecto magni. Aut magni explicabo deleniti dolores enim eos et asperiores. Possimus officiis saepe a temporibus aut maxime.',
                'purchased' => '2019-01-21 12:25:26',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ms. Bethel Hoeger III',
                'slug' => 'ms-bethel-hoeger-iii',
                'sort_name' => 'Ms. Bethel Hoeger III',
                'imdb_id' => 'tt951994',
                'released' => 1977,
                'rating' => 5,
                'running_time' => 125,
                'image' => 'poster.jpg',
                'certificate_id' => 4,
                'format_id' => 3,
                'studio_id' => 12,
                'duplicate' => 0,
                'bio' => 'Aperiam similique et necessitatibus assumenda incidunt corrupti. Fuga vero doloremque illum quia repellendus voluptates sint. Natus libero sequi est et corrupti qui est quaerat.',
                'purchased' => '2007-07-12 01:03:25',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Loraine Conn II',
                'slug' => 'loraine-conn-ii',
                'sort_name' => 'Loraine Conn II',
                'imdb_id' => 'tt137681',
                'released' => 1998,
                'rating' => 9,
                'running_time' => 123,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 1,
                'studio_id' => 3,
                'duplicate' => 0,
                'bio' => 'Nulla ipsa nulla labore quisquam. Quia ducimus quia corrupti corrupti atque commodi at animi. Quae dolor voluptatem nihil. Magnam repudiandae nam asperiores ad omnis numquam molestiae debitis.',
                'purchased' => '2013-03-01 20:06:31',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Emmy Rutherford',
                'slug' => 'emmy-rutherford',
                'sort_name' => 'Emmy Rutherford',
                'imdb_id' => 'tt955171',
                'released' => 2008,
                'rating' => 6,
                'running_time' => 94,
                'image' => 'poster.jpg',
                'certificate_id' => 3,
                'format_id' => 3,
                'studio_id' => 14,
                'duplicate' => 0,
                'bio' => 'Earum magnam ea nostrum eos consequuntur. Sit reiciendis ex quia repudiandae nobis quia provident. Eveniet alias explicabo id ut accusantium. Ab aliquid aut deleniti error veniam quia.',
                'purchased' => '2003-08-19 13:49:34',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kristofer Donnelly',
                'slug' => 'kristofer-donnelly',
                'sort_name' => 'Kristofer Donnelly',
                'imdb_id' => 'tt400750',
                'released' => 2006,
                'rating' => 1,
                'running_time' => 146,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 26,
                'duplicate' => 0,
                'bio' => 'Velit quidem nostrum non ut amet officia consequatur libero. Voluptates natus praesentium et quasi unde. Sit autem expedita ipsam repellat et.',
                'purchased' => '2004-02-10 00:28:27',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Jesse Howell II',
                'slug' => 'jesse-howell-ii',
                'sort_name' => 'Jesse Howell II',
                'imdb_id' => 'tt887475',
                'released' => 1994,
                'rating' => 3,
                'running_time' => 113,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 1,
                'studio_id' => 11,
                'duplicate' => 0,
                'bio' => 'Architecto dolorem eum voluptas consequatur sunt. Est et at aperiam et dolores autem deserunt.',
                'purchased' => '2009-11-01 23:09:13',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Prof. Douglas Dickinson II',
                'slug' => 'prof-douglas-dickinson-ii',
                'sort_name' => 'Prof. Douglas Dickinson II',
                'imdb_id' => 'tt608438',
                'released' => 1985,
                'rating' => 8,
                'running_time' => 135,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 3,
                'studio_id' => 2,
                'duplicate' => 0,
                'bio' => 'Neque cum necessitatibus ut et aut cumque. Voluptatem dolor natus reprehenderit consectetur cumque sapiente ipsum et. Atque debitis et ullam et quae ullam voluptatem. Qui a voluptatem molestias fugit consequatur necessitatibus.',
                'purchased' => '2004-06-11 04:33:59',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Francesca Kessler',
                'slug' => 'francesca-kessler',
                'sort_name' => 'Francesca Kessler',
                'imdb_id' => 'tt322169',
                'released' => 2001,
                'rating' => 8,
                'running_time' => 133,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 1,
                'studio_id' => 27,
                'duplicate' => 0,
                'bio' => 'Quas vel et dolores suscipit est laudantium minima. Modi accusantium necessitatibus possimus illum modi. Magnam ut eos quia recusandae debitis commodi. Natus architecto quod dicta alias.',
                'purchased' => '2000-11-11 16:00:13',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Joshua Tremblay',
                'slug' => 'joshua-tremblay',
                'sort_name' => 'Joshua Tremblay',
                'imdb_id' => 'tt519232',
                'released' => 1989,
                'rating' => 5,
                'running_time' => 140,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 2,
                'studio_id' => 13,
                'duplicate' => 0,
                'bio' => 'Vero id ut omnis quaerat vitae voluptatem officia. Aut ut maiores alias culpa maiores vel molestias. Nesciunt nemo alias labore quaerat quis.',
                'purchased' => '2004-06-26 13:45:03',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Virginie Lakin',
                'slug' => 'virginie-lakin',
                'sort_name' => 'Virginie Lakin',
                'imdb_id' => 'tt372352',
                'released' => 1996,
                'rating' => 3,
                'running_time' => 101,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 3,
                'studio_id' => 18,
                'duplicate' => 0,
                'bio' => 'Beatae omnis architecto totam perferendis ex iure incidunt. Voluptas expedita ea adipisci enim quia. Consequatur enim harum est sunt ut sed. Dolores fuga aspernatur nemo vero labore.',
                'purchased' => '2008-08-18 02:56:09',
                'created_at' => '2019-03-24 17:55:19',
                'updated_at' => '2019-03-24 17:55:19',
            ),
        ));
        
        
    }
}