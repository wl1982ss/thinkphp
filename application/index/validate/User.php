<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/11
 * Time: 14:34
 */
namespace app\index\validate;
use think\Validate;

class User extends Validate
{
    // 验证规则
    protected $rule = [
        'nickname'  => ['require', 'min'=>5, 'token'],
        'email'     => ['require', 'email'],
        'birthday'  => ['dateFormat' => 'Y-m-d'],
    ];
}