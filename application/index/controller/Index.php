<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User as UserModel;
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

        //$user = UserModel::get(['username'=>$name]);
        $user = new UserModel();

        $result = $user->login($name, $password);

        if($result)
        {
            switch($result->role_id){
                case 1:
                    var_dump("admin");
                    break;
                case 2:
                    var_dump("admin_subway");
                    break;
                case 3:
                    var_dump("admin_tangqiao");
                    break;
            }

            $this->view->engine->layout(false);
            $this->success('登录成功','user/index');
            //$this->redirect('user/index');

        }
        else
        {
            // 用户不存在
            $this->view->engine->layout(false);

            $this->error('用户不存在，请重新输入', '../index');
            //$this->redirect('../index');
        }


        //return 'Hello,'. $name. '! Your password is '. $password. '.';
    }

    /**
     * 退出登录
     *
     */
    public function logout()
    {
        $this->redirect('../index');
    }

    public function save($name='')
    {
        Session::set('user_name', $name);
        $this->success('Session设置成功');
    }
}
