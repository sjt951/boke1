<?php /* Smarty version 2.6.26, created on 2015-08-04 09:27:23
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 44, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<link rel="stylesheet" href="Public/Home/Css/common.css" />
	<script type="text/javascript" src='Public/Home/Js/jquery-1.7.2.min.js'></script>
	<link rel="stylesheet" href="Public/Home/Css/index.css" />
</head>
<body>
	<!-- 搜索顶部 -->
	<div class="search_top">
		<div class="sealeft">
			<a href=""><img src="./images/t0150f9b7bd1b41d84e.png" alt="" /></a>
			<a href="http://www.houdunwang.com">后盾顶尖PHP培训</a>
			<a href="http://www.houdunwang.com">后盾网</a>
		</div>

	</div>
	<!-- 搜索顶部结束 -->
	<!-- 搜索框 -->
	<div class="search_box">
		<form action="index.php?c=Search" method='post'>
			<input type="text" name="content" class="searchInput" value="<?php echo $this->_tpl_vars['content']; ?>
" />
			<input type="submit" value="搜索答案" class="sub"/>
		</form>
		<a href="index.php?c=Question">我要提问</a>
	</div>
	<!-- 搜索框结束 -->
	<!-- 搜索内容 -->
	<div class="searcont">
		<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<ul>
				<li> <a href="index.php?c=Ask&asid=<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['asid']; ?>
&cid=<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['cid']; ?>
" class="title"><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['acon']; ?>
</a> </li>
				<li><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['content']; ?>
</li>
				<li class="time"><span>
				
				<?php unset($this->_sections['c']);
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['n']['index']]['cate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
						<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['cate'][$this->_sections['c']['index']]['title']; ?>
 - 
				<?php endfor; endif; ?>

				<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['answer']; ?>
个回答</span> - 提问时间: <?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</li>
			</ul>
		<?php endfor; endif; ?>
	</div>
	<!-- 搜索内容结束 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/bottom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>