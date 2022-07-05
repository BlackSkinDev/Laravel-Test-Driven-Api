<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('todo-list',[App\Http\Controllers\TodoListController::class,'index'])->name('todo-list.store');
