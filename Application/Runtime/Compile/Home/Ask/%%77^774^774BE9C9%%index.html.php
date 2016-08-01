<?php /* Smarty version 2.6.26, created on 2015-08-03 18:03:52
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 51, false),array('modifier', 'string_format', 'index.html', 82, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>

	<link rel="stylesheet" href="Public/Home/Css/question.css" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script type="text/javascript" src="Public/Home/Js/question.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#anw-sub').click(function(){
					var cons = $('textarea[name=content]');
					//如果内容为空
					if(cons.val() == ''){
					alert('请输入回答内容！');
					return false;
				}
			});
			
		})
	</script>
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
	<div id='center-wrap'>
		<div id='center'>
			<div id='left'>
				<div id='answer-info'>
					<!-- 如果没有解决用wait -->
					<div class='ans-state <?php if ($this->_tpl_vars['askData']['solve'] == 0): ?> wait <?php endif; ?>'></div>
					<div class='answer'>
						<p class='ans-title'><?php echo $this->_tpl_vars['askData']['content']; ?>

							<b class='point'>20</b>
						</p>
					</div>
					<ul>
						<li><a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['askData']['uid']; ?>
"><?php echo $this->_tpl_vars['askData']['username']; ?>
</a></li>
						<li><i class='level lv1' title='Level 1'></i></li>
						<li><?php echo ((is_array($_tmp=$this->_tpl_vars['askData']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</li>
				
					</ul>
					<!--1.必须登陆-->
					<!--2.问题不能是自己的问题-->
					<!--3.问题必须没有被解决-->
					<?php if ($_SESSION['user'] && $_SESSION['uid'] && $_SESSION['uid'] != $this->_tpl_vars['askData']['uid'] && $this->_tpl_vars['askData']['solve'] == 0): ?>
					<div class='ianswer'>
						<form action="index.php?c=Ask&a=ans&asid=<?php echo $this->_tpl_vars['askData']['asid']; ?>
" method='POST'>
							<p>我来回答</p>
							<textarea name="content"></textarea>
							<input type="hidden" name='qid' value=''>
							<input type="submit" value='提交回答' id='anw-sub'/>
							<p class='right'>您还可以输入<span id='num'>50</span>个字</p>
						</form>
					</div>
					<?php endif; ?>
					<!-- 满意回答 -->
					<?php if ($this->_tpl_vars['askData']['solve'] == 1): ?>
					<div class='ans-right'>
						<p class='title'><i></i>满意回答<span></span></p>
						<p class='ans-cons'><?php echo $this->_tpl_vars['niceData']['content']; ?>
</p>
						<dl>
							<dt>
								<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['niceData']['uid']; ?>
"><img src="<?php if (! $this->_tpl_vars['niceData']['face']): ?>Public/Home/Images/noface.gif<?php else: ?><?php echo $this->_tpl_vars['niceData']['face']; ?>
<?php endif; ?>" width='48' height='48'/></a>
							</dt>
							<dd>
								<a href="index.php?c=My&uid=<?php echo $this->_tpl_vars['niceData']['uid']; ?>
"><?php echo $this->_tpl_vars['niceData']['username']; ?>
</a>
							</dd>
							<dd><i class='level lv1'></i></dd>
						<?php if ($this->_tpl_vars['userInfo']['0']['answer'] != 0): ?>
						<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['niceData']['accept']/$this->_tpl_vars['niceData']['answer']*100)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
%</dd>
						<?php else: ?>
						<dd>0%</dd>
						<?php endif; ?>
							

						</dl>
					</div>
					<?php endif; ?>
					<!-- 满意回答 -->
				</div>

				<div id='all-answer'>
					<div class='ans-icon'></div>
					<p class='title'>共 <strong><?php echo $this->_tpl_vars['ask']['0']['answer']; ?>
</strong> 条回答</p>
					<ul>
						<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['ansData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class='face'>
								<a href="">
									<img src="Public/Home/Images/noface.gif" width='48' height='48'/>
								</a>
							</div>
							<div class='cons blue'>
								<p><?php echo $this->_tpl_vars['ansData'][$this->_sections['n']['index']]['content']; ?>
<span style='color:#888;font-size:12px'>&nbsp;&nbsp;(<?php echo ((is_array($_tmp=$this->_tpl_vars['ansData'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
)</span></p>
							</div>
							<?php if ($_SESSION['user'] && $_SESSION['uid'] && $_SESSION['uid'] == $this->_tpl_vars['askData']['uid'] && $this->_tpl_vars['askData']['solve'] == 0): ?>
								<a href="index.php?c=Ask&a=accept&asid=<?php echo $this->_tpl_vars['ansData'][$this->_sections['n']['index']]['asid']; ?>
&uid=<?php echo $this->_tpl_vars['ansData'][$this->_sections['n']['index']]['uid']; ?>
&anid=<?php echo $this->_tpl_vars['ansData'][$this->_sections['n']['index']]['anid']; ?>
&cid=<?php echo $this->_tpl_vars['ansData'][$this->_sections['n']['index']]['cid']; ?>
" class='adopt-btn'>采纳</a>
							<?php endif; ?>
							
						</li>
						<?php endfor; endif; ?>
					</ul>
				</div>
				<div id='other-ask'>
					<p class='title'>待解决的相关问题</p>
					<table>
						<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['qusData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<td class='t1'><a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['qusData'][$this->_sections['n']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['qusData'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['qusData'][$this->_sections['n']['index']]['content']; ?>
</a></td>
							<td><?php echo $this->_tpl_vars['qusData'][$this->_sections['n']['index']]['answer']; ?>
&nbsp;回答</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['qusData'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
						</tr>
						<?php endfor; endif; ?>
					</table>
				</div>
			</div>
		
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
		</div>

	</div>
	
<!--------------------中部结束-------------------->


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/bottom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>