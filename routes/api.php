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

    //Route::middleware('auth:api')->get('/user', function (Request $request) {
    //    return $request->user();
    //});

//    Route::get('/usertype', 'Api\GeneralController@GetUserType')->name('GetUserType');
//    Route::post('/usertype', 'Api\GeneralController@UserType')->name('UserType');
//    Route::post('/reg', 'Api\RegisterController@ApiRegister')->name('ApiRegister');
    Route::post('/login', 'Api\LoginController@LoginAuth')->name('LoginAuth');
//    Route::post('/user', 'Api\GeneralController@GetUser')->name('GetUser');
//    Route::get('/payment', 'Api\PaymentController@GetPaymentController')->name('GetPaymentController');


//    Route::group(['prefix'=>'balance'], function(){
//        Route::get('/', 'Api\BalanceController@Balance')->name('Balance');
//        Route::post('/req', 'Api\BalanceController@RequsetBalance')->name('RequsetBalance');
//        Route::get('/{auth_id}/check','Api\BalanceController@BalanceCheck')->name('BalanceCheck');
//
//    });




