<?php

namespace App\Models;


class Certificate extends BaseModel
{

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }


    public function getCertificates($forget = false)
    {
        return $this->cacheAndReturn('id', 'title', $forget);
    }

}
