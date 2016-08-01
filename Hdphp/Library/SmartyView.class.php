<?php 
namespace Hdphp\Library;
class SmartyView{
	//保存smarty对象
	private static $smarty=NULL;
	//assign所需要的属性
	private $var = array();
	
	public function __construct(){
		//如果没有开启smarty,不走下面
		if(!C('SMARTY_ON')) return;
		if(!is_null(self::$smarty)) return;
		$smarty = new \Smarty();
		//模版目录
		$smarty->template_dir = "Application/" . MODULE . "/View/" . CONTROLLER;
		//检测目录是否存在，否则创建
		$compilePath = "Application/Runtime/Compile/" . MODULE . '/' . CONTROLLER;
		$cachePath = "Application/Runtime/Cache/" . MODULE . '/' . CONTROLLER;
		is_dir($compilePath) || mkdir($compilePath,0777,true);
		is_dir($cachePath) || mkdir($cachePath,0777,true);
		
		//编译目录
		$smarty->compile_dir = $compilePath;
		//缓存目录 
		$smarty->cache_dir = $cachePath;
		//开始定界符 
		$smarty->left_delimiter = C('LEFT_DILIMITER');
		//结束定界符
		$smarty->right_delimiter = C('RIGHT_DILIMITER');
		//是否缓存
		$smarty->caching = C('CACHE_ON');
		//缓存时间
		$smarty->cache_lifetime = C('LIFE_TIME');
		//注册局部不缓存
		$smarty->register_block("nocache", "nocache", false);
		//保存到静态属性中
		self::$smarty = $smarty;
	}
	/**
	 * 分配变量
	 */
	protected function assign($var,$value){
		//如果smarty开启
		if(C('SMARTY_ON')){
			self::$smarty->assign($var,$value);
		}else{
			//$this->var['houdun'] = 'houdunwang';
			//$this->var的值就是array('houdun'=>'houdunwang')
			$this->var[$name] = $value;
		}
	}
	
	protected function display($tpl=NULL){
		//获得模板
		$tpl = $this->_getTpl($tpl);
		if(C('SMARTY_ON')){
//			p(self::$smarty->template_dir);
			self::$smarty->display($tpl,$_SERVER['REQUEST_URI']);
		}else{
			//组合完整路径
			$path = 'Application/' . MODULE . '/View/' . CONTROLLER . '/' . $tpl;
			if(!is_file($path)) halt("{$path}模板不存在 ):");
			//把键名变为变量名
			//把键值变为变量值
			//$this->var的值就是array('houdun'=>'houdunwang')
			//变完之后就相当于 $houdun = 'houdunwang';
			extract($this->var);
			include $path;
		}
	}
	/**
	 * 判断缓存是否失效
	 */
	protected function is_cached($tpl=NULL){
		if(!C('CACHE_ON')) halt('请先开启smarty缓存');
		$tpl = $this->_getTpl($tpl);
		return self::$smarty->is_cached($tpl,$_SERVER['REQUEST_URI']);
	}
	
	/**
	 * 获得模板
	 */
	private function _getTpl($tpl){
		//如果用户没有传递tpl,按照方法名称来
		if(is_null($tpl)) $tpl = ACTION . '.html';
		return $tpl;
	}
	
}













 ?>