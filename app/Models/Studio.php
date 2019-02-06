<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Studio extends Model 
{

   protected $fillable =[
      'studio_name'
   ];


   public function movies()
   {
      return $this->hasMany('App\Models\Movies');
   }

}
