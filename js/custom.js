$(function(){

    

    // Main Slider and Button
    $(".slider").on(function(){
        let index=$(this).index();
        $(".sliderDots li").eq(index).addClass("on");


    });


});



