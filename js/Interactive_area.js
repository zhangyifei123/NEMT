app.controller('home',function($scope){
    $.ajax({
        url:"../data/fengbee.php?type=interact_top",
        type:"get",
        success:function(data){
            var obj = JSON.parse(data);
            for (var i = 0; i < obj.length; i++) {
                var img = $('<img src = "" />');
                var div = $('<div class = "picture"></div>');
                var a = $('<a href="#!third_page"></a>')
                div.append(img);
                a.append(div)
                $('.photo_div').append(a);
                img.attr("src",obj[i].bgImg);
             };
         }
    })

    $.ajax({
        url:"../data/fengbee.php?type=interact_list&pageIndex=1",
        type:"get",
        success:function(data){
            var obj1 = JSON.parse(data);
            // console.log(obj1);
            for (var i = 0; i < obj1.length; i++) {
                var img1 = $('<img src = "" class = "img-circle" />');
                var div1 = $('<div class = "head_portrait_div"></div>');
                var span1 = $('<span class = "bee"></span>');
                var span2 = $('<span class = "times"></span>');
                var div2 = $('<div class = "bee_div"></div>');
                var img2 = $('<img src = "../images/share_qzone@2x.png" class = "stars" />');
                var div3 = $('<div class = "titles"></div>');
                var span3 = $('<span></span>');

                var span4 = $('<span class = "abstract"></span>');
                var div4 = $('<div class = "abstract_div"></div>');
                var img3 = $('<img src = "" />');
                var div5 = $('<div class = "picture_div"></div>');
                var div6 = $('<div class = "all_number"></div>');
                var div7 = $('<div class = "all_number_div"></div>');
                var div8 = $('<div class = "div_comments"></div>');
                var div9 = $('<div class = "div_zan"></div>');
                var div10 = $('<div class = "div_forwarding"></div>');

                var img4 = $('<img src = "../images/interaction_icon_comment_36@2x.png" class = "img_comments"/>');
                var span5 = $('<span class = "word_comments"></span>');
                var img5 = $('<img src = "../images/interaction_icon_like_36@2x.png" class = "img_zan"i/>');
                var span6 = $('<span class = "word_zan"></span>');
                var img6 = $('<img src = "../images/interaction_icon_share_36@2x.png" class = "img_forwarding"/>');
                var span7 = $('<span class = "word_forwarding"></span>');

                div1.append(img1);
                div2.append(span1);
                div2.append(img2);
                div2.append(span2);
                div1.append(div2);
                div3.append(span3);
                div8.append(img4);
                div8.append(span5);
                div9.append(img5);
                div9.append(span6);
                div10.append(img6);
                div10.append(span7);

                div4.append(span4);
                div3.append(div4);
                div5.append(img3);
                div3.append(div5);
                div7.append(div8);
                div7.append(div9);
                div7.append(div10);
                div6.append(div7);
                div3.append(div6);

                $('.head_portrait_details').append(div1);
                $('.head_portrait_details').append(div3);

                img1.attr("src",obj1[i].author_avatar);
                span1.text(obj1[i].author_name);
                span2.text(obj1[i].post_time);
                span3.text(obj1[i].title);

                span4.text(obj1[i].abstract);
                img3.attr("src",obj1[i].abstract_piclist[0]);

                span5.text(obj1[i].reply);
                span6.text(obj1[i].praise);
                span7.text(obj1[i].share);
            };
         }
    })
})