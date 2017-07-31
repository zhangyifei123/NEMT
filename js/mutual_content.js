app.controller('mutual_content',function($scope,$http){
    $http({
        url:"../data/fengbee.php?type=interact_top"
    }).then(function(msg2){
        var obj2 = msg2.data;
        console.log(obj2);
            var main_body_textarea = $('<textarea name="" id = "" cols = "" rows="17" placeholder = ""></textarea>');
            $('.main_body_content').append(main_body_textarea);
            main_body_textarea.attr("placeholder",obj2[0].notice);

            var list_span = $('<span></span>');
            $('.list_div').append(list_span);
            list_span.text(obj2[0].title);
    })
})
function send_click(){
    $('.prompt_div').css("display","block");
    $('.input_number_content').css("background-color","gray");
    $('.interactive_head1').css("background-color","gray");
    $('.main_body_div').css("background-color","gray");
    $('.list_div').css("background-color","gray");
    $('input').css("background-color","gray");
    $('textarea').css("background-color","gray");
}
function determine_click(){
    $('.prompt_div').css("display","none");
    $('.input_number_content').css("background-color","white");
    $('.interactive_head1').css("background-color","white");
    $('.main_body_div').css("background-color","white");
    $('.list_div').css("background-color","rgb(232,232,232)");
    $('input').css("background-color","white");
    $('textarea').css("background-color","white");
}
function upload_pictures(){
    $('.upload_pictures_div').css("display","block");
    $('.input_number_content').css("background-color","gray");
    $('.interactive_head1').css("background-color","gray");
    $('.main_body_div').css("background-color","gray");
    $('.list_div').css("background-color","gray");
    $('input').css("background-color","gray");
    $('textarea').css("background-color","gray");
}
function contents_click(){
    $('.upload_pictures_div').css("display","none");
    $('.input_number_content').css("background-color","white");
    $('.interactive_head1').css("background-color","white");
    $('.main_body_div').css("background-color","white");
    $('.list_div').css("background-color","rgb(232,232,232)");
    $('input').css("background-color","white");
    $('textarea').css("background-color","white");
}