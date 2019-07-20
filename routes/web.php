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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', 'BookController'); 

return redirect('/books'); // to a specific url 
return redirect(url('/books')); // to a specific url with url helper 
return redirect(url()->previous()); // to a previous url 
return redirect()->back(); // redirect back (same as above)

