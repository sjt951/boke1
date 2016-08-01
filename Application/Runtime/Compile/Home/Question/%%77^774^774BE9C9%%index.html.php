<?php /* Smarty version 2.6.26, created on 2015-08-03 12:05:35
         compiled from index.html */ ?>
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
	<link rel="stylesheet" href="Public/Home/Css/ask.css" />
	<script type="text/javascript">
		$(function(){
			var validate = {fenlei : false};
			$('select[name="cate-one"]').change(function(){
				if($(this).index()>2) return;
				//获得当前分类的cid
				var id = $(this).val();
				$('input[name=cid]').val(id);
				//获得下一个的select
				var nextSelect = $(this).next();
				//发送异步，最终要获得该分类的子集
				$.ajax({
					type:"post",
					url:"./index.php?c=Question&a=ajaxCate",
					data:{cid : id},
					dataType:'json',
					success:function(phpData){
						//下一个select显示
						nextSelect.show();
						//组合option
						var op = '';
						$.each(phpData, function(k,v) {    
							op += '<option value="'+v.cid+'">'+v.title+'</option>'
						});
						nextSelect.html(op);
						validate.fenlei = true;
					}
				});
				
			})
			//点击关闭按钮
			$('#ok').click(function(){
				$('.close-window').click();
			})
			$('.send-btn').click(function(){
			// 检测内容
			var cons = $('textarea[name=content]');
			//如果内容为空
			if(cons.val() == ''){
				alert('请输入提问内容！');
				cons.focus();
				return false;
			}

			//如果没有ID说明没有选择分类
			if(!validate.fenlei) {
				alert('请选择一个分类');
				return false;
			}

			//判断用户是否登录
			if(!on){
				$('.login').click();
				return false;
			}


		})
			
		})
	</script>

	<div id='location'>
		<a href="">后盾问答</a>&nbsp;>&nbsp;提问
	</div>

<!--------------------中部-------------------->
	<div id='center'>
		<div class='send'>
			<div class='title'>
				<p class='left'>向亿万网友们提问</p>
				<p class='right'>您还可以输入<span id='num'>50</span>个字</p>
			</div>
			<form action="index.php?c=Question" method='post'>
				<div class='cons'>
					<textarea name="content"></textarea>
				</div>
				<div class='reward'>
					<span id='sel-cate' class='cate-btn'>选择分类</span>
					<ul>
						<li>
							我的金币：<span>1</span>
						</li>
						<li>
					  悬赏：<select name="reward">
								<option value="0">0</option>
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="50">50</option>
								<option value="80">80</option>
								<option value="100">100</option>
							</select>金币
						</li>
					</ul>
				</div>
				<input type='hidden' name='cid' value=''/>
				<input type="submit" value='提交问题' class='send-btn'/>
			</form>
		</div>
	</div>
	<div id='category'>
		<p class='title'>
			<span>请选择分类</span>
			<a href="" class='close-window'></a>
		</p>
		<div class='sel'>
			<p>为您的问题选择一个合适的分类：</p>
			<select name="cate-one" size='16'>
				<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['topCate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo $this->_tpl_vars['topCate'][$this->_sections['n']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['topCate'][$this->_sections['n']['index']]['title']; ?>
</option>
				<?php endfor; endif; ?>
			</select>
			<select name="cate-one" size='16' class='hidden' class="select"></select>
			<select name="cate-one" size='16' class='hidden' class="select"></select>
		</div>
		<p class='bottom'>
			<span id='ok'>确定</span>
		</p>
	</div>
<!--------------------中部结束-------------------->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/bottom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>