<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/18
 * Time: 9:58
 */
namespace app\index\model;

use think\Model;

class SubwayCamera extends Model
{
    // 定义关联
    public function station()
    {
        return $this->belongsTo('SubwayStation');
    }
}