$(function(){
	$(".logonBut").bind("click",function(){	//登录
		var username = $.trim($(".username").val());
		var password = $.trim($(".password").val());
		$.ajax({
			url: url,
			type:"post",
			data:{username:username,password:password},
			success:function(data){
				if(data == "ok"){
					window.location.href=home;
				}else{
					tips("賬戶或密碼錯誤");
					//console.log(data);
				}
			}
		})
	});

	function tips(str){
		var tips = $(".login").find(".red1");
		tips.html(str);
		tips.css({"display":"block"});
	}

	var sex = "";
	var age = "";
	var email = "";
	var phone = "";
	var yearsOfDrinking = "";
	$(".registerAction").find(".btback").bind("click",function(){		//注册
		var username = $.trim($(".login").find(".username").val());
		var emailOrPhone = $.trim($(".login").find(".emailOrPhone").val());
		var email = "";
		var phone = "";
		var password = $.trim($(".login").find(".password").val());
		var passwordRepeat = $.trim($(".login").find(".passwordRepeat").val());
		var verify = $.trim($(".verify").val());



		if(password != passwordRepeat){tips("登入密碼不一致");return false;}
		if(password.length < 8){tips("密碼不少于8位");return false;}
		if(username == ""){tips("賬戶名稱不能為空");return false;	}
		if(emailOrPhone == ""){tips("電郵/電話號碼不能為空");
			return false;
		}else{
   			var emailReg = /\w+[@]{1}\w+[.]\w+/;
   			var phoneReg = /^\d{8}$/;
   			if(!emailReg.test(emailOrPhone)){
   				if(!phoneReg.test(emailOrPhone)){
   					tips("請輸入正確的電郵地址或手機號碼");
   					return false;
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
		if(sex == ""){tips("請選擇性別");return false;}
		if(age == ""){tips("請選擇年齡");return false;}
		if(yearsOfDrinking == ""){tips("請選擇酒齡");return false;}
		if(verify == ""){tips("請輸入驗證碼");return false;}

		//console.log(username+email+phone+password+sex+age+yearsOfDrinking);

		$.ajax({
			url: registerUrl,
			type:"post",
			data:{username:username,email:email,phone:phone,password:password,sex:sex,age:age,yearsOfDrinking:yearsOfDrinking,verify:verify},
			success:function(data){
				if(data == "e1"){alert("註冊失敗");return false;}
				if(data == "e2"){alert("驗證碼錯誤");return false;}
				//console.log(data);
				window.location.href=resultUrl;
			}
		})
	});

	function selecterWarp(act){
		switch(act){
			case "display":
			$(".selecterWarp").css({"display":"block"});
			$(".selecter").css({"opacity":"1","top":document.body.clientHeight /2 - 65,"left":document.body.clientWidth /2 - 150});
			break;
			case "none":
			$(".selecter").css({"opacity":"0","top":document.body.clientHeight /2 - 15});
			setTimeout(function(){
				$(".selecterWarp").css({"display":"none"});
			},300)
			break;
		}
	}

	$(".select").bind("click",function(){
		selecterWarp("display");
		var name = $(this).attr("name");
		switch(name){
			case "sex":
			$(".selecterTitle").html("請選擇性別:");
			$(".selecter div:last-child").html("<input type='radio' id='female' name='sex' value='female'><label for='female'>女士</label><input type='radio' id='male' name='sex' value='male' style='margin-left:30px'><label for='male'>男士</label>");
			$(".selecter div input").click(function(){
				var val = $(".selecter div input[name='sex']:checked").val();
				var str;
				$("label").each(function(){
					if($(this).attr("for") == val){
						str = $(this).html();
					}
				})
				$(".sex").val(str);
				sex = val;
				selecterWarp("none");
			})
			break;
			case "age":
			$(".selecterTitle").html("請選擇年齡:");
			$(".selecter div:last-child").html("<select>\
				<option selected='true' disabled='true'>--年齡段--</option>\
				<option value='18-25'>18-25歲</option>\
				<option value='26-30'>26-30歲</option>\
				<option value='31-35'>31-35歲</option>\
				<option value='36-40'>36-40歲</option>\
				<option value='41-45'>41-45歲</option>\
				<option value='>46'>>46歲</option>\
				</select>");
			$(".selecter div select").change(function(){
				var val = $(this).val();
				$(".age").val(val+"歲");
				age = val;
				selecterWarp("none");
			})
			break;
			case "yearsOfDrinking":
			$(".selecterTitle").html("請選擇酒齡:");
			$(".selecter div:last-child").html("<select>\
				<option selected='true' disabled='true'>--酒齡段--</option>\
				<option value='0-1'>0-1年</option>\
				<option value='1-2'>1-2年</option>\
				<option value='2-3'>2-3年</option>\
				<option value='>3'>>3年</option>\
				</select>");
			$(".selecter div select").change(function(){
				var val = $(this).val();
				$(".yearsOfDrinking").val(val+"年");
				selecterWarp("none");
				yearsOfDrinking = val;
			})
			break;
		}
	})

	$(".register").find(".username").blur(function(){
		var str = $(this).val();
		if(str == ""){return false;}
		if(str.length < 6){tips("賬戶名稱不少于6位");return false;}
		if(str.length > 16){tips("賬戶名稱不多于16位");return false;}
		if(!/^[0-9a-zA-Z]*$/g.test(str)){tips("賬戶名已存在或不合法");return false;}

		existsCheck("username",$(this).val());
	});
	$(".register").find(".emailOrPhone").blur(function(){
		var str = $(this).val();
		if(str == ""){return false;}
		existsCheck("emailOrPhone",$(this).val());
	});


	//存在检查
	function existsCheck(obj,str){
		var content;
		switch(obj){
			case "username":
			content = "賬戶名已存在或不合法";
			break;
			case "emailOrPhone":
			content = "電郵地址或電話號碼已存在";
			break;
		}
		$.ajax({
			url:existsCheckUrl,
			type:"post",
			data:{obj:obj,str:str},
			success:function(data){
				if(data == "exists"){
					// console.log(data);
					tips(content);
				}
			}
		})
	}
})