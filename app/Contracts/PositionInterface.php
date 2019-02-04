<?php

namespace App\Contracts;

interface PositionInterface
{

    public const director = 'Director';

    public const producer = 'Producer';
    
    public const writer = 'Writer';

    public const composer = 'Composer';

    public const CREW_POSITIONS = [
        self::director,
        self::producer,
        self::writer,
        self::composer
    ];
}