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
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'hello/[:name]' => 'index/hello',

    'blog-<year>-<month>' => 'blog/archive',
    'blog/:id'          => 'blog/get',
    'blog/:name'        => 'blog/read',

    'user/index'    =>  'user/index',
    'user/create'   =>  'index/user/create',
    'user/user_list'    =>  'user/user_list',
    'user/role_list'    =>  'user/role_list',
    'user/add'      =>  'index/user/add',
    'user/add_list' =>  'index/user/addList',
    'user/update/:id'   =>  'index/user/update',
    'user/delete/:id'   =>  'index/user/delete',
    'user/:id'          =>  'index/user/read',
    'user/addBook'  =>  'index/user/addBook',
    'user/addBooks' =>  'index/user/addBooks',

    'role/add'      =>  'index/role/add',
    'role/addList'  =>  'index/role/addList',

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
];
