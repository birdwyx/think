<?php
namespace app\message\controller;
use think\facade\Request;
use think\Controller;

class Custom extends Controller{
	
    public function send(){
		echo "message sent\n";
    }

}
