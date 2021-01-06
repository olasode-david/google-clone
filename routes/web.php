<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/search',function () {

    $term = request('search');
    $clear = str_replace(' ', '', $term);

   $search =  json_decode(file_get_contents("https://www.googleapis.com/customsearch/v1?key=Your-Api-key&cx=search-engine-id&q=$clear"), true);
    
    return view('pages\search',[
        'searchs' => $search,
        'searchName' => $term,
    ]);
    
})->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
