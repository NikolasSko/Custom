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

Route::apiResources([
    'items' => ItemController::class,
]);
