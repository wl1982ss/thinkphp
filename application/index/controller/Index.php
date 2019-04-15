<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller
{
    public function index($name = 'World')
    {

        $this->view->engine->layout(false);
        return $this->fetch();
    }

    public function login($name = 'thinkphp', $city = '')
    {
        //$this->assign('name', $name);
        //return $this->fetch();
        $name       =   $_POST['name'];
        $password   =   $_POST['password'];

        if($name == 'admin')
        {

        }
        else if($name == 'admin_subway')
        {

        }
        else if($name == 'tangqiao')
        {

        }
        else
        {

        }

        $this->view->engine->layout(false);
        //$this->success('登录成功','user/index');
        $this->redirect('user/index');
        //return 'Hello,'. $name. '! Your password is '. $password. '.';
    }

    /**
     * 退出登录
     *
     */
    public function logout()
    {
        $this->redirect('./index');
    }

    public function save($name='')
    {
        Session::set('user_name', $name);
        $this->success('Session设置成功');
    }
}
