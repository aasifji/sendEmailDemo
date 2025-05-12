<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadController;
use App\Http\controllers\customerController;
use App\Http\controllers\SupplierController;
use App\Http\controllers\StudentController;
use Illuminate\Support\Facades\App;
use App\http\controllers\MailController;

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
// --------------Crud App-------------
Route::view('/','insert_data');
Route:: post('add',[customerController::class,'add_customer']);

 Route::get('list',[customerController:: class,'customer_list']);
Route::get('delete/{id}',[customerController:: class,'delete']);
Route::get('edit/{id}',[customerController:: class,'edit']);
Route::put('edit-customer/{id}',[customerController:: class,'editcustomer']);
Route::get('search',[customerController:: class,'search']);
Route::get('getdata/{key:name}',[customerController:: class,'getdata']);

// --------email send----------
Route::post('send-mail',[MailController:: class,'sendEmail']);
Route::view('send-email','email-send');

// --------user Ajax in Crud operation-------------
Route::get('store',[SupplierController::class,'store']);
Route::view('talvind','talvind');

Route::view('form', 'form');
Route::Post('add-student',[StudentController::class,'addstudent'])->name('addstu');
Route::get('get-all-student',[StudentController::class,'getstudents'])->name('getstudents');
Route::view('get-student','student');
