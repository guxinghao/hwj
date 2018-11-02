<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
/**
 *后台相关页面
 */
class IndexController extends Controller
{
    public function index()
    {	   
        $result = Db::table('admin')->where('id',1)->find();
        var_dump($result);die;
       	return $this->fetch();
    }

    public function login()
    {   
       	return $this->fetch();
    }

    public function welcome()
    {
       	return $this->fetch();
    }
}
