<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

use App\Models\Movie;


class MovieTest extends TestCase
{

    public $movie;


    public function setUp(): void
    {
        parent::setUp();

        $this->movie = new Movie;
    }


    /**
     * @test
     * @group Model
     */
    public function the_model_exists()
    {
        $this->assertInstanceOf(Movie::class, $this->movie);
    }


    /**
     * @test
     * @group Attributes
     */
    public function the_model_attributes()
    {
        $this->assertEquals('slug', $this->movie->getRouteKeyName());

        $this->assertIsArray($this->movie::RATINGS);
        $this->assertCount(10, $this->movie->ratings);

        $this->assertIsString($this->movie::POSTER_PATH);

        $this->assertIsString($this->movie::DEFAULT_POSTER);

        $this->assertIsString($this->movie::STAR_ICON);

        $this->assertClassHasAttribute('fillable', Movie::class);
        $this->assertIsArray($this->movie->getFillable());

        $this->assertClassHasAttribute('dates', Movie::class);
        $this->assertIsArray($this->movie->getDates());
        $this->assertContains('purchased', $this->movie->getDates());

        $this->assertClassHasAttribute('casts', Movie::class);
        $this->assertIsArray($this->movie->getCasts());
        $this->assertArrayHasKey('duplicate', $this->movie->getCasts());
    }


    /**
     * @test
     * @group Relationships
     */
    public function the_model_relationships()
    {
        $belongsToMany = ['cast', 'crew', 'genres', 'tags'];
        foreach($belongsToMany as $relationship)
        {
            $this->assertTrue(method_exists($this->movie, $relationship));
            $this->assertInstanceOf(BelongsToMany::class, $this->movie->$relationship());
        }

        $cached = ['format', 'studio', 'certificate'];
        foreach($cached as $relationship)
        {
            $this->assertTrue(method_exists($this->movie, $relationship));
            $this->assertInstanceOf(BelongsTo::class, $this->movie->$relationship());
        }
    }

}
