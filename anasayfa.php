<?php
ob_start();
$hangiler = $db->query('select * from destek_hatti');
$han = $hangiler->fetch(PDO::FETCH_ASSOC);
?>
    <!-- main slider start -->
    <section class="main-slider-two hero-slider">
        <div class="main-slider-two__carousel floens-slick__carousel--with-counter" data-slick-options='{
		"slidesToShow": 1,
		"slidesToScroll": 1,
		"autoplay": true,
		"autoplaySpeed": 3000,
		"fade": true,
		"speed": 2000,
		"infinite": true,
		"arrows": true,
		"dots": false,
		"prevArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--prev\"><?php echo $ceviri['geri'] ?> <i class=\"icon-right-arrow\"><i></button>",
		"nextArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--next\"><?php echo $ceviri['ileri'] ?> <i class=\"icon-right-arrow\"><i></button>"

	}'>
            <?php
            $sliderlar = $db->prepare("SELECT * from slider where dilkod=:dilkod order by slider_id desc");

            $sliderlar->execute(array('dilkod' => $selectedLanguage));
            while ($slider = $sliderlar->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg"
                         style="background-image: url(upload/slider/<?php echo $slider['slider_resim'] ?>);"></div>
                    <!-- /.main-slider-two__bg -->
                    <div class="main-slider-two__wrapper container">
                        <div class="main-slider-two__left">
                            <div class="main-slider-two__content">
                                <p class="main-slider-two__tagline"><?php echo $slider['slider_title'] ?> </p>
                                <!-- /.main-slider-two__tagline -->
                                <h2 class="main-slider-two__title"><?php echo $slider['slider_alt'] ?></h2>

                            </div><!-- /.main-slider-two__content -->
                        </div><!-- /.main-slider-two__left -->

                    </div><!-- /.main-slider-two__wrapper .container -->
                </div><!-- /.main-slider-two__item -->

            <?php } ?>

        </div><!-- /.my-slider -->
    </section><!-- /.main-slider-two -->
    <!-- main slider end -->

    <!-- testimonial start -->
    <!--    <div class="client-carousel client-carousel--two">-->
    <!--        <div class="container">-->
    <!--            <div class="client-carousel__one floens-owl__carousel owl-theme owl-carousel" data-owl-options='{-->
    <!--            "items": 5,-->
    <!--            "margin": 65,-->
    <!--            "smartSpeed": 700,-->
    <!--            "loop":true,-->
    <!--            "autoplay": 6000,-->
    <!--            "nav":false,-->
    <!--            "dots":false,-->
    <!--            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],-->
    <!--            "responsive":{-->
    <!--                "0":{-->
    <!--                    "items": 2,-->
    <!--                    "margin": 30-->
    <!--                },-->
    <!--                "500":{-->
    <!--                    "items": 3,-->
    <!--                    "margin": 40-->
    <!--                },-->
    <!--                "768":{-->
    <!--                    "items": 4,-->
    <!--                    "margin": 50-->
    <!--                },-->
    <!--                "992":{-->
    <!--                    "items": 5,-->
    <!--                    "margin": 70-->
    <!--                },-->
    <!--                "1200":{-->
    <!--                    "items": 6,-->
    <!--                    "margin": 20-->
    <!--                }-->
    <!--            }-->
    <!--            }'>-->
    <!--                --><?php //$referanslar = $db->query('select * from referans order by referans_sira asc');
//                foreach ($referanslar as $referans) {
//                    echo '
//
//<div class="client-carousel__one__item" style="display: flex;justify-content: center;align-items: center;height: 150px">
//                    <img src="upload/referans/' . $referans['referans_resim'] . '" alt="brand">
//                </div>';
//                } ?>
    <!---->
    <!--            </div> .thm-owl__slider -->
    <!--        </div> .container -->
    <!--    </div>.client-carousel -->
    <!--     testimonial end -->

    <!-- services start -->
    <section class="services-two section-space-two">
        <div class="container">
            <div class="services-two__top">
                <div class="row gutter-y-50 align-items-center"

                >
                    <div class="col-lg-8 col-md-10" style="
display: flex;
    align-items: center;
    justify-content: space-between;
">
                        <div class="sec-title @@extraClassName">

                            <h6 class="sec-title__tagline"><?php echo $ceviri['urunlerimiz'] ?></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title"><?php echo $ceviri['eniyiurun'] ?></h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->

                        <div class="blog-one__top__button" style="z-index: 9999">
                            <a href="urunlerimiz" class="floens-btn floens-btn--border">
                                <span><?php echo $ceviri['tumu'] ?></span>
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.floens-btn floens-btn--border -->
                        </div><!-- /.blog-one__top__button -->
                    </div><!-- /.col-lg-8 -->

                </div><!-- /.row -->
            </div><!-- /.services-two__top -->
        </div><!-- /.container -->
        <div class="container-fluid">

            <div class="services-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme"
                 data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
			"dots": false,
			"autoplay": 600,
			"responsive":{
                "0":{
                    "items": 1,
                    "margin": 15
                },
				"576":{
                    "items": 1,
                    "margin": 15
                },
                "768":{
                    "items": 2,
                    "margin": 30
                },
                "992":{
                    "items": 2,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
                    "margin": 30
                },
                "1400":{
                    "items": 3,
                    "margin": 30
                },
                "1600":{
                    "items": 4,
                    "margin": 30
                }
			}
		}'>

                <?php $urunlerkategori = $db->prepare('select * from resim_kategori where dilkod=:dilkod and ust_id=:ust_id order by resimkategori_id   desc limit 10');
                $urunlerkategori->execute(array(
                    'dilkod' => $selectedLanguage,
                    'ust_id' => 0
                ));
                foreach ($urunlerkategori as $kategori) { ?>

                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                 style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <a href="resimkategori/<?php echo seo($kategori['resimkategori_baslik']) ?>/<?php echo $kategori['resimkategori_id'] ?>">
                                    <img src="upload/urun/<?php echo $kategori['resimkategori_resim'] ?>"
                                         alt="<?php echo $kategori['resimkategori_baslik'] ?>">
                                </a>
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                            href="resimkategori/<?php echo seo($kategori['resimkategori_baslik']) ?>/<?php echo $kategori['resimkategori_id'] ?>"><?php echo $kategori['resimkategori_baslik'] ?></a>
                                </h3><!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href="resimkategori/<?php echo seo($kategori['resimkategori_baslik']) ?>/<?php echo $kategori['resimkategori_id'] ?>"
                                       class="service-card-two__link floens-btn">
                                        <span>İncele</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-tile"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.item -->
                <?php } ?>
            </div><!-- /.services-two__carousel -->
        </div><!-- /.container-fluid -->
    </section><!-- /.services-two section-space-two -->
    <!-- services end -->


    <!-- projects start -->
    <section class="projects-two projects-two--home section-space-bottom">
        <div class="projects-two__bg floens-jarallax" data-jarallax data-speed="0.3"
             style="background-image: url(assets/images/backgrounds/projects-bg-2.jpg);"></div>
        <!-- /.projects-two__bg -->
        <div class="container">
            <div class="sec-title sec-title--center">


                <h3 class="sec-title__title"><?php echo $ceviri['projelerimiz'] ?></h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->


        </div><!-- /.container -->
        <div class="container-fluid">
            <div class="projects-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-theme owl-carousel"
                 data-owl-options='{
        "smartSpeed": 700,
        "loop": false,
        "autoWidth": true,
        "autoplay": true,
        "nav": true,
        "dots": false,
        "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
        "responsive":{
                "0":{
                    "items": 1,
                    "margin": 15
                },
				"576":{
                    "items": 1,
                    "margin": 15
                },
                "768":{
                    "items": 2,
                    "margin": 30
                },
                "992":{
                    "items": 2,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
                    "margin": 30
                },
                "1400":{
                    "items": 3,
                    "margin": 30
                },
                "1600":{
                    "items": 4,
                    "margin": 30
                }
			}
        }'>
                <?php
                $projeler = $db->prepare("SELECT * from ozellik where dilkod=:dilkod order by ozellik_sira asc limit  6  ");
                $projeler->execute(array('dilkod' => $selectedLanguage));
                while ($proje = $projeler->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="item">
                        <div class="project-card @@extraClassName">
                            <a href="proje/<?php echo seo($proje['ozellik_baslik']) ?>/<?php echo $proje['ozellik_id'] ?>"
                               class="project-card__image">
                                <img style="max-height: 350px"
                                     src="upload/ozellik/<?php echo $proje['ozellik_resim'] ?>"
                                     alt="<?php echo $proje['ozellik_baslik'] ?>">
                            </a><!-- /.project-card__image -->
                            <div class="project-card__content">

                                <div class="project-card__links" style="transform: translateY(0)!important;opacity: 1;">
                                    <div class="project-card__links__inner">
                                        <h3 class="project-card__title"><a
                                                    href="proje/<?php echo seo($proje['ozellik_baslik']) ?>/<?php echo $proje['ozellik_id'] ?>"><?php echo $proje['ozellik_baslik'] ?></a>
                                        </h3>
                                        <!-- /.project-card__title -->
                                        <a href="proje/<?php echo seo($proje['ozellik_baslik']) ?>/<?php echo $proje['ozellik_id'] ?>"
                                           class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                    </div><!-- /.project-card__links__inner -->
                                </div><!-- /.project-card__links -->
                            </div><!-- /.project-card__content -->
                        </div><!-- /.project-card -->
                    </div><!-- /.item -->
                <?php } ?>
            </div><!-- /.projects-two__carousel -->
        </div><!-- /.container-fluid -->
    </section><!-- /.projects-two section-space-bottom -->
    <!-- projects end -->

    <!-- faq start -->
    <section class="faq-one section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="faq-one__image">
                        <div class="faq-one__image__inner">
                            <img src="assets/images/sss.jpg" alt="faq" class="faq-one__image__one">
                            <!--                            <img src="assets/images/faq/faq-1-2.jpg" alt="faq" class="faq-one__image__two">-->
                        </div><!-- /.faq-one__image__inner -->
                    </div><!-- /.faq-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="faq-one__content">
                        <div class="sec-title sec-title--border">

                            <h6 class="sec-title__tagline">SSS</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title"><?php echo $ceviri['sikcasorulan'] ?></h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->


                        <div class="faq-accordion floens-accordion" data-grp-name="floens-accordion">
                            <?php $sorular = $db->prepare("select * from soru where dilkod=:dilkod order by soru_id asc");
                            $sorular->execute(array('dilkod' => $selectedLanguage));
                            foreach ($sorular as $soru) {
                                echo '
       <div class="accordion">
                                <div class="accordion-title">
                                    <h4>
                                        ' . $soru['soru_baslik'] . '
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                          ' . $soru['soru_icerik'] . '
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->';
                            } ?>
                        </div>
                    </div><!-- /.faq-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.faq-one section-space -->
    <!-- faq end -->

    <!-- blog start -->
    <section class="blog-one blog-one--home-two section-space-two">
        <div class="container">
            <div class="blog-one__top">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-lg-8">
                        <div class="sec-title @@extraClassName">

                            <h6 class="sec-title__tagline"><?php echo $ceviri['bizdenhaber'] ?></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title"><?php echo $ceviri['eniyihaber'] ?></h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->


                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="blog-one__top__button">
                            <a href="haberler" class="floens-btn floens-btn--border">
                                <span><?php echo $ceviri['tumu'] ?></span>
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.floens-btn floens-btn--border -->
                        </div><!-- /.blog-one__top__button -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.blog-one__top -->
            <div class="row gutter-y-30">
                <?php
                $bloglar = $db->prepare("SELECT * from kurumsal where dilkod=:dilkod order by sira asc limit  6  ");

                $bloglar->execute(array('dilkod' => $selectedLanguage));
                while ($blogcek = $bloglar->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-card blog-card--two wow fadeInUp" data-wow-duration='1500ms'
                             style="height: 100%;"
                             data-wow-delay='000ms'>
                            <div class="blog-card__image"
                                 style="

"
                            >
                                <img style="height: 150px;object-fit: contain"
                                     src="upload/kurumsal/<?php echo $blogcek['kurumsal_resim'] ?>"
                                     alt="<?php echo $blogcek['kurumsal_baslik'] ?>">
                                <a href="blog/<?php echo seo($blogcek['kurumsal_baslik']) ?>/<?php echo $blogcek['kurumsal_id'] ?>"
                                   class="blog-card__image__link"><span class="sr-only">Talk About the Three Major Types of Floor Tiles</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <h3 class="blog-card__title mt-4"><a
                                            href="blog/<?php echo seo($blogcek['kurumsal_baslik']) ?>/<?php echo $blogcek['kurumsal_id'] ?>">
                                        <?php echo mb_substr($blogcek['kurumsal_baslik'], 0, 50) ?></a></h3>
                                <!-- /.blog-card__title -->
                            </div><!-- /.blog-card__content -->

                        </div><!-- /.blog-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                <?php } ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one section-space-two -->
    <!-- blog end -->

<?php
//if ($_GET['form_type']) {
//    echo $_GET['form_type'];
//    if ($_GET['form_type'] == 'tel') {
//
//        header('Location:tel:' . tum_bosluk_sil($ayar['ayar_tel']));
//    }
//}
//?>