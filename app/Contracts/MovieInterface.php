<?php

namespace App\Contracts;


interface MovieInterface
{

    public const RATINGS = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
    ];

    public const STAR_ICON = '<i class="fas fa-star"></i>';


    /**
     * Relationship - a movie can have many cast members
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cast();


    /**
     * Relationship - a movie can have many main crew members
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function crew();


    /**
     * Relationship - a movie belongs to a studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studio();


    /**
     * Relationship - a movie exists on a certain format e.g. DVD, Blu-ray etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function format();


    /**
     * Relationship - a movie is given a certificate e.g. U, PG etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function certificate();


    /**
     * Relationship - a movie can belong to many types of genres
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres();


    /**
     * Relationship - a movie can have many types of tags
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags();

}
