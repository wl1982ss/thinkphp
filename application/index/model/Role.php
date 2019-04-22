<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/12
 * Time: 10:30
 */
namespace app\index\model;
use think\Model;

class Role extends Model
{
    public function users()
    {
        // 角色 BELONGS_TO_MANY 用户
        return $this->hasMany('User');
    }
}