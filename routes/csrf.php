<?php

use Illuminate\Support\Facades\Route;

Route::get(config('lscache.csrf.path'), function () {
    if (!config('lscache.csrf.enabled')) {
        abort(404);
    }
    $response = csrf_token();
    return response($response, 200);
})->middleware(config('lscache.csrf.middleware'))->name(config('lscache.csrf.name'));
