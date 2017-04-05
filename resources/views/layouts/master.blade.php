<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 1.4.3
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>JANGO</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="{{ asset('assets/plugins/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/socicon/socicon.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="{{ asset('assets/plugins/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/slider-for-bootstrap/css/slider.css') }}" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ asset('assets/base/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/base/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/base/css/themes/default.css') }}" rel="stylesheet" id="style_theme" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.2/sweetalert2.min.css">
        <link href="{{ asset('assets/base/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index.html" class="c-logo">
                                <img src="{{asset('assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo">
                                <img src="{{asset('assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo-inverse">
                                <img src="{{asset('assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i>
                                <span class="c-cart-number c-theme-bg">2</span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="{{Request::is('/') ? 'c-active' : ''}}">
                                    <a href="{{url('/')}}" class="c-link ">Home
                                    </a>
                                </li>
                                <li class="{{Request::is('contact') ? 'c-active' : ''}}">
                                    <a href="{{url('/contact')}}" class="c-link">Kontakt
                                    </a>
                                </li>
                                @if(Auth::user())
                                <li>
                                    <a href="{{url('/admin')}}" class="c-link">Admin</a>
                                </li>
                                @endif
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> Login</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    <!-- END: CART MENU -->
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->
         <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        
       
       @include('includes.login')


        @yield('content')



         <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
            
            <div class="c-postfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2017 &copy; Eigentümer Gemeinschaft Bad Saarow
                                <span class="c-font-grey-3">All Rights Reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        <script src="{{asset('assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="{{asset('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="{{asset('assets/base/js/components.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/base/js/components-shop.js')}}" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.2/sweetalert2.js"></script>
        @yield('scripts')
        @stack('scripts')
        <script src="{{asset('assets/base/js/app.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>