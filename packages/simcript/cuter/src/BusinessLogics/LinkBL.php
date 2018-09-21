<?php namespace Simcript\Cuter\BusinessLogics;

/**
 * Created by AliA_MehR <alia_mehr@yahoo.com>
 * Date: Friday - 2018 21 September 15:30:12
 * Description: BusinessLogic file for Link Model
 */

use Simcript\Cuter\Models\Link;

class LinkBL
{

    /**
     * create new url link
     * @param $data contain base_url, url, link, registrant_ip
     * @return Link
     */
     public static function createNew($data){
         return Link::create($data);
     }

    /**
     * check unique url
     * @param $url
     * @return Boolean
     */
     public static function uniqueCheck($url){
         $links = Link::where('url', $url)->get();
         foreach ($links as $lnk) {
             if ($lnk->url === $url) {
                 return false;
             }
         }
         return true;
     }

    /**
     * get url data
     * @param $url
     * @return Boolean
     */
     public static function find($url){
         $links = Link::where('url', $url)->get();
         foreach ($links as $lnk) {
             if ($lnk->url === $url) {
                 return $lnk;
             }
         }
         return null;
     }
}
