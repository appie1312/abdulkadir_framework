<?php
use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    $jobs = Job::all();

    return view('home');
});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id)  {

    $job = Job::find($id);

 

    return view('job', ['job' => $job]);
}); 

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});