<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Zilla+Slab:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" type="text/css" />
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

    <title>
        <?php 
            foreach($product_data as $row)
            {
                echo "".$row['title']." | Neptune Lights";
            }
        ?>
    </title>
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

        <section id="content">
            <div class="content-wrap py-0 overflow-visible">
                <div class="section bg-color dark overflow-visible mt-0">
                    <div class="container">
                        <div class="single-product py-lg-3">
                            <div class="product">
                                <div class="row">
                                    <?php 
                                        foreach($product_data as $row)
                                        {
                                            ?>
                                                <div class="col-md-6">
                                                    <div class="row align-items-start gutter-30" data-lightbox="gallery">
                                                        <a href="demos/furniture/images/ajax/1.jpg" data-lightbox="gallery-item"
                                                            class="col-sm-12 col-6"><img src="demos/furniture/images/ajax/1.jpg"
                                                                alt="Image 1"></a>
                                                        <a href="demos/furniture/images/ajax/4.jpg" data-lightbox="gallery-item"
                                                            class="col-sm-12 col-6"><img src="demos/furniture/images/ajax/4.jpg"
                                                                alt="Image 4"></a>
                                                        <a href="demos/furniture/images/ajax/2.jpg" data-lightbox="gallery-item"
                                                            class="col-sm-12 col-6"><img src="demos/furniture/images/ajax/2.jpg"
                                                                alt="Image 2"></a>
                                                        <a href="demos/furniture/images/ajax/3.jpg" data-lightbox="gallery-item"
                                                            class="col-sm-12 col-6"><img src="demos/furniture/images/ajax/3.jpg"
                                                                alt="Image 3"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 product-desc p-lg-5 px-4 py-0 mt-5 mt-md-0 content-sticky">

                                                    <h2 class="mb-3 fw-normal text-white"><?php echo $row['title']; ?></h2>

                                                    <button type="submit" class="add-to-cart button button-large fw-medium color button-light bg-white px-lg-4 add-to-cart m-0 mb-3"><i
                                                            style="position: relative; top: -2px;">
                                                        Download our brochure 
                                                    </button>

                                                    <div class="line my-5"></div>

                                                    <div class="pb-4 qv-toogle">
                                                        <a href="demo-furniture-single.html#"
                                                            class="font-primary d-flex align-items-center mb-0 text-white"
                                                            data-bs-toggle="collapse" data-bs-target="#overview"
                                                            aria-expanded="true" aria-controls="overview">Overview
                                                            <i class="icon-line-plus ms-auto"></i>
                                                            <i class="icon-line-minus ms-auto"></i>
                                                        </a>
                                                        <div class="collapse show" id="overview">
                                                            <p class="op-06 fw-normal my-2">
                                                                <?php 
                                                                    echo $row['description'];
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="pb-4 qv-toogle">
                                                        <a href="demo-furniture-single.html#"
                                                            class="font-primary d-flex align-items-center mb-0 collapsed text-white"
                                                            data-bs-toggle="collapse" data-bs-target="#materials"
                                                            aria-expanded="false" aria-controls="materials">Materials
                                                            <i class="icon-line-plus ms-auto"></i>
                                                            <i class="icon-line-minus ms-auto"></i>
                                                        </a>
                                                        <div class="collapse" id="materials">
                                                            <p class="op-06 fw-normal my-2">Some placeholder content for the
                                                                collapse component. This panel is hidden by default but revealed
                                                                when the user activates the relevant trigger.</p>
                                                        </div>
                                                    </div>

                                                    <div class="pb-4 qv-toogle">
                                                        <a href="demo-furniture-single.html#"
                                                            class="font-primary d-flex align-items-center mb-0 collapsed text-white"
                                                            data-bs-toggle="collapse" data-bs-target="#installation"
                                                            aria-expanded="false" aria-controls="installation">Installation &amp;
                                                            Warrenty
                                                            <i class="icon-line-plus ms-auto"></i>
                                                            <i class="icon-line-minus ms-auto"></i>
                                                        </a>
                                                        <div class="collapse" id="installation">
                                                            <p class="op-06 fw-normal my-2">Some placeholder content for the
                                                                collapse component. This panel is hidden by default but revealed
                                                                when the user activates the relevant trigger.</p>
                                                        </div>
                                                    </div>

                                                    <div class="pb-4 qv-toogle">
                                                        <a href="demo-furniture-single.html#"
                                                            class="font-primary d-flex align-items-center mb-0 collapsed text-white"
                                                            data-bs-toggle="collapse" data-bs-target="#return" aria-expanded="false"
                                                            aria-controls="return">Returns &amp; Cancellations
                                                            <i class="icon-line-plus ms-auto"></i>
                                                            <i class="icon-line-minus ms-auto"></i>
                                                        </a>
                                                        <div class="collapse" id="return">
                                                            <p class="op-06 fw-normal my-2">Some placeholder content for the
                                                                collapse component. This panel is hidden by default but revealed
                                                                when the user activates the relevant trigger.</p>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            <?
                                        }
                                    ?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>

</html>