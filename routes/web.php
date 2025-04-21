<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/faq', function () {
//     return view('faq');
// });

// Route::get('/index2', function () {
//     return view('index-2');
// });
// Route::get('/index3', function () {
//     return view('index-3');
// });

Route::get('/services', function () {
    return view('services');
});

Route::get('/ser-business-law', function () {
    return view('ser-business-law');
});

Route::get('/ser-criminal-law', function () {
    return view('ser-criminal-law');
});
Route::get('/ser-family-law', function () {
    return view('ser-family-law');
});
Route::get('/ser-employement-law', function () {
    return view('ser-employement-law');
});
Route::get('/ser-indus-law', function () {
    return view('ser-indus-law');
});
Route::get('/ser-insu-def', function () {
    return view('ser-insu-def');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/cases', function () {
//     return view('cases');
// });
// Route::get('/cases-details', function () {
//     return view('cases-details');
// });
