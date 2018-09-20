<?php namespace Simcript\Cuter\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use Simcript\Cuter\BusinessLogics\LinkBL;
class CuterCtrl extends Controller
{
    private $_inputParamName = 'dj';     //Data JSON
    private $_dataSectionName = 'Result';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function inputData(Request $r){
        $jsonData = $r->all()[$this->_inputParamName];
        return json_decode($jsonData, true);
    }

    public function outputPacker($code, $data){
        $result ['meta']['package name'] = 'Cuter';
        $result ['meta']['code'] = $code;
        $result [$this->_dataSectionName] = $data;
        return json_encode($result);
    }

    public function createNewURL($uri){
        $t = str_split((string)(time()));
        $characters = str_split('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        shuffle($characters);
        $randomString = '';
        for ($i = 0; $i < count($t); $i++) {
            $randomString .= $characters[$t[$i]];
        }
        return $randomString;
    }

}
