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
    
    return view('about');
});

Route::get('user', function () {
    
    echo "<h1>USER Screen</h1>";
})->name('user');

Route::get('user/{id}', function ($id) {
    
    echo "<h1>USER Detail: {$id}</h1>";
})->name('user.show');

Route::get('user/{id}/branch/{branchID}', function ($id, $branchID) {
    
    echo "<h1>USER Detail: {$id}-Branch by ${branchID}</h1>";
})->name('user.show.branch');

Route::get('product', function () {
    
    echo "<h1>Product page</h1>";
});
Route::get('new', function () {
    
    echo "<h1>NEWS NEWS</h1>";
});
Route::get('service', function () {
    
    echo "<h1>Service Screen</h1>";
});
Route::get('new/{id}/cat/{catID}', function ($id,$catID) {
    
    echo "<h1>Bai viet so {$id}- Catergory {$catID}</h1>";
});

