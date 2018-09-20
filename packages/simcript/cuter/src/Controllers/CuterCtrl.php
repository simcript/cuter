<?php namespace Simcript\Cuter\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use Simcript\Cuter\BusinessLogics\LinkBL;
class CuterCtrl extends Controller
{
    private $_inputParamName = 'dj';     //Data JSON
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function inputData(Request $r){
        $jsonData = $r->all()[$this->_inputParamName];
        return json_decode($jsonData, true);
    }

}
