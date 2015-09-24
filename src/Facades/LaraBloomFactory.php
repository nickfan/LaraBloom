<?php
/**
 * Description
 *
 * @project mulsite
 * @package mulsite
 * @author nickfan <nickfan81@gmail.com>
 * @link http://www.axiong.me
 * @version $Id$
 * @lastmodified: 2015-09-21 09:12
 *
 */

namespace Nickfan\LaraBloom\Facades;

use Illuminate\Support\Facades\Facade;

class LaraBloomFactory extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nickfan\LaraBloom\LaraBloomFactory';
    }

}
