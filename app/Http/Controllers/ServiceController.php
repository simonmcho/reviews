<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
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
        dd($this);
    }

}
