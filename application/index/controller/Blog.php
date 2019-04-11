<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/9
 * Time: 18:40
 */
namespace app\index\controller;

class Blog
{
    public function get($id)
    {
        return '查看 id=' . $id . '的内容';
    }

    public function read($name)
    {
        return '查看 name=' . $name . '的内容';
    }

    public function archive($year, $month)
    {
        return '查看' . $year . '/' . $month . '的归档内容';
    }
}