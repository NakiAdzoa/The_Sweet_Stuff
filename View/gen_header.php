<?php
//include the needed files
include("../Settings/static_header.php");

?>

<body class="has-hero-intent index-template">
    <div class="site-notifications">
    </div>
    <header class="site-header">
        <a href="#main-content" class="skip">Skip to main content</a>
        <div class="site-header-desktop site-header-desktop--centered">
            <div class="site-header-desktop-primary" data-header-sticky>
                <div class="container">

                    <div class="site-logo">
                        <a class="site-logo__btn" href="../View/main_index.php">
                            <img class="site-logo__expanded" src="../Images/thesweetstufflogo1.jpg" alt="The Sweet Stuff" />
                        </a>
                    </div>

                    <nav class="site-nav">
                        <ul class="site-nav-menu" data-menu-type="desktop">

                            <li>
                                <a class="site-nav-link  btn btn-brand-alt " href="../View/all_products.php" target="_top" rel="noopener">Order NOW</a>
                            </li>
                            <li>
                                <a class="site-nav-link btn btn-brand " href="../View/custom_page.php" target="_top" rel="noopener">Custom Orders</a>
                            </li>
                            <li>
                                <a class="site-nav-link " href="../View/cart.php" target="_top" rel="noopener"><span class="fa fa-shopping-cart" aria-hidden="true"></span><span class="sr-only">Cart</span></a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <div class="site-header-mobi" aria-label="Navigation Menu Modal">

            <div class="site-logo">
                <a class="site-logo__btn" href="../View/main_index.php">
                    <img src="../Images/thesweetstufflogo1.jpg" alt="The Sweet Stuff" />
                </a>
            </div>

            <button type="button" class="nav-toggle-btn" aria-controls="SiteHeaderMobilePanel" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="nav-toggle-btn__line"></span>
                <span class="nav-toggle-btn__line"></span>
                <span class="nav-toggle-btn__line"></span>
            </button>

            <div id="SiteHeaderMobilePanel" class="site-header-mobi-panel">
                <div class="site-header-mobi-panel__inner">

                    <nav class="site-nav" aria-label="Navigation Menu">
                        <ul class="site-nav-menu" data-menu-type="mobile">

                            <li>
                                <a class="site-nav-link btn btn-brand-alt " href="../View/all_products.php" target="_top" rel="noopener">Order NOW</a>
                            </li>
                            <li>
                            <a class="site-nav-link btn btn-brand " href="../View/custom_page.php" target="_top" rel="noopener">Custom Orders</a>
                            </li>
                            <li>
                                <a class="site-nav-link " href="../View/cart.php" target="_top" rel="noopener"><span class="fa fa-shopping-cart" aria-hidden="true"></span><span class="sr-only">Cart</span></a>
                            </li>

                        </ul>
                    </nav>

                    <div class="site-social site-social--bordered">
                        <ul class="social-accounts">
                            <li><a href="https://www.instagram.com/thesweetstuff.gh/" target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click" data-bb-track-category="Social Icons" data-bb-track-action="Click" data-bb-track-label="Instagram, Footer"><span class="fa fa-instagram" aria-hidden="true"></span><span class="sr-only">Instagram</span></a></li>
                            <li><a href="https://wa.me/+233544065411" target="_blank" rel="noopener" data-bb-track="button" data-bb-track-on="click" data-bb-track-category="Social Icons" data-bb-track-action="Click" data-bb-track-label="WhatsApp, Footer"><span class="fa fa-whatsapp" aria-hidden="true"></span><span class="sr-only">WhatsApp</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="site-powered-by">
                    <a href="" target="_blank" rel="noopener">powered by TechWITCH</a>
                </div>
            </div>
        </div>
    </header>