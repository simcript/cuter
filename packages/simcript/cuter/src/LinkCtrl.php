<?php

namespace Simcript\Cuter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class LinkCtrl extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * create new url link
     */
     public function shortenerLink(){
         return 'test';
     }
}
