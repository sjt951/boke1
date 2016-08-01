$(function(){
	$('#cn').click(function() {
		$.ajax({
					//请求方式
					type:"post",
					//请求地址
					url:"./index.php?a=ajaxAdd",
					//数据
					data: data,
					//服务器返回的数据类型
					dataType:'json',
					//php返回的数据
					success:function(phpData){
						
					}
					
		});

	})
})