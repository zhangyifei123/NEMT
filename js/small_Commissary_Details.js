$.ajax({
	url:"../data/fengbee.php?type=store",
	type:"get",
	success:function(data){
        var banner =JSON.parse(data).response.columninfo[0].goodsinfo;
        console.log(banner);
		       for (var i = 0; i < banner.length; i++) {
		        var img = $("<img src='' />");
		        var img1= $("<img src='' class='small_img' />")
		        var span= $("<span class='composition'></span>");
		        var p   = $("<p class='money'></p>")
		        var div = $("<div class='textcontent_details_div'></div>");
		        var div1=$("<div class='img_div'></div>");
		        var div2=$("<div class='text_div'></div>");
		        var a = $("<a href=''></a>");
		        var a1 = $("<a href=''></a>");
		        a.append(div);
		        a1.append(img1);
		        div1.append(img);
		        div2.append(span);
		        div2.append(p);
		        div2.append(a1);
		        div.append(div1);
		        div.append(div2);
		        $(".textcontent_details").append(a);
		        img.attr("src",banner[i].goodsimg);
		        img1.attr("src","../images/buy_buy@2x.png");
		        span.text(banner[i].goodsname);
		        p.text("￥"+banner[i].goodsprice);
		       }
	}
})