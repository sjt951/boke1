<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class IndexController extends Controller{
	/**
	 * 默认方法
	 */
	public function index(){
		$this->display('index.php');
	}
}






