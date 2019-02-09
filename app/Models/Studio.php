<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Studio extends Model 
{

   protected $fillable =[
      'name'
   ];


   public function movies()
   {
      return $this->hasMany(Movies::class);
   }

}
