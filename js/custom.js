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
    


    // hidden menu slide down when topNavBar Click
    
    $("#hiddenNav").hide();
        $(".topNavBar").click(function(){
            $(this).toggleClass("click");
            if($(this).hasClass("click")){
                $(".topNavBar").find("a").addClass("active");                
                $("#hiddenNav").slideDown("fast");
                $("body").toggleClass("overflow-hidden");               

            }else{
                $(".topNavBar").find("a").removeClass("active");
                // $(this).toggleClass("click");
                $("#hiddenNav").slideUp("fast");

            }
        });
        // accordion menu effect
        $(".mainDepth").find(".accordion-toggle").click(function() {     

                $(this).find("ul").toggleClass("open").slideToggle("fast");
                $(this).toggleClass("active-tab").find(".subDepth").toggleClass("active");
                $(".subDepth").not($(this).find("ul")).slideUp("fast").removeClass("open");
                $(".accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".subDepth").removeClass("active");
            
        });
        

   

    // Resize 비율유지 
    // $(document).ready(function(){
    //     $("body").width($(window).width());
    //     $("body").height($(window).height());

    //     $(window).resize(function(){
    //         $("body").width($(window).width()-20);
    //         $("body").height($(window).height()-20);
    //     });
    // });




    // 3차(비율계산해서 나누기)
    // $(window).resize(function(){
    //     let winWidth = $(window).width();
    //     // var sliderWidth= winWidth*3.6;
    //     // var sliderWidth = $('.slider').width();
        
    //     if(winWidth <= 1200){
    //         //1.681:1
    //         $('.slider').width(winWidth/3);
    //     }
    // });

    // 2차
    // $(window).resize(function(){
    //     let winWidth = $(window).width();
    //     if(winWidth >= 800){
    //       $(".navigation").css({"display":"block"});
    //      } else {
    //        $(".navigation").css({"display":"none"});
    //      }
     
    //    });

     

    // Main Slider and Button
    $(".slider").on(function(){
        // let index=$(this).index();
        $(".sliderDots li").eq(0).addClass("on");

        
        // $(".sliderDots li").find("button").removeClass("active");
        // $(".sliderDots li").find("button").eq(index).addClass("active");

        // $(".sliderDots li").find("button").eq(0).addClass("active");



    });

   
  

    



});


