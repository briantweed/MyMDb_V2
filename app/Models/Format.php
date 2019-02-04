<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Format extends Model 
{

   public function movies()
   {
      return $this->hasMany('App\Models\Movie');
   }

}
