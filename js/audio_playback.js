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

var isShow = false;
function circulation(){
    if (!isShow) {
        $("#circulations").attr("src","../images/zimu_chongfu_btn@2x.png");
        isShow = true;
    }else{
        $("#circulations").attr("src","../images/zimu_xunhuan_btn@2x.png");
        isShow = false;
    }
}

var isShow = true;
function play(ele){
    var audio = $('audio')[0];
    if(isShow){
        audio.play();
        $('.audio_img').attr('src','../images/zimu_pause_btn@2x.png');
        isShow = false;
    }else{
        audio.pause();
        $('.audio_img').attr('src','../images/zimu_play_btn@2x.png');
        isShow = true;
    }

}