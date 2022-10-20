<?php

use App\Http\Controllers\testController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/hello', function () {
    return view('form');
});

Route::any('/myForm', function() {
    return "goodbye world";
}); 



// route parameters 
Route::get('/cyberGang{id?},{name?}', function($id='1', $name="Salmi Amine") {
    return "<h2> number ". $id . " in the list is " . $name . " <h2>";
});