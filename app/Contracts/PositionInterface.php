<?php

namespace App\Contracts;


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

    public function scopeByPosition($query);

    public function getPosition(string $position);

}
