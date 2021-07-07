<!DOCTYPE HTML>
<html>

<head>
    <title>Free Snow Bootstrap Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <!--<script src="js/jquery.easydropdown.js"></script>-->
    <!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/fwslider.js"></script>
    <!--end slider -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="" /></a>
                        </div>
                        <div class="menu">
                            <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="team.html">Sobre Nosotros</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="js/responsive-nav.js"></script>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="header_right">
                        <!-- start search-->
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!----search-scripts---->
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                        <script>
                            new UISearch(document.getElementById('sb-search'));
                        </script>
                        <!----//search-scripts---->
                        <ul class="icon1 sub-icon1 profile_img">
                            <li>
                                <a class="active-icon c1" href="#"> </a>
                                <ul class="sub-icon1 list">
                                    <div class="product_control_buttons">
                                        <a href="#"><img src="images/edit.png" alt="" /></a>
                                        <a href="#"><img src="images/close_edit.png" alt="" /></a>
                                    </div>
                                    <div class="clear"></div>
                                    <li class="list_img"><img src="images/1.jpg" alt="" /></li>
                                    <li class="list_desc">
                                        <h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
                                    <div class="login_buttons">
                                        <div class="check_button"><a href="checkout.html">Check out</a></div>
                                        <div class="login_button"><a href="login.html">Login</a></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <!-- Slide image -->
                    <img src="images/slider1.jpg" class="img-responsive" alt="" />
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h1 class="title">Avanza Con<br>Todo</h1>
                            <!-- /Text title -->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class="slide">
                    <img src="images/slider2.jpg" class="img-responsive" alt="" />
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <h1 class="title">Sigue<br>Adelante</h1>
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class="timers"></div>
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>
        <!--/slider -->
    </div>
    <div class="main">
        <div class="content-top">
            <h2>snowboards</h2>
            <p>El Mejor Catologo de snowboards</p>
            <div class="close_but"><i class="close1"> </i></div>
            <ul id="flexiselDemo3">
                <li><img src="images/board1.jpg" /></li>
                <li><img src="images/board2.jpg" /></li>
                <li><img src="images/board3.jpg" /></li>
                <li><img src="images/board4.jpg" /></li>
                <li><img src="images/board5.jpg" /></li>
            </ul>
            <h3>SnowBoard Extreme Series</h3>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
    </div>
    <div class="content-bottom">
        <div class="container">
            <div class="row content_bottom-text">
                <div class="col-md-7">
                    <h3>Snowboarding</h3>
                    <p class="m_1">Contamos con el mas amplio catalogo de snowboar para todo los gustos y asequibles para todos los el publico y con la mejor atencion posible
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row footer_bottom">
                <div class="copy">
                    <p>© 2021 Desing by <a href="http://w3layouts.com" target="_blank">Omaly</a></p>
                </div>
                <dl id="sample" class="dropdown">
                    <dt><a href="#"><span>Change Region</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                            <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                            <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                            <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                            <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                            <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</body>

</html>
