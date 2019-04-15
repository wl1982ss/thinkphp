<?php
/**
 * Created by PhpStorm.
 * User: szrh
 * Date: 2019/4/9
 * Time: 18:40
 */
namespace app\index\controller;

use app\index\model\Blog as Blogs;
use think\Controller;
use think\Request;

class Blog  extends Controller
{
    /**
     * 显示资源列表
     * @param $id
     * @return string
     */
    public function index()
    {
        $list = Blogs::all();
        return json($list);
    }

    /**
     * 保存新建的资源
     *
     * @param Request $request
     * @return \think\response\Json
     */
    public function save(Request $request)
    {
        $data   =   $request->param();
        $result =   Blogs::create($data);
        return  json($result);
    }

    /**
     * 显示指定的资源
     *
     * @param $id
     * @return \think\response\Json
     * @throws \think\exception\DbException
     */
    public function read($id)
    {
        $data   =   Blogs::get($id);
        return json($data);
    }

    /**
     * 保存更新的资源
     * @param Request $request
     * @param $id
     * @return \think\response\Json
     */
    public function update(Request $request, $id)
    {
        $data   =   $request->param();
        $result =   Blogs::update($data, ['id' => $id]);
        return json($result);
    }

    /**
     * 删除指定资源
     *
     * @param $id
     * @return \think\response\Json
     */
    public function delete($id)
    {
        $result =   Blogs::destroy($id);
        return  json($result);
    }
}