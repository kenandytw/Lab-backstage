<!DOCTYPE html>
<head>
    <title>Dining in the dark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="icon" href="/images/tab-icon.png" >
    <link rel="stylesheet" href="/stylesheets/screen.css">
    <link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/stylesheets/print.css">
    <link rel="stylesheet" href="/stylesheets/media.css">
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/imagesLoaded.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
    <div class="wrap">
@include('frontend.menu')
        <!-- landing cut -->
        <!-- 底紋 -->
        <div style="display:block;" class="section-01">
            <!-- 灰底 -->   
            <div class="logo-container">
                <!-- LOGO z: 1000 -->
                <div class="main-logo">
                    <img src="/images/cut1-intro/logo-big.png" alt="">
                    <div class="btn btn-standard landing-btn datm7" style="font-family:datm7;">
                        ENTER
                    </div>
                </div>

                <!-- 盤子 z: 100 -->
                <div class="folks">

                </div>

                <!-- 光 z: 10 -->
                <div class="light light-lg hidden-xs">

                </div>
                
                <div class="light light-xs visible-xs">
                    
                </div>


                <!-- 遮罩  z: 500-->
                <div class="mask">

                </div>
                
            </div>
        </div>
        
        <!-- first cut -->
        <div style="display:block;" class="section-index">
            <!-- 灰底 -->   
            <div class="logo-container">
                <!-- LOGO z: 1000 -->
                <div class="main-slogan">
                   
                    <div class="slogan-img show-1 shadow hidden-xs">
                        <img src="/images/cut2_index/slogan1-1.png" alt="">
                    </div>
                    <div class="slogan-img show-2 shadow hidden-xs">
                        <img src="/images/cut2_index/slogan2-2.png" alt="">
                    </div>
                    <div class="slogan-img show-3 shadow hidden-xs">
                        <img src="/images/cut2_index/slogan3-3.png" alt="">
                    </div>


                    <div class="slogan-img show-1 hidden-xs">
                        <img src="/images/cut2_index/slogan1.png" alt="">
                    </div>
                    <div class="slogan-img show-2 hidden-xs">
                        <img src="/images/cut2_index/slogan2.png" alt="">
                    </div>
                    <div class="slogan-img show-3 hidden-xs">
                        <img src="/images/cut2_index/slogan3.png" alt="">
                    </div>
                    
                    <div class="visible-xs slogan-img ">
                        <img src="/images/cut2_index/slogan-phone2.png" alt="">
                    </div>
                    <div class="visible-xs slogan-img ">
                        <img src="/images/cut2_index/slogan-phone1.png" alt="">
                    </div>

                   <a href="about.html">
                       <div class="btn btn-standard landing-btn show-4">
                           {{ trans('front.home.more') }}
                       </div>   
                   </a>
                   <!--a href="/reservation.html">
                       <div class="btn btn-standard landing-btn show-4">
                           立即訂位
                       </div>
                   </a-->
                </div>


                <!-- 光 z: 10 -->
                <div class="light light-lg hidden-xs">

                </div>

                <div class="light light-xs visible-xs">

                </div>

                <!-- 遮罩  z: 500-->
                <div class="mask">

                </div>

            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(function(){
             $('a').each(function(){
                var href = $(this).attr('href');
                if(href.indexOf('dininginthedark')<0){
                    if(href!='#'){
                        if(location.pathname.indexOf('en')>0){
                            $(this).attr('href','/dininginthedark/en/'+href);
                        } else {
                            $(this).attr('href','/dininginthedark/'+href);
                        }
                    }
                }
             });
        });
    </script>
</body>
</html>