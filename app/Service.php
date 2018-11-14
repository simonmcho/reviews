<?php

namespace App;

use App\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'service_type', 'service_price'
    ];

    public function reviews()
    {

    }

    public function addReview($body)
    {

    }
}
