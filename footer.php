<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about" style="background:white;display:flex;justify-content: center;align-items: center;border-radius: 10px;">
                        <a href="anasayfa" class="footer-widget__logo" style="margin: 0;padding: 10px 0 ">
                            <img src="upload/<?php echo $ayar['ayar_logo']?>" width="123" alt="Floens HTML Template">
                        </a>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-xl-4 col-lg-6 -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="footer-widget footer-widget--links footer-widget--links-one">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div><!-- /.footer-widget__title-box -->
                            <h2 class="footer-widget__title"><?php echo $ceviri['hizlimenu']?></h2><!-- /.footer-widget__title -->
                        </div><!-- /.footer-widget__top -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="hakkimizda"><?php echo $ceviri['hakkimizda']?></a></li>
                            <li><a href="bloglar"><?php echo $ceviri['bloglar']?></a></li>
                            <li><a href="projeler"><?php echo $ceviri['projelerimiz']?></a></li>
                            <li><a href="urunlerimiz"><?php echo $ceviri['urunlerimiz']?></a></li>
                            <li><a href="iletisim"><?php echo $ceviri['iletisim']?></a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                <div class="col-xl-4 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="footer-widget footer-widget--contact">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div><!-- /.footer-widget__title-box -->
                            <h2 class="footer-widget__title"><?php echo $ceviri['iletisim']?></h2><!-- /.footer-widget__title -->
                        </div><!-- /.footer-widget__top -->
                        <ul class="list-unstyled footer-widget__info">
                            <li><span class="icon-paper-plane"></span> <a style="text-transform:lowercase" href="mailto:<?php echo $ayar['ayar_mail']?>"><?php echo $ayar['ayar_mail']?></a></li>
                            <li><span class="icon-phone-call"></span> <a href="tel:<?php echo $ayar['ayar_tel']?>"><?php echo $ayar['ayar_tel']?></a></li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-xl-3 col-lg-6 col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="main-footer__social floens-social">
                            <a href="<?php echo $ayar['ayar_face']?>">
                                <i class="icon-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="<?php echo $ayar['ayar_twitter']?>">
                                <i class="icon-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="<?php echo $ayar['ayar_ins']?>">
                                <i class="icon-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="<?php echo $ayar['ayar_youtube']?>">
                                <i class="icon-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.main-footer__social -->
                    </div><!-- /.col-md-5 -->
                    <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="main-footer__bottom__copyright">

                        </div><!-- /.main-footer__bottom__copyright -->
                    </div><!-- /.col-md-7 -->
                </div><!-- /.row -->
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="anasayfa" aria-label="logo image"><img src="upload/<?php echo $ayar['ayar_logo']?>" width="155" alt="logo-light" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container">
            <ul class="main-menu__list">

                <li class="dropdown megamenu current">
                    <a href="anasayfa">Anasayfa</a>
                </li>



                <li>
                    <a href="hakkimizda">Hakkımızda</a>
                </li>
                <li>
                    <a href="bloglar">Bloglar</a>
                </li>
                <li>
                    <a href="projeler">Projelerimiz</a>
                </li>
                <li>
                    <a href="urunlerimiz">Ürünlerimiz</a>
                </li>
                <!--                            <li class="dropdown">-->
                <!--                                <a href="#">Services</a>-->
                <!--                                <ul>-->
                <!--                                    <li><a href="services.html">Services</a></li>-->
                <!--                                    <li><a href="services-grid.html">Services Grid</a></li>-->
                <!--                                    <li><a href="services-carousel.html">Services Carousel 01</a></li>-->
                <!--                                    <li><a href="services-carousel-2.html">Services Carousel 02</a></li>-->
                <!--                                    <li><a href="service-d-industrial-flooring.html">industrial flooring</a></li>-->
                <!--                                    <li><a href="service-d-tiling-concrete.html">Tiling & concrete</a></li>-->
                <!--                                    <li><a href="service-d-carpets-rugs.html">Carpets & rugs</a></li>-->
                <!--                                    <li><a href="service-d-oak-flooring.html">Oak Flooring</a></li>-->
                <!--                                    <li> <a href="service-d-vinyl-plank.html">Vinyl Plank</a></li>-->
                <!--                                    <li><a href="service-d-vein-patterns.html">Vein Patterns</a></li>-->
                <!--                                </ul>-->
                <!--                            </li>-->
                <!---->
                <!--                            <li class="dropdown">-->
                <!--                                <a href="#">Pages</a>-->
                <!--                                <ul>-->
                <!--                                    <li><a href="team.html">Our Team</a></li>-->
                <!--                                    <li><a href="team-carousel.html">Team Carousel</a></li>-->
                <!--                                    <li><a href="team-details.html">Team Details</a></li>-->
                <!--                                    <li>-->
                <!--                                        <a href="work.html">Work</a>-->
                <!--                                        <ul>-->
                <!--                                            <li><a href="work.html">Work</a></li>-->
                <!--                                            <li><a href="work-grid.html">Work Grid</a></li>-->
                <!--                                            <li><a href="work-carousel.html">Work Carousel</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="work-details.html">Work Details</a></li>-->
                <!--                                    <li><a href="pricing.html">Pricing</a></li>-->
                <!--                                    <li><a href="pricing-carousel.html">Pricing Carousel</a></li>-->
                <!--                                    <li>-->
                <!--                                        <a href="gallery.html">Gallery</a>-->
                <!--                                        <ul>-->
                <!--                                            <li><a href="gallery.html">Gallery masonry</a></li>-->
                <!--                                            <li><a href="gallery-filter.html">Gallery filter</a></li>-->
                <!--                                            <li><a href="gallery-grid.html">Gallery Grid</a></li>-->
                <!--                                            <li><a href="gallery-carousel.html">Gallery Carousel</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="faq.html">FAQS</a></li>-->
                <!--                                    <li><a href="login.html">Login</a></li>-->
                <!--                                    <li><a href="404.html">404 Error</a></li>-->
                <!--                                </ul>-->
                <!--                            </li>-->
                <!---->
                <!--                            <li class="dropdown">-->
                <!--                                <a href="#">Shop</a>-->
                <!--                                <ul>-->
                <!--                                    <li class="dropdown">-->
                <!--                                        <a href="#">Products</a>-->
                <!--                                        <ul class="sub-menu">-->
                <!--                                            <li><a href="shop.html">No sidebar</a></li>-->
                <!--                                            <li><a href="shop-left.html">Left sidebar</a></li>-->
                <!--                                            <li><a href="shop-right.html">Right sidebar</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="shop-carousel.html">Products carousel</a></li>-->
                <!--                                    <li><a href="shop-details.html">Product details</a></li>-->
                <!--                                    <li><a href="cart.html">Cart</a></li>-->
                <!--                                    <li><a href="checkout.html">Checkout</a></li>-->
                <!--                                </ul>-->
                <!--                            </li>-->
                <!--                            <li class="dropdown">-->
                <!--                                <a href="#">News</a>-->
                <!--                                <ul>-->
                <!--                                    <li class="dropdown">-->
                <!--                                        <a href="#">News grid</a>-->
                <!--                                        <ul class="sub-menu">-->
                <!--                                            <li><a href="blog-grid.html">No sidebar</a></li>-->
                <!--                                            <li><a href="blog-grid-left.html">Left sidebar</a></li>-->
                <!--                                            <li><a href="blog-grid-right.html">Right sidebar</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li class="dropdown">-->
                <!--                                        <a href="#">News list</a>-->
                <!--                                        <ul class="sub-menu">-->
                <!--                                            <li><a href="blog-list.html">No sidebar</a></li>-->
                <!--                                            <li><a href="blog-list-left.html">Left sidebar</a></li>-->
                <!--                                            <li><a href="blog-list-right.html">Right sidebar</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                    <li><a href="blog-carousel.html">News carousel 01</a></li>-->
                <!--                                    <li><a href="blog-carousel-2.html">News carousel 02</a></li>-->
                <!--                                    <li><a href="blog-carousel-3.html">News carousel 03</a></li>-->
                <!--                                    <li class="dropdown">-->
                <!--                                        <a href="#">News details</a>-->
                <!--                                        <ul class="sub-menu">-->
                <!--                                            <li><a href="blog-details.html">No sidebar</a></li>-->
                <!--                                            <li><a href="blog-details-left.html">Left sidebar</a></li>-->
                <!--                                            <li><a href="blog-details-right.html">Right sidebar</a></li>-->
                <!--                                        </ul>-->
                <!--                                    </li>-->
                <!--                                </ul>-->
                <!--                            </li>-->
                <li>
                    <a href="iletisim"><?php echo $ceviri['iletisim']?></a>
                </li>

            </ul>
        </div>
        <a href="samurcarpet" class="floens-btn main-header__btn">
            <span>Samur Carpet</span>
            <i class="icon-right-arrow"></i>
        </a><!-- /.thm-btn main-header__btn -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="floens-btn">
                <span class="icon-search"></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

<script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendors/swiper/js/swiper-bundle.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<!-- template js -->
<script src="assets/js/floens.js"></script>
</body>

</html>
<script>
    $(function(){
        $('.selectpicker').selectpicker();
    });
</script>