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

    public function show(Service $service)
    {   
        dd($service);
        return view('services.show', compact('service'));
    }

    public function create()
    {

    }

}
