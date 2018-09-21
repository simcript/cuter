<?php

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: Routes for cuter laravel package.
 */

Route::group(['prefix' => config('cuter.apiPerfix'), 'namespace' => 'Simcript\Cuter\Controllers'], function () {
  Route::post('/cut', 'LinkCtrl@shortenerLink');     // Link Shortener, input: uri
  Route::post('/past', 'LinkCtrl@pastLink');     // Link Shortener, input: url, redirect
});
