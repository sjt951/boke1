<?php /* Smarty version 2.6.26, created on 2015-08-02 22:53:31
         compiled from my_answer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'my_answer.html', 39, false),)), $this); ?>
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
	<script type="text/javascript" src='Public/Home/Js/member.js'></script>

<!--------------------中部-------------------->
	<div id='center'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='right'>
			<p class='title'>我的回答</p>
			<ul class='ask-filter'>
				<li <?php if ($_GET['w'] != 2): ?>class='cur'<?php endif; ?>><a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=answer&w=1">全部回答</a></li>
				<li <?php if ($_GET['w'] == 2): ?>class='cur'<?php endif; ?>><a href="index.php?c=My&uid=<?php echo $_GET['uid']; ?>
&a=answer&w=2">已采纳回答</a></li>
			</ul>
			<div class='list list-filter' <?php if ($_GET['w'] == 2): ?>hidden<?php endif; ?>>
				<table>
					<?php if (! $this->_tpl_vars['answerData']): ?>	
						<tr height='140'>
							<td><?php if ($_SESSION['uid'] == $_GET['uid']): ?>你<?php else: ?>Ta<?php endif; ?>还没有回答过问题</td>
						</tr>
					<?php else: ?>
						<tr>
							<th class='t1'>标题</th>
							<th>回答</th>
							<th class='t3'>时间</th>
						</tr>
						<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['answerData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<tr>							
								<td class='t1'>
									<a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['answerData'][$this->_sections['n']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['answerData'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['answerData'][$this->_sections['n']['index']]['content']; ?>
</a>
								</td>
								<td><?php echo $this->_tpl_vars['answerData'][$this->_sections['n']['index']]['answer']; ?>
</td>
								<td class='t3'><?php echo ((is_array($_tmp=$this->_tpl_vars['answerData'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
							</tr>
						<?php endfor; endif; ?>	
					<?php endif; ?>
				</table>
			</div>
			<div class='list list-filter <?php if ($_GET['w'] != 2): ?>hidden<?php endif; ?>'>
				<table>
					<?php if (! $this->_tpl_vars['niceAN']): ?>	
						<tr height='140'>
							<td><?php if ($_SESSION['uid'] == $_GET['uid']): ?>你<?php else: ?>Ta<?php endif; ?>还没有被采纳的回答</td>
						</tr>
					<?php else: ?>
						<tr>
							<th class='t1'>标题</th>
							<th>回答</th>
							<th class='t3'>时间</th>
						</tr>
						<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['niceAN']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<tr>							
								<td class='t1'>
									<a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['niceAN'][$this->_sections['n']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['niceAN'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['niceAN'][$this->_sections['n']['index']]['content']; ?>
</a>
								</td>
								<td><?php echo $this->_tpl_vars['niceAN'][$this->_sections['n']['index']]['answer']; ?>
</td>
								<td class='t3'><?php echo ((is_array($_tmp=$this->_tpl_vars['niceAN'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
							</tr>
						<?php endfor; endif; ?>	
					<?php endif; ?>
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