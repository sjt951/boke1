<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class IndexController extends CommonController{
	/**
	 * 默认方法
	 */
	public function index(){
		// 处理分类
		$cateData = M()->query("SELECT * FROM hd_category WHERE pid=0");
			// 循环
		foreach ($cateData as $k => $v) {
			// 子集分类压入顶级分类
			$cateData[$k]['son'] = M()->query("SELECT * FROM hd_category WHERE pid={$v['cid']}");
		}
			// 分配变量
		$this->assign('cateData',$cateData);


		//处理待解决 solv=0的
		$noSolve = M()->query("SELECT * FROM hd_ask WHERE solve=0 ORDER BY time desc LIMIT 4");
		$this->assign('noSolve',$noSolve);
		
		//高分悬赏问题 大于等于20金币且未解决 从高低排序
		$rewardData = M()->query("SELECT * FROM hd_ask WHERE reward>=20 and solve=0 order by reward desc LIMIT 4");
		$this->assign('rewardData',$rewardData);
		// 问题总数
		$allAskData = M()->query("SELECT COUNT(*) AS c FROM hd_ask");
		$this->assign('allAskData',$allAskData[0]['c']);

		

		
		// 载入模板
		$this->top();
		$this->right();
		$this->display('index.html');


	}
	// 显示验证码
	public function show(){
		$code = new \Hdphp\Tool\Code;
		$code -> show();
	}
}



