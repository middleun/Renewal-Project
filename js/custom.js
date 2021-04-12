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

   
     

    // Main Slider and Button
    $(".slider").on(function(){
        $(".sliderDots li").eq(0).addClass("on");

    });
    



});


