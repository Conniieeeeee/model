<?php
// namespace app\http\controller;
use app\Http\controller\studentcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
