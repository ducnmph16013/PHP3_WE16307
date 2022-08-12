<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/furns/furns/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 15:51:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/furns/" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Furns - Responsive eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Furns - Responsive eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Furns - Responsive eCommerce HTML Template" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->
    <link rel="icon" href="/assets/client/images/favicon/favicon.png" sizes="32x32" />
    <link rel="icon" href="/assets/client/images/favicon/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/assets/client/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="/assets/client/images/favicon/favicon.png" />
    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Replace_with_your_site_title",
            "url": "Replace_with_your_site_URL"
        }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="/assets/client/css/vendor/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="/assets/client/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="/assets/client/css/vendor/ionicons.min.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="/assets/client/css/plugins/animate.css" />
    <link rel="stylesheet" href="/assets/client/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/client/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="/assets/client/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="/assets/client/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/assets/client/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/assets/client/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="/assets/client/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="/assets/client/css/style.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="/assets/client/css/style.css" /> -->

</head>

<body>
    
    @include('layouts.client.header')

    <div class="offcanvas-overlay"></div>

    @yield('content')

    

    @include('layouts.client.footer')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top mb-20px">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/assets/client/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button class="add-cart btn btn-primary btn-hover-primary ml-4"> Add To
                                            Cart</button>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->







    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="/assets/client/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/client/js/vendor/popper.min.js"></script>
    <script src="/assets/client/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/client/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="/assets/client/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="/assets/client/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/client/js/plugins/jquery-ui.min.js"></script>
    <script src="/assets/client/js/plugins/jquery.nice-select.min.js"></script>
    <script src="/assets/client/js/plugins/countdown.js"></script>
    <script src="/assets/client/js/plugins/scrollup.js"></script>
    <script src="/assets/client/js/plugins/jquery.waypoints.js"></script>
    <script src="/assets/client/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="/assets/client/js/plugins/jquery.zoom.min.js"></script>
    <script src="/assets/client/js/plugins/venobox.min.js"></script>
    <script src="/assets/client/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="/assets/client/js/vendor/vendor.min.js"></script>
    <script src="/assets/client/js/plugins/plugins.min.js"></script>

    <!-- Main Js -->
    <script src="/assets/client/js/main.js"></script>
</body>


<!-- Mirrored from template.hasthemes.com/furns/furns/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 15:52:17 GMT -->
</html>