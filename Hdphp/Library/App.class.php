<?php 
namespace Hdphp\Library;
class App{
	public static function run(){
		//初始化框架
		self::init();
		//自动载入，给当前类的 aload 赋予 自动载入功能 aload名称可以随便叫
		spl_autoload_register(array(__CLASS__,'aload'));
		//实例化控制器
		self::appRun();
		
	}
	/**
	 * 初始化框架
	 */
	private static function init(){
		
		//模块
		$m = isset($_GET['m']) ? $_GET['m'] : 'Home';
		define('MODULE', $m);
		//控制器
		$c = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
		define('CONTROLLER', $c);
		//方法
		$a = isset($_GET['a']) ? $_GET['a'] : 'index';
		define('ACTION', $a);
		
		//如果用户模块乱输入
		$modulePath = 'Application/' . $m;
		if(!is_dir($modulePath)){
			halt("{$m}模块不存在 ): ");
		}
		
		//如果有sessionid 证明已经开启过了
		session_id() || session_start();
		//先加载配置项
		//框架配置项
		C(include 'Hdphp/Config.php');
		//公共配置项
		C(include 'Application/Common/Conf/Config.php');
		//用户配置项
		C(include 'Application/'.$m.'/Conf/Config.php');
		//时区
		date_default_timezone_set(C('DAFAULT_ZONE'));
		
	}
	/**
	 * 实例化控制器
	 */
	private static function appRun(){
		//把常量赋值给变量，就是为了下面不会出现语法错误
		$c = '\\' . MODULE . '\Controller\\' . CONTROLLER . 'Controller';
		$a = ACTION;
		//实例化控制器
		$controller = new $c;
		$controller->$a();
	}
	
	/**
	 * 它拥有自动载入功能，靠的就是
	 * spl_autoload_register 的作用
	 */
	private static function aload($className){
//		echo "<h2 style='color:red'>" . $className . '</h2>';
		$className = str_replace('\\', '/', $className);
		//如果是工具类
		if(substr($className, 0,5) == 'Hdphp'){
			$path = $className . '.class.php';
		}else{
			//组合控制器路径
			$path = "Application/" . $className . ".class.php";
		}
		if(is_file($path)){
			//载入
			require $path;
		}else{
			halt("{$path}类找不到 ):");
		}
		
	}
	
	
}





 ?>