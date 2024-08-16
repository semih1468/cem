</head>
<style>
    .page-header {
        background-color: var(--floens-black2, #2B1E16);
        position: relative;
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>
<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<!--<div class="preloader">-->
<!--    <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>-->
<!--</div>-->
<!-- /.preloader -->
<div class="page-wrapper">
    <div class="topbar-one">
        <div class="container-fluid">
            <div class="topbar-one__inner">
                <ul class="list-unstyled topbar-one__info">
                    <li class="topbar-one__info__item">
                        <span class="icon-paper-plane"></span>
                        <a href="mailto:<?php echo $ayar['ayar_mail']?>"><?php echo $ayar['ayar_mail']?></a>
                    </li>
                    <li class="topbar-one__info__item">
                        <span class="icon-phone-call"></span>
                        <a href="tel:<?php echo $ayar['ayar_tel']?>"><?php echo $ayar['ayar_tel']?></a>
                    </li>

                </ul><!-- /.list-unstyled topbar-one__info -->
                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        <a href="<?php echo $ayar['ayar_face']?>">
                            <i class="icon-facebook" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo $ayar['ayar_face']?></span>
                        </a>
                        <a href="<?php echo $ayar['ayar_twitter']?>">
                            <i class="icon-twitter" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo $ayar['ayar_twitter']?></span>
                        </a>
                        <a href="<?php echo $ayar['ayar_ins']?>">
                            <i class="icon-instagram" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo $ayar['ayar_ins']?></span>
                        </a>
                        <a href="<?php echo $ayar['ayar_youtube']?>">
                            <i class="icon-youtube" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo $ayar['ayar_youtube']?></span>
                        </a>

                        <select class="ms-5 selectpicker" data-width="fit" name="language" id="language" style="outline: none; padding:5px; border-radius: 10px;" onchange="setLanguage(this.value)">
                            <?php $diller = $db->prepare('select * from diller order by id  ');
                            $diller->execute();
                            foreach ($diller as $dil) { ?>
                                <option data-content='<img style="height:13px;" src="upload/dil/<?php echo $dil['resim']?>" alt=""> <?php echo $dil['dil']?>' value="<?php echo $dil['code']?>" <?php echo $selectedLanguage == $dil['code'] ? 'selected' : ''; ?>>

                                    <?php echo $dil['dil']?></option>
                            <?php } ?>


                        </select>
                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->
    <script>
        function setLanguage(language) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "set_language.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    location.reload();
                }
            };
            xhr.send("language=" + language);
        }
    </script>
    <header class="main-header main-header--two sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__left">
                    <div class="main-header__logo">
                        <a href="anasayfa">
                            <img src="upload/<?php echo $ayar['ayar_logo']?>"  width="125">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class=" ">
                                <a href="anasayfa"><?php echo $ceviri['anasayfa']?></a>
                            </li>



                            <li>
                                <a href="hakkimizda"><?php echo $ceviri['hakkimizda']?></a>
                            </li>
                            <li>
                                <a href="bloglar"><?php echo $ceviri['bloglar']?></a>
                            </li>
                            <li>
                                <a href="projeler"><?php echo $ceviri['projelerimiz']?></a>
                            </li>
                            <li>
                                <a href="urunlerimiz"><?php echo $ceviri['urunlerimiz']?></a>
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
                    </nav><!-- /.main-header__nav -->
                </div><!-- /.main-header__left -->
                <div class="main-header__right">
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.mobile-nav__toggler -->

                    <a href="samurcarpet" style="background: #4F6EDE;" class="floens-btn main-header__btn">
                        <span>Samur Carpet</span>
                        <i class="icon-right-arrow"></i>
                    </a><!-- /.thm-btn main-header__btn -->

                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->
