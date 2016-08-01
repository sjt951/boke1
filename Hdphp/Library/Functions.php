<?php
/**
 * [p 打印函数]
 * @param  [type] $var [description]
 * @return [type]      [description]
 */
function p($var){
	//如果没有发送头部，则发送一个
	if(!headers_sent()){
		header('Content-type:text/html;charset=utf-8');
	}
	echo '<pre style="background:#ddd;border:1px solid #ccc;padding:10px;border-radius:4px;">';
	print_r($var);
	echo '</pre>';
}
/**
 * 配置项操作函数
 */
function C($name=NULL){
	static $config = array();
	//如果是数组的时候，就是加载配置项的时候
	if(is_array($name)){
		$config = array_merge($config,$name);
	}
	//如果是字符串的时候，证明要返回配置的值
	if(is_string($name)){
		return $config[$name];
	}
	//如果用户不存在，返回所有的配置项
	if(is_null($name)){
		return $config;
	}
}

function halt($msg){
	header('Content-type:text/html;charset=utf-8');
	die($msg);
}

function M(){
	$model = new \Hdphp\Tool\Model();
	return $model;
}
 
function nocache($params, $content, &$smarty){
	return $content;
}












