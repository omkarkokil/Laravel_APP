<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GetCustomerController;
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



// Route::get("/prac/{name?}", function ($name = null) {
//     $data = compact('name');

//     return view("prac")->with($data);
// });

// Route::get("/", [RegisterController::class, 'showRegister']);
// Route::post("/", [RegisterController::class, 'showData']);


Route::get("/", function () {
    return view("Home");
});


// Register Page
// 1> Display Register Route page
Route::get("/registerCustomer", [GetCustomerController::class, "show"]);
// 2> Handle Register Route
Route::post("/registerCustomer", [GetCustomerController::class, "store"]);
// Register Page

// View customer Data route
Route::get("/view", [GetCustomerController::class, "view"]);
Route::get("/view/trash", [GetCustomerController::class, "trash"]);
// View customer Data route

// Delete Route
Route::get("/delete/{id}", [GetCustomerController::class, "delete"]);
Route::get("/forcedelete/{id}", [GetCustomerController::class, "Forcedelete"]);
Route::get("/restore/{id}", [GetCustomerController::class, "Restore"]);
// Delete Route

// update Route
// 1> Display Edit Route page
Route::get("/edit/{id}", [GetCustomerController::class, "edit"])->name('customer.edit');
// 2> Handle Edit Route page
Route::post("/update/{id}", [GetCustomerController::class, "update"])->name('customer.update');
// update Route

// basic home route without controller
// Route::get("/", function () {
//     return view("Home");
// });
// basic home route
