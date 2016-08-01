<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 登陆控制器
 */
class AnswerController extends AuthController{
	/**
	 * 全部回答
	 */
	public function allAns(){
		$data = M()->query("SELECT * FROM hd_Answer");
		$this->assign('data',$data);	
		$this->display('index.html');
	}
	// 没采纳回答
	public function waitAns(){
		$data = M()->query("SELECT * FROM hd_Answer WHERE accept=0");
		$this->assign('data',$data);
		$this->display('index.html');
	}
	// 已采纳回答
	public function niceAns(){		
		$data = M()->query("SELECT * FROM hd_Answer WHERE accept=1");
		$this->assign('data',$data);
		$this->display('index.html');
	}
	// 删除
	public function del(){
		$anid = $_GET['anid'];
		M()->exec("DELETE FROM hd_Answer WHERE anid={$anid}");
		$this->success('删除成功');
	}
	
}






