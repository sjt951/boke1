<?php 
/*
 * 单入口载入的类，框架启动核心类
 */
class Hd{
	public static function run(){
		//定义常量
		self::setConst();
		//如果没有application目录
		if(!is_dir('Application')){
			//创建文件夹
			self::makeDir();
			//复制文件
			self::copyFile();
		}
		//载入必须文件
		self::loadCore();
		//执行应用类
		\Hdphp\Library\App::run();
	}
	/**
	 * 定义常量
	 */
	private static function setConst(){
		//定义是否是post请求
		define('IS_POST', ($_SERVER['REQUEST_METHOD'] == 'POST') ? true : false);
		
		//定义是否是异步ajax请求
		//[HTTP_X_REQUESTED_WITH] => XMLHttpRequest
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
			define('IS_AJAX', true);
		}else{
			define('IS_AJAX', false);
		}
	}
	/**
	 * 载入核心文件
	 */
	private static function loadCore(){
		$files = array(
			'Hdphp/Library/Functions.php',
			'Hdphp/Org/Smarty/Smarty.class.php',
			'Hdphp/Library/SmartyView.class.php',
			'Hdphp/Library/Controller.class.php',
			'Hdphp/Library/App.class.php',
		);
		foreach ($files as $f) {
			require_once $f;
		}
	}
	/**
	 * 复制文件
	 */
	private static function copyFile(){
		$comPath = 'Hdphp/Common';
		//复制公共配置项目录
		copy($comPath . '/config.php', 'Application/Common/Conf/config.php');
		//复制到应用的配置项目录
		copy($comPath . '/config.php', 'Application/Home/Conf/config.php');
		//把成功失败模板复制到Public目录
		copy($comPath . '/success.php', 'Public/success.php');
		copy($comPath . '/error.php', 'Public/error.php');
		//默认控制器
		copy($comPath . '/IndexController.class.php', 'Application/Home/Controller/IndexController.class.php');
		//默认展示首页
		copy($comPath . '/index.php', 'Application/Home/View/Index/index.php');
	}
	/**
	 * 创建文件夹
	 */
	private static function makeDir(){
		$dirs = array(
			'Application',
			'Application/Common',
			'Application/Common/Conf',
			'Application/Home',
			'Application/Home/Conf',
			'Application/Home/Controller',
			'Application/Home/View',
			'Application/Home/View/Index',
			'Public',
			'Application/Runtime/Compile',
			'Application/Runtime/Cache'
		);
		foreach ($dirs as $d) {
			is_dir($d) || mkdir($d,0777,true);
		}
	}
	
	
	
}
Hd::run();





