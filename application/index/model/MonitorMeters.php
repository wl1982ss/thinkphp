<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/18
 * Time: 10:40
 */
namespace app\index\model;

use think\Model;

class MonitorMeters extends Model
{
    // 定义关联
    public function station()
    {
        return $this->belongsTo('SubwayStation');
    }
}