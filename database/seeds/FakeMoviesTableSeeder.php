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
                'name' => 'Autem Dolores Omnis Et',
                'slug' => 'autem-dolores-omnis-et',
                'sort_name' => 'autem dolores omnis et',
                'imdb_id' => 'tt614598',
                'released' => 1984,
                'rating' => 3,
                'running_time' => 106,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 1,
                'studio_id' => 2,
                'duplicate' => 0,
                'bio' => 'A cum ut provident quasi impedit. Id magnam dolor quas cumque nihil hic. Occaecati dolores libero eos autem nihil quia. Quia totam sed soluta nihil.',
                'purchased' => '2015-09-30 09:42:54',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Odio',
                'slug' => 'odio',
                'sort_name' => 'odio',
                'imdb_id' => 'tt155376',
                'released' => 1978,
                'rating' => 10,
                'running_time' => 128,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 3,
                'studio_id' => 3,
                'duplicate' => 0,
                'bio' => 'Ipsa natus nihil aut libero optio voluptatem. Adipisci dolorem maxime illum libero fugit autem. Quae quas aspernatur sed est dolorem molestiae.',
                'purchased' => '2006-11-10 15:16:22',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fugit Ab Tempore',
                'slug' => 'fugit-ab-tempore',
                'sort_name' => 'fugit ab tempore',
                'imdb_id' => 'tt747572',
                'released' => 2017,
                'rating' => 7,
                'running_time' => 104,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 13,
                'duplicate' => 0,
                'bio' => 'Aut dolorem quisquam autem doloribus nemo amet ut. Voluptates tenetur autem ipsam ut aliquam. Non quisquam ut impedit sunt. Architecto est accusantium in suscipit pariatur illo.',
                'purchased' => '2009-02-15 07:41:07',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Recusandae',
                'slug' => 'recusandae',
                'sort_name' => 'recusandae',
                'imdb_id' => 'tt294812',
                'released' => 2017,
                'rating' => 4,
                'running_time' => 122,
                'image' => 'poster.jpg',
                'certificate_id' => 7,
                'format_id' => 3,
                'studio_id' => 28,
                'duplicate' => 0,
                'bio' => 'Expedita enim id eum libero eligendi quo et. Commodi excepturi et deserunt dolore. Quam minima aliquam at inventore ullam a vel.',
                'purchased' => '2006-07-22 00:15:41',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Repellat Nulla Qui Atque',
                'slug' => 'repellat-nulla-qui-atque',
                'sort_name' => 'repellat nulla qui atque',
                'imdb_id' => 'tt970902',
                'released' => 1991,
                'rating' => 3,
                'running_time' => 126,
                'image' => 'poster.jpg',
                'certificate_id' => 5,
                'format_id' => 2,
                'studio_id' => 2,
                'duplicate' => 0,
                'bio' => 'Et omnis sunt enim unde qui modi expedita. Recusandae facilis et quod maxime dignissimos nihil aut. Laborum qui dicta dolorem qui est eius saepe possimus. Omnis non omnis voluptas quae vel est. Sunt ipsum vitae magni eligendi.',
                'purchased' => '2006-11-26 13:32:29',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Doloribus Eligendi Et Quo',
                'slug' => 'doloribus-eligendi-et-quo',
                'sort_name' => 'doloribus eligendi et quo',
                'imdb_id' => 'tt555022',
                'released' => 2013,
                'rating' => 4,
                'running_time' => 107,
                'image' => 'poster.jpg',
                'certificate_id' => 4,
                'format_id' => 1,
                'studio_id' => 31,
                'duplicate' => 0,
                'bio' => 'Enim nisi numquam deleniti ea fuga quia sit. Esse laudantium dolorum placeat nulla esse dicta quo. Iste iste quis earum. In dolorum nulla suscipit adipisci consequatur.',
                'purchased' => '2007-01-23 05:51:55',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Doloremque',
                'slug' => 'doloremque',
                'sort_name' => 'doloremque',
                'imdb_id' => 'tt901419',
                'released' => 2010,
                'rating' => 4,
                'running_time' => 134,
                'image' => 'poster.jpg',
                'certificate_id' => 2,
                'format_id' => 3,
                'studio_id' => 10,
                'duplicate' => 0,
                'bio' => 'Nam sint unde possimus qui natus mollitia dolor. Provident aliquam ut praesentium libero cum non expedita. Consequatur et asperiores aut nesciunt sit doloremque corrupti.',
                'purchased' => '2001-06-18 14:06:42',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Quas Expedita Dicta Quisquam Itaque',
                'slug' => 'quas-expedita-dicta-quisquam-itaque',
                'sort_name' => 'quas expedita dicta quisquam itaque',
                'imdb_id' => 'tt399145',
                'released' => 1985,
                'rating' => 8,
                'running_time' => 90,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 1,
                'studio_id' => 9,
                'duplicate' => 0,
                'bio' => 'Amet reprehenderit dolor voluptatem sit et perspiciatis eaque. Nam similique omnis sit voluptatem voluptatem consectetur odit. Atque rerum dolor itaque pariatur cumque.',
                'purchased' => '2017-01-10 00:30:40',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Voluptas Illum Sint',
                'slug' => 'voluptas-illum-sint',
                'sort_name' => 'voluptas illum sint',
                'imdb_id' => 'tt366619',
                'released' => 1970,
                'rating' => 7,
                'running_time' => 103,
                'image' => 'poster.jpg',
                'certificate_id' => 6,
                'format_id' => 2,
                'studio_id' => 1,
                'duplicate' => 0,
                'bio' => 'Earum et sit mollitia in. Enim quam eveniet ab ipsa. Dignissimos cupiditate vitae nostrum sapiente voluptatem.',
                'purchased' => '2009-08-15 22:45:00',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Quos Laudantium Quia Sed Et',
                'slug' => 'quos-laudantium-quia-sed-et',
                'sort_name' => 'quos laudantium quia sed et',
                'imdb_id' => 'tt446613',
                'released' => 1984,
                'rating' => 9,
                'running_time' => 121,
                'image' => 'poster.jpg',
                'certificate_id' => 4,
                'format_id' => 1,
                'studio_id' => 24,
                'duplicate' => 0,
                'bio' => 'Ea dolorum in pariatur at velit vitae saepe. Corporis eos cum doloribus dolorem natus.',
                'purchased' => '2013-08-05 06:37:10',
                'created_at' => '2019-03-24 21:39:36',
                'updated_at' => '2019-03-24 21:39:36',
            ),
        ));
        
        
    }
}