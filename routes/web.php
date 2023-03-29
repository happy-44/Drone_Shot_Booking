<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;

use App\Http\Controllers\RegistrationController;

use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingsController;

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

// Route::get('/demo', function () {
//     echo "hello world";
// });

// Route::post('/test', function () {
//     echo "hello world";
// });

// Route::get('/demo/{name}/{id?}', function ($name, $id = null) {
//     // echo $name;
//     // echo $id;
//     $data = compact("name","id");
//     // print_r($data);
//     return view('demo')->with($data);
// });


// Route::get('/home1', function () {
//     // $demo = "<h2>happymittal</h2>";
//     // $data = compact("name","demo");
//     return view('home1');
// });

// Route::get('/about', function () {
//     // $demo = "<h2>happymittal</h2>";
//     // $data = compact("name","demo");
//     return view('about');
// });

Route::get('/',[DemoController::class, 'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');//laravel 8
Route::get('/courses',SingleActionController::class);
Route::resource('/photo',PhotoController::class);



// Route::get('/about','DemoController::about'); used in laravel 5
// Route::get('/about','DemoController@about'); used in laravel 7


Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);

Route::get('/customer',function(){
    $customers = Customers::all();
    echo "<pre>";
    print_r($customers->toArray());
});


Route::get('/customer',[CustomerController::class,'index'])->name('customer.create');
Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer-delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::get('/booking',[BookingsController::class,'index'])->name('booking.create');
Route::get('/booking/view',[BookingsController::class,'view']);
Route::post('/booking',[BookingsController::class,'store']);
Route::get('/booking/delete/{id}',[BookingsController::class,'delete'])->name('booking-delete');
Route::get('/booking/edit/{id}',[BookingsController::class,'edit'])->name('booking.edit');
Route::post('/booking/update/{id}',[BookingsController::class,'update'])->name('booking.update');