<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/15
 * Time: 14:41
 */
namespace app\index\controller;

use app\index\model\MonitorMeters as MonitorMetersModel;
use think\Controller;

class MonitorCenter extends Controller
{

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->view->replace([
            '__PUBLIC__'    =>  '/thinkphp/public',
        ]);
    }

    /**
     * 上海地铁线路
     *
     * @return mixed
     */
    public function subway_map()
    {
        $this->assign('left_menu', 'subway_map');
        return $this->fetch();
    }

    /**
     * 车站查询
     *
     * @return mixed
     */
    public function station()
    {
        return $this->fetch();
    }

    /**
     * 仪表数据显示
     *
     * @return mixed
     */
    public function meter_display()
    {
        return $this->fetch();
    }

    /**
     * 监控统计
     *
     * @return mixed
     */
    public function statistics()
    {
        $meters = MonitorMetersModel::all();

        $this->assign('meter_list', $meters);
        $this->assign('left_menu', 'statistics');
        return $this->fetch();
    }

    /**
     * 增加新仪表
     *
     * @return mixed
     */
    public function add_meter()
    {
        $this->assign('left_menu', 'statistics');
        return $this->fetch();
    }

    /**
     * 保存新仪表信息
     */
    public function do_add_meter()
    {
        $data['name']   =   $_POST['name'];
        $data['type']   =   $_POST['type'];
        $data['subway_monitor_room_id'] =   $_POST['subway_monitor_room_id'];
        $data['station_id'] =   $_POST['station_id'];
        $data['max_normal'] =   $_POST['max_normal'];
        $data['min_normal'] =   $_POST['min_normal'];
        $data['description']    =   $_POST['description'];

        $base64_image_content = $_POST['recg_image'];
        //将base64编码转换为图片保存
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
            $type = $result[2];

            $new_file = "../public/uploads/";
            if (!file_exists($new_file)) {
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file);
            }

            $img = time() . ".{$type}";
            $new_file = $new_file . $img;

            //将图片保存到指定的位置
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {

                $data['recg_image'] = $new_file;
            }
        }

        MonitorMetersModel::create($data);
        $this->redirect('monitorCenter/statistics');
    }

    public function edit_meter($id)
    {
        $meter_info = MonitorMetersModel::get($id);
        $this->assign('meter_info', $meter_info);
        $this->assign('left_menu', 'statistics');
        return $this->fetch();
    }

    public function do_edit_meter($id)
    {
        $data['name']   =   $_POST['name'];
        $data['type']   =   $_POST['type'];
        $data['subway_monitor_room_id'] =   $_POST['subway_monitor_room_id'];
        $data['station_id'] =   $_POST['station_id'];
        $data['max_normal'] =   $_POST['max_normal'];
        $data['min_normal'] =   $_POST['min_normal'];

        $data['description']    =   $_POST['description'];

        $base64_image_content = $_POST['recg_image'];
        //将base64编码转换为图片保存
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
            $type = $result[2];

            $new_file = "../public/uploads/";
            if (!file_exists($new_file)) {
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file);
            }

            $img = time() . ".{$type}";
            $new_file = $new_file . $img;

            //将图片保存到指定的位置
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {

                $data['recg_image'] = $new_file;
            }
        }

        MonitorMetersModel::update($data, array('id' => $id));
        $this->redirect('monitorCenter/statistics');
    }

    public function delete_meter($id)
    {
        $meter_info = MonitorMetersModel::get($id);
        if($meter_info)
        {
            $meter_info->delete();
            $this->redirect('monitorCenter/statistics');
        }
        else
        {
            $this->redirect('monitorCenter/statistics');
        }
    }
}