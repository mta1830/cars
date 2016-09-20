<?php

namespace Cars\Http\Controllers;

use Illuminate\Http\Request;

use Cars\Http\Requests;
use Cars\Http\Controllers\Controller;

use Cars\Models\Model;

class ModelsController extends Controller
{
    public function search($makeyear_id)
    {
      $models = Model::where('makeyear_id', $makeyear_id)
                      ->select('id as value','name as text')
                      ->orderBy('name', 'ASC')
                      ->get()
                      ->toArray();

      array_unshift($models, ['value' => '', 'text' => 'Select value']);

      return $models;
    }
}
