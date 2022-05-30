<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="description"
        content="A convenient way of searching for properties through the service of virtual viewing.">
    <meta name="keywords"
        content="Virtual viewing, live showing, home tour, live video tour, honest photography, home and rentals">
    <meta name="author" content="">
    <title>A virtual walk through desired properties | Video View Homes and Things</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="http://www.videoviewhomesandrentals.com/assets/uploads/logo/logo162043290174163466960570.png">
    <meta name="keywords"
        content="Virtual viewing, live showing, home tour, live video tour, honest photography, home and rentals">
    <meta name="description"
        content="A convenient way of searching for properties through the service of virtual viewing.">
    <!-- Google Fonts -->
    <!--<link href="" rel="stylesheet">-->
    <!-- Loading css file -->
    <link href="{{ url('/') }}/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="{{ url('/') }}/assets/css/glider.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/glider.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/toastr.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/offcanvas-menu.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/fbstyle.css" />
    <script src="{{ url('/') }}/assets/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
    var base_url = "/";
    </script>
    <!-- <script type="text/javascript" charset="utf-8" id="zm-extension" src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Fonts Links -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&amp;display=swap"
        rel="stylesheet">
</head>

<body class="responsive" data-gr-c-s-loaded="true">
    <div id="preloader" style="display:none;">
        <div class="loading">
            <span>Loading...</span>
        </div>
    </div>
    <!-- PRE LOADER start-->
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
    <!-- PRE LOADER end-->
    <!-- PRE LOADER start-->
    <!-- <div id="st-preloader">
         <div id="pre-status">
             <div class="preload-placeholder"></div>
         </div>
         </div> -->
    <!-- PRE LOADER end-->
    <!-- Wrapper Start -->
    <style>
    .Logo {
        color: white;
        font-style: italic;
        font-family: papyrus;
        text-align: center;
    }

    #search {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);

        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        -webkit-transform: translate(0px, -100%) scale(0, 0);
        -moz-transform: translate(0px, -100%) scale(0, 0);
        -o-transform: translate(0px, -100%) scale(0, 0);
        -ms-transform: translate(0px, -100%) scale(0, 0);
        transform: translate(0px, -100%) scale(0, 0);

        opacity: 0;
        z-index: 11;

    }

    #search.open {
        -webkit-transform: translate(0px, 0px) scale(1, 1);
        -moz-transform: translate(0px, 0px) scale(1, 1);
        -o-transform: translate(0px, 0px) scale(1, 1);
        -ms-transform: translate(0px, 0px) scale(1, 1);
        transform: translate(0px, 0px) scale(1, 1);
        opacity: 1;
    }

    #search input[type="search"] {
        position: absolute;
        top: 50%;
        width: 100%;
        color: rgb(255, 255, 255);
        background: rgba(0, 0, 0, 0);
        font-size: 60px;
        font-weight: 300;
        text-align: center;
        border: 0px;
        margin: 0px auto;
        margin-top: -51px;
        padding-left: 30px;
        padding-right: 30px;
        outline: none;
    }

    #search .btn {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: 61px;
        margin-left: -45px;
        background: #062C30 !important;
        outline: none;
        border: none;
    }

    #search .close {
        position: fixed;
        top: 15px;
        right: 15px;
        color: #fff;
        background-color: #062C30;
        border-color: #357ebd;
        opacity: 1;
        padding: 10px 17px;
        font-size: 27px;
    }

    .search_ins {
        position: absolute;
        right: -8px;
        border: 1;
        font-size: 13px;
        border-radius: 50%;
    }

    .affix .navbar-brand {
        width: 190px;
    }

    .header-navigation-menu .navbar-brand {
        float: left;
        height: auto;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px;
    }
    </style>
    <!-- top header sec start -->
    <section class="topheadersec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="currencylist">
                        <ul>
                            <li>Currency</li>
                            <li><select style="position:initial;">
                                    <option>Any</option>
                                </select></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="topaddreslist">
                        <ul>
                            <li><a href="https://maps.google.com/?q=1009%20south%20ballenger%20hwy%20flint%20michigun%20810%20522%203102"
                                    target="_blank"> <i class="fa fa-map-marker"></i>1009 south ballenger hwy flint
                                    michigun 810 522 3102</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-9 col-xs-12" style="padding:0px;">
                    <div class="topaddreslist float-end">
                        <ul>
                            <li>
                                <ul class="socailiconlist">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="#" target="_blank">Login</a></li>
                            <li><a href="#" target="_blank">Register</a> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top header sec end -->
    <!-- Header Start -->
    <header class="affix-top " data-spy="affix" data-offset-top="105">
        <div class="header-navigation-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 col-sm-2 col-6 no-margin">
                        <div class="logoimg">
                            <a href="{{ url('/') }}" class="navbar-brand">
                                <h4 class="Logo">Video View</h4>
                                <h4 class="Logo">Homes And Things</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-12 col-sm-8 no-margin mob-none">
                        <nav class="navbar navbar-default justify-content-center">
                            <div id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/products') }}">Products</a>
                                    <li class="dropdown tour"><a href="javascript:void(0)" class="dropdown-toggle"
                                            data-toggle="dropdown">Home Tour<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/bid') }}">Place Offer on
                                                    Product</a></li>
                                            <li><a href="{{ url('/price') }}">Plans &
                                                    Pricing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/countries') }}">State / City</a>
                                    </li>

                                    </li>
                                    <li><a href="{{ url('/serviceform') }}">SERVICE
                                            FORM</a></li>
                                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                                    <li>
                                        <a href="{{ url('/uploadservice') }}">
                                            Upload a Product <span><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <div class="sumitlist">
                                            <a href="#search" class="search_ins"><i class="fa fa-search"></i></a>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-6 pc-none mob-block">
                        <span class="menu-toggle  visible-xs visible-sm"><i class="fa fa-bars"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="search">
        <button type="button" class="close">×</button>
        <form class="searchForm">
            <input type="search" value="" name="keyword" class="keyword" autocomplete="off"
                placeholder="type keyword(s) here" required/>
            <button class="btn btn-primary">Search</button>
        </form>
    </div>

    <script>
    $(function() {
        $('a[href="#search"]').on('click', function(event) {
            event.preventDefault();
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });

        $('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });


        //Do not include! This prevents the form from submitting for DEMO purposes only!
        // $('.searchForm').submit(function(event) {
        //     event.preventDefault();
        //     if ($('.keyword').val() != "") {
        //         window.location = base_url + 'search.php?search=' + $('.keyword').val();
        //         // return false;
        //     }
        // })
    });
    </script>
    <!-- Header End -->


    @yield('content')


    @include('master.footer')