<?php

namespace App\Contracts;

/**
 * Interface PositionInterface.
 * Constants and method relating to crew positions.
 *
 * @package App\Contracts
 * @autor briantweed
 * @version 1.0.0
 */
interface PositionInterface
{

    public const DIRECTOR = 'Director';

    public const PRODUCER = 'Producer';
    
    public const WRITER = 'Writer';

    public const COMPOSER = 'Composer';

    public const CREW_POSITIONS = [
        self::DIRECTOR,
        self::PRODUCER,
        self::WRITER,
        self::COMPOSER
    ];


    /**
     * Scope - return cast members with the chosen position.
     *
     * @since version 1.0.0
     * @param $query
     * @return mixed
     */
    public function scopeByPosition($query);


    /**
     * Filter the model relation by the chosen cast position
     *
     * @since version 1.0.0
     * @param string $position
     * @return mixed
     */
    public function getPosition(string $position);

}
