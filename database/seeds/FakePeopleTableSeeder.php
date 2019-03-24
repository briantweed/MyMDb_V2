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
                'forename' => 'Danny',
                'surname' => 'Senger',
                'slug' => 'danny-senger',
                'birthday' => '1986-02-18',
                'deceased' => NULL,
                'imdb_id' => 'nm133507',
                'image' => 'headshot.jpg',
                'bio' => 'Qui dolorum sunt aliquid nostrum et. Voluptatem totam eveniet qui modi minima qui ipsam. Qui et neque occaecati et qui expedita.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            1 => 
            array (
                'id' => 2,
                'forename' => 'Rowland',
                'surname' => 'Runte',
                'slug' => 'rowland-runte',
                'birthday' => '1976-07-18',
                'deceased' => NULL,
                'imdb_id' => 'nm861581',
                'image' => 'headshot.jpg',
                'bio' => 'Mollitia iusto incidunt qui nulla adipisci laborum recusandae. Magni praesentium consequuntur et quaerat tenetur rerum. Sunt delectus ea eos voluptas.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            2 => 
            array (
                'id' => 3,
                'forename' => 'Hubert',
                'surname' => 'Wilkinson',
                'slug' => 'hubert-wilkinson',
                'birthday' => '1974-04-18',
                'deceased' => NULL,
                'imdb_id' => 'nm471573',
                'image' => 'headshot.jpg',
                'bio' => 'Aut omnis adipisci quaerat culpa. Earum aliquid ea velit. Dicta aut quo voluptas qui nisi.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            3 => 
            array (
                'id' => 4,
                'forename' => 'Kylie',
                'surname' => 'Crooks',
                'slug' => 'kylie-crooks',
                'birthday' => '1995-04-17',
                'deceased' => '2016-09-30',
                'imdb_id' => 'nm338572',
                'image' => 'headshot.jpg',
                'bio' => 'Accusantium quia repellendus eius iusto placeat eligendi asperiores veniam. Ut expedita est beatae eaque. Aut vel molestias dignissimos. Dolor laboriosam nemo veritatis qui est quam.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            4 => 
            array (
                'id' => 5,
                'forename' => 'Abe',
                'surname' => 'Harber',
                'slug' => 'abe-harber',
                'birthday' => '1946-12-10',
                'deceased' => NULL,
                'imdb_id' => 'nm397453',
                'image' => 'headshot.jpg',
                'bio' => 'Dolorem ipsa ad est cum consequatur eaque laboriosam facere. Omnis dolorem dicta libero voluptatum. Et optio magnam hic beatae voluptas illum.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            5 => 
            array (
                'id' => 6,
                'forename' => 'Braulio',
                'surname' => 'Daniel',
                'slug' => 'braulio-daniel',
                'birthday' => '1948-09-01',
                'deceased' => NULL,
                'imdb_id' => 'nm727319',
                'image' => 'headshot.jpg',
                'bio' => 'Eveniet repudiandae est animi minus recusandae ut optio iusto. Tenetur reiciendis debitis explicabo sed.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            6 => 
            array (
                'id' => 7,
                'forename' => 'Marlen',
                'surname' => 'Emard',
                'slug' => 'marlen-emard',
                'birthday' => '1981-08-18',
                'deceased' => NULL,
                'imdb_id' => 'nm831489',
                'image' => 'headshot.jpg',
                'bio' => 'Sint voluptatem ut possimus sed eos autem odit. Aut enim quidem ut quae qui fugiat. Cupiditate aut voluptatibus commodi aperiam vitae recusandae.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            7 => 
            array (
                'id' => 8,
                'forename' => 'Filomena',
                'surname' => 'Bogisich',
                'slug' => 'filomena-bogisich',
                'birthday' => '1975-06-28',
                'deceased' => NULL,
                'imdb_id' => 'nm971722',
                'image' => 'headshot.jpg',
                'bio' => 'Optio non dicta voluptatem. Non qui nesciunt officiis voluptatem saepe corporis qui. Modi dignissimos sed velit rerum nobis accusamus. Omnis consequatur ut eum sit.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            8 => 
            array (
                'id' => 9,
                'forename' => 'Malcolm',
                'surname' => 'Marks',
                'slug' => 'malcolm-marks',
                'birthday' => '1972-09-28',
                'deceased' => '2017-11-18',
                'imdb_id' => 'nm399329',
                'image' => 'headshot.jpg',
                'bio' => 'Debitis qui nihil sunt soluta tempora saepe facilis doloremque. Illo eaque aliquid ullam voluptatem qui molestiae vel atque. Sit commodi maxime voluptatem et eius voluptatem.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
            9 => 
            array (
                'id' => 10,
                'forename' => 'Tad',
                'surname' => 'Kozey',
                'slug' => 'tad-kozey',
                'birthday' => '1977-12-28',
                'deceased' => NULL,
                'imdb_id' => 'nm934264',
                'image' => 'headshot.jpg',
                'bio' => 'Nihil esse aut ut earum nesciunt et voluptas. Consequatur reprehenderit ipsum cum voluptas ad in illum sit. Molestiae ea vel quia molestiae nesciunt saepe aut.',
                'created_at' => '2019-03-24 17:56:22',
                'updated_at' => '2019-03-24 17:56:22',
            ),
        ));
        
        
    }
}