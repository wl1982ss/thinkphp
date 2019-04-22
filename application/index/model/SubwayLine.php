<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/17
 * Time: 18:42
 */
namespace app\index\model;

use think\Model;

class SubwayLine extends Model
{
    public function subwayCompany()
    {
        // 线路 BELONGS TO 关联 公司
        return $this->belongsTo('SubwayCompany');
        //return $this->hasMany('SubwayCompany');
    }

    public function subwayStation()
    {
        // 线路 hasMany 关联 车站
        return $this->hasMany('SubwayStation');
    }
}