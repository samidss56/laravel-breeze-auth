<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('cars.index', [
            "cars" => Car::get(),
        ]);
    }
}
