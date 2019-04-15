<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/15
 * Time: 15:42
 */
namespace app\index\controller;

use think\Controller;

class DeviceManage extends Controller
{
    /**
     * 地铁摄像头分布图
     *
     * @return mixed
     */
    public function subway_camera()
    {
        return $this->fetch();
    }

    /**
     * 显示车站摄像头分布图
     *
     * @return mixed
     */
    public function station_camera()
    {
        return $this->fetch();
    }

    /**
     * 监控室摄像头列表
     *
     * @return mixed
     */
    public function camera_room()
    {
        return $this->fetch();
    }

    /**
     * 摄像头控制
     *
     * @return mixed
     */
    public function camera_control()
    {
        return $this->fetch();
    }

    /**
     * 摄像头列表
     *
     * @return mixed
     */
    public function camera_list()
    {
        return $this->fetch();
    }
}