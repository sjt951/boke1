<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class MyController extends CommonController{
	/**
	 * 默认方法
	 */
	public function index(){
		$this->left();
		$this->top();
		// 有没有uid
		if(empty($_GET['uid'])){
                $uid = 1;
            }else{
                $uid = $_GET['uid'];
            }
        // 查四条问题
		$askData = M()->query("SELECT * FROM hd_ask WHERE uid={$uid} Limit 4");
		$this->assign('askData',$askData);
		// 查四条答案
		$answerData = M()->query("SELECT * FROM hd_answer AS an JOIN hd_ask as a ON an.asid=a.asid WHERE an.uid={$uid} Limit 4");
		$this->assign('answerData',$answerData);
		$allAsk = M()->query("SELECT COUNT(*) AS c FROM hd_ask WHERE uid={$uid}");
		$this->assign('allAsk',$allAsk[0]['c']);
		$allAns = M()->query("SELECT COUNT(*) AS c FROM hd_answer WHERE uid={$uid}");
		$this->assign('allAns',$allAns[0]['c']);
		$this->display();
    }
    // 提问
    public function ask(){
		$this->left();    	
		$this->top();		
		if(empty($_GET['uid'])){
                $uid = 1;
            }else{
                $uid = $_GET['uid'];
            }
		$waitAsk = M()->query("SELECT * FROM hd_ask WHERE uid={$uid} AND solve=0 Limit 4");
		$okAsk = M()->query("SELECT * FROM hd_ask WHERE uid={$uid} AND solve=1 Limit 4");
		$this->assign('waitAsk',$waitAsk);
		$this->assign('okAsk',$okAsk);
		$this->display('my_ask.html');

    }
    public function answer(){
		$this->left();
		$this->top();
		if(empty($_GET['uid'])){
                $uid = 1;
            }else{
                $uid = $_GET['uid'];
            }
        $answerData = M()->query("SELECT * FROM hd_answer AS an JOIN hd_ask as a ON an.asid=a.asid WHERE an.uid={$uid} Limit 4");
        $this->assign('answerData',$answerData);
        $niceAN = M()->query("SELECT * FROM hd_answer AS an JOIN hd_ask as a ON an.asid=a.asid WHERE an.uid={$uid} & an.accept=1 Limit 4");
		$this->display('my_answer.html');
    }
    public function face(){
    	
		$this->left();
		$this->top();
		if(empty($_GET['uid'])){
                $uid = 1;
            }else{
                $uid = $_GET['uid'];
            }
		$this->display('my_face.html');

    }
    public function upload(){
    	if(IS_POST){
    		//上传操作
    		$uid = $_SESSION['uid'];
			$upload = new \Hdphp\Tool\Upload();
			$path = $upload->up();
			//如果有上传错误
			if(!$path){
			  p($upload->error);
			}else{
				$img = '';
			  //上传成功得到上传之后的文件路径
				foreach ($path as $v) {
			    	$img .= $v;
			 	M()->exec("UPDATE hd_user SET face='{$img}' WHERE uid={$uid}");

    			$this->success('上传成功'); 	


			  	}
			
			}
    	}
    }






    public function gold(){
		$this->left();
		$this->top();
		$this->display('my_gold.html');
    }
    public function level(){
		$this->left();
		$this->top();
		$this->display('my_level.html');
    }

}
	

