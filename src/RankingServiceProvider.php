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
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RankingManage::class, function () {
            return new RankingManage($this->app);
        });

        $this->app->alias(RankingManage::class, 'ranking');
    }
}
