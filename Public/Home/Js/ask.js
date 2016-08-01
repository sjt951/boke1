$(function(){
	


		//判断内容是否完整
		$('.send-btn').click(function(){

			var cons = $('textarea[name=content]');
			//如果内容为空
			if(cons.val() == ''){
				alert('请输入提问内容！');
				cons.focus();
				return false;
			}

			//如果没有ID说明没有选择分类
			if(!cateID) {
				alert('请选择一个分类');
				return false;
			}

			//判断用户是否登录
			if(!on){
				$('.login').click();
				return false;
			}


		})

		//设置金币可以选择的范围
		var opt = $('select[name=reward] option');
		for (var i = 0; i < opt.length; i++){

			if(opt.eq(i).val() > point ){
				opt.eq(i).attr('disabled', 'disabled');
			}

		}




})