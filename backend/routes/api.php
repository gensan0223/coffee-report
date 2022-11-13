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

Route::get('/helloWorld', function() {
    return response()->json(['Hello'=>'World']);
});

Route::get('/users', function() {
    return App\Models\User::all();
});
Route::get('/posts', function() {
    return App\Models\Post::with(['user'])->get();
});
Route::post('/posts', function() {
    return App\Models\Post::with(['user'])->get();
});