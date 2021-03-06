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

    'do_login'         =>  'index/do_login',
    'do_logout'        =>  'index/do_logout',

    'monitorCenter/subway_map'  =>  'monitorCenter/subway_map',
    'monitorCenter/station'     =>  'monitorCenter/station',
    'monitorCenter/meter_display'   =>  'monitorCenter/meter_display',
    'monitorCenter/statistics' =>  'monitorCenter/statistics',
    'monitorCenter/statistics_station/:id'  =>  'monitorCenter/statistics_station',


    'deviceManage/subway_camera'    =>  'deviceManage/subway_camera',
    'deviceManage/station_camera'   =>  'deviceManage/station_camera',
    'deviceManage/camera_room'      =>  'deviceManage/camera_room',
    'deviceManage/camera_control'   =>  'deviceManage/camera_control',
    'deviceManage/camera_list'      =>  'deviceManage/camera_list',
    'deviceManage/add_camera'       =>  'deviceManage/add_camera',
    'deviceManage/do_add_camera'    =>  'deviceManage/do_add_camera',
    'deviceManage/edit_camera/:id'      =>  'deviceManage/edit_camera',
    'deviceManage/do_edit_camera/:id'   =>  'deviceManage/do_edit_camera',
    'deviceManage/delete_camera/:id'    =>  'deviceManage/delete_camera',
    'deviceManage/meter_list'       =>  'deviceManage/meter_list',
    'deviceManage/add_meter'   =>  'deviceManage/add_meter',
    'deviceManage/do_add_meter'    =>  'deviceManage/do_add_meter',
    'deviceManage/edit_meter/:id'  =>  'deviceManage/edit_meter',
    'deviceManage/do_edit_meter/:id'   =>  'deviceManage/do_edit_meter',
    'deviceManage/delete_meter/:id'    =>  'deviceManage/delete_meter',

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
    'subwayManage/delete_line/:id'      =>  'subwayManage/delete_line',
    'subwayManage/station_list'     =>  'subwayManage/station_list',
    'subwayManage/add_station'      =>  'subwayManage/add_station',
    'subwayManage/do_add_station'   =>  'subwayManage/do_add_station',
    'subwayManage/edit_station/:id' =>  'subwayManage/edit_station',
    'subwayManage/do_edit_station/:id'  =>  'subwayManage/do_edit_station',
    'subwayManage/delete_station/:id'   =>  'subwayManage/delete_station',
];
