<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/11
 * Time: 11:25
 */
namespace app\index\model;
use think\Model;
use think\Request;

class User extends Model
{
    // 设置完整的数据表（包含前缀）
    protected $table = 'sc_user';

    public function login($username, $password)
    {

        $user = $this->where(array('username' => $username))->find();

        if(empty($user) || $user['password'] != $password){
            return False;
        }
        $request = Request::instance();
        $data['login_time'] = date('Y-m-d H:i:s');
        $data['login_ip']   =   $request->ip();
        $this->where(array('id' => $user['id']))->update($data);
        return $user;
    }


    // 定义关联
    public function role()
    {
        // 用户 hasOne 角色
        return $this->belongsTo('Role');
    }

}