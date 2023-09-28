<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Получаем список всех услуг из базы данных
        return view('admin.services.index', compact('services'));
    }
}