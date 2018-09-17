<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Welcome to Upperroom</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
    <link rel="icon" href="images/favicon1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
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
                                <label class="hidden-xs"><a href="tel:" class="text-white">(+254) 726 900 700</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
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
                            <li><a href="news.html">News</a>
                            </li>
                            <li><a href="news_item.html">News Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Blog</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog.html">Blog</a>
                            </li>
                            <li><a href="blogitem.html">Blog Item</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{url('/contact')}}"> Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="images/uslide1.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide2.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide3.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide4.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide5.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide6.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide7.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide8.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/uslide9.jpg" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
    <!-- Container Start -->
    <!-- //Carousel End -->
    <!-- Container Start -->
    <div class="container">
        <section class="purchas-main">
            <div class="container bg-border">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1 class="purchae-hed">CHRISCO UPPERROOM FELLOWSHIP</h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-styl pull-right">HOME PAGE</a></div>
                </div>
            </div>
        </section>
        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">What to expect</span></h3>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Find a Fellowship</h3>
                        <p>Here you will find a home that will walk with you as you grow in your walk of faith and the saving grace of our Lord Jesus Christ. Hebrews 10:25 says "Not forsaking the assembling of ourselves together, as the manner of some is; but exhorting one another: and so much the more , as ye see the day approaching"</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->
            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-3">
                <!-- Box Start -->
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
            <!-- //Easy to Use Section End -->
            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14" data-hc="#f89a14"></i>
                    </div>
                    <div class="info">
                        <h3 class="warning text-center">Have a teenager/Kid?</h3>
                        <p>Here they will find a home where they are fed all-round in their lives to become great men and women doing exploits for the Kingdom.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->
            <!-- 20+ Page Section Start -->
            <div class="col-sm-6 col-md-3">
                <div class="box">
                    <div class="box-icon box-icon3">
                        <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </div>
                    <div class="info">
                        <h3 class="yellow text-center">God to God Worship</h3>
                        <p>Our services/fellowships are dominated by spirit led worship. The word of God in John 4:23 "But the hour is coming, and now is, when the true worshippers will worship the Father in spirit and truth; for the father is seeking such to worship Him" </p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //20+ Page Section End -->
        </div>
        <!-- //Services Section End -->
    </div>
    <!-- Layout Section Start -->
    <section class="feature-main">
        <div class="container">
            <div class="row">
              <h3 class="border-success"><span class="heading_border bg-success">Pillars of the fellowship</span></h3>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="layout-image">
                        <img src="images/layout3.jpg" class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">

                    <ul class="list-unstyled pull-right text-right layout-styl">
                        <li>
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Love</li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Pure Worship </li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Intercession </li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Evangelism </li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Five-fold ministry </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //Layout Section Start -->
    <!-- Accordions Section End -->
    <div class="container">
        <div class="row">
            <!-- Accordions Start -->
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">Ministries</span></h3>
                <label class=" text-center"> Our Call is to Work out our salvation with fear and trembling (Philippians 2:12) allowing God to use us as His vessels of honor (2 Timothy 2:21) to lead the church into the Holy of holies worship (Ezekiel 44:16).</label>
            </div>
            <!-- Accordions End -->
            <div class="col-md-6 col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Sunday school </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Intercessory </a>
                            </li>
                            <li>
                                <a href="#tab_default_3" data-toggle="tab">
                                Worship </a>
                            </li>
                            <li>
                                <a href="#tab_default_4" data-toggle="tab">
                                Fellowships </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="images/authors/sundayschool1.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                  Sunday school ministry caters for the spiritual nourishment of children. It is composed of teachers, teens and the younger children. Proverbs 22 :6 Train up a child in the way he should go: and when he is old, he will not depart from it.
                                  Mathew 19:14 "....suffer little children, and forbid them not, to come unto me: for such is the Kingdom of heaven."

                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="images/authors/intercessory1.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                  We are great team that believe in consistently dwelling in God’s presence and seeking His face always.The Bible says in 1st Thessalonians 5:16-17 Rejoice always, pray without ceasing.                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="images/authors/worship1.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                  Music is a powerful tool of ministry. Its one of the major part of a growing and vigilant congregation. When done under the leading of the Holy Spirit,
                                  and with revelation the results are glorious. Extensive salvation, wholesome healing, deliverance are all achievable in both individual as well as corporate worship. </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="images/authors/fellowship1.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                  Many people, including Christians, lack close friends. When people get together in a small group, home fellowship group, or cell group, close friendships form and often remain long after the group ends.                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- Panel-group Start -->
                <div class="panel-group" id="accordion">
                    <!-- Panel Panel-default Start -->
                    <div class="panel panel-default">
                        <!-- Panel-heading Start -->
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class=" glyphicon glyphicon-minus success"></span>
                                <span class="success">Upperroom Mission</span></a>
                            </h4>
                        </div>
                        <!-- //Panel-heading End -->
                        <!-- Collapseone Start -->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>The objective of Chrisco UpperRoom is to;

To preach the full gospel of Jesus Christ to mankind. This includes providing for the total needs of man including physical needs, spiritual and academic needs, domestic and material needs.
Training and equipping men and women in the five-fold ministries, ordaining and sending forth ministers and workers to different parts of the country, sending missionaries to other parts of the world.
Establishing training institutions i.e. vocational schools, bible training schools, academic institutions and correspondence schools.
Planting churches within and outside Kenya.
To reach out through the mass media through CHRISCO owned television station.
To raise up an army of intercessors who’ll stand up for Africa and the rest of the world.
To reach out to the young generation.
To help the less fortunate in the society through building children’s homes, hospitals and building homes for the aged.
To own money generating projects those are going to finance the work of God.                                </p>
                            </div>
                        </div>
                        <!-- Collapseone End -->
                    </div>
                    <!-- //Panel Panel-default End -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">Upperroom Vision</span>
                            </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                  The vision of CHRISCO church is entailed in pioneering apostolic work in Kenya and preparing the brethren and the nation to be the spring board for the end time revival.
                                  The vision includes:Teaching about Intercession in the New Testament pattern.Teaching about worship in the New Testament pattern.
                                  Raising able ministers who will reach out to the world with the gospel.Pioneering a move of God that’s going to sweep the rest of the world.Sound Doctrine Teaching - We conduct training sessions to missioners to equip them with godly doctrine.                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">What we believe in</span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                  The vision of CHRISCO church is entailed in pioneering apostolic work in Kenya and preparing the brethren and the nation to be the spring board for the end time revival.
                                  The vision includes:Teaching about Intercession in the New Testament pattern.Teaching about worship in the New Testament pattern.Raising able ministers who will reach out to the world with the gospel. Pioneering a move of God that’s going to sweep the rest of the world. Sound Doctrine Teaching - We conduct training sessions to missioners to equip them with godly doctrine.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Panle-group End -->
            </div>
        </div>
        <!-- //Accordions Section End -->
        <!-- Our Team Start -->
        <div class="row text-center">
            <h3 class=" border-danger"><span class="heading_border bg-danger">Our Team</span></h3>
            <div class="col-md-3 col-sm-5 profile">
                <div class="thumbnail bg-white">
                    <img src="images/parents1.jpg" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Pst Kato & Pst Joan</b>
                        <br /> Founding Pastor and Wife.
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
            <div class="col-md-3 col-sm-5 profile">
                <div class="thumbnail bg-white">
                    <img src="images/eldership1.jpg" alt="team-image">
                    <div class="caption">
                        <b>Church leadership</b>
                        <br /> Elders, deacons & deaconnesses
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
            <div class="col-md-3 col-sm-5 profile">
                <div class="thumbnail bg-white">
                    <img src="images/aerial1.jpg" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Worship team</b>
                        <br /> Instrumentalists & Singers
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
            <div class="col-md-3 col-sm-5 profile">
                <div class="thumbnail bg-white">
                    <img src="images/church1.jpg" alt="team-image">
                    <div class="caption">
                        <b>Mama Das with Upperroom fellowship</b>
                        <br /> Chrisco Upperroom
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
        </div>
        <!-- //Our Team End -->
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">Chrisco upperroom Ministry</span></h4>
                    </div>
                </div>
                <img src="images/chrisco1.jpg" class="img-responsive">
                <p>
                  CHRISCO Work founders Apostle Harry Das and Mama Das saw the great need and commissioned formation of Upper Room Church in Nairobi, under leadership and pastoral care of Pastor Kato and Joan Lafont, to provide a home where the young people could grow, breed, express themselves and eventually mature.This is where talents and gifts have been identified, nurtured, guided, exposed to the right environment to flourish and unfold. Many great men and women in the nation and outside Africa testify to the home they found under care of Pastors Kato and Joan Lafont. Under their watch there is balancing, edification, exaltation unto holiness and uprightness in serving God and working out our salvation with diligence and in fear of God.
                  Ministering to the Spirit and Body needs of the kingdom of God. A man with a fatherly heart towards young people. Preaching the gospel of love, purity, holiness and righteousness through Jesus Christ. Equipping you to be an able minister ready to serve God in the capacity of your calling
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">Fly-M Ministry</span></h4>
                    </div>
                </div>
                <img src="images/flym1.jpg" class="img-responsive">
                <p>
                    Today, with one of the fastest growing youth ministry in Kenya, Fly-m has grown tremendously under Pastor Kato and Joan Lafont to become the platform of evangelism to Schools - from Primary Schools all the way to institutions of higher learning. Pastor Lafont Kato and the leaders serving under him oversee a massive congregation and this dynamic ministry under him has and is transforming youths especially through missions and outreach programs.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->


        <!-- Our Skills Start -->

        <div class="text-center marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger">Our Commitments</span></h3>
        </div>
            </div>
        <div class="sliders">
            <!-- Our skill Section start -->
            <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6  text-center ">
                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="95%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Evangelism</strong>
                </div>
                <span>W e as a fellowship are commited to the great commission given to us by the Lord to reach out to the lost soul in dire need of. </span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                    <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Intercession</strong>
                </div>
                <span>Our aim is to travail for the revival, pray for the body of Christ and the Nation at large</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4." data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Love</strong>
            </div>
            <span>Love is our strongest pillar and essential to the fellowship</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Worship</strong>
            </div>
            <span>In the fellowship we  give a God to God kind of worship.</span>
            </div>
        </div>
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Container Start -->
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>About Us</h4>
                <p>
                    Here at Chrisco Upper-Room Church, we’re passionate about people of all walks of life finding a place to call home in our church. We inspire and equip all generations to - connect, grow, and live - enjoying God's love and saving grace!</p>
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
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>KICC , Amphitheatre</li>
                    <li>Nairobi, Kenya</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:+254 726 900 700</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:****</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">info@chriscoupperroom.org</a></span>
                    </li>
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                        <span class="success">Upperroom</span>
                    </li>
                </ul>
                <div class="news">
                    <h4>News letter</h4>
                    <p>subscribe to our newsletter and stay up to date with the latest news</p>
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
    <!-- //Footer Section End -->
    <!-- Copy right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Hemoe Ent</p>
        </div>
    </div>
    <!-- Copy right Section End -->
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
    <script type="text/javascript" src="js/jquery.circliful.js"></script>
    <script type="text/javascript" src="vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <!--page level js ends-->
</body>

</html>
