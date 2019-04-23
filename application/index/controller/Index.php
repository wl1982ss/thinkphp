<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\User as UserModel;
use think\Session;

class Index extends Controller
{
    /**
     * 系统登录界面主页
     * @param string $name
     * @return mixed
     */
    public function index($name = 'World')
    {

        $this->view->engine->layout(false);
        return $this->fetch();
    }

    /**
     * 登录
     *
     * @param string $name
     * @param string $city
     */
    public function do_login($name = 'thinkphp', $city = '')
    {

        $name       =   $_POST['name'];
        $password   =   $_POST['password'];

        $user = new UserModel();

        $result = $user->login($name, $password);

        if($result)
        {
            $redirect_url = "";

            switch($result->role_id){
                case 1:
                    //var_dump("admin");
                    $redirect_url = "user/index";
                    break;
                case 2:
                    //var_dump("admin_subway");
                    $redirect_url = "monitorCenter/subway_map";
                    break;
                case 4:
                    //var_dump("admin_tangqiao");
                    $redirect_url = "monitorCenter/statistics_station/10";
                    break;
            }

            session('uid', $result->id);
            session('useranem', $result->username);
            session('role_id', $result->role_id);
            session('email', $result->email);
            session('login_time', $result->login_time);

            $this->view->engine->layout(false);
            $this->success('登录成功', $redirect_url);

        }
        else
        {
            // 用户不存在
            $this->view->engine->layout(false);

            $this->error('用户不存在，请重新输入', '../index');

        }

    }

    /**
     * 退出登录
     *
     */
    public function do_logout()
    {
        session(null);
        session_destroy();

        $this->redirect('../index');
    }

    public function save($name='')
    {
        Session::set('user_name', $name);
        $this->success('Session设置成功');
    }
}
