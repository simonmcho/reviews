<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Review;

class ReviewsController extends Controller
{
    public function store(Service $service_id)
    {

        $validationParams = [
            'title' => 'required|min:1',
            'body' => 'required|min:1'
        ];

        $this->validate(request(), $validationParams);

        $service_id->addReview(['title' => request('title'), 'body' => request('body')]);

        return back();
    }
}
