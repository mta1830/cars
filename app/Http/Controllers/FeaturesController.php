<?php

namespace Cars\Http\Controllers;

use Illuminate\Http\Request;

use Cars\Http\Requests;
use Cars\Http\Controllers\Controller;

use Cars\Car;
use Cars\Feature;

class FeaturesController extends Controller
{
  public function index()
  {
    $car = Car::first();
    $features = Feature::orderBy('name', 'ASC')->lists('name', 'id')->toArray();
    return view('components/features', compact('features', 'car'));
  }

  public function update()
  {
    $car = Car::first();
    $features = Feature::whereIn('id', Request::get('features'))->get();
    $car->features()->sync($features);
    return redirect()->to('features');
  }
}
