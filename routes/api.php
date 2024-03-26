<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    $users = User::all();
    return response()->json($users);
});

Route::post('/user', function (Request $request) {
    $users = User::all();
    return response()->json($users);
});

Route::get('/product', function (Request $request) {
    $products = Product::all();
    return response()->json($products);
});

Route::post('/product', function (Request $request) {
    $products = Product::all();
    return response()->json($products);
});

Route::get('/category', function (Request $request) {
    $categorys = Category::all();
    return response()->json($categorys);
});

Route::post('/category', function (Request $request) {
    $categorys = Category::all();
    return response()->json($categorys);
});