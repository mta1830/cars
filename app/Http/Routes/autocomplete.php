<?php
use Cars\Models\User;

Route::get('autocomplete/demo', function () {
    return view('components/autocomplete_demo');
});

Route::get('autocomplete/users', function () {
    // return [
    //   [
    //     'id'    => 1,
    //     'name'  => 'Miguel',
    //     'email' => 'mta1830@gmail.com',
    //   ]
    // ];

    $term = Request::get('term');
    return User::findByNameOrEmail($term);
});
