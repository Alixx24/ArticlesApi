<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [UserController::class, 'login']);

// Route::get('/user', function (){
//     return \request()->user();
// })->middleware('auth:sanctum');
Route::get('/admin/posts/', [PostController::class, 'index'])->name('admin.posts.index');
Route::post('/admin/post/', [PostController::class, 'store'])->name('admin.posts.store');
Route::delete('admin/post/delete/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
