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
        dd('$this->data');
        $this->data = $this->inputData($r);
    }

    /**
     * create new url link
     */
     public function shortenerLink(){

         $data = [
             'url' => 'fna',
             'link' => 'http://fna.ir',
             'registrantIp' => '192.10.255.23',
         ];
         return LinkBL::createNew($data);
     }
}
