<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Crew
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Crew extends Model 
{

   protected $table = 'crew';
   
   protected $fillable = array(
      'movie_id',
      'person_id',
      'position'
   );

}
