<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Winter\User\Facades\Auth;
use EndlessCycle\Api\Http\Controllers\UserController;

Route::middleware(['web'])->group(function () {
    Route::post('user/login', function (Request $request) {

        $requestJson = $request->getContent();
        $requestArr = json_decode($requestJson,true);
        $login = $requestArr["login"];

        return [""];
       
    });
});

/*
Route::middleware(['web'])->group(function () {
 
    Route::get('auth/login', [Auth0Controller::class, 'login']);
    
    Route::get('auth/callback', [Auth0Controller::class, 'callback']); 
    
    Route::get('auth/logout', [Auth0Controller::class, 'logout']);

});*/
/*
Route::get('user', function () {
    return 'Hello World';
});*/