<?php
namespace Hdphp\Library;
class Controller extends SmartyView{
	
	
	//执行未定义的方法，会自动触发此方法
	public function __call($func,$param){
		halt("{$func}方法不存在 ): ");
	}

	/**
	 * 成功提示方法
	 */
	protected function success($msg,$url=NULL){
		include "Public/success.php";
		die;
	}
	/**
	 * 失败的提示方法
	 */
	protected function error($msg,$url=NULL){
		//p($_SERVER);exit;
		//如果用户没有传递$url地址，那么默认就是上一次的地址 $_SERVER['HTTP_REFERER']就是上一次的地址
		// if(is_null($url)) $url = $_SERVER['HTTP_REFERER'];
		include "Public/error.php";
		die;
	}
	
	
	
	
}










