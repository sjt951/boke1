<?php /* Smarty version 2.6.26, created on 2015-07-31 12:26:54
         compiled from welcome.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="Public/Admin/css/public.css" />
</head>
<body>
	<table class="table">
		<tr>
			<td colspan='2' class="th"><span class="span_server" style="float:left">&nbsp</span>服务器信息</td>
		</tr>

		<tr>
			<td>服务器环境</td>
			<td><?php echo $_SERVER['SERVER_SOFTWARE']; ?>
</td>
		</tr>
		<tr>
			<td>PHP版本</td>
			<td><?php echo @PHP_VERSION; ?>
</td>
		</tr>
		<tr>
			<td>服务器IP</td>
			<td><?php echo $_SERVER['SERVER_ADDR']; ?>
</td>
		</tr>
		<tr>
			<td>数据库信息</td>
			<td>{mysql_get_client_info}</td>
		</tr>
		<tr>
			<td colspan='2' class="th"><span class="span_people">&nbsp</span>管理员信息</td>
		</tr>
		<tr>
			<td>用户名</td>
			<td><?php echo $_SESSION['aname']; ?>
</td>
		</tr>
		<tr>
			<td>登录时间</td>
			<td></td>
		</tr>
		<tr>
			<td>登陆IP</td>
			<td></td>
		</tr>
		
</table>
</body>
</html>