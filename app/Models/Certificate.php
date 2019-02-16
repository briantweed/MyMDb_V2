<?php

namespace App\Models;


class Certificate extends BaseModel
{

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }


    public function getCertificates()
    {
        return $this->byId()
            ->pluck('title', 'id')
            ->toArray();
    }

}
