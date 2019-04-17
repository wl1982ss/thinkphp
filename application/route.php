<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
        'id'    =>  '\d+',
        'year'  =>  '\d{4}',
        'month' =>  '\d{2}',
    ],

    'user/index'    =>  'user/index',
    'user/create'   =>  'index/user/create',
    'user/user_list'    =>  'user/user_list',
    'user/role_list'    =>  'user/role_list',
    'user/add_role'     =>  'user/add_role',
    'user/do_add_role'  =>  'user/do_add_role',
    'user/edit_role/:id'    =>  'user/edit_role',
    'user/do_edit_role/:id' =>  'user/do_edit_role',
    'user/delete_role/:id'  =>  'user/delete_role',
    'user/add_user'      =>  'user/add_user',
    'user/do_add_user'  =>  'user/do_add_user',
    'user/delete_user/:id'  =>  'user/delete_user',
    'user/edit_user/:id'    =>  'user/edit_user',
    'user/do_edit_user/:id' =>  'user/do_edit_user',
    'user/add_list' =>  'index/user/addList',
    'user/edit/:id' =>  'user/edit',
    'user/update/:id'   =>  'index/user/update',
    'user/delete/:id'   =>  'index/user/delete',
    'user/:id'          =>  'index/user/read',

    'login'         =>  'index/login',
    'logout'        =>  'index/logout',

    'monitorCenter' =>  'monitorCenter/subway_map',
    'monitorCenter/subway_map'  =>  'monitorCenter/subway_map',
    'monitorCenter/station'     =>  'monitorCenter/station',
    'monitorCenter/meter_display'   =>  'monitorCenter/meter_display',
    'monitorCenter/statistics' =>  'monitorCenter/statistics',

    'deviceManage/subway_camera'    =>  'deviceManage/subway_camera',
    'deviceManage/station_camera'   =>  'deviceManage/station_camera',
    'deviceManage/camera_room'      =>  'deviceManage/camera_room',
    'deviceManage/camera_control'   =>  'deviceManage/camera_control',
    'deviceManage/camera_list'      =>  'deviceManage/camera_list',
    'deviceManage/meter_set'        =>  'deviceManage/meter_set',

    'subwayManage/company_list'     =>  'subwayManage/company_list',
    'subwayManage/add_company'      =>  'subwayManage/add_company',
    'subwayManage/do_add_company'   =>  'subwayManage/do_add_company',
    'subwayManage/edit_company/:id'     =>  'subwayManage/edit_company',
    'subwayManage/do_edit_company/:id'  =>  'subwayManage/do_edit_company',
    'subwayManage/delete_company/:id'   =>  'subwayManage/delete_company',

    'subwayManage/line_list'        =>  'subwayManage/line_list',
    'subwayManage/add_line'         =>  'subwayManage/add_line',
    'subwayManage/do_add_line'      =>  'subwayManage/do_add_line',
    'subwayManage/edit_line/:id'        =>  'subwayManage/edit_line',
    'subwayManage/do_edit_line/:id'     =>  'subwayManage/do_edit_line',
];
