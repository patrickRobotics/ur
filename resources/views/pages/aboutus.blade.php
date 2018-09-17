<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us | Welcome to Chrisco Upperroom</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="vendors/devicon/devicon.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/devicon/devicon-colors.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Head section Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/chriscoupperroomfellowship/?ref=br_rs"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CUpperRoom"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/112218850217091238784"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">info@chriscoupperroom.org</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:"class="text-white">()+254) 726 900 700</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Section Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="images/logoup.png" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}"> Home</a>
                    </li>

                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> About</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/aboutus')}}">About Us</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ministries</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/worship')}}">Worship</a>
                            </li>
                            <li><a href="{{url('/intercessory')}}">Intercessory</a>
                            </li>
                            <li><a href="{{url('/sunday_school')}}">Sunday School</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Multimedia</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/portfolio')}}">Gallery 1</a>
                            </li>
                            <li><a href="{{url('/portfolioitem')}}">Gallery 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> News</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">News</a>
                            </li>
                            <li><a href="#">News Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Blog</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Blog</a>
                            </li>
                            <li><a href="#">Blog Item</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{url('/contact')}}"> Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //Nav bar Section End -->
    </header>
    <!-- //Head section End -->
    <!-- Breadcrumb Section Start -->
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="{{('/aboutus')}}">About Us</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> About Us
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12">
                <h2><label>Welcome to Chrisco Upperroom</label></h2>
                <p>
                  Here at Chrisco Upper-Room Church, we’re passionate about people of all walks of life finding a place to call home in our church. We inspire and equip all generations to - connect, grow, and live - enjoying God's love and saving grace!                </p>
                <p>
                  The Church recognizes that the church is built upon the foundation of Apostles and Prophets and that God sends his Apostles and Prophets to pioneer every new thing he desires to do on earth. God send Apostle Das to pioneer this apostolic move that is going to sweep the entire world in preparation for Christ’s return.                </p>
                <p>
                  We believe that God wants to have a personal and dynamic relationship with us all. Getting together for Sunday fellowship is only a small part of how we grow spiritually.                </p>
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="images/au1.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au2.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au3.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au4.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au5.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au6.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au7.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au8.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au9.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au10.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au11.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au12.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au13.jpg" alt="slider-image">
                    </div>
                    <div class="item"><img src="images/au14.jpg" alt="slider-image">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->
        <!-- Services Section Start -->
        <div class="row">
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success" >What to expect</span></h3>
            </div>
            <!-- left Section Start -->
            <div class="col-md-6 col-sm-12">
                <!-- Responsive Section Start -->
                <div class="col-sm-6 col-md-6">
                    <div class="box">
                        <div class="box-icon">
                            <i class="livicon icon1" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        </div>
                        <div class="info">
                            <h3 class="success text-center">Find a fellowship</h3>
                            <p>Here you will find a home that will walk with you as you grow in your walk of faith and the saving grace of our Lord Jesus Christ. Hebrews 10:25 says "Not forsaking the assembling of ourselves together, as the manner of some is; but exhorting one another: and so much the more , as ye see the day approaching"</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Responsive Section End -->
                <!-- Easy to Use Section Start -->
                <div class="col-sm-6 col-md-6 ">
                    <div class="box">
                        <div class="box-icon box-icon1">
                            <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="info">
                            <h3 class="primary text-center">Sound Bible Teaching</h3>
                            <p>Here you will find a home that will walk with you as you grow in your walk of faith and the saving grace of our Lord Jesus Christ.</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Easy to use Section End -->
            </div>
            <!-- Left Section End -->
            <div class="col-md-6 col-sm-12">
                <!-- Pnael group section Start -->
                <div class="margin-t30 hidden-xs hidden-sm"></div>
                <div class="panel-group" id="accordion">
                    <!--Php Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class=" glyphicon glyphicon-minus success"></span>
                                <span class="success">Upperroom Mission</span></a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                      <!--  <i class="devicon-php-plain colored font100" ></i> -->
                                    </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> The objective of Chrisco UpperRoom is to; To preach the full gospel of Jesus Christ to mankind. This includes providing for the total needs of man including physical needs, spiritual and academic needs, domestic and material needs. Training and equipping men and women in the five-fold ministries, ordaining and sending forth ministers and workers to different parts of the country, sending missionaries to other parts of the world. Establishing training institutions i.e. vocational schools, bible training schools, academic institutions and correspondence schools. Planting churches within and outside Kenya. To reach out through the mass media through CHRISCO owned television station. To raise up an army of intercessors who’ll stand up for Africa and the rest of the world. To reach out to the young generation. To help the less fortunate in the society through building children’s homes, hospitals and building homes for the aged. To own money generating projects those are going to finance the work of God.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Php Section End -->
                    <!-- Html Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">Upperroom Vision</span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                          <!--  <i class="devicon-html5-plain colored font100"></i> -->
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">The vision of CHRISCO church is entailed in pioneering apostolic work in Kenya and preparing the brethren and the nation to be the spring board for the end time revival. The vision includes:Teaching about Intercession in the New Testament pattern.Teaching about worship in the New Testament pattern. Raising able ministers who will reach out to the world with the gospel.Pioneering a move of God that’s going to sweep the rest of the world.Sound Doctrine Teaching - We conduct training sessions to missioners to equip them with godly doctrine.
                                         </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Html Section End -->
                    <!-- Jquery Section Start -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">What we believe in</span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <a href="#">
                                          <!--  <i class="devicon-jquery-plain colored font100" ></i> -->
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> The vision of CHRISCO church is entailed in pioneering apostolic work in Kenya and preparing the brethren and the nation to be the spring board for the end time revival. The vision includes:Teaching about Intercession in the New Testament pattern.Teaching about worship in the New Testament pattern.Raising able ministers who will reach out to the world with the gospel. Pioneering a move of God that’s going to sweep the rest of the world. Sound Doctrine Teaching - We conduct training sessions to missioners to equip them with godly doctrine.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Jquery Section End -->
                </div>
                <!-- //Panel group Section End -->
            </div>
        </div>
        <!-- // Services Section End -->
        <!-- Our Team Section Start -->
        <div class="row">
            <!-- Our Team Heading Start -->
            <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger" >Our Team</span></h3>
            </div>
            <!-- //Our Team Heading End -->
            <!-- Image1 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile">
                <div class="thumbnail bg-white  text-center">
                    <img src="images/lkato.jpg" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Pst Kato Lafont</b>
                        <br /> Senior Pastor &amp; Founder
                        <br />
                        <div class="divide">
                            <a href="https://www.facebook.com/kato.c.lafont?fref=ts" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image1 Section End -->
            <!-- Image2 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile">
                <div class="thumbnail bg-white text-center">
                    <img src="images/ljoan.jpg" alt="team-image">
                    <div class="caption">
                        <b>Pastor Joan Lafont</b>
                        <br /> Pastor &amp;Co-founder
                        <br />
                        <div class="divide">
                            <a href="https://www.facebook.com/joan.lafont.7?fref=ts" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image2 Section End -->
            <!-- Image3 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile">
                <div class="thumbnail bg-white  text-center">
                    <img src="images/leadership1.jpg" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Elder Akaranga &amp; Pst Maunda</b>
                        <br /> Elder &amp; Pastor in Training
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image3 Section End -->
            <!-- Image4 Section Star -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile">
                <div class="thumbnail bg-white text-center">
                    <img src="images/lmawira.jpg" alt="team-image">
                    <div class="caption">
                        <b>Elder Mawira</b>
                        <br /> Elder &amp; Church treasurer
                        <br />
                        <div class="divide">
                            <a href="https://www.facebook.com/chriscoupperroomfellowship/?ref=br_rs" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="https://twitter.com/CUpperRoom"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="https://plus.google.com/112218850217091238784"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image4 Section End -->
        </div>
        <!-- //Our Team Section End -->
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Container Start -->
        <div class="container footer-text">
        <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>About Us</h4>
                <p>
                  Today, with one of the fastest growing youth ministry in Kenya, Fly-m has grown tremendously under Pastor Kato and Joan Lafont to become the platform of evangelism to Schools - from Primary Schools all the way to institutions of higher learning. Pastor Lafont Kato and the leaders serving under him oversee a massive congregation and this dynamic ministry under him has and is transforming youths especially through missions and outreach programs.
                </p>
                <h4>Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>KICC, Amphitheatre</li>
                    <li>Nairobi, Kenya.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:(+254) 726 900 700</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:#</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">info@chriscoupperroom.org</a></span>
                    </li>
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                        <span class="success">Upperroom</span>
                    </li>
                </ul>
                <div class="news">
                    <h4>News letter</h4>
                    <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">
                        <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                    </div>
                </div>
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
                <h4>Recent Posts</h4>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Heaven on earth,its a family church where love dwells,I have never felt loved before like the way Dad Kato and mum Joan love me!.
                            <br />
                            <div class="pull-right"><i>Bancy</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Heaven on earth,its a family church where love dwells,I have never felt loved before like the way Dad Kato and mum Joan love me!
                            <br />
                            <div class="pull-right"><i>Joe</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Home of true transforming Worship....A fellowship I'm grateful for and love so much.
                            <br />
                            <div class="pull-right"><i>Rose</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">A home with standards and values.
                            <br />
                            <div class="pull-right"><i>Migwi</i></div>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Recent Post Section End -->
        </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -- >
    <!-- Copy Right Section Start -->
     <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Hemoe Ent, 2018</p>
        </div>
    </div>
    <!-- //Copy right Section End -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/style-switcher.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="js/josh_frontend.js"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script type="text/javascript" src="vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/aboutus.js"></script>
    <!--page level js ends-->
</body>

</html>
