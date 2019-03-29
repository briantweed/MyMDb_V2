<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * Class Certificate.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Certificate extends BaseModel
{

    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'title'
    ];


    /**
     * Relation - a certificate can belong to many movies.
     *
     * @since version 1.0.0
     * @return HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }


    /**
     * Return an array of certificates.
     *
     * @since version 1.0.0
     * @param bool $forget
     * @return array
     */
    public function getCertificates($forget = false)
    {
        return $this->cacheAndReturn('id', 'title', $forget);
    }

}
