<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadController;
use App\Http\controllers\customerController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/myfirst', function () {
    return view('myfirst');
});
// Route:: view('upload','upload');
Route::view('upload','upload');
Route:: post('upload',[uploadController::class,'upload']);
Route::post('/change-language', function (\Illuminate\Http\Request $request) {
    $lang = $request->input('locale');
    if (in_array($lang, ['en', 'hi', 'pun'])) {
        Session::put('locale', $lang);
    }
    return back(); // redirect back to same page
})->name('change.language');
Route:: view('trans','trans');
Route::view('/','insert_data');
Route:: post('add',[customerController::class,'add_customer']);

 Route::get('list',[customerController:: class,'customer_list']);
Route::get('delete/{id}',[customerController:: class,'delete']);
