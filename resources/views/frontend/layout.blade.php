<!DOCTYPE html>
<head>
    <title>Dinner In The Dark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="/stylesheets/screen.css">
    <link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/stylesheets/print.css">
    <link rel="stylesheet" href="/stylesheets/media.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/main.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="wrap">
        <div class="mobile-menu">
            <ul class="language-list">
                <a href="#"><li class="first-child active">中文</li></a>
                <a href="#"><li>EN</li></a>
            </ul>
            <ul class="page-list">
                <a href="/about.html">
                    <li>
                        About
                    </li>
                </a>
                <a href="/chef.html">
                    <li>
                        Chef
                    </li>
                </a>
                <a href="/rules.html">
                    <li>
                        Rules
                    </li>
                </a>
                <a href="/reservation.html">
                    <li>
                        Reservation
                    </li>
                </a>
                <a href="#">
                    <li class="dropdown">
                        Story
                        <i class="fa fa-angle-down"></i>
                        <ul>
                            <a href="/people.html">
                                <li>
                                    People
                                </li>   
                            </a>
                            <a href="/press.html">
                                <li class="last-child">
                                    Press
                                </li>    
                            </a>
                        </ul>
                    </li>
                </a>
                <a href="/events.html">
                    <li>
                        Events
                    </li>
                </a>
                <a href="/contact.html">
                    <li class="last-child">
                        Contact
                    </li>
                </a>
            </ul>
        </div>      
      
        <!-- header -->
        
        <div class="header-contaier clearfix">
            <!-- mobile header -->
            <div class="visible-xs mobile-header clearfix">
                <a href="/index.html"><img src="/images/logo2.png" alt=""></a>
                <a class="mobile-menu-btn" href="#"><i class="fa fa-bars"></i></a>
            </div>
            
           
            
            <!-- desktop header -->
            <div class="nav-logo hidden-xs">
               <a href="/index.html">
                   <img src="/images/cut1-intro/logo.png" alt="">       
               </a>
            </div>
            <div class="nav-bar hidden-xs">
               
                <ul class="language-list">
                    <a href="#"><li class="first-child">中文</li></a>
                    <a href="#"><li>English</li></a>
                </ul>
                <ul class="page-list">
                    <a href="/about.html"><li>About</li></a>
                    <a href="/chef.html"><li>Chef</li></a>
                    <a href="/rules.html"><li>Rules</li></a>
                    <a href="/reservation.html"><li>Reservation</li></a>
                    <a href="#">
                        <li class="dropdown">
                            Story
                            <i style="margin-left:5px;" class="fa fa-angle-down"></i>
                            <ul>
                                <a href="/people.html">
                                    <li>
                                        People
                                    </li>   
                                </a>
                                <a href="/press.html">
                                    <li>
                                        Press
                                    </li>    
                                </a>
                            </ul>
                        </li>
                    </a>
                    <a href="/events.html"><li>Events</li></a>
                    <a href="/contact.html"><li>Contact</li></a>
                </ul>
            </div>
        </div>
       
        <!-- first cut -->
        @yield('content')
        
        <!-- footer -->
        <footer class="footer-section" style="">
            <div class="footer-zone">
                <div class="flex-row">
                    <div class="footer-container-md">
                        <h1>
                            營業時間｜Opening hour
                        </h1>
                       <table>
                           <tr>
                               <td>
                                   Tue-Fri 
                               </td>
                               <td>
                                   18:30-20:30 / 21:00-23:00
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Sat-Sun
                               </td>
                               <td>
                                   11:30-13:30 / 14:00-16:00
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   
                               </td>
                               <td>
                                   18:30-20:30 / 21:00-23:00
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Monday
                               </td>
                               <td>
                                   Close
                               </td>
                           </tr>
                       </table>
                    </div>
                    <div class="footer-container-md">
                        <h1>
                            地址｜Address
                        </h1>
                        <table>
                            <tr>
                                <td>
                                    台北市忠誠路一段171巷2號1樓
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer-container-md">
                        <h1>
                            聯絡電話｜Tel
                        </h1>
                        <table>
                            <tr>
                                <td>
                                    +886 (0)2 2831 0023
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer-container-xs">
                        <div>
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/surpriselabtw/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/surpriselabtw/">
                                       <i class="fa fa-instagram"></i>   
                                   </a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyright">
                            Copyright © 2016 驚喜製造
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>