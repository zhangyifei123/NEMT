var Swiper = new Swiper('.swiper-container',{
	// paginationClickable:true,
	directipon:"vertical",
	loop:true,
	pagination:".swiper-pagination",
	paginationType:"custom",
	autoplay: 2000,
	autoplayDisableOnInteraction : false,
	paginationCustomRender:function(swiper,current,total) {
		
		var lis = document.querySelectorAll(".height_point  li");
		for(var i = 0; i < lis.length; i++){
			lis[i].className = '';
		}
		lis[current - 1].className = "current";
	},
	spaceBetween:0,
	loop : true
});

// var app = angular.module("heightApp",[]);
//  app.directive("voteBtn",function(){
//  	return{
//  		restrict:"EA",
//  		templateUrl:"../template/Carousel.html",
//  		replace:true
//  	}
//  })


$.ajax({
	url:"../data/fengbee.php?type=store",
	type:"get",
	success:function(data){
		var banner = JSON.parse(data).response.columninfo[0];
		var span=$("<span class='date_text'></span>");
		var img = $("<img src = '' />");
		var div = $('<div class="right_Arrow"></div>');
        div.append(img);
        $(".to_date").append(span);
        $(".to_date").append(div);
        span.text(banner.name);
        img.attr("src","../images/buy_more@2x.png");

        var banner1 = JSON.parse(data).response.columninfo[0].goodsinfo[3];
		var img1= $("<img src='' alt='' />");
		var p = $("<p></p>");
		var span1=$("<span class='mone'></span>");
        $(".left_div").append(img1);
		$(".left_div").append(p);
		$(".left_div").append(span1);
		img1.attr("src",banner1.goodsimg);
		p.text(banner1.goodsname);
		span1.text("￥"+banner1.goodsprice);

		var banner2 = JSON.parse(data).response.columninfo[0].goodsinfo[2];
		var img2= $("<img src='' alt='' />");
		var p1 = $("<p></p>");
		var span2=$("<span class='mone'></span>");
        $(".right_div").append(img2);
		$(".right_div").append(p1);
		$(".right_div").append(span2);
		img2.attr("src",banner2.goodsimg);
		p1.text(banner2.goodsname);
		span2.text("￥"+banner2.goodsprice);

		var banner3 = JSON.parse(data).response.columninfo[0].goodsinfo[0];
		var img3= $("<img src='' alt='' />");
		var p2 = $("<p></p>");
		var span3=$("<span class='mone'></span>");
		var p3 = $("<p class='Price'></p>");
		
        $(".bottom_div").append(img3);
		$(".presell_text").append(p2);
		$(".presell_text").append(span3);
		$(".presell_text").append(p3);
		
		img3.attr("src",banner3.goodsimg);
		p2.text(banner3.goodsname);
		span3.text("￥"+banner3.goodsprice);
        p3.text(banner3.goodsprice1);

        var obj = JSON.parse(data).response.columninfo;
	    for (var i = 1; i < obj.length; i++) {
	    var a   =$("<a href='small_Commissary_Details.html'></a>");
		var div =$("<div class='to_date'></div>")
		var span=$("<span class='date_text'></span>");
		var img = $("<img src = '' />");
		var div1 = $('<div class="right_Arrow"></div>');

		var div2 = $("<div class='big_book'></div>");
	    var div3 = $("<div class='left_div'></div>");
	    var div4 = $("<div class='right_div'></div>");
		var a1   = $("<a href='book_Details.html'></a>");
		var a2   = $("<a href='composition.html'></a>");
		var img1= $("<img src='' alt='' />");
		var p = $("<p></p>");
		var span1=$("<span class='mone'></span>");
		var img2= $("<img src='' alt='' />");
		var p1 = $("<p></p>");
		var span2=$("<span class='mone'></span>");
        a1.append(div3);
        a2.append(div4);
        div2.append(a1);
        div2.append(a2);
        div3.append(img1);
        div3.append(p);
        div3.append(span1);
        div4.append(img2);
        div4.append(p1);
        div4.append(span2);

		a.append(div);
		div.append(span);
		div.append(div1);
        div1.append(img);
        $(".E_book").append(a);
        $(".E_book").append(div2);
        span.text(obj[i].name);
        img.attr("src","../images/buy_more@2x.png");
        img1.attr("src",obj[i].goodsinfo[0].goodsimg);
         img1.attr("src",obj[i].goodsinfo[1].goodsimg);
		p.text(obj[i].goodsinfo[1].goodsname);
		span1.text("￥"+obj[i].goodsinfo[0].goodsprice);
        img2.attr("src",obj[i].goodsinfo[0].goodsimg);
		p1.text(obj[i].goodsinfo[0].goodsname);
		span2.text("￥"+obj[i].goodsinfo[1].goodsprice);

	    }
	    var submit =JSON.parse(data).response.columninfo[5].goodsinfo[0];
	      var div = $("<div class='big_img'></div>");
	      var img4 = $("<img src='' />");
	      div.append(img4);
	      $(".salvage_money").append(div);
	      img4.attr("src",submit.goodsimg)
	}
});