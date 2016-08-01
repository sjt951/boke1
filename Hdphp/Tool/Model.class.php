<?php 
namespace Hdphp\Tool;
class Model{
	//保存mysqli的对象
	private static $mysqli=NULL;
	
	
	public function __construct(){
		$this->_connect();
	}
	/**
	 * 连接数据库
	 */
	private function _connect(){
		if(is_null(self::$mysqli)){
			// \的作用，就是调用系统的Mysqli，而不是当前的命名空间的mysqli
			$mysqli = @new \Mysqli(C('DB_HOST'),C('DB_USER'),C('DB_PASSWORD'),C('DB_NAME'));
			//如果有连接错误
			if($mysqli->connect_errno){
				die($mysqli->connect_error);
			}
			$mysqli->query("SET NAMES UTF8");
			//把mysqli的对象保存在静态属性中
			self::$mysqli = $mysqli;
		}
		
	}
	/**
	 * 执行有结果集的操作（select）
	 */
	public function query($sql){
		$result = self::$mysqli->query($sql);
		$this->_error($sql);
		$rows = array();
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		//释放结果集
		$result->free();
		return $rows;
	}
	
	/**
	 * 执行无结果集操作(insert update delete)
	 */
	public function exec($sql){
		self::$mysqli->query($sql);
		$this->_error($sql);
		//如果有自增id，证明是插入动作
		if(self::$mysqli->insert_id){
			return self::$mysqli->insert_id;
		}else{
			//如果不是插入动作，返回受影响条数
			return self::$mysqli->affected_rows;
		}
	}
	/**
	 * 错误信息
	 */
	private function _error($sql){
		if(self::$mysqli->errno){
			halt("错误的SQL:<span style='color:red'>" . $sql . '</span><br/>' . self::$mysqli->error);
		}
	}
	

	
}

 

 
 
 
 
 
 
 
 

