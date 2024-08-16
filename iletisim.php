<?php include "headerust.php"; ?>
<title>İletişim | <?php echo $ayar['ayar_title'] ?></title>
<meta name="Description" content="<?php echo $ayar['ayar_description'] ?>">
<?php include "headeralt.php"; ?>

<div class="page-wrapper">


    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title"><?php echo $ceviri['iletisim']?></h2>
            <ul class="floens-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa']?></a></li>

            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="contact-one section-space">
        <div class="contact-one__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1.png');"></div><!-- /.contact-one__bg -->
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="sec-title sec-title--border">

                            <h6 class="sec-title__tagline"><?php echo $ceviri['bizeulas']?></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title"><?php echo $ceviri['bizeulas']?></h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->


                        <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="contact-one__info__bg" style="background-image: url('assets/images/shapes/contact-info-bg.png');"></div><!-- /.contact-one__info__bg -->
                            <div class="contact-one__info__content">
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-phone-call"></span>
                                        </div><!-- /.contact-one__info__icon -->
                                        <p class="contact-one__info__text"><a href="tel:<?php echo $ayar['ayar_tel']?>"><?php echo $ayar['ayar_tel']?></a></p><!-- /.contact-one__info__text -->
                                    </div><!-- /.contact-one__info__item__inner -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-paper-plane"></span>
                                        </div><!-- /.contact-one__info__icon -->
                                        <p class="contact-one__info__text"><a href="mailto:<?php echo $ayar['ayar_mail']?>"><?php echo $ayar['ayar_mail']?></a></p><!-- /.contact-one__info__text -->
                                    </div><!-- /.contact-one__info__item__inner -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-location"></span>
                                        </div><!-- /.contact-one__info__icon -->
                                        <address class="contact-one__info__text">
                                            <?php echo $ayar['ayar_adres']?></address><!-- /.contact-one__info__text -->
                                    </div><!-- /.contact-one__info__item__inner -->
                                </div><!-- /.contact-one__info__item -->
                            </div><!-- /.contact-one__info__content -->
                            <img src="assets/images/shapes/contact-shape-1-1.png" alt="contact image" class="contact-one__info__image">
                        </div><!-- /.contact-one__info -->
                    </div><!-- /.contact-one__content -->
                </div><!-- /.col-xl-6 -->
                <div class="col-lg-6">
                    <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" action="https://bracketweb.com/floens-html/inc/sendemail.php">
                        <div class="contact-one__form__bg" style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div><!-- /.contact-one__form__bg -->
                        <div class="contact-one__form__top">
                            <h2 class="contact-one__form__title"><?php echo $ceviri['siziarayalim']?><br>
                               </h2><!-- /.contact-one__form__title -->
                        </div><!-- /.contact-one__form__top -->
                        <div class="form-one__group form-one__group--grid">
                            <div class="form-one__control form-one__control--input form-one__control--full">
                                <input type="text" name="name" placeholder="İsminiz">
                            </div><!-- /.form-one__control form-one__control--full -->
                            <div class="form-one__control form-one__control--full">
                                <input type="email" name="email" placeholder="Mail Adresiniz">
                            </div><!-- /.form-one__control form-one__control--full -->
                            <div class="form-one__control form-one__control--mesgae form-one__control--full">
                                <textarea name="message" placeholder="Notunuz"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="floens-btn">
                                    <span><?php echo $ceviri['gonder']?></span>
                                    <i class="icon-right-arrow"></i>
                                </button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <img src="assets/images/contact/contact-1-2.jpg" alt="contact image" class="contact-one__image-two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
    </section><!-- /.contact-one section-space -->

    <section class="contact-map">
        <div class="container-fluid">
            <div class="google-map google-map__contact">
                <?php echo $ayar['ayar_googlemaps']?>
            </div><!-- /.google-map -->
        </div><!-- /.container-fluid -->
    </section><!-- /.contact-map -->

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="anasayfa" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="logo-light" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<!-- /.search-popup -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
        <div class="sidebar-one__logo sidebar-one__item">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="123" alt="logo-dark" /></a>
        </div><!-- /.sidebar-one__logo -->
        <div class="sidebar-one__about sidebar-one__item">
            <p class="sidebar-one__about__text">Tiles company, also known as a tile manufacturer or distributor, specializes in the production and distri</p>
        </div><!-- /.sidebar-one__about -->
        <div class="sidebar-one__info sidebar-one__item">
            <h4 class="sidebar-one__title">Information</h4>
            <ul class="sidebar-one__info__list">
                <li><span class="icon-location-2"></span>
                    <address>85 Ketch Harbour Road Bensal PA 19020</address>
                </li>
                <li><span class="icon-paper-plane"></span> <a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                <li><span class="icon-phone-call"></span> <a href="tel:+9156980036420">+91 5698 0036 420</a></li>
            </ul><!-- /.sidebar-one__info__list -->
        </div><!-- /.sidebar-one__info -->
        <div class="sidebar-one__social floens-social sidebar-one__item">
            <a href="https://facebook.com/">
                <i class="icon-facebook" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com/">
                <i class="icon-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com/">
                <i class="icon-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://youtube.com/">
                <i class="icon-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /sidebar-one__social -->
        <div class="sidebar-one__newsletter sidebar-one__item">
            <label class="sidebar-one__title" for="sidebar-email">Newsletter Subscribe</label>
            <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">
                <input type="email" name="sidebar-email" id="sidebar-email" class="sidebar-one__newsletter__input" placeholder="Email Address">
                <button type="submit" class="sidebar-one__newsletter__btn"><span class="icon-email" aria-hidden="true"></span></button>
            </form>
            <div class="mc-form__response"></div><!-- /.mc-form__response -->
        </div><!-- /.sidebar-one__form -->
    </div><!-- /.sidebar__content -->
</aside><!-- /.sidebar-one -->
<?php include "footer.php"; ?>