<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/12
 * Time: 15:49
 */
namespace app\index\model;

use think\Model;

class Blog extends Model
{
    protected $autoWriteTimestamp = true;
    protected $insert   =   [
        'status'    =>  1,
    ];

    protected $field = [
        'id'    =>  'int',
        'create_time'   =>  'int',
        'update_time'   =>  'int',
        'name', 'title', 'content',
    ];
}