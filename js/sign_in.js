$.ajax({
	url:'../data/fengbee.php?type=sign_in',
	success:function(data){
		console.log(data);
		var iframe	= $('<iframe src="" frameborder="0" width="100%" height="1380px;"></iframe>');
		iframe.attr("src",data);
		$('main').append(iframe);
	}
})