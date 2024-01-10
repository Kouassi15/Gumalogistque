<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    
    public function create()
    {
        return view('home.service');
    }

    public function services(){
        $services = Service::get();
        return view('home.service', compact('services'));
    }
    
}
