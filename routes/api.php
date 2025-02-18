<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RollController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


// First day Api 

Route::get('/roll', [RollController::class, 'index']);
Route::get('/store', [StoreController::class, 'store']);
Route::get('/status', [StatusController::class, 'status']);


// Second day Api  Method CRUD

Route::get('/users', [UserController::class, 'list']);             // show all users
Route::get('/users/{user}',[UserController::class,'show']);     // show user by id
Route::post('/users', [UserController::class, 'create']);        // create user
Route::put('/users/{user}', [UserController::class, 'update']);   // update user
Route::delete('/users/{user}',[UserController::class,'delete']);    // delete user


// HomeWork
// PRODUCT CRUD

Route::get('/products',[ProductController::class,'list']);                       //show all products 
Route::post('/products',[ProductController::class,'create']);                //create product  
Route::get('/products/{id}',[ProductController::class,'show']);              //show product by id
Route::put('/products/{id}',[ProductController::class,'update']);          //update product by id
Route::delete('/products/{id}',[ProductController::class,'delete']);     //delete product by id


//Order CDUD 

Route::get('/orders',[OrderController::class,'list']);                       //show all orders

Route::post('/orders',[OrderController::class,'create']);                 //create order

Route::get('/orders/{id}',[OrderController::class,'show']);             //show order by id

Route::put('/orders/{id}',[OrderController::class,'update']);          //update order by id

Route::delete('/orders/{id}',[OrderController::class,'cancel']);       //delete order by id