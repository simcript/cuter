<?php

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: Routes for cuter laravel package.
 */

Route::group(['prefix' => config('cuter.apiPerfix'), 'namespace' => 'Simcript\Cuter\Controllers'], function () {
  Route::get('/cut', 'LinkCtrl@shortenerLink')->name('sc_cut');     // Link Shortener, input: uri
  Route::get('/past', 'LinkCtrl@pastLink')->name('sc_past');     // Link Shortener, input: url, redirect
});
