<?php
/**
 * @copyright Copyright (c) 2018 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larvacent.com/
 * @license http://www.larvacent.com/license/
 */

namespace Larva\Ranking\Facades;

use Illuminate\Support\Facades\Facade;
use Larva\Ranking\RankingManage;

/**
 * Class Ranking
 * @mixin RankingManage
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Ranking extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ranking';
    }
}