<?php
/**
 * Description
 *
 * @project LaraBloom
 * @package LaraBloom
 * @author nickfan <nickfan81@gmail.com>
 * @link http://www.axiong.me
 * @version $Id$
 * @lastmodified: 2015-09-24 11:41
 *
 */

namespace Nickfan\LaraBloom;

use Bloom;

class LaraBloom
{
    protected static $defaultParams=[];
    public function __construct($initParams=[]){
        self::$defaultParams +=$initParams;
    }
    public function create($params=[]){
        $params+=self::$defaultParams;
        return new Bloom($params);
    }
}