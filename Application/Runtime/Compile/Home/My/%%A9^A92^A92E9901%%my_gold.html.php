<?php /* Smarty version 2.6.26, created on 2015-08-01 10:49:15
         compiled from my_gold.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>>
	<link rel="stylesheet" href="Public/Home/Css/member.css" />
	<script type="text/javascript" src='Public/Home/Js/member.js'></script>

<!--------------------中部-------------------->
	<div id='center'>
<!-- 左侧 -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- 左侧结束 -->
		<div id='right'>
			<p class='title'>我的金币</p>
			<p class='lv-info'>
					您还没有金币，赶紧向着高富帅去奋斗吧！
					您现有金币<span>20</span>
			</p>
			<div class='lv-rule'>
				<p><span>金币获取</span></p>
				<table class='lv-exp'>
					<tr>
						<th>操作</th>
						<th>获得金币</th>
					</tr>
					<tr>
						<td>回答</td>
						<td>+1金币</td>
					</tr>
					<tr>
						<td>回答被采纳</td>
						<td>+5金币</td>
					</tr>
					<tr>
						<td>回答被删除：</td>
						<td>-2金币</td>
					</tr>
					<tr>
						<td>提问被删除：</td>
						<td>-3金币</td>
					</tr>
					<tr>
						<td>采纳回答被删除</td>
						<td>提问者：-1金币&nbsp;&nbsp;回答者：-2金币</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
<!--------------------中部结束-------------------->
<!-- 底部 -->
	<div id='bottom'>
		<p>Copyright © 2013 Qihoo.Com All Rights Reserved 后盾网</p>
		<p>京公安网备xxxxxxxxxxxx</p>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
    	DD_belatedPNG.fix('.logo','background');
        DD_belatedPNG.fix('.nav-sel a','background');
        DD_belatedPNG.fix('.ask-cate i','background');
    </script>
<![endif]-->
</body>
</html>
<!-- 底部结束 -->