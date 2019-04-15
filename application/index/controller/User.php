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
use app\index\model\Role;
use app\index\model\User as UserModel;
use think\Controller;

class User extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        //$list = UserModel::all();
        $list = UserModel::paginate(3);

//        foreach($list as $user){
//            echo $user->nickname . '<br/>';
//            echo $user->email . '<br/>';
//            echo $user->birthday . '<br/>';
//            echo '-----------------------------------------<br/>';
//        }
        $this->assign('list', $list);
        $this->assign('count', count($list));
        $this->view->replace([
            '__PUBLIC__'    =>  '/thinkphp/public/static',
        ]);
        return $this->fetch();
    }

    /**
     * 用户列表
     *
     * @return mixed
     */
    public function user_list()
    {
        return $this->fetch();
    }

    /**
     * 角色列表
     *
     * @return mixed
     */
    public function role_list()
    {
        return $this->fetch();
    }

    // 新增用户数据
    public function add()
    {
        $user       = new UserModel;
        //$role       = Role::getByName('editor');
        //var_dump($role);
        $user->name =   'thinkphp';
        $user->password =   '123456';
        $user->nickname =   '流年';
        if($user->save()){
            // 写入关联数据
            $profile        =   new Profile;
            $profile->truename  =   '刘晨';
            $profile->birthday  =   '1977-03-05';
            $profile->address   =   '中国上海';
            $profile->email     =   'thinkphp@qq.com';
            $user->profile()->save($profile);

            //$user->roles()->save(['name' => 'editor', 'title' => '编辑']);

            return '用户新增成功';
        } else {
            return $user->getError();
        }
        /*
        if($user->allowField(true)->validate(true)->save(input('post.'))){
            return '用户['.$user->nickname .':' .$user->id . ']新增成功';
        } else {
            return $user->getError();
        }
        */
    }

    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhangsan@qq.com', 'birthday' => '1988-01-15'],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => '1990-09-19'],
        ];
        if($user->saveAll($list)){
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }

    // 读取用户数据
    public function read($id = '')
    {
        $user = UserModel::get($id);

        echo $user->name . '<br/>';
        echo $user->nickname . '<br/>';

        echo $user->profile->truename . '<br/>';
        echo $user->profile->email . '<br/>';
        //echo date('Y/m/d', $user->birthday) . '<br/>';
        echo $user->profile->birthday . '<br/>';

        echo $user->status . '<br/>';
        echo $user->create_time . '<br/>';
        echo $user->update_time . '<br/>';

        $books = $user->books;
        var_dump($books);
    }

    // 更新用户数据
    public function update($id)
    {
        $user       = UserModel::get($id);
        $user->name =   'framework';
        if($user->save()){
            // 更新关联数据
            $user->profile->email = 'liu21st@gmail.com';
            $user->profile->save();
            return '用户[ ' . $user->name . ' ] 更新成功';
        } else {
            return $user->getError();
        }

        /*
        $user->nickname =   '刘晨';
        $user->email    =   'liu21st@gmail.com';
        if(false !== $user->save()){
            return '更新用户成功';
        } else {
            return $user->getError();
        }*/

    }

    // 删除用户数据
    public function delete($id)
    {
        $user = UserModel::get($id);
        if($user->delete()){
            // 删除关联数据
            $user->profile->delete();
            return '用户[ ' . $user->name . ' ]删除成功';
        } else {
            return $user->getError();
        }
        /*
        if($user){
            $user->delete();
            return '删除用户成功';
        } else {
            return '删除的用户不存在';
        }
        */
    }

    // 创建用户数据页面
    public function create()
    {
        return view();
    }


    // 关联增加 book
    public function addBook()
    {

        $user = UserModel::get(5);
        //$book   =   new Book;
        //$book->title =   'ThinkPHP5快速入门';
        //$book->publish_time =   '2016-05-06';
        $book['title'] = 'test';
        $book['publish_time'] = '2019-04-11';
        $user->books()->save($book);
        return '添加Book成功';

    }


    public function addBooks()
    {
        $user = UserModel::get(5);
        $books = [
            ['title' => 'ThinkPHP5快速入门', 'publish_time' => '2016-05-06'],
            ['title' => 'ThinkPHP5开发手册', 'publish_time' => '2016-03-06'],
        ];
        $user->books()->saveAll($books);
        return '添加Book成功';
    }
}