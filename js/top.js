$(function(){
				$('#fold>ul>li').mousemove(function(){
					$(this).find('.wrap').slideDown("10000");//可以自己修改速度
				});
				$('#fold>ul>li').mouseleave(function(){
					$(this).find('.wrap').slideUp("fast");
				});
			})