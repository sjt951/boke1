<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 分类管理控制器
 */
class CategoryController extends AuthController{
	/**
	 * 展示分类
	 */
	public function index(){
		$cid = isset($_GET['cid']) ? (int)$_GET['cid'] : 0;
		$cateData = M()->query("SELECT * FROM hd_category WHERE pid={$cid}");
		$this->assign('cateData',$cateData);
		$this->display();
	}
	/**
	 * 编辑
	 */
	public function edit(){
		$cid = $_GET['cid'];
		if(IS_POST){
			$title = $_POST['title'];
			M()->exec("UPDATE hd_category SET title='{$title}' WHERE cid={$cid}");
			$this->success('修改成功','index.php?m=Admin&c=Category');
		}
		$this->display();
	}
	/**
	 * 添加顶级分类
	 */
	public function addTop(){
		if(IS_POST){
			$category = $_POST['title'];
			M()->exec("INSERT INTO hd_category (title,pid) values ('{$category}',0)");
			$this->success('添加成功');

		}
		$this->display();
	}
	/**
	 * 添加子分类
	 */
	public function addSon(){
		$cid = (int)$_GET['cid'];
		if(IS_POST){
			$category = $_POST['title'];
			$pid = $_GET['cid'];
			M()->exec("INSERT INTO hd_category (title,pid) values ('{$category}',{$pid})");
			$this->success('修改成功','index.php?m=Admin&c=Category');
		}
		
		$this->display();
	}
	/**
	 * 删除
	 */
	public function del(){
		$cid = (int)$_GET['cid'];
		//判断是否有子集
		if(M()->query("SELECT * FROM hd_category WHERE pid={$cid}")){
			$this->error('请先删除子分类');
		}
		//删除分类
		$sql = "DELETE FROM hd_category WHERE cid={$cid}";
		M()->exec($sql);
		//删除问题和答案
		M()->exec("DELETE FROM hd_ask WHERE cid={$cid}");
		
		$this->success('删除成功');
	}
	
	
	
	
	
	
	
	
	
}



 ?>