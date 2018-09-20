<?php namespace Simcript\Cuter\BusinessLogics;
use Simcript\Cuter\Models\Link;

class LinkBL
{

    /**
     * create new url link
     */
     public static function createNew($data){
         return Link::create($data);
     }
}
