<?php

namespace Cars\Http\Controllers;

use Illuminate\Http\Request;

use Cars\Http\Requests;
use Cars\Http\Controllers\Controller;

use Cars\Models\Car;
use Cars\Models\Feature;

class FeaturesController extends Controller
{
  public function index()
  {
    $car = Car::first();
    $features = Feature::orderBy('name', 'ASC')->lists('name', 'id')->toArray();
    return view('components/features', compact('features', 'car'));
  }

  public function update(Request $request)
  {
    $features = $request->get('features');

    Feature::addNewFeatures($features);

    $car = Car::first();
    $car->saveFeatures($features);

    return redirect()->to('features');
  }
}
