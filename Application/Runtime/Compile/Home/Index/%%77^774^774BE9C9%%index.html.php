<?php /* Smarty version 2.6.26, created on 2015-08-03 09:22:45
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<link rel="stylesheet" href="Public/Home/Css/index.css" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script type="text/javascript" src='Public/Home/Js/index.js'></script>
	<div class='main'>
		<div id='left'>
			<p class='left-title'>所有问题分类</p>
			<ul class='left-list'>
				<?php unset($this->_sections['top']);
$this->_sections['top']['loop'] = is_array($_loop=$this->_tpl_vars['cateData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li class='list-l1'>
					<div class='list-l1-wrap'>
						
						<h4><a href="index.php?c=list&cid=<?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['title']; ?>
</a></h4>
						<ul class='list-l2'>
							<?php unset($this->_sections['son']);
$this->_sections['son']['loop'] = is_array($_loop=$this->_tpl_vars['cateData'][$this->_sections['top']['index']]['son']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['son']['name'] = 'son';
$this->_sections['son']['max'] = (int)3;
$this->_sections['son']['show'] = true;
if ($this->_sections['son']['max'] < 0)
    $this->_sections['son']['max'] = $this->_sections['son']['loop'];
$this->_sections['son']['step'] = 1;
$this->_sections['son']['start'] = $this->_sections['son']['step'] > 0 ? 0 : $this->_sections['son']['loop']-1;
if ($this->_sections['son']['show']) {
    $this->_sections['son']['total'] = min(ceil(($this->_sections['son']['step'] > 0 ? $this->_sections['son']['loop'] - $this->_sections['son']['start'] : $this->_sections['son']['start']+1)/abs($this->_sections['son']['step'])), $this->_sections['son']['max']);
    if ($this->_sections['son']['total'] == 0)
        $this->_sections['son']['show'] = false;
} else
    $this->_sections['son']['total'] = 0;
if ($this->_sections['son']['show']):

            for ($this->_sections['son']['index'] = $this->_sections['son']['start'], $this->_sections['son']['iteration'] = 1;
                 $this->_sections['son']['iteration'] <= $this->_sections['son']['total'];
                 $this->_sections['son']['index'] += $this->_sections['son']['step'], $this->_sections['son']['iteration']++):
$this->_sections['son']['rownum'] = $this->_sections['son']['iteration'];
$this->_sections['son']['index_prev'] = $this->_sections['son']['index'] - $this->_sections['son']['step'];
$this->_sections['son']['index_next'] = $this->_sections['son']['index'] + $this->_sections['son']['step'];
$this->_sections['son']['first']      = ($this->_sections['son']['iteration'] == 1);
$this->_sections['son']['last']       = ($this->_sections['son']['iteration'] == $this->_sections['son']['total']);
?>
							<li><a href="index.php?c=list&cid=<?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['son'][$this->_sections['son']['index']]['title']; ?>
</a></li>
							<?php endfor; endif; ?>
						</ul>
					</div>

					<div class='list-more hidden'>
						<ul>
							<?php unset($this->_sections['son']);
$this->_sections['son']['loop'] = is_array($_loop=$this->_tpl_vars['cateData'][$this->_sections['top']['index']]['son']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['son']['name'] = 'son';
$this->_sections['son']['start'] = (int)3;
$this->_sections['son']['show'] = true;
$this->_sections['son']['max'] = $this->_sections['son']['loop'];
$this->_sections['son']['step'] = 1;
if ($this->_sections['son']['start'] < 0)
    $this->_sections['son']['start'] = max($this->_sections['son']['step'] > 0 ? 0 : -1, $this->_sections['son']['loop'] + $this->_sections['son']['start']);
else
    $this->_sections['son']['start'] = min($this->_sections['son']['start'], $this->_sections['son']['step'] > 0 ? $this->_sections['son']['loop'] : $this->_sections['son']['loop']-1);
if ($this->_sections['son']['show']) {
    $this->_sections['son']['total'] = min(ceil(($this->_sections['son']['step'] > 0 ? $this->_sections['son']['loop'] - $this->_sections['son']['start'] : $this->_sections['son']['start']+1)/abs($this->_sections['son']['step'])), $this->_sections['son']['max']);
    if ($this->_sections['son']['total'] == 0)
        $this->_sections['son']['show'] = false;
} else
    $this->_sections['son']['total'] = 0;
if ($this->_sections['son']['show']):

            for ($this->_sections['son']['index'] = $this->_sections['son']['start'], $this->_sections['son']['iteration'] = 1;
                 $this->_sections['son']['iteration'] <= $this->_sections['son']['total'];
                 $this->_sections['son']['index'] += $this->_sections['son']['step'], $this->_sections['son']['iteration']++):
$this->_sections['son']['rownum'] = $this->_sections['son']['iteration'];
$this->_sections['son']['index_prev'] = $this->_sections['son']['index'] - $this->_sections['son']['step'];
$this->_sections['son']['index_next'] = $this->_sections['son']['index'] + $this->_sections['son']['step'];
$this->_sections['son']['first']      = ($this->_sections['son']['iteration'] == 1);
$this->_sections['son']['last']       = ($this->_sections['son']['iteration'] == $this->_sections['son']['total']);
?>
							<li><a href="index.php?c=list&cid=<?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['cateData'][$this->_sections['top']['index']]['son'][$this->_sections['son']['index']]['title']; ?>
</a></li>
							<?php endfor; endif; ?>
						</ul>
					</div>
				</li>
				<?php endfor; endif; ?>
			</ul>
		</div>



		<div id='center'>
			<div id='animate'>
				<div class='imgs-wrap'>
					<ul>
						<li>
							<a href=""><img src="Public/Home/Images/animate1.jpg" width='558' height='190'/></a>
						</li>
						<li>
							<a href=""><img src="Public/Home/Images/animate2.jpg" width='558' height='190'/></a>
						</li>
						<li>
							<a href=""><img src="Public/Home/Images/animate3.jpg" width='558' height='190'/></a>
						</li>
					</ul>
				</div>
				<ul class='ani-btn'>
					<li class='ani-btn-cur'>0学费学习<i></i></li>
					<li>超百G原创视频<i></i></li>
					<li style='border:none'>有实力做后盾<i></i></li>
				</ul>
			</div>

			<dl class='answer-list'>
				<dt>
					<span class='wait-as'>待解决问题</span>
					<a href='index.php?c=List&cid=0'>更多>></a>
				</dt>
				<?php unset($this->_sections['ask']);
$this->_sections['ask']['loop'] = is_array($_loop=$this->_tpl_vars['noSolve']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ask']['name'] = 'ask';
$this->_sections['ask']['show'] = true;
$this->_sections['ask']['max'] = $this->_sections['ask']['loop'];
$this->_sections['ask']['step'] = 1;
$this->_sections['ask']['start'] = $this->_sections['ask']['step'] > 0 ? 0 : $this->_sections['ask']['loop']-1;
if ($this->_sections['ask']['show']) {
    $this->_sections['ask']['total'] = $this->_sections['ask']['loop'];
    if ($this->_sections['ask']['total'] == 0)
        $this->_sections['ask']['show'] = false;
} else
    $this->_sections['ask']['total'] = 0;
if ($this->_sections['ask']['show']):

            for ($this->_sections['ask']['index'] = $this->_sections['ask']['start'], $this->_sections['ask']['iteration'] = 1;
                 $this->_sections['ask']['iteration'] <= $this->_sections['ask']['total'];
                 $this->_sections['ask']['index'] += $this->_sections['ask']['step'], $this->_sections['ask']['iteration']++):
$this->_sections['ask']['rownum'] = $this->_sections['ask']['iteration'];
$this->_sections['ask']['index_prev'] = $this->_sections['ask']['index'] - $this->_sections['ask']['step'];
$this->_sections['ask']['index_next'] = $this->_sections['ask']['index'] + $this->_sections['ask']['step'];
$this->_sections['ask']['first']      = ($this->_sections['ask']['iteration'] == 1);
$this->_sections['ask']['last']       = ($this->_sections['ask']['iteration'] == $this->_sections['ask']['total']);
?>
				<dd>
					<a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['noSolve'][$this->_sections['ask']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['noSolve'][$this->_sections['ask']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['noSolve'][$this->_sections['ask']['index']]['content']; ?>
</a>
					<span><?php echo $this->_tpl_vars['noSolve'][$this->_sections['ask']['index']]['answer']; ?>
回答</span>
				</dd>
				<?php endfor; endif; ?>
			</dl>

			<dl class='answer-list'>
				<dt>
					<span class='reward-as'>高分悬赏问题</span>
					<a href='index.php?c=List&cid=0&w=2'>更多>></a>
				</dt>
				<?php unset($this->_sections['reward']);
$this->_sections['reward']['loop'] = is_array($_loop=$this->_tpl_vars['rewardData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reward']['name'] = 'reward';
$this->_sections['reward']['show'] = true;
$this->_sections['reward']['max'] = $this->_sections['reward']['loop'];
$this->_sections['reward']['step'] = 1;
$this->_sections['reward']['start'] = $this->_sections['reward']['step'] > 0 ? 0 : $this->_sections['reward']['loop']-1;
if ($this->_sections['reward']['show']) {
    $this->_sections['reward']['total'] = $this->_sections['reward']['loop'];
    if ($this->_sections['reward']['total'] == 0)
        $this->_sections['reward']['show'] = false;
} else
    $this->_sections['reward']['total'] = 0;
if ($this->_sections['reward']['show']):

            for ($this->_sections['reward']['index'] = $this->_sections['reward']['start'], $this->_sections['reward']['iteration'] = 1;
                 $this->_sections['reward']['iteration'] <= $this->_sections['reward']['total'];
                 $this->_sections['reward']['index'] += $this->_sections['reward']['step'], $this->_sections['reward']['iteration']++):
$this->_sections['reward']['rownum'] = $this->_sections['reward']['iteration'];
$this->_sections['reward']['index_prev'] = $this->_sections['reward']['index'] - $this->_sections['reward']['step'];
$this->_sections['reward']['index_next'] = $this->_sections['reward']['index'] + $this->_sections['reward']['step'];
$this->_sections['reward']['first']      = ($this->_sections['reward']['iteration'] == 1);
$this->_sections['reward']['last']       = ($this->_sections['reward']['iteration'] == $this->_sections['reward']['total']);
?>
				<dd>
					<a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['rewardData'][$this->_sections['reward']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['rewardData'][$this->_sections['reward']['index']]['cid']; ?>
"><b><?php echo $this->_tpl_vars['rewardData'][$this->_sections['reward']['index']]['reward']; ?>
</b><?php echo $this->_tpl_vars['rewardData'][$this->_sections['reward']['index']]['content']; ?>
</a>
					<span><?php echo $this->_tpl_vars['rewardData'][$this->_sections['reward']['index']]['answer']; ?>
回答</span>
				</dd>
				<?php endfor; endif; ?>
			</dl>

		</div>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<!--------------------内容主体结束-------------------->
	<div class='clear'></div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/bottom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>