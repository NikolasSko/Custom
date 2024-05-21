<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\Api\ItemController;
use \App\Http\Controllers\Api\UserController;
use \App\Http\Controllers\Api\DesignController;
use \App\Http\Controllers\Api\OrderController;
use \App\Http\Controllers\Api\CartController;
use \App\Http\Controllers\Api\OrderItemController;
use \App\Http\Controllers\Api\CartItemController;

Route::get('/items', [ItemController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/designs', [DesignController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/carts', [CartController::class, 'index']);
Route::get('/cartsitems', [CartItemController::class, 'index']);
Route::get('/ordersitems', [OrderItemController::class, 'index']);
