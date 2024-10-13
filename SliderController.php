<?php
// app/Http/Controllers/SliderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
public function showSlider()
{
// Пример статического списка изображений
$images = [
asset('images/3I2A0439.jpg'),
asset('images/3I2A0557.jpg'),
asset('images/3I2A1587.jpg')
];

return view('slider', compact('images'));
}
}
