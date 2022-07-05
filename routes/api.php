<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('todo-list',[App\Http\Controllers\TodoListController::class,'index'])->name('todo-list.index');
Route::get('todo-list/{list}',[App\Http\Controllers\TodoListController::class,'show'])->name('todo-list.show');
Route::post('todo-list',[App\Http\Controllers\TodoListController::class,'store'])->name('todo-list.store');
