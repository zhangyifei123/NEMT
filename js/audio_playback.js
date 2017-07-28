$.ajax({
    url:"../data/fengbee.php?type=get_audio&audioId=8377",
    type:"get",
    success:function(data){
        var obj = JSON.parse(data);
        console.log(obj);

        var main_content = $('<div class = "main_content"></div>');
        $('.main_content_div').append(main_content);
        main_content.html(obj.response.album_avatar);
    }
})