<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Model;


class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'service_type', 'service_price'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addReview($content)
    {

        $user_id = Auth::user()->id; // We want to add the logged in user's info, not the user who owns the service
        $title = $content['title'];
        $body = $content['body'];
        $this->reviews()->create(compact('user_id', 'title', 'body'));

    }

    // Function scopeFilter is due to the query scope, where you add `scope` in the beginning of the name of your function
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }

}
