<?php namespace Simcript\Cuter\Controllers;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: Controller for Link Model
 */

use Illuminate\Http\Request;
use Simcript\Cuter\BusinessLogics\LinkBL;
use Simcript\Cuter\BusinessLogics\VisitorBL;
use Exception;
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
         try {
             $i = 0;
             do {
                 $url = $this->createNewURL($i++);
             } while (!LinkBL::uniqueCheck($url));
             $data = [
                 'base_url' => $this->_baseUrl,
                 'url' => $url,
                 'link' => $this->data['uri'],
                 'registrant_ip' => $this->data['ip'],
             ];
             $result = LinkBL::createNew($data);
             $shrtLink['shortUrl'] = $result->base_url . $result->url;
             return $this->outputPacker(1, $shrtLink);
         } catch (\Exception $e) {
             return $this->outputPacker($e->getMessage());
         }
    }

    /**
     * find link for redirect
     * @param $url contain short url, $redirect for redirect to link
     * @return shortUrl
     */
     public function pastLink(){
         try {
             $url = $this->data['url'];
             $result = LinkBL::find($url);
             if (!$result) throw new Exception(-1);
             $visitorData = [
                 'link_id' => $result->id,
                 'referrer' => $this->data['referrer'],
                 'ip'  => $this->data['ip'],
                 'created_at' => date('Y-m-d H:i:s'),
             ];
             $newVisit = VisitorBL::createNew($visitorData);
             if (!$newVisit) throw new Exception(-2);
             if ($this->data['redirect']) {
                 return redirect($result->link);
             }
             return $this->outputPacker(2, $result);
         } catch (\Exception $e) {
             return $this->outputPacker($e->getMessage());
         }

     }
}
