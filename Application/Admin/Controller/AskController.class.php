<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 登陆控制器
 */
class AskController extends AuthController{
	// 全部问题方法
	public function allAsk(){
		$data = M()->query("SELECT * FROM hd_ask");
		$this->assign('data',$data);	
		$this->display('index.html');
	}
	// 没解决的问题
	public function waitAsk(){
		$data = M()->query("SELECT * FROM hd_ask WHERE solve=0");
		$this->assign('data',$data);
		$this->display('index.html');
	}
	// 已解决问题
	public function niceAsk(){		
		$data = M()->query("SELECT * FROM hd_ask WHERE solve=1");
		$this->assign('data',$data);
		$this->display('index.html');
	}
	// 无回答问题
	public function zeroAsk(){
		$data = M()->query("SELECT * FROM hd_ask WHERE answer=0");
		$this->assign('data',$data);
		$this->display('index.html');
	}
	// 删除方法
	public function del(){
		$asid = $_GET['asid'];
		// 删除问题
		M()->exec("DELETE FROM hd_ask WHERE asid={$asid}");
		// 删除答案
		M()->exec("DELETE FROM hd_answer WHERE asid={$asid}");

		$this->success('删除成功');
	}
}






