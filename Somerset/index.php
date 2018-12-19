<!DOCTYPE html>
<html lang="zxx" ng-app="somtown">

<head>
    <title>Somerset Shuttlers | ISA-VIT Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Fitness Freak Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- nav dropdown -->
    <script>
        $('ul.dropdown-menu li').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <!-- //nav dropdown -->
    <!-- gallery -->
    <script src="js/smoothbox.jquery2.js"></script>
    <!-- //gallery -->
    <!-- banner Slider script  -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //banner Slider-JavaScript -->
    <!-- Team FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- End- Flexslider-script -->
    <!-- Testimonials owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: false,
                items: 3,
                itemsDesktop: [991, 2],
                itemsDesktopSmall: [414, 4]

            });
        });
    </script>
    <!-- //Testimonials owl carousel -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear'
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/numscroller-1.0.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script type="text/javascript" src="js/angFile.js">

    </script>

    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- testimonials -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <!-- flexslider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
     <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Jockey+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body ng-controller='view_nae'>
    <!-- banner -->
    <div class="main_section" id="home">
        <div class="agile-banner_nav">

            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand" href="index.html">Shuttlers
                            <span>omerset</span>
                        </a>
                    </h1>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.html" class="effect-3">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="effect-3 scroll">About</a>
                            </li>
                            <li>
                                <a href="#explore" class="scroll">Explore</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Sub Menu
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="#gallery" class="scroll">Gallery</a>
                                    </li>

                                    <li>
                                        <a href="#price" class="scroll">Plans</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">More
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="#team" class="scroll">Team</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#blog" class="scroll">Blog</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="s-menu" href="#">Sub menu
                                            <b class="fa fa-caret-right"></b>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">link1</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">link2</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a href="#contact" class="effect-3 scroll">contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <div class="clearfix"> </div>
        </div>
        <!-- banner slider -->
        <div class="slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image1">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>commit</h3>
                                <p> to be fit</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image2">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>Fitness</h3>
                                <p>is a lifestyle</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image3">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>strive</h3>
                                <p> for progress</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <!-- //Slider -->
    <!-- about-->
    <div class="about-top section" id="about">
        <div class="container">
            <div class="w3l-about-top-head">
                <div class="col-md-6 about-left text-center">
                    <h5 class="main-title">introducing</h5>
                    <h6 class="txt">fitness freak</h6>
                    <p>we explore your hidden potential</p>
                </div>
                <div class="col-md-6 about-right">
                    <h5>Both, health and fitness are closely inter-related to each other. Both are necessary for the human being to live a happy and healthy life.</h5>
                    <p>Somerset Shuttlers seeks to promote a healthy lifestyle, develop a lifelong passion for physical activity and sport. Our aim is not only to teach the sport but to make the child’s first introduction to sport exciting and memorable. We are passionate about giving children, through sport, a solid foundation from which to develop many aspects of their lives. As well as physical improvements, we carefully develop life skills, such as confidence, concentration, social interaction, sportsmanship values and many more, in a caring and fun environment.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- about-bottom-grid -->
    <div class="section about-bottomgrid b2g">
        <div class="container">
            <div class="about-bot-grid-sec">
                <div class="about-middle-pos">
                    <h2>fitness freak</h2>
                    <p>strive for progress</p>
                </div>
                <div class="about-section">
                    <div class="col-md-4 col-sm-6  abg1">

                    </div>
                    <div class="col-md-8 col-sm-6 wthree-sec-about">
                        <h4 class="bot-grid1">commit to be fit</h4>
                        <p class="bot-gridtxt">Believe in yourself, trust the process, change forever. Each day is a new opportunity to imporve yourself. Take it. And make the most out of it.</p>
                    </div>
                    <div class="clearfix"> </div>

                </div>
                <div class="col-md-8  col-sm-6 wthree-sec-about about-pos-btm">
                    <h4 class="bot-grid-about">focus on being happy</h4>
                    <p>The art of being happy lies in the power of extracting happiness from common things.</p>
                </div>
                <div class="col-md-4 col-sm-6 abg2">
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-bottom-grid-->
    <!-- explore -->
    <div class="explore-grid text-center section" id="explore">
        <h3 class="title1">explore</h3>
        <div class="sub-div">
            <div class="exp-grid">
              <div class="ab1 w3_agile-about-grid1">
                <img src="images/p7.png" alt="" />
                <h4 class="explore-title">Badminton</h4>
              </div>
              <div class="ab1 w3_agile-about-grid1">
                  <img src="images/p3.png" alt="" />
                  <h4 class="explore-title">diet guide</h4>
              </div>
              <div class="ab1 w3_agile-about-grid1">
                  <img src="images/p2.png" alt="" />
                  <h4 class="explore-title">fitness</h4>
              </div>
              <div class="ab1 w3_agile-about-grid1">
                  <img src="images/p5.png" alt="" />
                  <h4 class="explore-title">meditation</h4>
              </div>
              <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //explore -->
    <!-- Stats -->
    <div class="stats">
        <div class="layer-stats">
            <div class="container section ">
                <div class="col-md-3">
                    <h4 class="stat-title text-center">we
                        <span>explore</span>your hidden
                        <span>potential</span>
                    </h4>
                </div>
                <div class="col-md-9 stat-info">
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-shield" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>professional trainers</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='736' data-delay='.5' data-increment="1">343</div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-bookmark-o" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>gold medals</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="1">780</div>

                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-external-link" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>skilled trainers</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='630' data-delay='.5' data-increment="1">630</div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-users" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>happy clients</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='900' data-delay='.5' data-increment="1">1000</div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Stats -->
    <!-- gallery -->
    <div class="gallery section" id="gallery">
        <div class="container">
            <h3 class="title1">Gallery</h3>
            <div class="gallery_grids">
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">
                        <div class="gallery_effect">
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g1.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/g2.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g2.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/t3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g3.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/t1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/t1.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/t3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/t3.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">
                        <div class="gallery_effect">
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g4.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/g2.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g5.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">
                            <a href="images/g3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g6.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!--  pricing-->
    <div class="section price-main text-center b2g2" id="price">
        <div class="container">
            <h3 class="title1">plans</h3>
            <div class="sub-div">
                <div class="col-md-4 col-sm-4 plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">beginner</li>
                        <li class="price-tag">RS 6000</li>
                    </ul>
                    <ul class="price-list">
                        <li>personal trainer</li>
                        <li>diet guide</li>
                        <li>get supplement</li>
                        <li>advanced fitness</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">professional</li>
                        <li class="price-tag">RS 6500</li>
                    </ul>
                    <ul class="price-list">
                        <li>personal trainer</li>
                        <li>diet guide</li>
                        <li>get supplement</li>
                        <li>advanced fitness</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">advanced</li>
                        <li class="price-tag">RS 7500</li>
                    </ul>
                    <ul class="price-list">
                        <li>personal trainer</li>
                        <li>diet guide</li>
                        <li>get supplement</li>
                        <li>advanced fitness</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- // pricing -->
    <?php
      include 'connect.php';
      $sql = "SELECT * FROM som_review ORDER BY id DESC LIMIT 6";
      $result = mysqli_query($connect,$sql);
    ?>
    <!-- testimonials -->
    <div class="feedback section" id="testimonials">
        <h3 class="title1 text-center">what our customers say</h3>
        <div class="sub-div">
            <div class="container">
                <div class="testimonials-grids">
                    <div id="owl-demo" class="owl-carousel owl-theme" >
                        <?php
                          while($row = mysqli_fetch_array($result))
                          {
                            echo "<div class='item'>
                                <div class='feedback-info'>
                                    <div class='feedback-top'>
                                        <p style='text-align:center;'> ";
                                        for ($i=0; $i < (int)$row['numval']; $i++) {
                                          echo "<span class='fa fa-star checked' style='font-size:25px;'></span>";
                                        }
                                        for ($i=(int)$row['numval']; $i < 5; $i++) {
                                          echo "<span class='fa fa-star' style='font-size:25px;'></span>";
                                        }
                                        echo " </p>
                                    </div>
                                    <div class='feedback-grids'>
                                        <div class='feedback-icon'>
                                            <span class='fa fa-user' aria-hidden='true'></span>
                                        </div>
                                        <div class='feedback-img-info'>
                                            <h5>".$row['name']."</h5>";
                                            echo "</div>
                                        <div class='clearfix'> </div>
                                    </div>
                                </div>
                            </div>";
                          }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- team-->
    <div class="team text-center" id="team">
        <div class="team-layer">
            <h3 class="title">Expert Instructors</h3>
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-6 col-sm-6 w3_agile-team-grid ">
                                <img src="images/s1.png" alt=" " class="img-responsive" />
                                <h5>John Doe,
                                    <span>Coach</span>
                                </h5>
                                <p>Lorem ipsum dolor sit amet sed do eiusmod incididunt ut labore minim veniam.</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="images/s2.png" alt=" " class="img-responsive" />
                                <h5>Jane Doe,
                                    <span>Fitness </span>
                                </h5>
                                <p>Lorem ipsum dolor sit amet sed do eiusmod incididunt ut labore minim veniam.</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>

                        </li>
                        <li>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="images/s2.png" alt=" " class="img-responsive" />
                                <h5>Daniel Nyari,
                                    <span>Fitness</span>
                                </h5>
                                <p>Lorem ipsum dolor sit amet sed do eiusmod incididunt ut labore minim veniam.</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="images/s1.png" alt=" " class="img-responsive" />
                                <h5>Daniel Nyari,
                                    <span> Flexibility</span>
                                </h5>
                                <p>Lorem ipsum dolor sit amet sed do eiusmod incididunt ut labore minim veniam.</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="clearfix"></div>
                        </li>

                    </ul>
                </div>
            </section>

        </div>
    </div>
    <!-- //team -->
    <!-- Contact-form -->
    <div class="section" id="contact">
        <h3 class="title1 text-center">Contact Us</h3>
        <div class="container-fluid">
          <div class="map-grid">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="auto" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=vellore&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
              <style>
                .mapouter {
                  text-align:right;
                  height:400px;
                  width: auto;
                }
                .gmap_canvas {
                  overflow:hidden;
                  background:none!important;
                  height:400px;
                  width:auto;
                }
              </style>
            </div>
          </div>
        </div>
        <div class="w3layouts-contact-pos">
            <div class="w3layouts-contact-pos-grid">
                <span class="field-icon fa fa-map-marker" aria-hidden="true"></span>
                <ul>
                    <li>VIT University</li>
                    <li>Vellore</li>
                    <li>Tamil Nadu.</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid sr1">
                <span class="field-icon fa fa-phone" aria-hidden="true"></span>
                <ul>
                    <li>.</li>
                    <li>+91 99947 84044</li>
                    <li>.</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid sr2">
                <span class="field-icon fa fa-envelope-o fa-lg" aria-hidden="true"></span>
                <ul>
                    <li>.</li>
                    <li>
                        <a href="mailto:info@example.com">somersetshuttlers@gmail.com</a>
                    </li>
                    <li>.</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid">
                <span class="field-icon fa fa-clock-o" aria-hidden="true"></span>
                <ul>
                    <li>Monday-Friday :
                        <span> 07:00 AM-22:00 PM</span>
                    </li>
                    <li>saturday :
                        <span>06:00 AM-23:00 PM</span>
                    </li>
                    <li>sunday :
                        <span>06:00 AM-23:00 PM</span>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div><br>
        <div class="contact-form">
            <div class="container">


                    <div class="contact-left-form">
                        <div class="field-input">
                            <span class="field-icon fa fa-user" aria-hidden="true"></span>
                            <input type="text" placeholder="Name" required ng-model="name">
                            <div class="clearfix"></div>
                        </div>
                        <div class="field-input">
                            <span class="field-icon  fa fa-phone" aria-hidden="true"></span>
                            <input type="text" class="phone" placeholder="phone" required="[6-9]{1}[0-9]{9}" ng-model="phone">
                            <div class="clearfix"></div>
                        </div>
                        <div class="field-input" align="center">
                            <span class='fa fa-star inp' style="font-size:36px" ng-click="starval(1);"></span>
                            <span class='fa fa-star inp' style="font-size:36px" ng-click="starval(2);"></span>
                            <span class='fa fa-star inp' style="font-size:36px" ng-click="starval(3);"></span>
                            <span class='fa fa-star inp' style="font-size:36px" ng-click="starval(4);"></span>
                            <span class='fa fa-star inp' style="font-size:36px" ng-click="starval(5);"></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clear"></div><br>
                    <button class="btn1" ng-click="clickHua();">Submit message</button>

            </div>
        </div>
    </div>
    <!-- //Contact-form -->
    <!-- footer -->
    <div class="footer-main text-center">
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-facebook-official icon" aria-hidden="true"></span>
                <h6>like on facebook</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-twitter-square icon" aria-hidden="true"></span>
                <h6>follow on twitter</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-youtube-square icon" aria-hidden="true"></span>
                <h6>watch on youtube</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#contact" class="scroll">
                <span class="fa fa-question-circle icon" aria-hidden="true"></span>
                <h6>Any qusetions?</h6>
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copy text-center">
                <p>© 2018 Somerset Shuttlers. All rights reserved | Design by
                    <a href="http://isavit.club">ISA-VIT Student Section</a>
                </p>
            </div>
        </div>
    </div>
<!-- //footer -->
</body>

</html>
