<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\companyController;
use Illuminate\Support\Facades\Route;
use App\Services\companyDetailservice;
use Illuminate\Support\Facades\Gate;




 
Route::get('/', function () {
    return view('welcome');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// add company
Route::Post('/comp', [companyController::class, 'company'])->name('comp.add');
Route::get('/viewcomp', [companycontroller::class, 'showcomp'])->name('comp.view');
// add coustmer
Route::Post('/add',[companycontroller::class, 'store'])->name('add.user');
Route::get('/addcoust',[companycontroller::class, 'comp'])->name('view.coust');
// view customer
Route::get('/viewuser', [companyController::class,'getdetail'])->name('user.all');
Route::get('/cust', [companycontroller::class, 'custview'])->name('cust.view');
Route::get('/comp', [companycontroller::class, 'compview'])->name('view.comp');
// edit customer
Route::Post('/editcoust/{id}',[companycontroller::class, 'coustmeredit'])->name('edit.coust');
Route::get('/edit/{id}',[companyController::class, 'editview'])->name('view.edit');
// customer payment
Route::middleware('can:isadmin')->group(function (){
Route::get('/amount', [companycontroller::class, 'showamount'])->name('show.amount');
Route::Post('/addamount', [companycontroller::class, 'amountshow'])->name('amount.show');
Route::get('/show/{id}', [companycontroller::class, 'viewamount'])->name('amount.view');
// view Item
Route::get('/viewlist/{id}', [companycontroller::class, 'listitem'])->name('item.view');
});

Route::get('/sessionend',[companycontroller::class, 'destroy'])->name('delete.user');
// search
// Route::Post('/search', [companycontroller::class, 'search'])->name('search.view');







require __DIR__.'/auth.php';

