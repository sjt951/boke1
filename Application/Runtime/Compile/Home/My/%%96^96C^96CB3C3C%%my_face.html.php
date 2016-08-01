<?php /* Smarty version 2.6.26, created on 2015-08-02 10:54:19
         compiled from my_face.html */ ?>
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
	<link rel="stylesheet" href="Public/Home/Css/face.css">

<!--中部-->
	<div id='center'>
<!-- 左侧 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- 左侧结束 -->
		<div id='right'>
			<p class='title'>头像上传</p>
			<ul class='ask-filter'>
			</ul>
			<div class='imgface_box'>
				<img src="./Images/profile_avatar.jpg" id="preview">
				<form action="index.php?c=My&a=upload" method="POST" enctype="multipart/form-data">
					<input type="file" name="face" id="face" >
					<input type="submit" value="上传头像" id="sub">
				</form>
				<p>支持JPG、PNG、GIF图片类型，不能大于5M。推荐尺寸：180PX*180PX</p>
			</div>
		</div>
	</div>
<!-- 底部 -->
	<div id='bottom'>
		<p>Copyright © 2013 houdunwang.Com All Rights Reserved 后盾网</p>
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