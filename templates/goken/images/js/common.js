/**
 * Created by lenovo on 16-7-31.
 */
jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
jQuery(".slideBox-img").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
jQuery(".slideBox-customer").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
jQuery(".picScroll-left-product").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,scroll:1,vis:4});
jQuery(".picScroll-left-case").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,scroll:1,vis:2});
jQuery(".picScroll-left-solution").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,scroll:1,vis:4});
jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });
jQuery(".picFocus-img").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });
jQuery(".slideTxtBox").slide({effect:"leftLoop"});

$(function() {
    var elm = $('.header');
    var startPos = $(elm).offset().top+42;
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        if (p> startPos)
        {
            $(elm).addClass('headshrunk')
        }
        else
        {
            $(elm).removeClass('headshrunk')
        }
    });
});

$(document).ready(function(){
    $(function(){
        $(".menu").click(function(){
            $(".header-logo").animate({
                height:'toggle'
            });
        });
    })
});


$(".nav-t").click(function(){
    $(this).toggleClass("on").siblings(".nav-t").removeClass("on")
    $(this).next(".nav-tc").slideToggle(500).siblings(".nav-tc").slideUp(500);
})

$(".picScroll-left-case .bd ul li .pic").hover(function(){
    $(".tit-t" ,this).animate({
        height:'toggle'
    });
});



// 20170609修改 by zenliver

$(function () {

    // 右侧侧栏返回顶部

    $(window).scroll(function () {
        var scrollHeight = $(window).scrollTop();
        if (scrollHeight >= 150) {
            $(".right_fixedbar_backtotop").fadeIn();
            $(".right_fixedbar_backtotop").prev().css("border-bottom","1px solid #fff");
        }
        else {
            $(".right_fixedbar_backtotop").hide();
            $(".right_fixedbar_backtotop").prev().css("border-bottom","none");
        }
    });

    $(".right_fixedbar_backtotop").click(function () {
        var backToTopOffsetTop = $(".right_fixedbar_backtotop").offset().top;
        console.log(backToTopOffsetTop);
        var backToTopTimer = setInterval(function () {
            backToTopOffsetTop -= 30;
            if (backToTopOffsetTop <= 0) {
                backToTopOffsetTop = 0;
            }
            console.log(backToTopOffsetTop);
            $(window).scrollTop(backToTopOffsetTop);
            if (backToTopOffsetTop == 0) {
                clearInterval(backToTopTimer);
            }
        },3);
        console.log(backToTopOffsetTop); // 在setInterval或setTimeout时程序在等待的过程中并不会停下来而是会继续执行计时器下面的代码

    });


});
