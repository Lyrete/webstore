<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', function (Request $request) {
    $items = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $items));
    return view('welcome', ['total_price' => $price]);
});

Route::get('/item/{id}', function ($id, Request $request) {
    $items = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $items));
    //As ID is unique we can always assume there is only one result
    $item = DB::table('items')
                ->where('id' , '=', $id)->first();
    return view('item', ['item' => $item, 'total_price' => $price]);
});

Route::get('/search', function (Request $request) {
    $cart = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $cart));

    $query = $request->input('query');
    $items = DB::table('items')
        ->where('name','like', "%{$query}%")
        ->orWhere('description', 'like', "%{$query}%")
        ->orWhere('barcode', 'like', "%{$query}%")
        ->get();
    return view('search', ['items' => $items, 'total_price' => $price]);
});

Route::get('/cart', function (Request $request) {
    $items = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $items));
    return view('cart', ['items' => $items, 'total_price' => $price]);
});

Route::post('/cart', function (Request $request) {
    $items = $request->session()->pull('user.cart', []);
    $key = $request->input('id');
    unset($items[$key]);
    $request->session()->put('user.cart', $items);
    return redirect('/cart');
});

Route::get('/admin', function (Request $request) {
    $items = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $items));    
    return view('admin', ['total_price' => $price]);
});

Route::post('/admin', function (Request $request) {
    $items = $request->session()->get('user.cart', []);
    $price = array_sum(array_map(function($item) { return $item->price * $item->amount; }, $items)); 
    $item = $request->collect();
    DB::table('items')->insert([
        'name' => $item->get('name'),
        'price' => $item->get('price'),
        'stock' => $item->get('stock'),
        'barcode' => $item->get('barcode'),
        'description' => $item->get('description'),
    ]);
    return redirect('/admin');
});