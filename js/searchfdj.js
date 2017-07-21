$(".X").click(function(){
	$(".header_input").val("");
});
var ishow = false;
function Popular_search(){
	$("main").hide();
	if (!ishow) {
		$("main").hide();
		ishow = true;
	} else {
		$("main").show();
		ishow = false;
	}
}
//获取li的内容传给input
function fun1(ele){
	$('.header_input').val(ele.textContent);
}
//获取音频列表
// $.ajax({
// 	url:"../data/fengbee.php?type=get_audio&audio_id=$_REQUEST['audioId']",
// 	type:'get',
// 	success:function(data){
// 		var obj = JSON.parse(data);
// 		console.log(obj);
// 	}
// })