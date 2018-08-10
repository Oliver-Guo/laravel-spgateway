<?php
/**
 *
 *
 * User: Chu
 * Date: 2018/1/9
 * Time: 下午3:51
 */

namespace Oliverkuo\Spgateway\Facades;

use Illuminate\Support\Facades\Facade;

class Refund extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'refund';
    }
}
