<?php

// use Cars\Models\Feature;
// use Cars\Models\Car;

Route::get('features',[
  'as'   => 'features.index',
  'uses' => 'FeaturesController@index'
]);

Route::post('features',[
  'as'   => 'features.update',
  'uses' => 'FeaturesController@update'
]);

// Route::get('features', function () {
//     $car = Car::first();
//     $features = Feature::orderBy('name', 'ASC')->lists('name', 'id')->toArray();
//     return view('components/features', compact('features', 'car'));
// });

// Route::post('features', function () {
//     $car = Car::first();
//     $features = Feature::whereIn('id', Request::get('features'))->get();
//     $car->features()->sync($features);
//     return redirect()->to('features');
// });
