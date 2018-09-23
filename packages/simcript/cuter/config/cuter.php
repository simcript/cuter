<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Simcript\Cuter laravel package confiqure file
    |--------------------------------------------------------------------------
    |
    | This option controls the default value for Cuter package.
    | You can personalize these options for yourself.
    |
    */

    'packageName' => 'Cuter',
    'version' => '1.0',
    'inputIn' => 'dj',
    'responseIn' => 'Result',
    'apiPerfix' => 'sc1',        //Simcript\Cuter 1.0
    'baseURL' => 'http://cuter.tst/',    //max = 20 char
    //created short url by this alphabet.
    'alphabet' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',     // min = 10 char
    //length short url
    'length' => 5,     //max = 10
];
