$(function(){

    // Fixed Header

    const offTop = $("#header").offset().top;

    
        $(window).scroll(function(){
            let scroll = $(window).scrollTop();
            if(offTop <= scroll){
                $("#header").css({"position":"fixed","background":"#fff"});
                
                
            }else{
                $("#header").css({"position":"relative", "background":"#fcf7ef"});
            }
        });
       
      
    


    // topNavBar Click
    $(this).hasClass("click");
    const navBar=function(){
        $(".topNavBar").click(function(){
            $(this).toggleClass("click");
            if($(this).hasClass("click")){
                $(this).find("i").attr("class","fas fa-times");
                // $(".hiddenNav").show("fast");
            }else{
                $(this).find("i").attr("class", "fas fa-bars");
                // $(".hiddenNav").hide("fast");

            }
        });
    }
    navBar();


     

    // Main Slider and Button
    $(".slider").on(function(){
        // let index=$(this).index();
        $(".sliderDots li").eq(0).addClass("on");

        
        // $(".sliderDots li").find("button").removeClass("active");
        // $(".sliderDots li").find("button").eq(index).addClass("active");

        // $(".sliderDots li").find("button").eq(0).addClass("active");



    });

    



});


