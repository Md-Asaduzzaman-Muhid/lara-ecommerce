<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage"  class="no-js" >
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" />
 <!--font-family-->
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/font-awesome.min.css')}}">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/linearicons.css')}}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/animate.css')}}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl.theme.default.min.css')}}">
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">
    
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootsnav.css')}}" >	
    
    <!--style.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style.css')}}">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/responsive.css')}}">


    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">
    @stack('style-lib')

    @stack('style')
</head>

<body>
<!--welcome-hero start -->
    <header id="home" class="welcome-hero">

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!--/.carousel-indicator -->
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
            <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
            <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
        </ol><!-- /ol-->
        <!--/.carousel-indicator -->

        <!--/.carousel-inner -->
        <div class="carousel-inner" role="listbox">
            <!-- .item -->
            <div class="item active">
                <div class="single-slide-item slide1">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>great design collection</h4>
                                            <h2>cloth covered accent chair</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                                            </p>
                                            <div class="packages-price">
                                                <p>
                                                    $ 399.00
                                                    <del>$ 499.00</del>
                                                </p>
                                            </div>
                                            <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                <span class="lnr lnr-plus-circle"></span>
                                                add <span>to</span> cart
                                            </button>
                                            <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                more info
                                            </button>
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-5">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/slider1.png" alt="slider image">
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->

            </div><!-- /.item .active-->

            <div class="item">
                <div class="single-slide-item slide2">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>great design collection</h4>
                                            <h2>mapple wood accent chair</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                                            </p>
                                            <div class="packages-price">
                                                <p>
                                                    $ 199.00
                                                    <del>$ 299.00</del>
                                                </p>
                                            </div>
                                            <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                <span class="lnr lnr-plus-circle"></span>
                                                add <span>to</span> cart
                                            </button>
                                            <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                more info
                                            </button>
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-5">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/slider2.png" alt="slider image">
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->

            </div><!-- /.item .active-->

            <div class="item">
                <div class="single-slide-item slide3">
                    <div class="container">
                        <div class="welcome-hero-content">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-txt">
                                            <h4>great design collection</h4>
                                            <h2>valvet accent arm chair</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                                            </p>
                                            <div class="packages-price">
                                                <p>
                                                    $ 299.00
                                                    <del>$ 399.00</del>
                                                </p>
                                            </div>
                                            <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                                <span class="lnr lnr-plus-circle"></span>
                                                add <span>to</span> cart
                                            </button>
                                            <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                                more info
                                            </button>
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                                <div class="col-sm-5">
                                    <div class="single-welcome-hero">
                                        <div class="welcome-hero-img">
                                            <img src="assets/images/slider/slider3.png" alt="slider image">
                                        </div><!--/.welcome-hero-txt-->
                                    </div><!--/.single-welcome-hero-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                        </div><!--/.welcome-hero-content-->
                    </div><!-- /.container-->
                </div><!-- /.single-slide-item-->
                
            </div><!-- /.item .active-->
        </div><!-- /.carousel-inner-->

    </div><!--/#header-carousel-->

    <!-- top-area Start -->
    <div class="top-area">
        <div class="header-area">
            <div class="top-header">
                <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 text-right">
                    <ul class="navbar-nav">
                        
                            <li class="nav-item">
                                <select class="langSel form-control" >
                                    <option value="">@lang('Select One')</option>
                                    @foreach($language as $item)
                                        <option value="{{$item->code}}" @if(session('lang') == $item->code) selected  @endif>{{ __($item->name) }}</option>
                                    @endforeach
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
               
            </div>
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">            
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search">
                                <a href="#"><span class="lnr lnr-magnifier"></span></a>
                            </li><!--/.search-->
                            <li class="nav-setting">
                                <a href="#"><span class="lnr lnr-cog"></span></a>
                            </li><!--/.search-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <span class="lnr lnr-cart"></span>
                                    <span class="badge badge-bg-1">2</span>
                                </a>
                                <ul class="dropdown-menu cart-list s-cate">
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">arm <br> chair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">single <br> armchair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">wooden arn <br> chair</a></h6>
                                            <p>1 x - <span class="price">$180.00</span></p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    <li class="total">
                                        <span>Total: $0.00</span>
                                        <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                    </li>
                                </ul>
                            </li><!--/.dropdown-->
                        </ul>
                    </div><!--/.attr-nav-->
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{route('home')}}">furn.</a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item active"><a href="{{route('home')}}"  class="nav-link">{{__('Home')}}</a></li>
                        @foreach($pages as $k => $data)
                            <li class="nav-item"><a href="{{route('pages',[$data->slug])}}"  class="nav-link">{{__($data->name)}}</a></li>
                        @endforeach
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}">@lang('login')</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.register') }}">@lang('register')</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->fullname }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.logout') }}">
                                        @lang('Logout')
                                    </a>
                                </div>
                            </li>
                        @endauth
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </div><!-- /.top-area-->
    <!-- top-area End -->

    </header><!--/.welcome-hero-->
    <!--welcome-hero end -->

    @yield('content')

    <!--footer start-->
    <footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://github.com/Md-Asaduzzaman-Muhid/portfolio" target= "_blank">Muhid</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->


    @php
        $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
    @endphp

    <!-- Modal -->
    <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">@lang('Cookie Policy')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @php echo @$cookie->data_values->description @endphp
                <a href="{{ @$cookie->data_values->link }}" target="_blank">@lang('Read Policy')</a>
            </div>
            <div class="modal-footer">
                <a href="{{ route('cookie.accept') }}" class="btn btn-primary">@lang('Accept')</a>
            </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script> -->
    <script src="{{asset($activeTemplateTrue.'js/jquery.js')}}"></script>
            
    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script>

    <!-- bootsnav js -->
    <script src="{{asset($activeTemplateTrue.'js/bootsnav.js')}}"></script>

    <!--owl.carousel.js-->
    <script src="{{asset($activeTemplateTrue.'js/owl.carousel.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="{{asset($activeTemplateTrue.'js/custom.js')}}"></script>

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')


    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{route('home')}}/change/"+$(this).val() ;
            });
            // @if(@$cookie->data_values->status && !session('cookie_accepted'))
            //     $('#cookieModal').modal('show');
            // @endif
        })(jQuery);
    </script>

    </body>
</html>