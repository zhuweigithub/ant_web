<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {



    public function index(){
		$data['wx_open_id']  = "ovrgAv3nbdTq4r_tHZePpz3tLvlw";
		$url            = 'user/login';
		$auth_token     = request($url, $data);
		$auth_token     = json_decode($auth_token ,true);
		if(!empty($auth_token['result']['AuthToken'])){
			$this->setToken($auth_token['result']['AuthToken']);
			//todo 微信授权 后续操作

		}else{
			die("身份验证失败");
		}
       }
}