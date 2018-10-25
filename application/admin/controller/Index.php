<?php
namespace app\admin\controller;
use think\Controller;
/**
 *后台相关页面
 */
class Index extends Controller
{
    public function index()
    {	
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
