<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use App\Event;

Route::get('/', function () {
    $events = Event::all();

    /*dd($events->filter(function($event, $key){
        return $event->price>30;
    }));*/
    return view('events.index')->withEvents($events);
});
