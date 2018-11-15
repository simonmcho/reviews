<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $services = Service::all();
        
        return view('services.index', compact('services'));
    }

    public function show(Service $service_id)
    {   
        return view('services.show', compact('service_id'));
    }

    public function create()
    {   
        return view('services.create');
    }

    public function store()
    {
        $validationParams = [
            'title' => 'required|max:255',
            'service_type' => 'required',
            'service_price' => 'required|min:1|integer'
        ];

        $this->validate(request(), $validationParams);

        auth()->user()->publish(
            new Service(request(['title', 'service_type', 'service_price']))
        );
        
        // Service::create([
        //     'title' => request('title'),
        //     'service_type' => request('service_type'),
        //     'service_price' => request('service_price'),
        //     'user_id' => auth()->id(),
        //     'username' => auth()->user()->username
        // ]);

        return redirect('/services');
    }

}
