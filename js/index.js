var mySwiper = new Swiper ('.big', {
    onSlideChangeEnd:function(swiper){
        $('.segment').removeClass('seg_high');
        $($('.segment')[swiper.activeIndex]).addClass('seg_high');
    }
});
function gotoindex(ele,index){
    $('.segment').removeClass('seg_high');
    $(ele).addClass('seg_high');
    mySwiper.slideTo(index,500,false);
}
function fun(){
	var swiper = new Swiper('.banner_box',{
		pagination:".swiper-pagination",
		paginationType:"custom",
		autoplay: 3000,
		autoplayDisableOnInteraction : false,
		paginationCustomRender:function(swiper,current,total) {
			
			var lis = document.querySelectorAll(".point_box  li");
			for(var i = 0; i < lis.length; i++){
				lis[i].className = '';
			}
			lis[current - 1].className = "point_box_1";
		},
		spaceBetween:0,
		loop : true
	})
}
$.ajax({
	url:"../data/fengbee.php?type=home_banner",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response;
		for(var i = 0; i < obj.length; i++){
			var li = $('<li class="swiper-slide img"></li>');
			var a = $('<a href=""></a>');
			var img = $('<img src="" alt="" />');
			img.attr("src",obj[i].image);
			a.append(img);
			li.append(a);
			$(".img_box").append(li);
		}fun()
	}
})
$.ajax({
	url:"../data/fengbee.php?type=home_list",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response.shortcutlist2;
		for(var i = 0; i < obj.length; i++){
			var a = $('<a href=""></a>');
			var img = $('<img src="" alt="" />');
			var p = $('<p></p>');
			img.attr('src',obj[i].icon);
			p.text(obj[i].name);
			a.append(img);
			a.append(p);
			$('.nav').append(a);
		}
	}
})
var arr = [];
$.ajax({
	url:"../data/fengbee.php?type=home_list",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response.nowaudios[0].audios;
		var obj1 = JSON.parse(data).response.nowaudios[0].periods;
		for(var i = 0; i < obj.length; i++){
			var div = $('<div></div>');
			var div1 = $('<div></div>');
			var img = $('<img src="" alt="" />');
			var span = $('<span></span>');
			var p = $('<p></p>');
			var img2 = $('<img src="../images/discover_more@2x.png" class="goto" alt="" />');
			var img1 = $('<img src="" alt="" class="img" onclick="play(this)" />');
			var p1 = $('<p class="all"></p>');
			var div2 = $('<div class="div_all"></div>');
			img.attr('src',obj1[i].icon);
			img1.attr('src','../images/btn_play_32@2x.png');
			span.text(obj1[i].name);
			p1.text("查看本周全部听单");
			p.text(obj[i].name);
			div1.append(span);
			div1.append(p);
			div.append(img);
			div.append(div1);
			div.append(img1);
			div2.append(p1);
			div2.append(img2)
			$('.section').append(div);
			arr.push(obj[i].url)
		}$('.section').append(div2);
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
$.ajax({
	url:"../data/fengbee.php?type=discovery",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response;
		for(var i = 0; i < obj.length; i++){
			var li = $('<li></li>');
			var a = $('<a href=""></a>');
			var img = $('<img src="" alt="" />');
			var p = $('<p></p>');
			img.attr('src',obj[i].icon);
			p.text(obj[i].title);
			a.append(img);
			a.append(p);
			li.append(a);
			$('.nav_two_box').append(li);

			var div = $('<div></div>');
			var span = $('<span></span>');
			var iimg	
			var ul = $('<ul></ul>');
			var li = $('<li></li>');

		}
	}
});
$.ajax({
	url:"../data/fengbee.php?type=discovery",
	type:"get",
	success:function(data){
		var obj = JSON.parse(data).response;
		console.log(obj);
		for(var i = 0; i < 3; i++){
			var div = $('<div></div>');
			var span = $('<span></span>');
			var img	= $('<img src="" alt="" />');
			var ul = $('<ul></ul>');
			var li = $('<li></li>');
			
			var a1 = $('<a href=""></a>');
			span.text(obj[i].title);
			img.attr('src','../images/tj_icon_week_more_32@2x.png');
			var a = $('<a href="" class="img_box_one"></a>');
			var a2 = $('<a href=""></a>');
			var a3 = $('<a href=""></a>');
			var img1 = $('<img src="" alt="" />');
			var img2 = $('<img src="" alt="" />');
			var img3 = $('<img src="" alt="" />');
			var p = $('<p></p>');
			var p1 = $('<p></p>');
			var p2 = $('<p></p>');
			var obj1 = obj[i].albums;
			img1.attr('src',obj[0].albums[0].avatar);
			img2.attr('src',obj[0].albums[1].avatar);
			img3.attr('src',obj[0].albums[2].avatar);
			p.text(obj[0].albums[0].description);
			p1.text(obj[0].albums[1].description);
			p2.text(obj[0].albums[2].description);
			a2.append(img2);
			a2.append(p1);
			a3.append(img3);
			a3.append(p2);
			a1.append(img);
			div.append(span);
			div.append(a1);
			a.append(img1);
			a.append(p);
			li.append(div);
			li.append(a);
			li.append(a2);
			li.append(a3);
			ul.append(li);
			$('.section_three').append(ul);
		}
	}
});

$(".mian_top_one>span").click(function(){
	var number = $(".mian_top_one>span").text();
	var num = parseInt(number);
	$(".mian_top_one>span").text(num+1);
});
var isShow = true;

$(".mian_mian").click(function(){
	if(isShow){
		$(".flaot_right").attr('src',"../images/btn_wifi_close@2x.png");
		isShow = false;
	}else{
		$(".flaot_right").attr('src',"../images/btn_wifi_open@2x.png");
		isShow = true;
	}
});


