$.ajax({
	url:'../data/fengbee.php?type=home_list',
	success:function(data){
		for (var i = 0; i < data.length; i++) {
			 var data1 = JSON.parse(data).response.nowaudios[i].periods[i];
			 var div = $('<div class="div_div"></div>')
			 var img = $("<img src='' alt='' class='class_img'/>");
			 var p = $("<p class='class_p'></p>");
			 var p1 = $("<p class='class_p1'></p>");
			 var img1 = $("<img src='' alt='' class='img1_png'/>");
			 img.attr("src",data1.icon);
			 p.text(data1.name);
			 p1.text('正能量早餐|人为什么保持乐观？');
			 img1.attr("src","../images/now_play@2x.png");
			div.append(img);
			div.append(p);
 			div.append(p1);
			div.append(img1);
			 $(".id_classdiv").append(div);
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