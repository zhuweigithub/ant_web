<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
		$data['wx_open_id']  = "12312312313123";
		$url            = 'user/login';
		$history        = request($url, $data);

		echo $history;
       }
}