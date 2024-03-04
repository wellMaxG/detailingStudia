<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        // Получаем список всех услуг из базы данных\\
        $services = Service::all(); 

        return view('services.index', compact('services'));
    }

    public function show($id)
    {

        $service = Service::findOrFail($id);

        return view('services.show', compact('service'));

    }

   
    public function serviceSsection()
    {

        $services = Service::all();

        return view('services.serviceSsection', compact('services'));

    }
}

