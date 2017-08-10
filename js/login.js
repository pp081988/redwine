$(function(){

	function ajaxWait(act){
		switch(act){
			case "show":
				$("#loading-center").css({"display":"block","opacity":"1"});
			break;
			case "hide":
				$("#loading-center").css({"opacity":"0"});
				setTimeout(function(){
					$("#loading-center").css({"display":"block"});
				},300);
			break;
		}
	}

	$(".logonBut").bind("click",function(){	//登录
		var username = $.trim($(".username").val());
		var password = $.trim($(".password").val());
		ajaxWait("show");
		$.ajax({
			url: url,
			type:"post",
			data:{username:username,password:password},
			success:function(data){
				if(data == "ok"){
					window.location.href=home;
				}else{
					ajaxWait("hide");
					tips("賬戶或密碼錯誤");
					//console.log(data);
				}
			}
		})
	});

	function tips(str){
		var tips = $(".login").find(".red1");
		tips.css({"display":"none"});
		tips.html(str);
		setTimeout(function(){
			tips.css({"display":"block"});
		},600)
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
		ajaxWait("show");
		$.ajax({
			url: registerUrl,
			type:"post",
			data:{username:username,email:email,phone:phone,password:password,sex:sex,age:age,yearsOfDrinking:yearsOfDrinking,verify:verify},
			success:function(data){
				if(data == "e1"){alert("註冊失敗");ajaxWait("hide");return false;}
				if(data == "e2"){alert("驗證碼錯誤");ajaxWait("hide");return false;}
				console.log(data);
				if(data == "verification"){window.location.href=verification;}
				if(data == "ok"){window.location.href=resultUrl;}
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
			$(".selecter div:last-child").html("<input type='radio' id='female' name='sex' value='0'><label for='female'>女士</label><input type='radio' id='male' name='sex' value='1' style='margin-left:30px'><label for='male'>男士</label>");
			$(".selecter div input").click(function(){
				var val = $(".selecter div input[name='sex']:checked").val();
				var str;
				var id = $(this).attr("id");
				$("label").each(function(){
					if($(this).attr("for") == id){
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
				<option value='0'>18-25歲</option>\
				<option value='1'>26-30歲</option>\
				<option value='2'>31-35歲</option>\
				<option value='3'>36-40歲</option>\
				<option value='4'>41-45歲</option>\
				<option value='5'>>46歲</option>\
				</select>");
			$(".selecter div select").change(function(){
				var val = $(this).val();
				var arr = Array("18-25歲","26-30歲","31-35歲","36-40歲","41-45歲",">46歲");
				var html;
				for(var i=0;i<arr.length;i++){
					if(val == i){
						html = arr[i];
					}
				}
				$(".age").val(html);
				age = val;
				selecterWarp("none");
			})
			break;
			case "yearsOfDrinking":
			$(".selecterTitle").html("請選擇酒齡:");
			$(".selecter div:last-child").html("<select>\
				<option selected='true' disabled='true'>--酒齡段--</option>\
				<option value='0'>0-1年</option>\
				<option value='1'>1-2年</option>\
				<option value='2'>2-3年</option>\
				<option value='3'>>3年</option>\
				</select>");
			$(".selecter div select").change(function(){
				var val = $(this).val();
				var arr = Array("0-1年","1-2年","2-3年",">3年");
				var html;
				for(var i=0;i<arr.length;i++){
					if(val == i){
						html = arr[i];
					}
				}
				$(".yearsOfDrinking").val(html);
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


	$(".cpBut").bind("click",function(){
		var verify = $.trim($(".verify").val());
		var username = $.trim($(".cp").find(".username").val());
		var emailOrPhone = $.trim($(".cp").find(".emailOrPhone").val());
		var phone = "";
		var email = "";
		if(username){
			if(username == ""){tips("賬戶號不能為空");return false;}
		}
		
		if(emailOrPhone == ""){tips("電郵或號碼不能為空");return false;}
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
   		ajaxWait("show");
   		$.ajax({
   			url:cpUrl,
   			type:"post",
   			data:{username:username,phone:phone,email:email,verify:verify},
   			success:function(data){
   				if(data == "error"){
   					ajaxWait("hide");
   					tips("賬戶號或電郵/電話錯誤");
   					return false;
   				}
   				if(data == "e1"){
   					ajaxWait("hide");
   					tips("驗證碼不正確");
   					return false;
   				}
   				if(data == "verification"){
   					window.location.href=verification;
   					return false;
   				}
   				//console.log(data);
   			}
   		})
	})

	$(".changePasswordBut").bind("click",function(){
		// var oldPw = $.trim($(".oldpw").val());
		var newPw = $.trim($(".newpw").val());
		var repPw = $.trim($(".reppw").val());
		var verify = $.trim($(".verify").val());
		switch(""){
			// case oldPw:
			// tips("舊密碼不能為空");return false;
			// break;
			case newPw:
			tips("新密碼不能為空");return false;
			break;
			case repPw:
			tips("請再次輸入新密碼");return false;
			break;
		}
		if(newPw != repPw){
			tips("新密碼與重複輸入不一致");return false;
		}
		if(newPw.length < 8 || newPw.length >20){
			tips("新密碼不能小於8位");return false;
		}
		ajaxWait("show");
		$.ajax({
			url:changePasswrdUrl,
			type:"post",
			data:{newPw:newPw,verify:verify},
			success:function(data){
				if(data != "ok"){
					if(data == "error"){
						ajaxWait("hide");
						tips("密碼不能正確");
						return false;
					}
					if(data == "e1"){
						ajaxWait("hide");
						tips("驗證碼不正確");
						return false;
					}
					//console.log(data);
				}
				window.location.href=resultUrl;	
			}
		})
	});

	$(".verificationBut").bind("click",function(){
		var verification_key = $.trim($(".verification_key").val());
		if(verification_key == ""){tips("驗證碼不能為空");return false;}
		ajaxWait("show");
		$.ajax({
			url:verificationUrl,
			type:"post",
			data:{verification_key:verification_key},
			success:function(data){
				if(data != "ok"){
					if(data == "error"){
						ajaxWait("hide");
						tips("驗證碼錯誤");
						return false;
					}
					if(data == "e1"){
						ajaxWait("hide");
						tips("驗證碼不正確");
						return false;
					}
					if(data == "cok"){
						window.location.href=changePasswordUrl;
					}
					window.location.href=activate+"&id="+data;
				}
				//console.log(data);
			}
		})
	});
})