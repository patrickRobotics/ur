<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery 2 | Welcome to Chrisco upperroom</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Header Section Start -->
    <header>
        <!-- Icon ection Start -->
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
                                <label class="hidden-xs"><a href="tel:"class="text-white">(+254) 726 900 700</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Icon Section End -->
        <!-- Navbar Section Start -->
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

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> About</a>
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
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Multimedia</a>
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
        <!-- Navbar Section End -->
    </header>
    <!-- //Header Section End -->
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
                    <a href="{{url('/portfolioitem')}}">Gallery 2</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="clip" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Portfolio Item
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row details">
            <h2><label> Portfolio gallery</label></h2>
            <!-- Slider Section Start -->
            <div class="col-md-6">
                <div class="col-md-5 col-sm-12 slider">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item"><img src="images/gallery/ssa61.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa62.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa63.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa64.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa65.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa66.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa67.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa68.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa69.jpg" alt="slider-image" class="img-responsive">
                        </div>
                        <div class="item"><img src="images/gallery/ssa70.jpg" alt="slider-image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Slider Section End -->
            <!-- Project Description Section Start -->
            <div class="col-md-6">
                <h3 class="project">We belong to God</h3>
                <p class="text-justify">
                  Isaiah 43:1-2
                  "But now, this is what the Lord says – he who created you, Jacob, he who formed you, Israel: 'Do not fear, for I have redeemed you; I have summoned you by name; you are mine. When you pass through the waters, I will be with you; and when you pass through the rivers they will not sweep over you. When you walk through the fire, you will not be burned; the flames will not set you ablaze.'"                </p>
                <h3>Client Details</h3>
                <ul>
                    <li><b>Category:</b>&nbsp;Chrisco</li>
                    <br />
                    <li><b>Client:</b>&nbsp;Upperroom</li>
                    <br />
                    <li><b>Tags:</b>&nbsp;Photo, Gallery</li>
                    <br />
                    <li><b> Link:</b><a href="{{url('/')}}">&nbsp;www.chriscoupperroom.org</a></li>
                    <br />
                    <li><a class=" btn btn-primary" href="#"><span class="text-white"><i class="livicon" data-name="hand-right" data-size="24" data-loop="true" data-c="#fff" data-hc="white"></i></span></a></li>
                </ul>
            </div>
            <!-- //Project Description Section End -->
        </div>
        <!-- Related Section Start -->
        <div class="row">
            <div class="col-md-12 project_images">
                <div class="text-center">
                    <h3 class="border-success"><span class="heading_border bg-success">Additional Gallery</span></h3>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa71.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa72.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa73.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa74.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa75.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa76.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa77.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa78.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa79.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa80.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa81.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="images/gallery/ssa82.jpg" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <!-- Related Setion End -->
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
    <footer>
        <div class="container footer-text">
            <!-- Aboutus Section Start -->
            <div class="col-sm-4">
                <h4>About Us</h4>
                <p>
                  Today, with one of the fastest growing youth ministry in Kenya, Fly-m has grown tremendously under Pastor Kato and Joan Lafont to become the platform of evangelism to Schools - from Primary Schools all the way to institutions of higher learning. Pastor Lafont Kato and the leaders serving under him oversee a massive congregation and this dynamic ministry under him has and is transforming youths especially through missions and outreach programs.
                </p>
                <h4>Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/chriscoupperroomfellowship/?ref=br_rs"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/CUpperRoom"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/112218850217091238784"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //Abouyus Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>KICC, Amphitheatre</li>
                    <li>Nairobi, Kenya.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:0726 900 700</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:#</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                    <a href="mailto:">info@chriscoupperroom.org/a></span>
                    </li>
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                        <span class="success">Chrisco Upperroom</span>
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
    </footer>
    <!-- //Footer Section End -->
    <!-- Copy Right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Josh Admin Template, 2015</p>
        </div>
    </div>
    <!-- Copy Right Section End -->
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
    <!--page level js ends-->
</body>

</html>
