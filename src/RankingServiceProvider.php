<?php
/**
 * @copyright Copyright (c) 2018 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larvacent.com/
 * @license http://www.larvacent.com/license/
 */

namespace Larva\Ranking;

use Illuminate\Support\ServiceProvider;

/**
 * Ranking 服务提供者
 */
class RankingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ranking', function ($app) {
            return new RankingManage($app);
        });
    }
}
