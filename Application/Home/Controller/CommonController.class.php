<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class CommonController extends Controller{
	    public function top(){
            // 顶级分类
            $topDate = M()->query("SELECT * FROM hd_category WHERE pid=0");
            $this->assign('topDate',$topDate);

            // 问题总数
            $allAskData = M()->query("SELECT COUNT(*) AS c FROM hd_ask");
            $this->assign('allAskData',$allAskData[0]['c']);
        }
        public function right(){
               // 问答之星
            // 历史
            $lishi = M()->query("SELECT COUNT(*) AS c,uid FROM hd_answer GROUP BY uid ORDER BY c desc limit 1");
            $lishi = $lishi[0]['uid'];
            $lishi = M()->query("SELECT * FROM hd_user WHERE uid='{$lishi}'");
            $this->assign('lishi',$lishi);
            // 每天
            $date = strtotime(date('Y-m-d'));
            $day = M()->query("SELECT COUNT(*) AS c,uid FROM hd_answer WHERE time>={$date} GROUP BY uid ORDER BY c DESC LIMIT 1");
            if(!empty($day)){
                $day = $day[0]['uid'];
                $day = M()->query("SELECT * FROM hd_user WHERE uid='{$day}'");
                $this->assign('day',$day);
            }

            // 助人光荣榜
            $help = M()->query("SELECT * FROM hd_user ORDER BY accept DESC LIMIT 3");
            $this->assign('help',$help); //用户信息
            if(isset($_SESSION['uid'])){
                $userInfo = M()->query("SELECT * FROM hd_user WHERE uid='{$_SESSION['uid']}'");
                $this->assign('userInfo',$userInfo);
            }
        }
        
        public function left(){
            if(empty($_GET['uid'])){
                $uid = 1;
            }else{
                $uid = $_GET['uid'];
            }
            $userInfo = M()->query("SELECT * FROM hd_user where uid={$uid}");
            $this->assign('userInfo',$userInfo);
            if(!empty($_GET['a'])){
                switch ($_GET['a']) {
                    case 'ask':
                        $cur = 1;
                        break;
                    case 'answer':
                        $cur = 2;
                        break;
                    case 'level':
                        $cur = 3;
                        break;
                    case 'gold':
                        $cur = 4;
                        break;
                    case 'face':
                        $cur = 5;
                        break;                        
                    default:
                        $cur = 0;
                        break;
                }
            }else{
                $cur = 0;
            }
            $this->assign('cur',$cur);
        }


}
