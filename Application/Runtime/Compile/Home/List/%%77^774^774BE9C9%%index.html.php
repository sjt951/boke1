<?php /* Smarty version 2.6.26, created on 2016-01-03 13:01:09
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 64, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<link rel="stylesheet" href="Public/Home/Css/list.css" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div id='location'>
		<a href="index.php?c=List&cid=0">全部分类</a>
		<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['fatherCate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_sections['n']['last']): ?>
				&gt;&nbsp;<?php echo $this->_tpl_vars['fatherCate'][$this->_sections['n']['index']]['title']; ?>
&nbsp;&nbsp;
			<?php else: ?>
				&gt;&nbsp;<a href="index.php?c=List&cid=<?php echo $this->_tpl_vars['fatherCate'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['fatherCate'][$this->_sections['n']['index']]['title']; ?>
</a>&nbsp;&nbsp;
			<?php endif; ?>
		<?php endfor; endif; ?>
	</div>

<!--------------------中部-------------------->
	<div id='center'>
		<div id='left'>
			<div id='cate-list'>
				<p class='title'>按分类查找</p>
				<ul>
					<?php $_from = $this->_tpl_vars['sonData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
					<li>
						<a href="index.php?c=List&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div id='answer-list'>
				<ul class='ans-sel'>
					<li <?php if ($_GET['w'] == 0): ?> class="on" <?php endif; ?>>
						<a href="./index.php?c=List&cid=<?php echo $_GET['cid']; ?>
&w=0">待解决问题</a>
					</li>
					<li <?php if ($_GET['w'] == 1): ?> class="on" <?php endif; ?>>
						<a href="./index.php?c=List&cid=<?php echo $_GET['cid']; ?>
&w=1">已解决</a>
					</li>
					<li <?php if ($_GET['w'] == 2): ?> class="on" <?php endif; ?>>
						<a href="./index.php?c=List&cid=<?php echo $_GET['cid']; ?>
&w=2">高悬赏</a>
					</li>
					<li <?php if ($_GET['w'] == 3): ?> class="on" <?php endif; ?>>
						<a href="./index.php?c=List&cid=<?php echo $_GET['cid']; ?>
&w=3">零回答</a>
					</li>
				</ul>
				<!-- 待解决问题 -->
				<table>
					<tr>
						<th class='t1'>标题</th>
						<th>回答数</th>
						<th>时间</th>
					</tr>
					<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<tr>
							<td class='t1 cons'>
								<a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['v']['asid']; ?>
&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
">
								<b><?php echo $this->_tpl_vars['v']['reward']; ?>
</b><?php echo $this->_tpl_vars['v']['content']; ?>
</a>&nbsp;&nbsp;[<?php echo $this->_tpl_vars['v']['title']; ?>
]
							</td>
							<td><?php echo $this->_tpl_vars['v']['answer']; ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>

			</div>
		</div>
		<!-- 右侧 -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	</div>
<!--------------------中部结束-------------------->

	<!-- 底部 -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/bottom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- 												
12345678		         							 	
1234 v5678										   	   12345678	
1234
12  v34 												1234
12
1 v2													12
1														1
			 -->