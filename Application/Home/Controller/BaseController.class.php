<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	protected $accessToken;
	public function __construct(){

	}
	public function setToken($token) {
		$this->accessToken = $token;
	}

	/**封装接口调用方法，除了Index方法获取token外，所有请求接口走这里
	 * @param $url
	 * @param $data
	 * @return mixed
	 */
	public function ApiClient($url ,$data){
		$data['AuthToken']  = $this->accessToken;
		$auth_token     = request($url, $data);
		return json_decode($auth_token ,true);
	}
}