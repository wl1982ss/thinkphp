<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/15
 * Time: 14:41
 */
namespace app\index\controller;

use think\Controller;

class MonitorCenter extends Controller
{
    /**
     * 上海地铁线路
     *
     * @return mixed
     */
    public function subway_map()
    {
        return $this->fetch();
    }

    /**
     * 车站查询
     *
     * @return mixed
     */
    public function station()
    {
        return $this->fetch();
    }

    /**
     * 仪表数据显示
     *
     * @return mixed
     */
    public function meter_display()
    {
        return $this->fetch();
    }

    /**
     * 监控统计
     *
     * @return mixed
     */
    public function statistics()
    {
        return $this->fetch();
    }
}