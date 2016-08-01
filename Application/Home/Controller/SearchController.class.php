<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class SearchController extends Controller{
	/**
	 * 默认方法
	 */
	public function index(){
		if(IS_POST){
			if($_POST['content']!=''){
				// 搜索内容
				$sql = "SELECT *,a.content as acon FROM hd_ask as a JOIN hd_answer as an ON a.asid=an.asid JOIN hd_category as c ON a.cid=c.cid WHERE a.content like '%后盾%' GROUP BY acon";
				$data= M()->query($sql);

				$cateData = M()->query("SELECT * FROM hd_category");
				foreach ($data as $k => $v) {
					$cid = $v['cid'];
					$fatherCate=$this->_getFater($cateData,$cid);
					// $k['cate'] = array_reverse($fatherCate);
					$data[$k]['cate']=array_reverse($fatherCate);
					// p($v);
				}
				// p($askData);
				$this->assign('data',$data);

			}
		}
		$this->display();
    }
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
	

