<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/19
 * Time: 16:47
 */
namespace app\index\model;

use think\Model;

class SubwayStation extends Model
{
    public function subwayLine()
    {
        // 车站 BELONGS TO 关联 线路
        return $this->belongsTo('SubwayLine');

    }
}