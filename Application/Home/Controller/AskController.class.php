<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 提问控制器
 */
class AskController extends CommonController{
    /**
     * 问题展示页面
     */
    public function index(){
    	$cid = isset($_GET['cid']) ? (int)$_GET['cid'] : 0;

		// 面包屑导航
		$cateData = M()->query("SELECT * FROM hd_category");
		$fatherCate = $this->getFater($cateData,$cid);
		$fatherCate = array_reverse($fatherCate);
		$this->assign('fatherCate',$fatherCate);

    	//获得问题对应的数据
    	$asid = isset($_GET['asid']) ? (int)$_GET['asid'] : 0;
		$askData = M()->query("SELECT * FROM hd_ask AS a JOIN hd_user AS u ON a.uid=u.uid WHERE asid={$asid}");
		if(!empty($askData[0]))$this->assign('askData',$askData[0]);
		
			
		// 最佳回答
		$niceData = M()->query("SELECT * FROM hd_answer WHERE asid={$asid} AND accept=1");
		if(!empty($niceData[0]['uid'])){
		$uid = $niceData[0]['uid'];
		
		$niceUser=M()->query("SELECT * FROM hd_user WHERE uid={$uid}");
		$niceData = array_merge($niceData[0],$niceUser[0]);
		}
		$this->assign('niceData',$niceData);
		// 回答
		$ansData = M()->query("SELECT * FROM hd_answer WHERE asid={$asid}");
		$this->assign('ansData',$ansData);
		//待解决的相关问题（通过问题知道cid,然后按照cid查询相关问题，排除自己）
		$qusData = M()->query("SELECT * FROM hd_ask WHERE cid={$cid} and asid!={$asid} and solve=0 ORDER BY time desc");
		$this->assign('qusData',$qusData);
		$ask = M()->query("SELECT * FROM hd_ask WHERE asid={$asid}");
		$this->assign('ask',$ask);
		$this->top();
		$this->right();
    	$this->display(); 
    }
	/**
	 * 采纳
	 */
	public function accept(){
		p($_GET);
		$uid = $_GET['uid'];
		$asid = $_GET['asid'];
		$anid = $_GET['anid'];
		$cid = $_GET['cid'];
		//1.把问题标记为已解决
		M()->exec("UPDATE hd_ask SET solve=1 WHERE asid={$asid}");
		//2.把答案被标记为采纳
		M()->exec("UPDATE hd_answer SET accept=1 WHERE anid={$anid}");
		//3.把回答者的用户采纳数+1
		M()->exec("UPDATE hd_user SET accept=accept+1 WHERE uid={$uid}");
		$this->success("采纳成功");
		// ?c=Ask&asid={$asid}&anid={$anid}&cid={$cid}
	}
	private function getFater($cateData,$cid){
		$temp = array();
		foreach ($cateData as $v) {
			if($v['cid'] == $cid){
				$temp[] = $v;
				$temp = array_merge($temp,$this->getFater($cateData, $v['pid']));
			}
		}
		return $temp;
	}
	public function ans(){
		$uid = $_SESSION['uid'];
		$asid = $_GET['asid'];
		$content = $_POST['content'];
		$time = time();
		M()->exec("INSERT INTO hd_answer (content,time,accept,uid,asid) VALUES ('{$content}',{$time},0,{$uid},{$asid})");
		// 回答者回答数+1
		M()->exec("UPDATE hd_user SET answer=answer+1 WHERE uid={$uid}");
		// 问题回答数+1
		M()->exec("UPDATE hd_ask SET answer=answer+1 WHERE asid={$asid}");

		$this->success('回答成功');
	}
}
 
 



 
 
 
 
 
 
 
 

 ?>