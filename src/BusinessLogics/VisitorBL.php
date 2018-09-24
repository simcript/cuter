<?php namespace Simcript\Cuter\BusinessLogics;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: BusinessLogic file for Visitor Model
 */

use Simcript\Cuter\Models\Visitor;

class VisitorBL
{

    /**
     * create new Visitor data
     * @param $data contain base_url, url, link, registrant_ip
     * @return Visitor
     */
     public static function createNew($data){
         return Visitor::create($data);
     }
}
