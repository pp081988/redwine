$(function(){
	$(".loginnext").find(".btback").bind("click",function(){
		$.ajax({
			url: "<{url c='login' a='test'}>",
			type:"post",
			data:{},
			success:function(data){
				console.log(data);
			}
		})
	})
})