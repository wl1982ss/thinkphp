<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/17
 * Time: 18:02
 */
namespace app\index\model;
use think\Model;

class SubwayCompany extends Model
{
    // 定义关联方法
    public function lines()
    {
        //return $this->hasMany('SubwayLine');
        return $this->belongsTo('SubwayLine');
    }


}