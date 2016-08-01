<?php /* Smarty version 2.6.26, created on 2015-08-01 10:42:12
         compiled from member.html */ ?>
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
 ?>
	<link rel="stylesheet" href="Public/Home/Css/member.css" />

<!--------------------中部-------------------->
	<div id='center'>
<!-- 左侧 -->
<div id='left'>
		<div class='userinfo'>
			<dl>
				<dt>
					<a href=""><img src="" width='48' height='48' alt="占位符"/></a>
				</dt>
				<dd class='username'>
					<a href=""><b><?php echo $this->_tpl_vars['userInfo']['0']['username']; ?>
</b>
					</a>
					<a href="">
						<i class='level lv1' title='Level 1'></i>
					</a>
				</dd>
				<dd>金币：<a href="" style="color: #888888;"><b class='point'><?php echo $this->_tpl_vars['userInfo']['0']['point']; ?>
</b></a></dd>
				<dd>经验值：<?php echo $this->_tpl_vars['userInfo']['0']['exp']; ?>
</dd>
			</dl>
			<table>
				<tr>
					<td>回答数</td>
					<td>采纳率</td>
					<td class='last'>提问数</td>
				</tr>
				<tr>
					<td><a href=""><?php echo $this->_tpl_vars['userInfo']['0']['answer']; ?>
</a></td>
					<?php if ($this->_tpl_vars['userInfo']['0']['answer'] != 0): ?>
					<td><a href=""><?php echo $this->_tpl_vars['userInfo']['0']['accept']/$this->_tpl_vars['userInfo']['0']['answer']*100; ?>
%</a></td>
					<?php else: ?>
					<td><a href="">0%</a></td>
					<?php endif; ?>
					<td class='last'><a href=""><?php echo $this->_tpl_vars['userInfo']['0']['ask']; ?>
</a></td>
				</tr>
			</table>
		</div>

	<ul>
		<li class='myhome cur'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
">我的首页</a>
		</li>
		<li class='myask'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
$a=ask">我的提问</a>
		</li>
		<li class='myanswer'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
$a=answer">我的回答</a>
		</li>
		<li class='mylevel'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
$a=level">我的等级</a>
		</li>
		<li class='mygold'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
$a=gold">我的金币</a>
		</li>
		<li class='myface'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
$a=face">上传头像</a>
		</li>

		<li style="background:none"></li>
	</ul>
</div>
<!-- 左侧结束 -->
		<div id='right'>
	
			<p class='title'>我的首页</p>

			<ul class='property'>
				<li>金币：<span>20</span></li>
				<li>经验值：<span>30</span></li>
				<li>采纳率：<span>100%</span></li>
			</ul>
			<div class='list'>
				<p><span>我的提问 <b>(共100条)</b></span><a href="">更多>></a></p>
				<table>
				
						<tr height='140'>
							<td>你还没有进行过提问</td>
						</tr>

						<tr>
							<th class='t1'>标题</th>
							<th>回答数</th>
							<th class='t3'>更新时间</th>
						</tr>
					
						<tr>
							<td class='t1'>
								<a href="">什么牌子的电脑最好？</a><span>[电脑/硬件]</span>
							</td>
							<td>20</td>
							<td class='t3'>1900.1.1</td>
						</tr>
				</table>
			</div>
			<div class='list'>
				<p><span>我的回答 <b>(共20条)</b></span><a href="">更多>></a></p>
				<table>

					<tr height='140'>
						<td>你还没有进行过回答</td>
					</tr>

					<tr>
						<th class='t1'>标题</th>
						<th>回答</th>
						<th class='t3'>更新时间</th>
					</tr>

					<tr>
						<td class='t1'>
							<a href="">什么牌子的电脑好</a><span>[电脑/硬件]</span>
						</td>
						<td>20</td>
						<td class='t3'>1900.1.1</td>
					</tr>

				</table>
			</div>
		</div>
	</div>
<!--------------------中部结束-------------------->

<!--------------------底部-------------------->
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