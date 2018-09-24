<?php namespace Simcript\Cuter\Controllers;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: Base controller file for Cuter package.
 */

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Simcript\Cuter\BusinessLogics\LinkBL;
class CuterCtrl extends Controller
{
    private $_inputParamName = 'dj';        //Name input parameter which filled with input data. dj = Data JSON
    private $_dataSectionName = 'Result';   //Name output parameter which filled with input data. dj = Data JSON
    private $_baseUrl = 'http://cuter.ml/'; //Base url for url short shortened

    /**
     * Gat and unpack inpute data
     * @param Request
     * @return Array
     */
    public function inputData(Request $r){
        $inputData = $r->all();
        if (isset($inputData[$this->_inputParamName])) {
            $jsonData = $inputData[$this->_inputParamName];
            $jsonData = json_decode($jsonData, true);
            $jsonData['ip'] = $r->ip();
            $jsonData['referrer'] = $r->server('HTTP_REFERER');
            return $jsonData;
        }
    }

    /**
     * unpack and send output data
     * @param $code for message and output, $data contain output data
     * @return JSON
     */
    public function outputPacker($code, $data = null){
        $result ['meta']['package'] = config('cuter.packageName');
        $result ['meta']['code'] = $code;
        if ($data !== null) {
            $result[$this->_dataSectionName] = $data;
        }
        return json_encode($result);
    }

    /**
     * create unique string for url
     * @param $tryNo number of try
     * @return JSON
     */
    public function createNewURL($tryNo){
        $len = config('cuter.length');  //length url shortened
        $changed = false;
        if ($tryNo > 7){
            $len += 1;
            $changed = ($len < 10) ? true : false;
        }
        if (($tryNo < 3) || $changed) {
            $t = str_split((string)(time()));
            $characters = str_split(config('cuter.alphabet'));
            shuffle($characters);
            $randomString = '';
            for ($tryNo = 0; $tryNo < $len; $tryNo++) {
                $randomString .= $characters[$t[$tryNo]];
            }
        } else {
            $randomString = uniqid('sc');
            if ($len < 14) {
                $randomString = substr($randomString, 0, $len);
            } else {
                $randomString = uniqid('sc', true);
            }
        }
        return $randomString;
    }

}
