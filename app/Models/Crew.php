<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Crew extends Model 
{

   protected $table = 'crew';
   
   protected $fillable = array(
      'movie_id',
      'person_id',
      'position'
   );

}
