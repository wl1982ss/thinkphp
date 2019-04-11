<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/11
 * Time: 16:00
 */
namespace app\index\model;
use think\Model;

class Profile extends Model
{
    protected $type     = [
        'birthday'  =>  'timestamp:Y-m-d',
    ];

    public function user()
    {
        // 档案 BELONGS TO 关联用户
        return $this->belongsTo('User');
    }
}