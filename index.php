<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- reset css link -->
    <link rel="stylesheet" href="./css/reset.css">

    <!-- style css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- media css link -->
    <link rel="stylesheet" href="./css/media.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="./css/animation.css">

    <!-- Light Slider CSS CDN link -->
    <link type="text/css" rel="stylesheet" href="./plugin/lightslider.css" />           

    <!-- Slick Slider CSS CDN link -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

    <!-- fontawesome CDN link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
       


    

    <title>해피베이비</title>
</head>
<body>

    <div class="wrap">
        <div id="header">
            <div class="center clear">
                <div class="topLogo">
                    <a href="#"><img src="img/logo.png" alt="해피베이비 로고 이미지"></a>
                    
                </div>
                <div class="topNavBar">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div> 
                     
            </div>
            
        </div>
        <!-- end of header -->

        <!-- hidden navigation -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/renewal/include/hidden_nav.php";?>  
       

        <div class="container">
            <section id="sliderSec" >                      

                    <div class="sliderWrap" >
                        <ul class="sliderImg">                      

                            <li class="slider item1" >
                                <img src="./img/main_slide_1.png" alt="해피베이비 슬라이드 이미지">                            
                            </li>

                            <li class="slider item2" >
                                <img src="./img/main_slide_2.png" alt="해피베이비 슬라이드 이미지">                            
                            </li>

                            <li class="slider item3" >
                                <img src="./img/main_slide_3.png" alt="해피베이비 슬라이드 이미지">                            
                            </li>

                            <li class="slider item4" >
                                <img src="./img/main_slide_4.png" alt="해피베이비 슬라이드 이미지">                            
                            </li>
                        </ul>        
                    </div>
                    <!-- end of SliderWrap -->

                    <div class="sliderTxt">
                        <div class="sliderEmblem">
                            <img src="./img/main_emblem.png" alt="해피베이비 애니메이션 엠블럼 이미지">
                        </div>
                        <span class="aniCon1">Happy</span>
                        <span class="aniCon2">Baby</span>

                    </div>
                
            </section>
            <!-- end of Main Slider Section -->

            <section id="serviceSec">
                <div class="center">
                    <div class="serviceTit">
                        <!-- <div class="serviceEmblem">
                            <img src="./img/main_tit_emblem.png" alt="">
                        </div> -->
                        <h1>Happy Service</h1>
                        <span class="line"></span>
                    </div>
                    <div class="serviceCon">
                        <!-- gridbox -->
                        <div class="conBox">
                            <div class="item">
                                <div class="imgBox">
                                    <div class="iconBox">
                                        <img src="./img/main_sevice_icon_1.png" alt="해피베이비 산모서비스 아이콘">
                                    </div>
                                </div>
                                
                                <div class="txtBox">
                                    <h3>산모서비스</h3>
                                    <span>다양한 산모 케어 서비스를 통해 정성을 다해
                                        돌보아 드립니다.
                                    </span>
                                    <button class="button">View More</button>

                                </div>
                                
                            </div>
                            <!-- end of ServiceSection Contents 1 -->
                            <div class="item">
                                <div class="imgBox">
                                    <div class="iconBox">
                                        <img src="./img/main_sevice_icon_2.png" alt="해피베이비 신생아서비스 아이콘">
                                    </div>    
                                </div>
                                                           
                                <div class="txtBox">
                                    <h3>신생아서비스</h3>
                                    <span>신생아의 목욕, 배꼽소독, 우유병소독, 세탁 등
                                        위생, 건강관리가 이루어 집니다.
                                    </span>
                                    <button class="button">View More</button>
                                </div>                               
                            </div> 
                            <!-- end of ServiceSection Contents 2 -->
                            <div class="item">
                                <div class="imgBox">
                                    <div class="iconBox">
                                        <img src="./img/main_sevice_icon_3.png" alt="해피베이비 기타서비스 아이콘">
                                    </div>
                                </div>                                
                                <div class="txtBox">
                                    <h3>기타서비스</h3>
                                    <span>세탁, 청소, 장보기, 남편, 큰아이 돌보기 등을
                                        지원하는 서비스입니다.
                                    </span>
                                    <button class="button">View More</button>
                                </div>                               
                            </div>
                            <!-- end of ServiceSection Contents 3 -->

                        </div>
                        <!-- end of ConBox -->

                    </div>
                </div> 
            </section>
            <!-- End of Service Section -->

            <section id="gridSec">
                <div class="gridBox">
                    <div class="item item1">
                        <div class="imgBox"></div>
                        <div class="txtBox">
                            <h3>산후조리 이용후기</h3>
                            
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <!-- end of Gride Section item1 -->
                    <div class="item item2">
                        <div class="txtBox">
                            <h3>Happy Baby</h3>
                            <span>아기의 건강은 엄마로부터 시작됩니다</span>
                            <button class="button">이용 및 요금안내</button>                            
                            <button class="button">온라인 예약</button>
                        </div>
                    </div>
                    <!-- end of Gride Section item2 -->

                    <div class="item item3">
                        <div class="imgBox"></div>
                        <div class="txtBox">
                            <h3><em>해피베이비</em> 산모교실</h3>
                            
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <!-- end of Gride Section item3 -->

                    <div class="item item4">
                        <div class="imgBox"></div>
                        <div class="txtBox">
                            <div class="center">
                                <h3>맞춤형 산후 관리사</h3>
                                <span>산모와 신생아의 건강을 지키는 해피베이비 관리사</span>
                                <img src="img/main_grid_hndwrt.png" alt="해피베이비 영문 손글씨 이미지">
                                
                                <button class="button">View More</button>
                            </div>
                            
                        </div>
                    </div>
                    <!-- end of Gride Section item4 -->

                    <div class="item item5">
                        <div class="txtBox">
                            <h3>산후관리사 교육</h3>
                            <span>해피베이비의 산후관리사에 지원하세요</span>
                            
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <!-- end of Gride Section item5 -->

                    <div class="item item6">
                        <div class="imgBox"></div>
                       
                    </div>
                    <!-- end of Gride Section item6 -->

                    <div class="item item7">
                        <div class="imgBox"></div>                    

                    </div>
                    <!-- end of Gride Section item7 -->

                    <div class="item item8">
                        <div class="txtBox">
                            <h3>전문강사진 소개</h3>
                            <span>차별화된 산후조리 전문가를 소개합니다</span>                           
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <!-- end of Gride Section item8 -->

                </div>
                <!-- end of Gridbox -->

            </section>
            <!-- End of Grid Section -->

            <section id="contactSec">
                <div class="center">
                    <div class="contactCon">
                        <ul>
                            <li class="contact1">
                                <div class="imgBox">
                                    <img src="./img/main_contact_icon_1.png" alt="해피베이비 고객불편사항접수 아이콘">
                                </div>
                                <div class="txtBox">
                                    <span>고객불편사항접수</span>

                                </div>

                            </li>
                            <li class="contact2">
                                <div class="imgBox">
                                    <img src="./img/main_contact_icon_2.png" alt="해피베이비 제휴 및 제안 아이콘">
                                </div>
                                <div class="txtBox">
                                    <span>제휴 및 제안</span>

                                </div>

                            </li>
                            <li class="contact3">
                                <div class="imgBox">
                                    <img src="./img/main_contact_icon_3.png" alt="해피베이비 공지사항 아이콘">
                                </div>
                                <div class="txtBox">
                                    <span>공지사항</span>

                                </div>

                            </li>
                            <li class="contact4">
                                <div class="imgBox">
                                    <img src="./img/main_contact_icon_3.png" alt="해피베이비 자주묻는질문 아이콘">
                                </div>
                                <div class="txtBox">
                                    <span>FAQ</span>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End of Contact Section -->
           
        
        </div>
        <!-- end of Contents Container -->
        <footer id="footer">
            <div class="center">
                <div class="btmNav">
                    <div class="btmLogo">
                        <a href="#"><img src="img/f_logo.png" alt="해피베이비 흑백 로고 이미지"></a>
                        
                    </div>
                    <div class="btmQuick clear">
                        <ul>
                            <li>
                                <span><a href="#">개인정보취급방침 <i class="fas fa-chevron-right"></i></a></span>
                            </li>
                            <li>
                                <span><a href="#">이용약관 <i class="fas fa-chevron-right"></i></a></span>

                            </li>
                        </ul>
                        
                    </div>        

                </div>
                <div class="btmInfo clear">
                    <ul>
                        <li>
                            상호   |<span>감동케어 해피베이비 산후도우미</span>
                        </li>
                        <li>
                            대표   |<span>석준희</span>

                        </li>
                        <li>
                            사업자등록번호   |<span>124-94-56003 </span>

                        </li>
                        <li>
                            직업소개사업등록필   |<span>수원-유2011-63 </span>

                        </li>
                        <li>
                            통신판매등록필   |<span>수원-2694호 </span>
                        </li>
                        <li>
                            서비스등록   |<span>제-41-0216802</span>
                        </li>
                        <li>
                            인허가공제번호   |<span>01-111024-8423 </span>
                        </li>
                        <li>
                            주소   |<span>서울특별시 영등포구 국회대로53길 23 4층</span>
                        </li>
                        <li>
                               |<span>경기도 수원시 팔달구 덕영대로 697번길 17, 304호 </span>
                        </li>
                        <li>
                            대표번호   |<span>02-335-3713</span>  <span>  |  1577-7853 </span>
                        </li>
                       

                        

                    </ul>
                    <p>Copyright © Happybb.com co., Ltd. All Rights Reserved.</p>

                </div>
            </div>
        </footer>
       

    </div>
    <!-- end of wrap -->
    
    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Light Slider js CDN link -->
    <script src="./plugin/lightslider.js"></script>

     
    <!-- main js link -->
    <script src="./js/custom.js"></script>

    <script>
       
        // Light Slider
        $(document).ready(function() {
            $('.sliderImg').lightSlider({
                loop:true,
                keyPress:true,
                item:1,
                auto:true,
                speed:500,
                controls:false,
                slideMargin:0             
            });
        });       


    </script>
        


   

    
    
    
</body>
</html>