<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/9
 * Time: 18:18
 */

namespace app\index\controller;

class HelloWorld
{
    public function index($name = 'World')
    {
        return 'Hello,' .$name .'!';
    }
}