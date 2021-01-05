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

   $search =  json_decode(file_get_contents("https://www.googleapis.com/customsearch/v1?key=AIzaSyA24hTlywwYHDnPAEWwP0L8H9lFtPzWJEs&cx=188fe336301c1cdd9&q=$clear"), true);

   //return $search['searchInformation']['formattedTotalResults'];

    //AIzaSyA24hTlywwYHDnPAEWwP0L8H9lFtPzWJEs    API_KEY
    //188fe336301c1cdd9   search engine id

    return view('pages\search',[
        'searchs' => $search,
        'searchName' => $term,
    ]);
    
})->name('search');

// Route::get('/searchs',function () {
//     return view('pages\search',[
//         'searchs' => request('search'),
//     ]);
// })->name('searchs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
