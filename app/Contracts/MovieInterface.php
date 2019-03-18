<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\{BelongsTo,BelongsToMany};


/**
 * Interface MovieInterface.
 * Constants and relationship method should be listed here.
 *
 * @package App\Contracts
 * @autor briantweed
 * @version 1.0.0
 */
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
     * Relation - a movie can have many cast members.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function cast();


    /**
     * Relation - a movie can have many main crew members.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function crew(): BelongsToMany;


    /**
     * Relation - a movie belongs to a studio.
     *
     * @since version 1.0.0
     * @return BelongsTo
     */
    public function studio(): BelongsTo;

    
    /**
     * Relation - a movie exists on a certain format.
     *
     * @since version 1.0.0
     * @return BelongsTo
     */
    public function format(): BelongsTo;
    

    /**
     * Relation - a movie is given a certificate.
     *
     * @since version 1.0.0
     * @return BelongsTo
     */
    public function certificate(): BelongsTo;



    /**
     * Relation - a movie can belong to many types of genres.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function genres(): BelongsToMany;



    /**
     * Relation - a movie can have many types of tags.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany;

}
