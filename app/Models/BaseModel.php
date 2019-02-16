<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    public function getSearchables()
    {
        return $this->searchable;
    }

}
