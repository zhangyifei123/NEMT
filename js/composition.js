$(function() {
    $(".big_explain").accordion({
      collapsible: true
    });
  });
$.ajax({
	url:"../data/fengbee.php?type=store",
	type:"get",
	success:function(data){
        var banner =JSON.parse(data).response.columninfo[0].goodsinfo[2];
             console.log(banner);
            var div=$("<div class='top_div'></div>");
            var div1=$("<div class='middle_div'></div>");
            var div2=$("<div class='bottom_div'></div>");
            var img =$("<img  alt='' />");
            var span=$("<span class='White_paper'></span>");
            var span1=$("<span class='freight'></span>");
            var span2=$("<span class='Surplus'></span>");
            var p   =$("<p class='money'></p>");
            div.append(img);
            div1.append(span);
            div1.append(p);
            div2.append(span1);
            div2.append(span2);
            $(".big_img").append(div);
            $(".big_img").append(div1);
            $(".big_img").append(div2);
		     img.attr("src",banner.goodsimg);
		     span.text(banner.goodsname);
		     p.text("￥"+banner.goodsprice);
		     span1.text(banner.goodsname1);
		     span2.text(banner.goodsname2);

		     var obj=JSON.parse(data)

		      
	}
})



 