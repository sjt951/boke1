<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 验证控制器
 */
class AuthController extends Controller{
	//检测用户是否登陆
	public function __construct(){
		//调用smartyView类里面的构造方法，因为当前方法会覆盖它
		parent::__construct();
		if(!isset($_SESSION['aname']) || !isset($_SESSION['aid'])){
			$this->success('请先登录','./index.php?m=Admin&c=Login');
		}
	}
}





