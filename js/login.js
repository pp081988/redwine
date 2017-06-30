$(function(){
	$(".loginAction").find(".btback").bind("click",function(){	//登录
		$.ajax({
			url: "<{url c=login a=test}>",
			type:"post",
			data:{},
			success:function(data){
				console.log(data);
			}
		})
	});

	function tips(str){
		var tips = $(".login").find(".red1");
		tips.html(str);
		tips.css({"display":"block"});
	}

	$(".registerAction").find(".btback").bind("click",function(){		//注册
		var username = $.trim($(".login").find(".username").val());
		var emailOrPhone = $.trim($(".login").find(".emailOrPhone").val());
		var email = "";
		var phone = "";
		var password = $.trim($(".login").find(".password").val());
		var passwordRepeat = $.trim($(".login").find(".passwordRepeat").val());
		
		if(password != passwordRepeat){tips("登入密碼不一致");return false;}
		if(username == ""){tips("賬戶名稱不能為空");return false;	}
		if(emailOrPhone == ""){tips("電郵/電話號碼不能為空");
			return false;
		}else{
   			var emailReg = /\w+[@]{1}\w+[.]\w+/;
   			var phoneReg = /^\d{8}$/;
   			if(!emailReg.test(emailOrPhone)){
   				if(!phoneReg.test(emailOrPhone)){
   					tips("請輸入正確的電郵地址或手機號碼");
   				}else{
   					phone = emailOrPhone;
   				}
   				//tips("請輸入正確的電郵地址或手機號碼");
   			}else{
   				email = emailOrPhone;
   			}
		}
		if(password == ""){tips("登入密碼不能為空");return false;	}
		if(passwordRepeat == ""){tips("重複密碼不能為空");return false;}

		console.log(username+"<br>"+email+"<br>"+phone+"<br>"+password)

		// $.ajax({
		// 	url: "<{url c=login a=register}>",
		// 	type:"post",
		// 	data:{},
		// 	success:function(data){
		// 		console.log(data);
		// 	}
		// })

		
	});
})