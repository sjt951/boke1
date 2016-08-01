<?php /* Smarty version 2.6.26, created on 2015-08-01 12:49:47
         compiled from ../Common/top.html */ ?>

<link rel="stylesheet" href="Public/Home/Css/common.css" />
<script type="text/javascript" src='Public/Home/Js/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='Public/Home/Js/top-bar.js'></script>
</head>
<body>
	<!-- top -->
	<div id='top-fixed'>
	<div id='top-bar'>
		<ul class="top-bar-left fl">
			<li><a href="http://www.houdunwang.com" target='_blank'>后盾顶尖后盾PHP培训</a></li>
			<li><a href="http://www.houdunwang.com" target='_blank'>后盾论坛</a></li>
		</ul>
		<ul class='top-bar-right fr'>


		<?php if ($_SESSION['user']): ?>
			<li class='userinfo'>
				<a href="index.php?c=My&uid=<?php echo $_SESSION['uid']; ?>
" class='uname'><?php echo $_SESSION['user']; ?>
</a>
			</li>
			<li style='color:#eaeaf1'>|</li>
			<li><a href="index.php?c=Login&a=out">退出</a></li>
		<?php else: ?>
			<li><a href="" class='login'>登录</a></li>
			<li style='color:#eaeaf1'>|</li>
			<li><a href="" class='register'>注册</a></li>	
		<?php endif; ?>
		</ul>
	</div>
<!-- 提问搜索框 -->
	<div id='search'>
		<div class='logo'><a href="index.php" class='logo'></a></div>
		<form action="index.php?c=Search" method='POST'>
			<input type="text" name='content' class='sech-cons'/>
			<input type="submit" class='sech-btn' value="1" />
		</form>
		<a href="index.php?c=Question" class='ask-btn'></a>
	</div>
<!-- 提问搜索框结束 -->
</div>
<div style='height:110px'></div>
<!----------导航条---------->
<div id='nav'>
	<ul class='list'>
		<li class='nav-sel'><a href="index.php" class='home'>问答首页</a></li>
		<li class='nav-sel ask-cate'>
			<a href="" class='ask-list'><span>问题库</span><i></i></a>
			<ul class='hidden'>
				<?php unset($this->_sections['top']);
$this->_sections['top']['loop'] = is_array($_loop=$this->_tpl_vars['topDate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['top']['name'] = 'top';
$this->_sections['top']['show'] = true;
$this->_sections['top']['max'] = $this->_sections['top']['loop'];
$this->_sections['top']['step'] = 1;
$this->_sections['top']['start'] = $this->_sections['top']['step'] > 0 ? 0 : $this->_sections['top']['loop']-1;
if ($this->_sections['top']['show']) {
    $this->_sections['top']['total'] = $this->_sections['top']['loop'];
    if ($this->_sections['top']['total'] == 0)
        $this->_sections['top']['show'] = false;
} else
    $this->_sections['top']['total'] = 0;
if ($this->_sections['top']['show']):

            for ($this->_sections['top']['index'] = $this->_sections['top']['start'], $this->_sections['top']['iteration'] = 1;
                 $this->_sections['top']['iteration'] <= $this->_sections['top']['total'];
                 $this->_sections['top']['index'] += $this->_sections['top']['step'], $this->_sections['top']['iteration']++):
$this->_sections['top']['rownum'] = $this->_sections['top']['iteration'];
$this->_sections['top']['index_prev'] = $this->_sections['top']['index'] - $this->_sections['top']['step'];
$this->_sections['top']['index_next'] = $this->_sections['top']['index'] + $this->_sections['top']['step'];
$this->_sections['top']['first']      = ($this->_sections['top']['iteration'] == 1);
$this->_sections['top']['last']       = ($this->_sections['top']['iteration'] == $this->_sections['top']['total']);
?>
				<li><a href="index.php?c=list&cid=<?php echo $this->_tpl_vars['topDate'][$this->_sections['top']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['topDate'][$this->_sections['top']['index']]['title']; ?>
</a></li>
				<?php endfor; endif; ?>

			</ul>
		</li>
	</ul>

	<p class='total'>累计提问：<?php echo $this->_tpl_vars['allAskData']; ?>
</p>

</div>

	<!----------注册框---------->
	<div id='register' class='hidden'>
		<div class='reg-title'>
			<p>欢迎注册后盾问答</p>
			<a href="" title='关闭' class='close-window'></a>
		</div>
		<div id='reg-wrap'>
			<div class='reg-left'>
				<ul>
					<li><span>账号注册</span></li>
				</ul>
				<div class='reg-l-bottom'>
					已有账号，<a href="" id='login-now'>马上登录</a>
				</div>
			</div>
			<div class='reg-right'>
				<form action="index.php?c=Register&a=Register" method='post' name='register'>
					<ul>
						<li>
							<label for="reg-uname">用户名</label>
							<input type="text" name='username' id='reg-uname'/>
							<span>2-14个字符：字母、数字或中文</span>
						</li>
						<li>
							<label for="reg-pwd">密码</label>
							<input type="password" name='password' id='reg-pwd'/>
							<span>6-20个字符:字母、数字或下划线 _</span>
						</li>
						<li>
							<label for="reg-pwded">确认密码</label>
							<input type="password" name='passworded' id='reg-pwded'/>
							<span>请再次输入密码</span>
						</li>
						<li>
							<label for="reg-verify">验证码</label>
							<input type="text" name='code' id='reg-verify'/>
							<img src="index.php?a=show" width='120' height='35' alt="验证码" id='verify-img'/>
							<span>请输入图中的字母或数字，不区分大小写</span>
						</li>
						<li class='submit'>
							<input type="submit" value='立即注册'/>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<!----------登录框---------->	
	<div id='login' class='hidden'>
		<div class='login-title'>
			<p>欢迎您登录后盾问答</p>
			<a href="" title='关闭' class='close-window'></a>
		</div>
		<div class='login-form'>
			<span id='login-msg'></span>
			<!-- 登录FORM -->
			<form action="index.php?c=Login&a=Login" method='post' name='login'>
				<ul>
					<li>
						<label for="login-acc">账号</label>
						<input type="text" name='account' class='input' id='login-acc'/>
					</li>
					<li>
						<label for="login-pwd">密码</label>
						<input type="password" name='pwd' class='input' id='login-pwd'/>
					</li>
					<li class='login-auto'>
						<label for="auto-login">
							<input type="checkbox" checked='checked' name='auto'  id='auto-login'/>&nbsp;下一次自动登录
						</label>
						<a href="" id='regis-now'>注册新账号</a>
					</li>
					<li>
						<input type="submit" value='' id='login-btn'/>
					</li>
				</ul>
			</form>
		</div>
	</div>

<!--背景遮罩--><div id='background' class='hidden'></div>
<!-- top -->