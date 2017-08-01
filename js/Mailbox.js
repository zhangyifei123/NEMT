$.ajax({
	url:"../data/fengbee.php?type=message",
	// type:"get",
	success:function(data){
		var obj = JSON.parse(data).response.broadcastMessages;
			console.log(obj[0].avatar);
			var div = $("<div class='div_div'><img src='../images/system.png' alt='' class='div_img'/></div>");
			var title = $("<span class='div_title'></span>");
			var content = $("<div class='div_content'></div>");
			var timeha = $("<span class='div_span'>07月20日</span>")
			title.text(obj[0].title);
			content.text(obj[0].content);
			$('section>a').append(div);
			$('section>a').append(title);
			$('section>a').append(content);
			$('section>a').append(timeha);

		
	}
})
$.ajax({
	url:'../data/fengbee.php?type=message',
	type:'get',
	success:function(data){
		var obj1 = JSON.parse(data).response.broadcastMessages;
		console.log(obj1[0].create_time);
		for (var i = 0; i < obj1.length; i++) {
			var p = $('<p class="obj_p"></p>');
			var div1 = $('<img src="" alt=""  class="class_div_img"/>');
			var content1 = $('<div class="c_div_content"><a href="">赶紧去看看>></a></div>')
			// var look = $("<p><a href=''>赶紧去看看>></a></p>")
			div1.attr('src',obj1[i].avatar);
			content1.text(obj1[i].content);


			p.text(obj1[i].create_time);
			$('main').append(p);
			$('main').append(div1);
			$('main').append(content1);
			// $('main .c_div_content').append(look);
			
			

		}
		var look = $("<p ><a href='' class='look' >赶紧去看看>></a></p>");
		$('main .c_div_content').append(look);
	}
})