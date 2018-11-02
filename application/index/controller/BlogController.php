<?php 
namespace app\index\controller;
use think\Controller;

class blogController extends Controller
{	
	public function index()
	{	
		return $this->fetch('index',array('name'=>"guxinghao"));
	}
	public function getName()
	{
		echo "getName";
	}
}