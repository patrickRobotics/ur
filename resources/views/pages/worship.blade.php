<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upperroom| Welcome to Chrisco Upperroom</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-rating-master/bootstrap-rating.css">
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
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ministries</a>
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
        <!-- //Navbar Section End -->
    </header>
    <!-- //Heaser Section End-->
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
                    <a href="{{url('/worship')}}">Worship</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Worship
            </div>
        </div>
    </div>
    <!-- //Breadcrumb Section End-->
    <!-- Container Section Start -->
    <div class="container">
        <!--item view start-->
        <div class="row">
            <div class="mart10">
                <!--product view-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="product_wrapper">
                            <img id="zoom_09" src="images/wt/wts1.jpg" data-zoom-image="images/wt/wtb1.jpg" class="img-responsive" />

                        </div>
                    </div>
                    <div class="row">
                        <!--individual products in product view-->
                        <div id="gal1">
                            <a href="#" data-image="images/wt/wts1.jpg" data-zoom-image="images/wt/wtb1.jpg">
                                <img id="img_01" src="images/wt/wts1.jpg" class="img-responsive" />
                            </a>
                            <a href="#" data-image="images/wt/wts2.jpg" data-zoom-image="images/wt/wtb2.jpg">
                                <img id="img_02" src="images/wt/wts2.jpg" class="img-responsive" />
                            </a>
                            <a href="#" data-image="images/wt/wts3.jpg" data-zoom-image="images/wt/wtb3.jpg">
                                <img id="img_03" src="images/wt/wts3.jpg" class="img-responsive" />
                            </a>
                            <a href="#" data-image="images/wt/wts4.jpg" data-zoom-image="images/wt/wtb4.jpg">
                                <img id="img_04" src="images/wt/wts4.jpg" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
                <!--individual product description-->
                <div class="col-md-8">
                    <h2 class="text-primary">Chrisco Upperroom worship team </h2>
                    <i class="fa fa-star text-primary"></i>
                    <i class="fa fa-star text-primary"></i>
                    <i class="fa fa-star text-primary"></i>
                    <i class="fa fa-star text-primary"></i>
                    <i class="fa fa-star-o text-primary"></i>

                    <p>
                      Real worship is more than singing praises; it is the act of giving away our hearts. Worship is attributing ultimate value to something; it thinks, “If I had that I’d be happy;” it is a deep belief of the heart that says, “That is all I need.”
                      Worship is what we most deeply value. It’s not just the times we set aside to sing praise songs. We are constantly worshipping. Moment-by-moment, we live for something. “Where our treasure is, there will our hearts and minds be also.”
                      Instead of singing, I meditated on the Psalms; in place of rhythm, I read the gospels. Worship is not a feeling as much as the place of our deepest trust. Worship is a heart-rest on God.
                      Our Call is to Work out our salvation with fear and trembling (Philippians 2:12) allowing God to use us as His vessels of honor (2 Timothy 2:21) to lead the church into the Holy of holies worship (Ezekiel 44:16)</p>

                </div>
            </div>
        </div>
        <!--item view end-->
        <!--item desciption start-->
        <div class="row">
            <div class="col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Description </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Reviews </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <p>Music is a powerful tool of ministry. Its one of the major part of a growing and vigilant congregation. When done under the leading of the Holy Spirit, and with revelation the results are glorious. Extensive salvation, wholesome healing, deliverance are all achievable in both individual as well as corporate worship.
                                  The Chrisco Upper room Worship Team is the team mandated to lead the Church though sessions of Worship in all services including outdoor Missions. Our Call is to Work out our salvation with fear and trembling (Philippians 2:12) allowing God to use us as His vessels of honor (2 Timothy 2:21) to lead the church into the Holy of holies worship (Ezekiel 44:16) We edify the body of Christ through psalms, music and song.  </p>
                                <ul>
                                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i> Worship is all about reflecting the worth or value of God</li>
                                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Christ is praised in death by being prized above life</li>
                                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>Genuine affections for God are an end in themselves.</li>
                                    <li><i class="livicon" data-name="check" data-size="18" data-loop="true" data-c="#555555" data-hc="#555555"></i>The pursuit of joy in God is not optional. It is our highest duty.</li>
                                </ul>
                                <p>Our Target is to have 1000 instruments played by skillful, anointed and Spirit-filled brethren. By this the Church can experience another dimension of glory in a level than what was the encounter in 2 Chronicles 5, whereby as the instrumentalists and singers raised their voices as one, the cloud of God’s glory filled the temple until the Priests could not be able to minister.                      </div>

                        </div>
                        <!-- //Tabbable-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                </div>
            </div>
        </div>
        <!--item desciption end-->
        <!--recently view item-->
        <div class="row">
            <h2 class="text-primary"> Worship team Gallery</h2>
            <div class="divider"></div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta1.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta2.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta3.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta5.jpg" alt="product image">

            </div>
        </div>
        <div class="row">

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta6.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta7.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta8.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta9.jpg" alt="product image">

            </div>
        </div>
        <div class="row">

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta10.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta11.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta12.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta13.jpg" alt="product image">

            </div>
        </div>
        <div class="row">

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta14.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta15.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta16.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta17.jpg" alt="product image">

            </div>
        </div>
        <div class="row">

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta18.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta19.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta20.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta21.jpg" alt="product image">

            </div>
        </div>
        <div class="row">

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta22.jpg" alt="product image">

                </figure>
            </div>

            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta23.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta24.jpg" alt="product image">

                </figure>
            </div>
            <div class="flip-3d">
                <figure>
                    <img src="images/wt/wta25.jpg" alt="product image">

            </div>
        </div>
        <!--recently view item end-->
    </div>
    <!-- //Container Section End -->
    <!-- Footer Section Start -->
    <footer>
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
            <!-- //About us Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>KICC , Amphitheatre</li>
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
    <!-- //Footer Section End -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Hemoe Ent, 2018</p>
        </div>
    </div>
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
    <!--page level js start-->
    <script type="text/javascript" src="js/elevatezoom.js"></script>
    <script type="text/javascript" src="vendors/bootstrap-rating-master/bootstrap-rating.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <!--page level js start-->
</body>

</html>
