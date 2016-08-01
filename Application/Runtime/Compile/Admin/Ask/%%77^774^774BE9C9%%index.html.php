<?php /* Smarty version 2.6.26, created on 2015-08-02 10:30:48
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 28, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="Public/Admin/Css/public.css" />
	<script type="text/javascript" src="Public/Admin/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="Public/Admin/Js/public.js"></script>	
</head>

<body>
	<table class="table">
		<tr>
			<td class="th" colspan="20">问题列表</td>
		</tr>
		<tr class="tableTop">
			<td class="tdLittle1">ID</td>
			<td>问题内容</td>
			<td>提问时间</td>
			<td>回答人数</td>
			<td>悬赏金币</td>
			<td>操作</td>
		</tr>
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
		<tr>
			<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['asid']; ?>
</td>
			<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['content']; ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['n']['index']]['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
			<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['answer']; ?>
</td>
			<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['reward']; ?>
</td>
			<td><a href="index.php?m=Admin&c=Ask&a=del&asid=<?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['asid']; ?>
" class="del">删除</a></td>
		</tr>
	<?php endfor; endif; ?>
	</table>
	<div class="page">
		共0条 &nbsp
		<a href="">1</a>
	</div>

</body>
</html>