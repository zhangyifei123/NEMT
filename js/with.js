var arr = [];
$.ajax({
	url:"../data/fengbee.php?type=home_list",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response.nowaudios[0].audios;
		for(var i = 0; i < obj.length; i++){
			arr.push(obj[i].url)
		}
	}
})
		
var isShow = true;
function play(ele){
	var audio = $('audio')[0];
	for(var j = 0; j < arr.length; j++){
		audio.src = arr[j];
	} 
	if(isShow){
		audio.play();
		$('.audio_img').attr('src','../images/player_pause_btn@2x.png');
		isShow = false;
	}else{
		audio.pause();
		$('.audio_img').attr('src','../images/player_play_btn@2x.png');
		isShow = true;
	}
}
function fun(){
	$('.move_one').css('display','block');
}
$('.move_one').click(function() {
	$('.move_one').css('display','none');
});