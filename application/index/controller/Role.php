<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/12
 * Time: 13:20
 */
namespace app\index\controller;

use app\index\model\Role as RoleModel;

use think\Controller;

class Role extends Controller{

    // 关联新增数据
    public function add()
    {
        $role = new RoleModel;
        $role->save(['name' => 'editor', 'title' => '编辑']);
        return '角色新增成功';
    }

    // 批量增加角色数据
    public function addList()
    {
        $role = new RoleModel;
        $role->saveAll([
            ['name' => 'leader', 'title' => '领导'],
            ['name' => 'admin', 'title' => '管理员'],
        ]);
        return '批量增加用户角色成功';
    }
}