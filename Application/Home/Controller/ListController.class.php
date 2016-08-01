<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 列表页控制器
 */
class ListController extends CommonController{
	/**
	 * 列表页
	 */
	public function index(){
		//获取分类的子集
		if(empty($_GET['cid'])){
                $cid = 0;
            }else{
                $cid = $_GET['cid'];
            }
		$sql = "SELECT * FROM hd_category WHERE pid={$cid}";
		$sonData = M()->query($sql);
		//如果该分类下面没有子集，则停留到当前级
		if(!$sonData){
			$sql = "SELECT pid FROM hd_category WHERE cid={$cid}";
			$pid = M()->query($sql);
			$pid = $pid[0]['pid'];
			//找同级兄弟分类
			$sql = "SELECT * FROM hd_category WHERE pid={$pid}";
			$sonData = M()->query($sql);
		}
		$this->assign('sonData',$sonData);
		if($cid!=0){
			//各种类型的问题
			$w = isset($_GET['w']) ? (int)$_GET['w'] : 0;
			switch ($w) {
				//待解决
				case 3:
					$where = "answer=0 AND c.cid={$cid} ORDER BY time desc";
					break;
				//已解决
				case 1:
					$where = "solve=1 AND c.cid={$cid} ORDER BY time desc";
					break;
				//高悬赏
				case 2:
					$where = "solve=0 AND c.cid={$cid} AND reward>=20 ORDER BY time desc";
					break;
				//待解决
				default:
					$where = "solve=0 AND c.cid={$cid} ORDER BY time desc";				
					break;
			}
			//根据不同的where组合不同的sql
			$sql = "SELECT * FROM hd_ask as a JOIN hd_category as c ON a.cid=c.cid WHERE {$where}";
			$data = M()->query($sql);
		}else{
					echo "1";
			$w = isset($_GET['w']) ? (int)$_GET['w'] : 0;
			switch ($w) {
				//零回答
				case 3:
					$data = M()->query( "SELECT * FROM hd_ask as a JOIN hd_category as c ON a.cid=c.cid WHERE answer=0 ORDER BY time desc");
					break;
				//已解决
				case 1:
					$data = M()->query("SELECT * FROM hd_ask as a JOIN hd_category as c ON a.cid=c.cid WHERE solve=1 ORDER BY time desc");
					break;
				//高悬赏
				case 2:
					$data = M()->query("SELECT * FROM hd_ask as a JOIN hd_category as c ON a.cid=c.cid WHERE solve=0 AND reward>=20 ORDER BY time desc");
					break;
				//待解决
				default:
					$data = M()->query("SELECT * FROM hd_ask as a JOIN hd_category as c ON a.cid=c.cid WHERE solve=0 ORDER BY time desc");		
					break;
			}
		}
		//获得不同的数据
		$this->assign('data',$data);

		
		
		//处理面包屑导航
		$cateData = M()->query("SELECT * FROM hd_category");
		$fatherCate = $this->_getFater($cateData,$cid);
		//数组反转
		$fatherCate = array_reverse($fatherCate);
		$this->assign('fatherCate',$fatherCate);
		$this->top();
		$this->right();
	    $this->display();
	}
	
	/**
	 * 找到分类cid的父级
	 */
	private function _getFater($cateData,$cid){
		$temp = array();
		foreach ($cateData as $v) {
			if($v['cid'] == $cid){
				$temp[] = $v;
				$temp = array_merge($temp,$this->_getFater($cateData, $v['pid']));
			}
		}
		return $temp;
	}
	
	
	
	
	
}







