<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio | Welcome to Chrisco Upperroom</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <link rel="stylesheet" type="text/css" href="vendors/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="vendors/fancybox/source/helpers/jquery.fancybox-buttons.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Header Section Start -->
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
                                <label class="hidden-xs"><a href="tel:"class="text-white">(+254) 726 900 700</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
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
    <!-- Header Section End -->
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
                    <a href="{{url('/portfolio')}}">Portfolio</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="briefcase" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Portfolio
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <h2>Portfolio</h2>
        <!-- Images Section Start -->
        <div class="col-md-12">
            <div id="gallery">
                <div>
                    <button class=" btn filter btn-primary" data-filter="all">ALL</button>
                    <button class="btn filter btn-primary" data-filter=".category-1">SUNDAY SERVICES</button>
                    <button class=" btn filter btn-primary" data-filter=".category-2">RADICAL KESHAS</button>
                </div>
                <div>
                    <div class="mix category-1" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md10.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md10.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md11.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md11.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md12.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md12.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md13.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md13.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md14.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md14.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md15.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md15.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md16.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md16.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md17.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md17.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md18.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md18.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md19.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md19.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md20.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md20.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md21.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md21.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md22.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md22.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md23.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md23.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md24.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md24.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md25.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md25.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md26.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md26.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md27.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md27.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md28.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md28.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md29.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md29.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md30.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md30.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md34.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md34.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md32.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md32.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md33.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md33.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md36.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md36.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md37.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md37.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md38.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md38.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md39.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md39.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md40.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md40.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md41.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md41.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md42.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md42.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md43.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md43.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md44.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md44.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md45.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md45.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md46.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md46.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md47.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md47.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md48.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md48.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md49.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md49.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/md50.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/md50.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa1.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa1.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa2.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa2.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa3.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa3.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa4.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa4.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa5.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa5.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa6.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa6.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa7.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa7.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa8.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa8.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa9.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa9.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa10.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa10.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa11.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa11.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa12.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa12.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa13.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa13.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa14.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa14.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa15.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa15.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa16.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa16.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa17.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa17.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa18.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa18.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa19.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa19.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa20.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa20.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa21.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa21.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa22.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa22.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa23.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa23.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa24.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa24.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa25.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa25.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa26.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa26.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa27.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa27.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa28.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa28.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa29.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa29.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa30.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa30.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa31.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa31.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa32.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa32.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa33.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa33.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa34.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa34.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa35.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa35.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa36.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa36.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa37.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa37.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa38.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa38.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa39.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa39.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa40.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa40.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa41.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa41.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa42.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa42.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa43.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa43.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa44.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa44.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa45.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa45.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa46.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa46.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa47.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa47.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa48.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa48.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa49.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa49.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa50.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa50.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa51.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa51.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa52.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa52.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa53.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa53.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa54.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa54.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa55.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa55.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa56.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa56.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa57.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa57.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa58.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa58.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa59.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa59.jpg" class="img-responsive"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="images/gallery/ssa60.jpg"><i class="fa fa-search-plus"></i></a>
                            <a href="{{url('/portfolioitem')}}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="images/gallery/ssa60.jpg" class="img-responsive"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Images Section End -->
    </div>
    <!-- Container Section End -->
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
            <!-- //Aboutus Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>KICC, Amphitheatre</li>
                    <li>Nairobi, Kenya.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:9140 123 4588</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:400 423 1456</li>
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
    </footer>
    <!--Footer Section End -->
    <!-- Copy Right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Hemoe Ent, 2018</p>
        </div>
    </div>
    <!-- //Copy Right Section End -->
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
    <script type="text/javascript" src="vendors/mixitup/src/jquery.mixitup.js"></script>
    <script type="text/javascript" src="vendors/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="vendors/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="vendors/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
    <!--page level js ends-->
</body>

</html>
