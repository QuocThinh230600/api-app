<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\News;
use App\Models\Produce;



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
    $products = Product::select('name', 'price', 'status', 'slug')->get();
    return response()->json($products);
});

Route::post('/product', function (Request $request) {
    $products = Product::select('name', 'price', 'slug')->where('status' == 0)->get();
    return response()->json($products);
});


Route::get('/product/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)->first();

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    return response()->json($product);
});

Route::post('/product/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)->first();

    if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

    return response()->json($product);
});


Route::get('/category', function (Request $request) {
    $categorys = Category::all();
    return response()->json($categorys);
});

Route::post('/category', function (Request $request) {
    $categorys = Category::all();
    return response()->json($categorys);
});

Route::get('/news', function (Request $request) {
    $news = News::all();
    return response()->json($news);
});

Route::post('/news', function (Request $request) {
    $news = News::all();
    return response()->json($news);
});

Route::get('/produce', function (Request $request) {
    $produces = Produce::all();
    return response()->json($produces);
});

Route::post('/produce', function (Request $request) {
    $produces = Produce::all();
    return response()->json($produces);
});

