$.ajax({
	url:'../data/fengbee.php?type=lesson_list&albumId=99',
	success:function(data){
		var data = JSON.parse(data);
		console.log(data.response);
		var img  = $("<img src='' alt='' class='img_data'/>");
		var p = $("<p class='p_data'>&yen;</p>");
		var p1 = $("<p class='p1_p'></p>")
		img.attr('src',data.response.list[1].avatar);
		p.text('￥'+data.response.list[1].goods.price);
		p1.text(data.response.list[1].goods.description);
		$("section>div").append(img);
		$(".img_data").css({"width":"50%","border":"1px solid white","position":"absolute","top":"60px","left":"25%"});
		$("section>div").append(p);
		$("section>div").append(p1);
	}
})

			var mySwiper = new Swiper('.swiper-container',{
  			  onSlideChangeEnd: function(swiper){

			      $('.segment').removeClass('seg_highlight');
			      $($('.segment')[swiper.activeIndex]).addClass('seg_highlight')
			    }
			})
			function gotoIndex(ele,index){
			    $('.segment').removeClass('seg_highlight');
			    $(ele).addClass('seg_highlight');
			    mySwiper.slideTo(index, 500, false);//切换到第一个slide，速度为1秒
			}
//点击弹出框
  var isshow = false;
$(".classdiv>ul>li").click(function(){
	if (!isshow) {
		$('.pop_up').css("display","block");
		$('body').css("background-color","gray");
		$('.div_block').css("background-color","gray");
		$('.div_block1').css("background-color","gray");
		isshow = true;
	} else {
		$('.pop_up').css("display","none");
		$('body').css("background-color","white");
		$('.div_block').css("background-color","rgb(230,230,230)");
		$('.div_block1').css("background-color","rgb(230,230,230)");
		isshow = false;
	}
	
})


// window.onscroll = function(){
// 	var a  = document.documentElement.scrollTop || document.body.scrollTop;
// 	var top1 = document.getElementById('top1');
// 	if (a>=280) {
// 		$('.test').addClass("fixed12");
// 		console.log("执行了");
// 	}else if(a<280){
// 		$('.text').removeClass("fixed12");
// 		console.log("!@#")
// 	}
// }

