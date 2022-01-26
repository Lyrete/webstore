<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/addToCart', function (Request $request) {
    $id = $request->input('id');
    $item = DB::table('items')
                ->where('id' , '=', $id)->first();
    $items = $request->session()->pull('user.cart', []);
    $key = $item->id;
    if(isset($items[$key])){
        $items[$key]->amount += 1;
    }else{
        $item->amount = 1;
        $items[$key] = $item;
    }
    $request->session()->put('user.cart', $items);
    return $items;
});
