<?php namespace Simcript\Cuter\Controllers;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: Controller for Link Model
 */

use Illuminate\Http\Request;
use Simcript\Cuter\BusinessLogics\LinkBL;

class LinkCtrl extends CuterCtrl
{
    protected $data = null;         // for save input data filled by inputData

    /**
     * Create a new controller instance.
     * @param Request
     * @return void
     */
    public function __construct(Request $r){
        $this->_dataSectionName = config('cuter.responseIn');
        $this->_inputParamName = config('cuter.inputIn');
        $this->_baseUrl = config('cuter.baseURL');
        $this->data = $this->inputData($r);
    }

    /**
     * Create new url link
     * @param $uri
     * @return shortUrl
     */
     public function shortenerLink(){
         $i = 0;
         do {
             $url = $this->createNewURL($i++);
         } while (!LinkBL::uniqueCheck($url));
         $data = [
             'base_url' => $this->_baseUrl,
             'url' => $url,
             'link' => $this->data['uri'],
             'registrant_ip' => '192.10.255.23',
         ];
         $result = LinkBL::createNew($data);
         $shrtLink['shortUrl'] = $result->base_url . $result->url;
         return $this->outputPacker(1, $shrtLink);
     }
}
