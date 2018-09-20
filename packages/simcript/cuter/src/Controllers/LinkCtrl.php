<?php namespace Simcript\Cuter\Controllers;
use Illuminate\Http\Request;

use Simcript\Cuter\BusinessLogics\LinkBL;
class LinkCtrl extends CuterCtrl
{
    protected $data = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $r)
    {
        $this->data = $this->inputData($r);
    }

    /**
     * create new url link
     */
     public function shortenerLink(){
         $data = [
             'url' => $this->createNewURL($this->data['uri']),
             'link' => $this->data['uri'],
             'registrantIp' => '192.10.255.23',
         ];
         $result = LinkBL::createNew($data);
         return $this->outputPacker(1, $result);
     }
}
