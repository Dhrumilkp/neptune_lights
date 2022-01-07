<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Zilla+Slab:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colors.php-color=193532.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/furniture.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fonts.css" type="text/css" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/icon.png" />


    <title>Neptune Lights</title>
</head>

<body class="stretched">

    <div class="body-overlay"></div>
    <div id="wrapper" class="clearfix">
        <header id="header" class="header-size-md border-bottom-0">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <div id="logo" class="col-auto flex-column order-1">
                            <a href="<?php echo base_url(); ?>" class="standard-logo"><img
                                    src="<?php echo base_url(); ?>images/logo.png" alt="Canvas Logo"></a>
                            <a href="<?php echo base_url(); ?>" class="retina-logo"><img
                                    src="<?php echo base_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
                        </div>

                        <div id="primary-menu-trigger">
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                                <defs>
                                    <style>
                                        .a,
                                        .c {
                                            fill: none;
                                        }

                                        .b {
                                            fill: var(--themecolor);
                                            opacity: 0.2;
                                        }

                                        .c,
                                        .d {
                                            stroke: var(--themecolor);
                                        }

                                        .c {
                                            stroke-miterlimit: 10;
                                            stroke-width: 14px;
                                        }

                                        .d {
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 13px;
                                        }
                                    </style>
                                </defs>
                                <rect class="a" width="24" height="24" />
                                <circle class="b" cx="96" cy="96" r="96" transform="translate(32 32)" />
                                <circle class="c" cx="96" cy="96" r="96" transform="translate(32 32)" />
                                <line class="d" x2="85" transform="translate(86 127)" />
                                <line class="d" x2="85" transform="translate(86 97)" />
                                <line class="d" x2="85" transform="translate(86 159)" />
                            </svg>
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" fill="var(--themecolor)"
                                viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
                                <circle cx="128" cy="128" r="96" fill="none" stroke="var(--themecolor)"
                                    stroke-miterlimit="10" stroke-width="16"></circle>
                                <line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="var(--themecolor)"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                <line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="var(--themecolor)"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                            </svg>
                        </div>

                        <nav class="primary-menu with-arrows order-lg-1 order-last px-0">
                            <ul class="menu-container">
                                <li class="menu-item current">
                                    <a class="menu-link" href="<?php echo base_url(); ?>">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu mega-menu-full">
                                    <a href="#" class="menu-link">
                                        <div>Categories</div>
                                    </a>
                                    <div class="mega-menu-content border-bottom-0">
                                        <div class="container">
                                            <div class="row">
                                                <?php 
                                                    if(!empty($categories))
                                                    {
                                                        foreach($categories as $row)
                                                        {
                                                            ?>
                                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                                    <li class="menu-item">
                                                                        <a class="menu-link" href="<?php echo base_url(); ?>category/<?php echo $row['id']; ?>">
                                                                            <div><?php echo $row['name']; ?></div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            <?
                                                        }
                                                    }
                                                ?>
                                                <!-- <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>Sofa</div>
                                                        </a>

                                                        <ul class="sub-menu-container mega-menu-dropdown">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Sofa Set</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Single Seater</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Recliner</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Sofa Cum Bed</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>BeanBag</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>Chairs</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>Beds</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>Wardrobe</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>Tables</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="sub-menu-container mega-menu-column col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-products.html">
                                                            <div>More</div>
                                                        </a>
                                                        <ul class="sub-menu-container mega-menu-dropdown">
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Kids Room</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Mattress</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Lighting</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>Pillows</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link"
                                                                    href="demo-furniture-products.html">
                                                                    <div>FlowerPot</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul
                                                    class="sub-menu-container mega-menu-column bg-color-light col-lg-auto">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="demo-furniture-single.html">
                                                            <div><i class="icon-line-link"></i>Single Page</div>
                                                        </a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="demo-furniture-about.html">
                                        <div>About Us</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="<?php echo base_url(); ?>contact-us">
                                        <div>Contact</div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>

        <section id="slider" class="slider-element swiper_wrapper min-vh-75" data-loop="true">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <?php
                        if(!empty($slider_data))
                        {
                            foreach($slider_data as $row)
                            {
                                
                                $img = unserialize($row['product_imgs']);
                                
                                ?>
                                    <div class="swiper-slide">
                                        <div class="container">
                                            <div class="caption-wrapper" style="position:absolute;top:20%;width:50%;">
                                                <h1 style="color:white;font-size:80px;">
                                                    <?php echo $row['caption']; ?>
                                                </h1>
                                            </div>
                                            <div class="position-absolute pos-y-end mb-3 row w-100 col-mb-30">
                                                <div class="col-md-auto col-10 ts">
                                                    <a href="<?php echo base_url(); ?>view-product/<?php echo $row['product_id']; ?>" class="card d-flex flex-row"
                                                        data-animate="fadeInLeft">
                                                        <img src="<?php echo base_url(); ?><?php echo $img[0]; ?>" width="100" height="100"
                                                            alt="Image" class="rounded-start">
                                                        <div class="card-body px-4">
                                                            <h4 class="mb-2 text-white fw-medium" style="font-size:25px;"><?php echo $row['title']; ?></h4>
                                                            <h4 class="mb-0 h6 text-white fw-normal font-body d-flex"><i class="icon-long-arrow-right ms-auto"></i></h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide-bg"
                                            style="background:linear-gradient(0deg, rgb(20 19 20 / 50%), rgb(0 0 0 / 50%)), url('<?php echo base_url(); ?><?php echo $row['slider_img']; ?>');background-size:cover;background-position:center;">
                                        </div>
                                    </div>
                                <?
                            }
                        }
                    ?>
                </div>
                <div class="slider-arrow-left">
                    <svg xmlns="https://www.w3.org/2000/svg" width="52" height="52" fill="#FFF" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none"></rect>
                        <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
                        <circle cx="128" cy="128" r="96" fill="none" stroke="#FFF" stroke-miterlimit="10"
                            stroke-width="12"></circle>
                        <polyline points="144 92 104 128 144 164" fill="none" stroke="#FFF" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="12"></polyline>
                    </svg>
                </div>
                <div class="slider-arrow-right">
                    <svg xmlns="https://www.w3.org/2000/svg" width="52" height="52" fill="#FFF" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none"></rect>
                        <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
                        <circle cx="128" cy="128" r="96" fill="none" stroke="#FFF" stroke-miterlimit="10"
                            stroke-width="12"></circle>
                        <polyline points="116 92 156 128 116 164" fill="none" stroke="#FFF" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="12"></polyline>
                    </svg>
                </div>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap">
                <!-- New section  start -->
                <div class="container">
                    <div class="row align-items-lg-center col-mb-30">

                        <div class="col-xl-6 col-lg-6 px-lg-0" style="background: url('http://localhost/neptune_lights/images/section.jpg') no-repeat center center; background-size: cover;height:500px;">
                        </div>

                        <div class="col-xl-6 col-lg-6 px-lg-5 py-5">
                            <h3 class="h1 mb-4 fw-normal">Get to know about us</h3>
                            <p>Compellingly cultivate synergistic infrastructures rather than fully tested
                                opportunities. Synergistically evisculate web-enabled interfaces for market positioning
                                web services. Continually create business infomediaries and interdependent products.</p>
                            <a href="https://themes.semicolonweb.com/html/canvas/demo-forum-about.html" class="button button-border m-0 button-dark border-width-1 border-default h-bg-color">Discover
                                Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- New section ends -->
                <div class="section mt-0" style="background:#fff;">
                    <div class="container text-center mw-md topmargin bottommargin">
                        <h2 class="display-4 fw-normal">Why <span data-animate="svg-underline-animated"
                                class="svg-underline nocolor"><span>Choose</span></span> Us?</h2>
                        <div class="clear"></div>

                        <div class="row col-mb-50 mb-0 mt-5 justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M130.24636,223.97423a96.01036,96.01036,0,0,0,83.92-53.60107l-.00178-.00094-54.28632-33.38846a7.99993,7.99993,0,0,0-3.12236-1.114l-22.81867-3.07595a8,8,0,0,0-8.37592,4.67178l-13.69878,30.73831a8,8,0,0,0,1.433,8.68736l18.79995,20.33464a8,8,0,0,1,1.98022,6.9502l-3.8294,19.79638Z"
                                                opacity="0.2"></path>
                                            <path
                                                d="M64.95216,55.60635,56.00794,76.75607a8,8,0,0,0-.12321,5.92293l11.49086,30.66819a8,8,0,0,0,5.81037,5.01448l5.423,1.16555,8.32721-19.76833a8,8,0,0,1,7.37259-4.89437h21.34538a8,8,0,0,0,3.86737-.9969l12.24176-6.76034a8.00033,8.00033,0,0,0,1.49868-1.06968l26.91087-24.33754a8,8,0,0,0,1.6191-9.83314l-9.33366-16.7184.00122-.00463A96.18805,96.18805,0,0,0,64.95081,55.60478Z"
                                                opacity="0.2"></path>
                                            <circle cx="128" cy="128" r="96" fill="none" stroke="var(--themecolor)"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="10">
                                            </circle>
                                            <path
                                                d="M214.16458,170.37222l-54.28632-33.38846a7.99993,7.99993,0,0,0-3.12236-1.114l-22.81867-3.07595a8,8,0,0,0-8.37592,4.67178l-13.69878,30.73831a8,8,0,0,0,1.433,8.68736l18.79995,20.33464a8,8,0,0,1,1.98022,6.9502l-3.8294,19.79638"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                            <path
                                                d="M64.95216,55.60635,56.00794,76.75607a8,8,0,0,0-.12321,5.92293l11.49086,30.66819a8,8,0,0,0,5.81037,5.01448l21.42993,4.60592a8,8,0,0,1,5.5197,4.3358l3.80564,7.862a8,8,0,0,0,7.20075,4.51442h13.43256"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                            <path
                                                d="M152.45823,35.14852l9.33366,16.7184a8,8,0,0,1-1.6191,9.83314L133.26192,86.0376a8.00033,8.00033,0,0,1-1.49868,1.06968l-12.24176,6.76034a8,8,0,0,1-3.86737.9969H94.30873a8,8,0,0,0-7.37259,4.89437l-8.32721,19.76833"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Woldwide Brand</h2>
                                        <p class="">Powerful Layout with Responsive functionality that can be adapted to
                                            any screen size. Resize browser to view.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M56,56v55.09613c0,39.70052,31.75464,72.60753,71.45407,72.90185A72.00008,72.00008,0,0,0,200,112V56a8,8,0,0,0-8-8H64A8,8,0,0,0,56,56Z"
                                                opacity="0.2"></path>
                                            <path
                                                d="M56,56v55.09613c0,39.70052,31.75464,72.60753,71.45407,72.90185A72.00008,72.00008,0,0,0,200,112V56a8,8,0,0,0-8-8H64A8,8,0,0,0,56,56Z"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                            <line x1="96" y1="224" x2="160" y2="224" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></line>
                                            <line x1="128" y1="184" x2="128" y2="224" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></line>
                                            <path d="M198.21561,128H208a32,32,0,0,0,32-32V80a8,8,0,0,0-8-8H200"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                            <path d="M57.964,128H47.87289a32,32,0,0,1-32-32V80a8,8,0,0,1,8-8h32"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Award Winner</h2>
                                        <p class="">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina
                                            Icons, Fonts &amp; all others graphics are optimized.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <circle cx="128" cy="128" r="96" opacity="0.2"></circle>
                                            <circle cx="128" cy="128" r="96" fill="none" stroke="var(--themecolor)"
                                                stroke-miterlimit="10" stroke-width="10"></circle>
                                            <path d="M169.57812,151.99627a48.02731,48.02731,0,0,1-83.15624.00073"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="10"></path>
                                            <circle cx="92" cy="108" r="12"></circle>
                                            <circle cx="164" cy="108" r="12"></circle>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Happily Service</h2>
                                        <p class="">Canvas includes tons of optimized code that are completely
                                            customizable and deliver unmatched fast performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="row justify-content-center align-items-center text-center mx-auto">
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/amazon.svg"
                                            alt="" width="100"></div>
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/cnn.svg"
                                            alt="" width="100"></div>
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/google.svg"
                                            alt="" width="100"></div>
                                    <div class="col center op-05"><img
                                            src="<?php echo base_url(); ?>images/sponsors/linkedin.svg" alt="" width="100"></div>
                                </div>
                                <div class="row justify-content-center align-items-center mx-auto text-center mt-3">
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/netflix.svg"
                                            alt="" width="100"></div>
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/jetblue.svg"
                                            alt="" width="100"></div>
                                    <div class="col center op-05"><img src="<?php echo base_url(); ?>images/sponsors/github.svg"
                                            alt="" width="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid" style="background:#f9f9f9;padding-top:10px;">
                    <div class="container">
                        <div class="text-center mt-6 mb-5">
                            <h2 class="h1 fw-normal mb-4">Shop by <span data-animate="svg-underline-animated"
                                    class="svg-underline nocolor"><span>Category</span></span></h2>
                            <!-- <a href="demo-furniture-products.html"
                                class="button button-small button-border m-0 button-dark border-width-1 border-default px-4 h-bg-color"><i
                                    class="icon-line-grid"></i> View All</a> -->
                        </div>

                        <div class="row item-categories gutter-20">
                            <?php 
                                if(!empty($categories))
                                {
                                    foreach($categories as $row)
                                    {
                                        ?>
                                            <div class="col-lg-4 col-md-6">
                                                <a href="<?php echo base_url(); ?>category/<?php echo $row['id']; ?>"
                                                    class="d-block h-op-09 op-ts"
                                                    style="background: url('<?php echo base_url(); ?><?php echo $row['img_path']; ?>') no-repeat center center; background-size: cover; height: 340px;">
                                                    <h5 class="text-uppercase ls1 bg-white mb-0"><?php echo $row['name']; ?></h5>
                                                </a>
                                            </div>
                                        <?
                                    }
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>

                <div class="section custom-bg mt-3 mb-0" style="padding: 100px 0;">
                    <div class="container">
                        <div id="shop" class="shop row gutter-30 col-mb-30 mt-3">
                            <div class="col-xl-3 col-lg-6">
                                <h3 class="mb-4 fw-normal h1">New <span data-animate="svg-underline-animated"
                                        class="svg-underline nocolor"><span>Arrivals</span></span></h3>
                                <p class="op-07 mb-4">Compellingly cultivate synergistic infrastructures rather than
                                    fully tested opportunities. Synergistically evisculate web-enabled interfaces.</p>
                                <a href="<?php echo base_url(); ?>all-product/filter?type=new_arrival"
                                    class="button button-border py-1 nott ls0 fw-normal button-dark border-width-1 border-color h-bg-color">See All</a>
                            </div>
                            <?php 
                                $result = $this->Admin_model->get_new_arrivals(6);
                                if(!empty($result))
                                {
                                    foreach($result as $row)
                                    {
                                        $img = unserialize($row['img_paths']);
                                        ?>
                                            <div class="product col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="grid-inner">
                                                    <div class="product-image">
                                                        <a href="<?php echo base_url(); ?>view-product/<?php echo $row['id']; ?>">
                                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <?php 
                                                                        if(!empty($img))
                                                                        {
                                                                            foreach($img as $key => $value)
                                                                            {
                                                                                if ($key === array_key_first($img)) {
                                                                                    ?>
                                                                                        <div class="carousel-item active">
                                                                                            <img src="<?php echo $value; ?>" class="d-block w-100" alt="...">
                                                                                        </div>
                                                                                    <?
                                                                                }
                                                                                else
                                                                                {
                                                                                    ?>
                                                                                        <div class="carousel-item">
                                                                                            <img src="<?php echo $value; ?>" class="d-block w-100" alt="...">
                                                                                        </div>
                                                                                    <?
                                                                                }
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="bg-overlay">
                                                            <div class="bg-overlay-content align-items-end justify-content-between"
                                                                data-hover-animate="fadeIn" data-hover-speed="400">
                                                                <a href="<?php echo base_url(); ?>view-product/<?php echo $row['id']; ?>" class="btn btn-light"
                                                                    data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-title mb-0">
                                                            <h4 class="mb-0">
                                                                <a class="fw-medium" href="<?php echo base_url(); ?>view-product/<?php echo $row['id']; ?>">
                                                                    <?php
                                                                        echo $row['title'];
                                                                    ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row align-items-lg-center col-mb-30">

                        <div class="col-xl-8 col-lg-6 px-lg-0 min-vh-50 min-vh-lg-75"
                            style="background: url('<?php echo base_url(); ?>images/section.jpg') no-repeat center center; background-size: cover;">
                        </div>

                        <div class="col-xl-4 col-lg-6 px-lg-5 py-5">
                            <h3 class="h1 mb-4 fw-normal">Explore your <span data-animate="svg-underline-animated"
                                    class="svg-underline nocolor"><span>Home</span></span> & <span
                                    data-animate="svg-underline-animated" data-delay="300"
                                    class="svg-underline nocolor"><span>Office</span></span> with our Furnitures</h3>
                            <p>Compellingly cultivate synergistic infrastructures rather than fully tested
                                opportunities. Synergistically evisculate web-enabled interfaces for market positioning
                                web services. Continually create business infomediaries and interdependent products.</p>
                            <a href="https://themes.semicolonweb.com/html/canvas/demo-forum-about.html"
                                class="button button-border m-0 button-dark border-width-1 border-default h-bg-color">Discover
                                Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="section mt-lg-0 mb-0 py-6" style="background:white;">
                  <div class="container">
                    <div class="statistic_wrapper">
                        <!-- Statistic wrappers -->
                        <div class="container-fluid">
                            <h1 class="mb-5" style="color:black;">Something interesting about us</h1>
                            <div class="header-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                                                        <span class="h2 font-weight-bold mb-0">350,897</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                            <i class="fas fa-chart-bar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                            <i class="fas fa-chart-pie"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                                        <span class="h2 font-weight-bold mb-0">924</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                            <i class="fas fa-percent"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="section custom-bg mt-lg-0 mb-0 py-6" style="--custom-bg: #fdf3e7;">
                    <div class="container py-lg-4">
                        <div class="row col-mb-50">

                            <div class="col-md-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
                                                opacity="0.2"></path>
                                            <path
                                                d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></path>
                                            <polyline points="172 104 113.333 160 84 132" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></polyline>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Original & Excellent Quality</h2>
                                        <p class="op-06">Completely formulate top-line resources rather than cross-media
                                            portals cross-platform solutions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M176,144H16v40a8,8,0,0,0,8,8H44a24,24,0,0,1,48,0h72a23.99048,23.99048,0,0,1,11.99813-20.78815Z"
                                                opacity="0.2"></path>
                                            <path
                                                d="M212,192a24.00631,24.00631,0,0,0-36.00187-20.78815L176,120h64v64a8,8,0,0,1-8,8H212"
                                                opacity="0.2"></path>
                                            <path d="M240,120H176V80h42.58374a8,8,0,0,1,7.42781,5.02887Z" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></path>
                                            <line x1="16" y1="144" x2="176" y2="144" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></line>
                                            <circle cx="188" cy="192" r="24" fill="none" stroke="var(--themecolor)"
                                                stroke-miterlimit="10" stroke-width="8"></circle>
                                            <circle cx="68" cy="192" r="24" fill="none" stroke="var(--themecolor)"
                                                stroke-miterlimit="10" stroke-width="8"></circle>
                                            <line x1="164" y1="192" x2="92" y2="192" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></line>
                                            <path d="M44,192H24a8,8,0,0,1-8-8V72a8,8,0,0,1,8-8H176V171.21508"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></path>
                                            <path d="M176,171.21508V120h64v64a8,8,0,0,1-8,8H212" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></path>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Free & Fast Shipping</h2>
                                        <p class="op-06">Rapidiously optimize user-centric catalysts for change
                                            vis-a-vis granular "outside the box" thinking.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box fbox-center fbox-dark fbox-plain">
                                    <div class="fbox-icon">
                                        <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64"
                                            fill="var(--themecolor)" viewBox="0 0 256 256">
                                            <rect width="256" height="256" fill="none"></rect>
                                            <path
                                                d="M40,106.66667V48a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8v58.66667c0,84.01533-71.306,111.85016-85.5438,116.57058a7.54755,7.54755,0,0,1-4.9124,0C111.306,218.51683,40,190.682,40,106.66667Z"
                                                opacity="0.2"></path>
                                            <path
                                                d="M40,106.66667V48a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8v58.66667c0,84.01533-71.306,111.85016-85.5438,116.57058a7.54755,7.54755,0,0,1-4.9124,0C111.306,218.51683,40,190.682,40,106.66667Z"
                                                fill="none" stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></path>
                                            <polyline points="172 96 113.333 152 84 124" fill="none"
                                                stroke="var(--themecolor)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="8"></polyline>
                                        </svg>
                                    </div>
                                    <div class="fbox-content">
                                        <h2 class="nott fw-medium h4 mb-4">Secure Payment</h2>
                                        <p class="op-06">Continually recaptiualize 2.0 action items after global
                                            information. Efficiently strategize holistic networks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="home-testimonial section" style="margin:0px !important;padding-top:40px;padding-bottom:40px;">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-center testimonial-pos">
                            <div class="col-md-12 d-flex justify-content-center">
                                <h1 style="color:black;">Explore what our customers has to say</h1>
                            </div>
                        </div>
                        <section class="home-testimonial-bottom">
                            <div class="container testimonial-inner">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-4 style-3">
                                        <div class="tour-item" style="border:1px solid #fcea78;">
                                            <div class="tour-desc bg-white">
                                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                                <div class="link-position d-flex justify-content-center">Student</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 style-3">
                                        <div class="tour-item " style="border:1px solid #fcea78;">
                                            <div class="tour-desc bg-white">
                                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                                <div class="link-position d-flex justify-content-center">Student</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 style-3">
                                        <div class="tour-item " style="border:1px solid #fcea78;">
                                            <div class="tour-desc bg-white">
                                                <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                                <div class="link-position d-flex justify-content-center">Student</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag" data-margin="100" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="margin-top:40px;">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1864px, 0px, 0px); transition: all 0.25s ease 0s; width: 4144px;">
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/6.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/7.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/8.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/9.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/10.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/1.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/2.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/3.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/4.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item active" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/5.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item active" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/6.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item active" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/7.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item active" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/8.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item active" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/9.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/10.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/1.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/2.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/3.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/4.png" alt="Clients"></a></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 107.2px; margin-right: 100px;">
                                                <div class="oc-item"><a href="demo-agency.html#"><img src="images/clients/5.png" alt="Clients"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                        </section>
                    </div>
                </section>
                <div class="section custom-bg my-0 py-0" style="--custom-bg: var(--themecolor);">
                    <div class="row align-items-center no-gutters">

                        <div class="col-lg-4 py-5 order-lg-2">
                            <div class="text-center dark p-5">
                                <svg xmlns="https://www.w3.org/2000/svg" width="64" height="64" fill="#FFF"
                                    viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <path
                                        d="M172,36H84A47.99987,47.99987,0,0,0,36,84v88a47.99988,47.99988,0,0,0,48,48h88a47.99988,47.99988,0,0,0,48-48V84A47.99987,47.99987,0,0,0,172,36ZM128,168a40,40,0,1,1,40-40A40.0001,40.0001,0,0,1,128,168Z"
                                        opacity="0.2"></path>
                                    <circle cx="128" cy="128" r="40" fill="none" stroke="#FFF" stroke-miterlimit="10"
                                        stroke-width="16"></circle>
                                    <rect class x="36" y="36" width="184" height="184" rx="48" stroke-width="16"
                                        stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" fill="none"></rect>
                                    <circle cx="180" cy="75.99998" r="12"></circle>
                                </svg>
                                <h3 class="mt-3 mb-5 fw-normal h2">Don't Follow the Crowd, Follow us on <span
                                        data-animate="svg-underline-animated"
                                        class="svg-underline nocolor"><span>Instagram</span></span></h3>
                                <a href="https://instagram.com/semicolonweb" target="_blank"
                                    class="button button-large button-border nott ls0 fw-normal button-light button-white border-width-1 m-0"
                                    style="border-color: rgba(255,255,255,0.25)">@semicolonweb</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 order-lg-1">
                            <div class="row gutter-4">
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/1.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/2.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/3.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/4.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 order-lg-3 mt-1 mt-md-0 ps-md-1 ps-lg-0">
                            <div class="row gutter-4">
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/5.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/6.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/7.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                                <div class="col-6">
                                    <a class="d-block instagram-image" href="https://instagram.com/semicolonweb"
                                        target="_blank"
                                        style="background: url('<?php echo base_url(); ?>images/instagram/8.jpg') no-repeat center center; background-size:cover; min-height: 33vh;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            $this->load->view('footer_landing_view');
        ?>
    </div>

    <div id="gotoTop" class="bg-color op-07 h-op-1">
        <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
            <rect width="256" height="256" fill="none"></rect>
            <polygon points="48 208 128 128 208 208 48 208" opacity="0.2"></polygon>
            <polygon points="48 208 128 128 208 208 48 208" fill="none" stroke="#FFF" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"></polygon>
            <polyline points="48 128 128 48 208 128" fill="none" stroke="#FFF" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"></polyline>
        </svg>
    </div>

    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins.min.js"></script>

    <script src="<?php echo base_url(); ?>js/functions.js"></script>
</body>

</html>