<?php /* Smarty version 2.6.26, created on 2015-08-03 08:54:51
         compiled from ../Common/right.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', '../Common/right.html', 29, false),)), $this); ?>
<!-- 右侧 -->
		<div id='right'>
		<?php if ($_SESSION['uid']): ?>
		<div class='userinfo'>
			<dl>
				<dt>
					<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
"><img src="<?php if (! $this->_tpl_vars['userInfo']['0']['face']): ?>Public/Home/Images/noface.gif<?php else: ?><?php echo $this->_tpl_vars['userInfo']['0']['face']; ?>
<?php endif; ?>" width='48' height='48' alt="占位符"/></a>
				</dt>
				<dd class='username'>
					<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
">
						<b><?php echo $this->_tpl_vars['userInfo']['0']['username']; ?>
</b>
					</a>
					<a href="">
						<i class='level lv1' title='Level 1'></i>
					</a>
				</dd>
				<dd>金币：<a href="" style="color: #888888;"><?php echo $this->_tpl_vars['userInfo']['0']['point']; ?>
<b class='point'></b></a></dd>
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
					<td><a href="index.php?c=My&a=answer&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
"><?php echo $this->_tpl_vars['userInfo']['0']['answer']; ?>
</a></td>
					<?php if ($this->_tpl_vars['userInfo']['0']['answer'] != 0): ?>
					<td><a href="index.php?c=My&a=answer&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['userInfo']['0']['accept']/$this->_tpl_vars['userInfo']['0']['answer']*100)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
%</a></td>
					<?php else: ?>
					<td><a href="index.php?c=My&a=answer&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
">0%</a></td>
					<?php endif; ?>
					<td class='last'><a href="index.php?c=My&a=ask&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
"><?php echo $this->_tpl_vars['userInfo']['0']['ask']; ?>
</a></td>
				</tr>
			</table>
			<ul>
				<li><a href="index.php?c=My&a=ask&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
">我提问的</a></li>
				<li><a href="index.php?c=My&a=answer&uid=<?php echo $this->_tpl_vars['userInfo']['0']['uid']; ?>
">我回答的</a></li>
			</ul>
		</div>
		<?php else: ?>
		<div class='r-login'>
			<span class='login'><i></i>&nbsp;登录</span>
			<span class='register'><i></i>&nbsp;注册</span>
		</div>
		<?php endif; ?>
	<div class='clear'></div>
	<div class='star'>
	<?php if ($this->_tpl_vars['day']): ?>
	<p class='title'>后盾问答之星</p>
		<span class='star-name'>本日回答问题最多的人</span>
			<div class='star-info'>
				<div>
					<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['day']['0']['uid']; ?>
" class='star-face'>
						<img src="<?php if (! $this->_tpl_vars['day']['0']['face']): ?>Public/Home/Images/noface.gif<?php else: ?><?php echo $this->_tpl_vars['day']['0']['face']; ?>
<?php endif; ?>" width='48px' height='48px' alt="头像站位"/>
					</a>
					<ul>
						<li><a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['day']['0']['uid']; ?>
"><?php echo $this->_tpl_vars['day']['0']['username']; ?>
</a></li>
						<i class='level lv1' title='Level 1'></i>
					</ul>
				</div>
				<ul class='star-count'>
					<li>回答数：<span><?php echo $this->_tpl_vars['day']['0']['answer']; ?>
</span></li>
					<?php if ($this->_tpl_vars['day']['0']['answer'] != 0): ?>
						<li>采纳率：<span><?php echo ((is_array($_tmp=$this->_tpl_vars['day']['0']['accept']/$this->_tpl_vars['day']['0']['answer']*100)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
%</span></li>
					<?php else: ?>
						<li>采纳率：<span>0%</span></li>
					<?php endif; ?>

				</ul>
			</div>
		<?php endif; ?>
		<span class='star-name'>历史回答问题最多的人</span>

		<div class='star-info'>
			<div>
				<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['lishi']['0']['uid']; ?>
" class='star-face'>
					<img src="<?php if (! $this->_tpl_vars['lishi']['0']['face']): ?>Public/Home/Images/noface.gif<?php else: ?><?php echo $this->_tpl_vars['lishi']['0']['face']; ?>
<?php endif; ?>" width='48px' height='48px' alt="头像站位"/>
				</a>
				<ul>
					<li><a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['lishi']['0']['uid']; ?>
"><?php echo $this->_tpl_vars['lishi']['0']['username']; ?>
</a></li>
					<i class='level lv1' title='Level 1'></i>
				</ul>
			</div>
			<ul class='star-count'>
				<li>回答数：<span><?php echo $this->_tpl_vars['lishi']['0']['answer']; ?>
</span></li>
				<?php if ($this->_tpl_vars['lishi']['0']['answer'] != 0): ?>
					<li>采纳率：<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lishi']['0']['accept']/$this->_tpl_vars['lishi']['0']['answer']*100)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
%</span></li>
				<?php else: ?>
					<li>采纳率：<span>0%</span></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<div class='star-list'>
		<p class='title'>后盾问答助人光荣榜</p>
		<div>
			<ul class='ul-title'>
				<li>用户名</li>
				<li style='text-align:right;'>帮助过的人数</li>
			</ul>
			<ul class='ul-list'>
				<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['help']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
					<li>
						<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['help'][$this->_sections['n']['index']]['uid']; ?>
"><i class='rank r1'></i><?php echo $this->_tpl_vars['help'][$this->_sections['n']['index']]['username']; ?>
</a>
						<span><?php echo $this->_tpl_vars['help'][$this->_sections['n']['index']]['accept']; ?>
</span>
					</li>				
				<?php endfor; endif; ?>
			</ul>
		</div>
	</div>
</div>
<!-- ---右侧结束---- -->