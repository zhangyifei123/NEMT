app.controller('detail_page',function($scope,$http){
    $http({
        url:'../data/fengbee.php?type=interact_detail&post_id=1238'
    }).then(function(msg){
        var obj = msg.data;
        // console.log(obj);
        str = msg.data.content.replace(/\\/g,"");
        // console.log(str);

        var head_portrait_div = $('<div class = "head_portrait_div"></div>');
        var head_portrait_img = $('<img src = "" class = "img-circle" />');
        head_portrait_div.append(head_portrait_img);
        $(".head_portrait_content").append(head_portrait_div);
        head_portrait_img.attr("src",obj.author_avatar);

        var name_div = $('<div class = "name_div"></div>');
        var name = $('<span class = "blue_word"><span>');
        var star_img = $('<img src = "" />');
        var times = $('<span class = "times"><span>');
        name_div.append(name);
        name_div.append(star_img);
        name_div.append(times);
        $(".head_portrait_content").append(name_div);
        name.text(obj.author_name);
        star_img.attr("src","../images/share_qzone@2x.png");
        times.text(obj.post_time);

        var title_span = $('<span class = "title_span"><span>');
        $(".title_content").append(title_span);
        title_span.text(obj.title);

        var contents = $("<div></div>");
        $(".content_div").append(contents);
        contents.html(str);

        var zan_span = $('<span class = "zan_span"></span>');
        zan_span.text("赞"+"("+obj.praise+")");
        $('.blue_frame').append(zan_span);

    })

    $http({
        url:"../data/fengbee.php?type=interact_comment&post_id=1218&pageIndex"
    }).then(function(msg1){
        var obj1 = msg1.data.response;
        console.log(obj1);

        for (var i = 0; i < obj1.length; i++) {
            var avatar_content = $('<div class = "avatar_content"></div>');
            var imgs_div = $('<div class = "imgs_div"></div>');
            var imgs_photot = $('<img src = "" class = "imgs_photot img-circle"/>');
            imgs_div.append(imgs_photot);
            avatar_content.append(imgs_div);
            imgs_photot.attr("src",obj1[i].author_avatar);

            var text_div = $('<div class = "text_div"></div>');
            var text_span1 = $('<span class = "text_span1"></span>');
            var text_span2 = $('<span class = "text_span2"></span>');
            var text_img = $('<img src = "" class = "text_img"/>');
            text_div.append(text_span1);
            text_div.append(text_img);
            text_div.append(text_span2);
            avatar_content.append(text_div);
            text_span1.text(obj1[i].author_name);
            text_img.attr("src","../images/icon_female_32@2x.png");
            text_span2.text(obj1[i].create_time);

            var zan_span = $('<span class = "zan_span"></span>');
            var zan_span_div = $('<div class = "zan_span_div"></div>')
            var zan_imgs_photot = $('<img src = "" class = "zan_imgs_photot"/>');
            var zan_imgs_div = $('<div class = "zan_imgs_div"></div>');
            zan_span_div.append(zan_span);
            zan_imgs_div.append(zan_imgs_photot);
            avatar_content.append(zan_span_div);
            avatar_content.append(zan_imgs_div);
            $('.comments_content_div').append(avatar_content);
            zan_span.text(obj1[i].praise);
            zan_imgs_photot.attr("src","../images/interaction_icon_like_36@2x.png");

            var contents_div = $('<div class = "contents_div"></div>');
            var contents_span = $('<span class = "contents_span"></span>');
            contents_div.append(contents_span);
            $('.comments_content_div').append(contents_div);
            contents_span.text(obj1[i].content);
        };
    })
})

//  var isShow = true;
//  var num =$('.zan_span').text();
//  console.log(num);
//  function  fun(){
//     if (!isShow) {
//         $(".blue_frame").css("background-color","rgb(0,163,254)");
//         $('.zan_span').css("color","white");
//         // $('.blue_frame').text($(".zan_span")+1);
//         isShow = true;
//     }else{
//         $(".blue_frame").css("background-color","white");
//         $('.zan_span').css("color","rgb(0,163,254)");
//         isShow = false;
//     }
// }

