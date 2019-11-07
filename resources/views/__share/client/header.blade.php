<header id="header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="{{ route('home') }}">
                            <h2>{{ trans('client/header.logo') }}</h2>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="">
                                    <i class="fa fa-user"></i>
                                    {{ trans('client/home-page.account') }}
                                </a></li>
                            <li>
                                <a href="">
                                    <i class="fa fa-star"></i>
                                    {{ trans('client/home-page.wishlist') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">{{ trans('client/header.navigation') }}</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route('home') }}" class="active">{{ trans('client/header.home') }}</a></li>
                            <li class="dropdown"><a href="#">{{ trans('client/header.shop') }}<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">{{ trans('client/header.product') }}</a></li>
                                    <li><a href="product-details.html">{{ trans('client/header.product_detail') }}</a></li>
                                    <li><a href="checkout.html">{{ trans('client/header.checkout') }}</a></li>
                                    <li><a href="cart.html">{{ trans('client/header.cart') }}</a></li>
                                    <li><a href="login.html">{{ trans('client/header.login') }}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">{{ trans('client/header.blog') }}<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">{{ trans('client/header.blog_list') }}</a></li>
                                    <li><a href="blog-single.html">{{ trans('client/header.blog_single') }}</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">{{ trans('client/header.404') }}</a></li>
                            <li><a href="contact-us.html">{{ trans('client/header.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="{{ trans('client/header.search') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
