<?php
/**
 * @copyright Copyright (c) 2018 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larvacent.com/
 * @license http://www.larvacent.com/license/
 */

namespace Larva\Ranking;

/**
 * Class RankingManage
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class RankingManage
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new filesystem manager instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * 获取榜单实例
     * @param string $ranking
     * @return RankingAdapter
     */
    public function get($ranking)
    {
        return new RankingAdapter($ranking, $this->app['config']["services.ranking.redis"] ?? 'default');
    }
}