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

    // birthday 读取器
    protected function getBirthdayAttr($birthday)
    {
        return date('Y-m-d', $birthday);
    }

    // user_birthday 读取器
    protected function getUserBirthdayAttr($value, $data)
    {
        return date('Y-m-d', $data['birthday']);
    }

    // birthday 修改器
    protected function setBirthdayAttr($value)
    {
        return strtotime($value);
    }

    // status 属性读取器
    protected function getStatusAttr($value)
    {
        $status = [-1 => '删除', 0 => '禁用', 1 => '正常', 2 => '待审核'];
        return $status[$value];
    }

    // email 查询
    protected function scopeEmail($query, $email = '')
    {
        $query->where('email', $email);
    }

    // status 查询
    protected function scopeStatus($query)
    {
        $query->where('status', 1);
    }

    // 全局查询范围
    protected static function base($query)
    {
        // 查询状态为1的数据
        //$query->where('status', 1);
    }

    // 定义关联方法
    public function profile()
    {
        // 用户HAS ONE档案关联
        return $this->hasOne('Profile');
    }

    // 定义一对多关联方法
    public function books()
    {
        return $this->hasMany('Book');
    }

    // 定义多对多关联
    public function roles()
    {
        // 用户 BELONGS_TO_MANY 角色
        return $this->belongsToMany('Role');
    }

}