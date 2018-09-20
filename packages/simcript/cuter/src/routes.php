<?php

/*
|--------------------------------------------------------------------------
| Simcript\Cuter Routes   =   sc1
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => '/sc1', 'namespace' => 'Simcript\Cuter\Controllers'], function () {
  Route::get('/tstw', 'LinkCtrl@shortenerLink');
    // $router->get('test', '');
});
