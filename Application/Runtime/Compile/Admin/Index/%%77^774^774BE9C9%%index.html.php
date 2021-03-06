<?php /* Smarty version 2.6.26, created on 2015-08-03 09:16:36
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 34, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>HD问答后台首页</title>
	<link rel="stylesheet" href="Public/Admin/css/admin.css" />
	<script type="text/javascript" src="Public/Admin/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="Public/Admin/js/admin.js"></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font">HD问答管理后台 （V1.1）</p>
			<ul id="menu2" class="menu">
				<li>
					<a href="./index.php" target="_blank">前台首页</a>
				</li>
				<li><a href="" target="_self">查看栏目</a></li> 
				<li><a href="" target="_self">用户列表</a></li>
				<li><a href="" target="_self">网站配置</a></li>				
			</ul>
		</div>
		<div class="top_bar">
			<p class="adm">
					<span>超级</span>
				管理员：
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people">[houdunwang]</span>
			</p>
			<p class="now_time">
				今天是：<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>

				星期<?php echo $this->_tpl_vars['weekday']; ?>
 | 
				您的当前位置是：
				<span>首页</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="index.php?m=Admin&c=Login&a=out" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<p class="use">常用菜单</p>

			 <div class="menu_box">
				<h2>用户管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="index.php?m=Admin&c=User" class="pos">用户的列表</a>				        	
				        </li> 
				    </ul>
				</div>
			</div>

			<div class="menu_box">
				<h2>问题管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="index.php?m=Admin&c=Ask&a=allAsk" class="pos">所有的问题</a>
				        </li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u">
				    		<a href="index.php?m=Admin&c=Ask&a=waitAsk" class="pos">待解决问题</a>
				    	</li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u">
				    		<a href="index.php?m=Admin&c=Ask&a=niceAsk" class="pos">已解决问题</a>
				    	</li>
				    </ul>
				     <ul class="con">
				    	<li class="nav_u">
				    		<a href="index.php?m=Admin&c=Ask&a=zeroAsk" class="pos">无回答问题</a>
				    	</li>
				    </ul>
				</div>
			</div>

			

			<div class="menu_box">
				<h2>回答管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">		        	
				        	<a href="index.php?m=Admin&c=Answer&a=allAns" class="pos">所有的回答</a>
				        </li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u"><a href="index.php?m=Admin&c=Answer&a=waitAns" class="pos">未采纳回答</a></li>
				    </ul>
				     <ul class="con">
				    	<li class="nav_u"><a href="index.php?m=Admin&c=Answer&a=niceAns" class="pos">已采纳回答</a></li>
				    </ul>
				</div>
			</div>

			<div class="menu_box">
				<h2>问题分类</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">		        	
				        	<a href="./index.php?m=Admin&c=category" class="pos">问题分类列表</a>
				        </li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u"><a href="index.php?m=Admin&c=category&a=addTop" class="pos">添加顶级分类</a></li>
				    </ul>
				</div>
			</div>

			<div class="menu_box">
				<h2>奖励管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">		        	
				        	<a href="index.php?m=Admin&c=Rule&a=point" class="pos">金币奖励规则</a>
				        </li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u"><a href="index.php?m=Admin&c=Rule&a=level" class="pos">经验级别规则</a></li>
				    </ul>
				</div>
			</div>

			<div class="menu_box">
				<h2>系统管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href=""  class="pos">系统信息</a>
				        </li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u"><a href=""  class="pos">修改密码</a></li>
				    </ul>

				    <ul class="con">
				        <li class="nav_u"><a href=""  class="pos">网站配置</a></li>
				    </ul>
				</div>
			</div>
			<div class="menu_box">
				<h2>后台用户管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u"><a href=""  class="pos">用户列表</a></li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u"><a href=""  class="pos">添加用户</a></li>
				    </ul>
				</div>
			</div>
			
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src="index.php?m=Admin&a=welcome"></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@Copyright © 2013-2013 MZY.com All Rights Reserved. 京ICP备0000000号</p>
		</div>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="Public/Admin/js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->
</body>
</html>