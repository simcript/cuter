<?php

/*
|--------------------------------------------------------------------------
| Simcript\Cuter Routes   =   sc1
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => '/sc1', 'namespace' => 'Simcript\Cuter'], function () {
  Route::get('/tst', 'LinkCtrl@shortenerLink');
    // $router->get('test', '');
});