<?php

// use App\Models\employeecontroller;

use App\Http\Controllers\employeecontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(employeecontroller::class)->group(function () {

    Route::get('/employee',  'show')->name('employee');


    Route::get('/employee/{id}',  'singleuserview')->name('singleuser');
    
    
    // ADD SINGLE DATA IN DB 
    Route::post('/adduser',  'adduser')->name('adduser');
    
    // DELETE USER
    Route::get('/deleteuserview/{id}',  'deleteuserview')->name('deleteuser');
    
    // EDIT USER 
    Route::get('/edituserview/{id}', 'edituserview')->name('edituserview');

    // UPDATE USER
    Route::post('/update/{id}','updateuser')->name('updateuser');

});



// ROUTE TO ADD VIEW in adduser

Route::view('newuser', '/addnewuser');


