<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\companyController;
use Illuminate\Support\Facades\Route;
use App\Services\companyDetailservice;
use Illuminate\Support\Facades\Gate;
use App\Http\Middleware\usermiddleware;




 






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/',[companyController::class, 'getdetail']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// add company
Route::Post('/comp', [companyController::class, 'company'])->name('comp.add');
Route::get('/viewcomp', [companycontroller::class, 'showcomp'])->name('comp.view');
// add 

Route::Post('/add',[companycontroller::class, 'store'])->name('add.user');
Route::get('/addcoust',[companycontroller::class, 'comp'])->name('view.coust');
// view 

Route::get('/viewuser', [companyController::class,'getdetail'])->name('user.all');
Route::get('/cust', [companycontroller::class, 'custview'])->name('cust.view');
Route::get('/comp', [companycontroller::class, 'compview'])->name('view.comp');
// edit 

Route::Post('/editcoust/{id}',[companycontroller::class, 'customeredit'])->name('edit.coust');
Route::get('/edit/{id}',[companyController::class, 'editview'])->name('view.edit');
// 

Route::middleware('can:isadmin')->group(function (){
Route::get('/amount', [companycontroller::class, 'showamount'])->name('show.amount');
Route::Post('/addamount', [companycontroller::class, 'amountshow'])->name('amount.show');
Route::get('/show/{id}', [companycontroller::class, 'viewamount'])->name('amount.view');
});
// view Item
Route::get('/viewlist/{id}', [companycontroller::class, 'listitem'])->name('item.view');


Route::get('/sessionend',[companycontroller::class, 'destroy'])->name('delete.user');
// search
Route::get('/usersearch', [companycontroller::class, 'searchre'])->name('search.view');

Route::get('/delete/{id}', [companycontroller::class, 'delete'])->name('user.delete');

Route::get('/deletecomp/{id}', [companycontroller::class, 'compdelete'])->name('comp.delete');



});



require __DIR__.'/auth.php';

