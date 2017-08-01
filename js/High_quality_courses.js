$.ajax({
	url:"../data/fengbee.php?type=lesson_list&albumId=99",
	success:function(data){
		var obj = JSON.parse(data).response.list;
		for (var i = 0; i < obj.length; i++) {
			var div = $("<div class='div_div'></div>")
			var img = $("<img src='' alt='' class='img_div' />");
			var div1 = $("<div class='div_div1'></div>")
			var p = $('<p class="p_title"></p>');
			var p1 = $('<p class="p_content"></p>');
			img.attr("src",obj[i].avatar);
			p.text(obj[i].name);
			p1.text(obj[i].description);
			div.append(img);
			div1.append(p);
			div1.append(p1);
			div.append(div1);
			div1.append(p1)
			$(".id_classdiv").append(div)
			
		}
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