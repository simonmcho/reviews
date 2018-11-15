<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use App\Model;


class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'username', 'title', 'service_type', 'service_price'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function addReview($content)
    {

        $user_id = Auth::user()->id;
        $title = $content['title'];
        $body = $content['body'];
        $this->reviews()->create(compact('user_id', 'title', 'body'));

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
