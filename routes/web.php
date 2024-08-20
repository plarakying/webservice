<?php

use App\Models\Teacher;
use App\Models\Region;
use App\Models\Country;
use App\Models\Province;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /*return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');*/

    /*$c = Country::all();
    dd($c[0]
    ->Region[0]->Province[0]->Teacher[0]
    );*/

    $t = Teacher::find(1); 
    dd($t->province->region->country);


});



