<?php

namespace Cars\Http\Controllers;

use Illuminate\Http\Request;

use Cars\Http\Requests;
use Cars\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function index()
    {
      return view('components/dropdowns');
    }
}
