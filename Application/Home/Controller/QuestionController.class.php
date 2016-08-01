<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class QuestionController extends CommonController{
	/**
	 * 默认方法
	 */
	public function index(){
		if(empty($_SESSION['uid']))$this->error('请先登陆');
		// die;
		if(IS_POST){
			// 信息
			$uid = (int)$_SESSION['uid'];
			$time = time();
			$content = $_POST['content'];
			$reward = (int)$_POST['reward'];
			$cid = (int)$_POST['cid'];
			// 存入
			M()->exec("INSERT INTO hd_ask (content,time,reward,uid,cid) VALUES ('{$content}',{$time},{$reward},{$uid},{$cid})");
			M()->exec("UPDATE hd_user SET ask=ask+1 WHERE uid={$uid}");
		    $this->success('提问成功','index.php');
		}

		$this->top();
		$topCate = M()->query("SELECT * FROM hd_category WHERE pid=0");
		$this->assign('topCate',$topCate);
		$this->display();

    }
    public function ajaxCate(){
		if(!IS_AJAX) $this->error('非法请求','index.php');
		$cid = (int)$_POST['cid'];
		$sql = "SELECT * FROM hd_category WHERE pid={$cid}";
		$data = M()->query($sql);
		echo json_encode($data);exit;
	}
	
}
