<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/11
 * Time: 10:53
 */
namespace app\index\controller;

use app\index\model\Profile;
use app\index\model\Book;

use app\index\model\User as UserModel;
use app\index\model\Role as RoleModel;
use think\Controller;

class User extends Controller
{

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->view->replace([
            '__PUBLIC__'    =>  '/thinkphp/public',
        ]);
    }

    // 获取用户数据列表并输出
    public function index()
    {
        //$list = UserModel::all();
        $list = UserModel::paginate(3);

        $this->assign('list', $list);
        $this->assign('count', count($list));
        $this->assign('left_menu', '');
        return $this->fetch();
    }

    /**
     * 用户列表
     *
     * @return mixed
     */
    public function user_list()
    {

        $list = UserModel::paginate(10);

        $this->assign('list', $list);
        $this->assign('count', count($list));
        $this->assign('left_menu', 'user_list');

        return $this->fetch();
    }

    /**
     * 角色列表
     *
     * @return mixed
     */
    public function role_list()
    {
        $list = RoleModel::all();

        $this->assign('list', $list);
        $this->assign('count', count($list));
        $this->assign('left_menu', 'role_list');

        return $this->fetch();
    }

    /**
     * 增加新角色
     *
     * @return mixed
     */
    public function add_role()
    {
        $this->assign('left_menu', 'role_list');
        return $this->fetch();
    }

    /**
     * 提交表单，增加新角色
     */
    public function do_add_role()
    {
        $data['role_name'] = $_POST['role_name'];
        $data['description'] = $_POST['description'];

        RoleModel::create($data);

        $this->redirect('user/role_list');

    }

    /**
     * 修改角色信息
     *
     * @param $id
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function edit_role($id)
    {
        $role = RoleModel::get($id);
        $this->assign('role', $role);
        $this->assign('left_menu', 'role_list');
        return $this->fetch();
    }

    /**
     * 保存修改角色信息
     *
     * @param $id
     */
    public function do_edit_role($id)
    {
        $data['role_name'] = $_POST['role_name'];
        $data['description'] = $_POST['description'];
        RoleModel::update($data, array('id' => $id));
        $this->redirect('user/role_list');
    }

    public function delete_role($id)
    {
        $role = RoleModel::get($id);
        if($role)
        {
            //删除该角色
            $role->delete();

            $this->redirect('user/role_list');
        }
        else
        {
            //该角色不存在
            $this->redirect('user/role_list');
        }
    }

    /**
     * 添加新用户
     *
     * @return mixed
     */
    public function add_user()
    {
        $this->assign('left_menu', 'user_list');
        return $this->fetch();
    }

    /**
     * 保存添加新用户的信息
     *
     * @return array|string
     */
    public function do_add_user()
    {
        $data['username'] = $_POST['username'];
        $data['mobile'] = $_POST['mobile'];
        $data['email'] = $_POST['email'];
        $data['role_id'] = 1;
        $data['password'] = $_POST['password'];

        UserModel::create($data);
        $this->redirect('user/user_list');
    }

    /**
     * 删除用户
     *
     * @param $id
     * @throws \think\exception\DbException
     */
    public function delete_user($id)
    {
        $user = UserModel::get($id);
        if($user)
        {
            //删除该用户
            $user->delete();

            $this->redirect('user/user_list');
        }
        else
        {
            //该用户不存在
            $this->redirect('user/user_list');
        }
    }

    /**
     * 编辑用户信息
     *
     * @param $id
     */
    public function edit_user($id)
    {
        $user = UserModel::get($id);
        $this->assign('user', $user);
        $this->assign('left_menu', 'user_list');
        return $this->fetch();
    }

    /**
     * 更新用户信息
     *
     * @param $id
     */
    public function do_edit_user($id)
    {
        $data['username'] = $_POST['username'];
        $data['mobile'] =   $_POST['mobile'];
        $data['email']  =   $_POST['email'];
        $data['role_id']    =   1;
        $data['password']   =   $_POST['password'];

        UserModel::update($data, array('id' => $id));
        $this->redirect('user/user_list');
    }


}