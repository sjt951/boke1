<?php /* Smarty version 2.6.26, created on 2015-08-03 09:45:26
         compiled from ../Common/left.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', '../Common/left.html', 27, false),)), $this); ?>
<!-- 左侧 -->
<div id='left'>
		<div class='userinfo'>
			<dl>
				<dt>
					<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=face"><img src="<?php if (! $this->_tpl_vars['userInfo']['0']['face']): ?>Public/Home/Images/noface.gif<?php else: ?><?php echo $this->_tpl_vars['userInfo']['0']['face']; ?>
<?php endif; ?>" width='48' height='48' alt="占位符"/></a>
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
					<td><a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=answer"><?php echo $this->_tpl_vars['userInfo']['0']['answer']; ?>
</a></td>
					<?php if ($this->_tpl_vars['userInfo']['0']['answer'] != 0): ?>
					<td><a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=answer"><?php echo ((is_array($_tmp=$this->_tpl_vars['userInfo']['0']['accept']/$this->_tpl_vars['userInfo']['0']['answer']*100)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
%</a></td>
					<?php else: ?>
					<td><a href="">0%</a></td>
					<?php endif; ?>
					<td class='last'><a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=ask"><?php echo $this->_tpl_vars['userInfo']['0']['ask']; ?>
</a></td>
				</tr>
			</table>
		</div>

	<ul>
		<li class='myhome <?php if ($this->_tpl_vars['cur'] == 0): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
"><?php if ($_SESSION['uid'] == $_GET['uid']): ?>我<?php else: ?>Ta<?php endif; ?>的首页</a>
		</li>
		<li class='myask <?php if ($this->_tpl_vars['cur'] == 1): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=ask"><?php if ($_SESSION['uid'] == $_GET['uid']): ?>我<?php else: ?>Ta<?php endif; ?>的提问</a>
		</li>
		<li class='myanswer <?php if ($this->_tpl_vars['cur'] == 2): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=answer"><?php if ($_SESSION['uid'] == $_GET['uid']): ?>我<?php else: ?>Ta<?php endif; ?>的回答</a>
		</li>
		<?php if ($_SESSION['uid'] == $_GET['uid']): ?>
		<li class='mylevel <?php if ($this->_tpl_vars['cur'] == 3): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=level">我的等级</a>
		</li>
		<li class='mygold <?php if ($this->_tpl_vars['cur'] == 4): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=gold">我的金币</a>
		</li>
		<li class='myface <?php if ($this->_tpl_vars['cur'] == 5): ?>cur<?php endif; ?>'>
			<a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=face">上传头像</a>
		</li>
		<?php endif; ?>
		<li style="background:none"></li>
	</ul>
</div>
<!-- 左侧结束 -->