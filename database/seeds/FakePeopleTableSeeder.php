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
                'forename' => 'Alexa',
                'surname' => 'Sawayn',
                'slug' => 'alexa-sawayn',
                'birthday' => '1995-04-15',
                'deceased' => NULL,
                'imdb_id' => 'nm760425',
                'image' => 'headshot.jpg',
                'bio' => 'Recusandae est dolorum accusamus rem ipsum voluptatibus ullam. Debitis dolor quisquam quia placeat maxime. Nihil laboriosam vitae nam provident sint dicta est. Necessitatibus aperiam blanditiis dolores aut culpa consequatur.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            1 => 
            array (
                'id' => 2,
                'forename' => 'Macey',
                'surname' => 'Boehm',
                'slug' => 'macey-boehm',
                'birthday' => '1955-04-24',
                'deceased' => NULL,
                'imdb_id' => 'nm453582',
                'image' => 'headshot.jpg',
                'bio' => 'Itaque molestias dolor qui. Adipisci soluta et non ut. Ut iste culpa consequatur quaerat voluptatem rem ut. Facilis quod consectetur quia et.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            2 => 
            array (
                'id' => 3,
                'forename' => 'Savanna',
                'surname' => 'Rodriguez',
                'slug' => 'savanna-rodriguez',
                'birthday' => '1945-10-18',
                'deceased' => NULL,
                'imdb_id' => 'nm240603',
                'image' => 'headshot.jpg',
                'bio' => 'Placeat quia itaque id soluta iusto voluptatem. Amet fugit necessitatibus tempore sed. Est ut quis non sint sed.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            3 => 
            array (
                'id' => 4,
                'forename' => 'Saul',
                'surname' => 'Smitham',
                'slug' => 'saul-smitham',
                'birthday' => '1964-09-11',
                'deceased' => NULL,
                'imdb_id' => 'nm934606',
                'image' => 'headshot.jpg',
                'bio' => 'Ut amet dicta asperiores perferendis mollitia non ipsa. Minima magni nemo optio quo fuga iste. Dolor praesentium error nulla qui. Vel in rerum impedit iure.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            4 => 
            array (
                'id' => 5,
                'forename' => 'Adam',
                'surname' => 'Maggio',
                'slug' => 'adam-maggio',
                'birthday' => '1991-07-12',
                'deceased' => NULL,
                'imdb_id' => 'nm973659',
                'image' => 'headshot.jpg',
                'bio' => 'Dolores dolores sint possimus ut aut error. Consequatur quod sit consequatur distinctio. Enim dolore nesciunt nesciunt omnis in repellendus.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            5 => 
            array (
                'id' => 6,
                'forename' => 'Emerson',
                'surname' => 'Ankunding',
                'slug' => 'emerson-ankunding',
                'birthday' => '1955-09-24',
                'deceased' => '2017-09-05',
                'imdb_id' => 'nm542788',
                'image' => 'headshot.jpg',
                'bio' => 'Quia voluptas dolores similique voluptatem. Repellendus aut quia nemo corrupti. Quam at magni et architecto.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            6 => 
            array (
                'id' => 7,
                'forename' => 'Emelia',
                'surname' => 'Larkin',
                'slug' => 'emelia-larkin',
                'birthday' => '1948-06-27',
                'deceased' => NULL,
                'imdb_id' => 'nm342884',
                'image' => 'headshot.jpg',
                'bio' => 'Delectus est molestias eveniet aut. Autem rem dicta est modi cupiditate nobis. Aut vel voluptatibus cum sed. Hic minus cumque non pariatur.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            7 => 
            array (
                'id' => 8,
                'forename' => 'Russell',
                'surname' => 'Lubowitz',
                'slug' => 'russell-lubowitz',
                'birthday' => '1974-03-08',
                'deceased' => NULL,
                'imdb_id' => 'nm486691',
                'image' => 'headshot.jpg',
                'bio' => 'Alias quae cumque vel officia repellat et. Commodi eius et blanditiis praesentium. Facere commodi voluptate velit consectetur.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            8 => 
            array (
                'id' => 9,
                'forename' => 'Barney',
                'surname' => 'Gulgowski',
                'slug' => 'barney-gulgowski',
                'birthday' => '1958-01-06',
                'deceased' => '2017-11-25',
                'imdb_id' => 'nm465113',
                'image' => 'headshot.jpg',
                'bio' => 'Neque possimus natus laborum dolores maiores unde soluta. Ut hic aut dolor dignissimos impedit natus.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
            9 => 
            array (
                'id' => 10,
                'forename' => 'Darien',
                'surname' => 'Powlowski',
                'slug' => 'darien-powlowski',
                'birthday' => '1996-07-29',
                'deceased' => NULL,
                'imdb_id' => 'nm609502',
                'image' => 'headshot.jpg',
                'bio' => 'Aliquid placeat debitis iure ducimus. Est autem velit quidem sit exercitationem temporibus rem sint.',
                'created_at' => '2019-03-24 21:40:38',
                'updated_at' => '2019-03-24 21:40:38',
            ),
        ));
        
        
    }
}