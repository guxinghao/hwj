<?php
namespace app\index\controller;

class indexController
{
    public function index()
    {	
    	$url = url('@index/blog/read','id=5');
    	var_dump($url);die;
        return 'index  index';
    }
}
