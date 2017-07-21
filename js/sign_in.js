$.ajax({
	url:"../data/fengbee.php?type=sign_in",
	type:'get',
	success:function(data){
 		// var obj = JSON.parse(data);
 		console.log(data);
 	}
})