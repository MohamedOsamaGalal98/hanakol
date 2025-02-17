<?php

use Illuminate\Support\Facades\Route;
use App\CentralLogics\Helpers;

Route::group(['namespace' => 'Api\V2'], function () {
    Route::post('ls-lib-update', 'LsLibController@lib_update');
});

Route::get('/getFirebaseAccessToken', [Helpers::class, 'getFirebaseAccessToken']);
