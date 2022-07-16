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
                <div class="container">
                    <div class="site-logo">
                        <a class="site-logo__btn" href="../Admin/admin_index.php">
                            <img class="site-logo__expanded" src="../Images/sweetstufflogo.jpeg" alt="The Sweet Stuff" />
                        </a>
                    </div>

                    <nav class="site-nav">
                        <ul class="site-nav-menu" data-menu-type="desktop">
                            <li>
                                <a class="site-nav-link " href="../Admin/product_page.php">Product Page</a>
                            </li>
                            <li>
                            <a class="site-nav-link " href="../Admin/order_page.php">Orders Page</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <div class="site-header-mobi" aria-label="Navigation Menu Modal">

            <div class="site-logo">
            <a class="site-logo__btn" href="../Admin/admin_index.php">
                    <img src="../Images/sweetstufflogo.jpeg" alt="The Sweet Stuff" />
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
                            <a class="site-nav-link " href="../Admin/product_page.php">Product Page</a>
                            </li>
                            <li>
                            <a class="site-nav-link " href="">Orders Page</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="site-powered-by">
                    <a href="" target="_blank" rel="noopener">powered by TechWITCH</a>
                </div>
            </div>
        </div>
    </header>