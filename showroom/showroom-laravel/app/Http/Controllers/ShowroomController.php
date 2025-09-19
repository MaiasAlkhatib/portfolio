<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $cars = [
            ['name' => 'Audi', 'model' => 'A4', 'price' => 35000, 'image' => 'audi.jpg'],
            ['name' => 'BMW', 'model' => '3 Serie', 'price' => 40000, 'image' => 'bmw.jpg'],
            ['name' => 'Mercedes', 'model' => 'C-Klasse', 'price' => 42000, 'image' => 'mercedes.jpg'],
            ['name' => 'Volkswagen', 'model' => 'Golf', 'price' => 28000, 'image' => 'volkswagen.jpg'],
            ['name' => 'Tesla', 'model' => 'Model 3', 'price' => 48000, 'image' => 'tesla.jpg'],
            ['name' => 'Ford', 'model' => 'Focus', 'price' => 23000, 'image' => 'ford.jpg'],
        ];

        return view('showroom', compact('cars'));
    }
}
