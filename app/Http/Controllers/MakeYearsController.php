<?php

namespace Cars\Http\Controllers;

use Illuminate\Http\Request;

use Cars\Http\Requests;
use Cars\Http\Controllers\Controller;

use Cars\Models\MakeYear;

class MakeYearsController extends Controller
{
  public function search($make_id)
  {
    $years = MakeYear::where('make_id', $make_id)
                    ->select('id as value','year as text')
                    ->orderBy('year', 'DESC')
                    ->get()
                    ->toArray();

    array_unshift($years, ['value' => '', 'text' => 'Select value']);

    return $years;
  }
}
