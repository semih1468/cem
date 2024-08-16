<?php include "headerust.php";
$urunbul = $db->prepare('select * from urun where id=:id');
$urunbul->execute(array('id' => $_GET['urun_id']));
$urun = $urunbul->fetch(PDO::FETCH_ASSOC);
?>
    <title><?php echo $urun['baslik'] ?> | <?php echo $ayar['ayar_title'] ?></title>
    <link rel="canonical"
          href="<?php echo $ayar['ayar_site'] ?>urun/<?php echo seo($urun['baslik']) ?>/<?php echo $_GET['urun_id'] ?>"/>
    <meta name="Description" content="<?php echo mb_substr(strip_tags($urun['icerik']), 0, 160) ?>">
<?php include "headeralt.php"; ?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title"><?php echo $urun['baslik'] ?></h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa']?></a></li>
            <li><span><?php echo $urun['baslik'] ?></span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="product-details section-space">
    <div class="container">
        <!-- /.product-details -->
        <div class="row gutter-y-50">
            <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
                <div class="product-details__img">
                    <div class="swiper product-details__gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="upload/urun/<?php echo $urun['resim'] ?>" alt="product details image" class="product-details__gallery-top__img">
                            </div>
                            <?php
                            $hizmetsor = $db->prepare("SELECT * from urun_resim where urun_id=:id  ");
                            $hizmetsor->execute(array('id'=>$_GET['urun_id']));

                            while ($uruncek = $hizmetsor->fetch(PDO::FETCH_ASSOC)) { ?>
                                <div class="swiper-slide">
                                    <img src="upload/urun/<?php echo $uruncek['resim'] ?>" alt="product details image" class="product-details__gallery-top__img">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper product-details__gallery-thumb">
                        <div class="swiper-wrapper">
                            <div class="product-details__gallery-thumb-slide swiper-slide">
                                <img src="upload/urun/<?php echo $urun['resim'] ?>" alt="product details thumb" class="product-details__gallery-thumb__img">
                            </div>
                            <?php
                            $hizmetsor = $db->prepare("SELECT * from urun_resim where urun_id=:id  ");
                            $hizmetsor->execute(array('id'=>$_GET['urun_id']));

                            while ($uruncek = $hizmetsor->fetch(PDO::FETCH_ASSOC)) { ?>
                                <div class="product-details__gallery-thumb-slide swiper-slide">
                                    <img src="upload/urun/<?php echo $uruncek['resim'] ?>" alt="product details thumb" class="product-details__gallery-thumb__img">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.column -->
            <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="product-details__content">
                    <div class="product-details__top">
                        <div class="product-details__top__left">
                            <h3 class="product-details__name"><?php echo $urun['baslik'] ?></h3><!-- /.product-title -->
                        </div><!-- /.product-details__price -->
                    </div>
                    <div class="product-details__excerpt">
                        <?php echo $urun['icerik'] ?>
                    </div><!-- /.excerp-text -->

                </div>
            </div>
        </div>
        <!-- /.product-details -->
    </div>




    <div class="container">
        <!-- /.product-comment-form -->
        <div class="product-details__comments-form comments-form">
            <div class="product-details__comments-form__top">
                <h3 class="product-details__comments-form__title comments-form__title sec-title__title"><?php echo $ceviri['iletisimegec']?>
                </h3><!-- /.comments-form__title -->
            </div><!-- /.product-details__comments-form__top -->
            <form class="comments-form__form contact-form-validated form-one">
                <div class="form-one__group form-one__group--grid">
                    <div class="form-one__control form-one__control--input wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00mms">
                        <input type="text" name="name" placeholder="<?php echo $ceviri['ismin']?>">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--input wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100mms">
                        <input type="email" name="email" placeholder="<?php echo $ceviri['mail']?>">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200mms">
                        <textarea name="message" placeholder="<?php echo $ceviri['notu']?>"></textarea>
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300mms">
                        <button type="submit" class="floens-btn">
                            <span><?php echo $ceviri['gonder']?></span>
                            <i class="icon-right-arrow"></i>
                        </button>
                    </div><!-- /.form-one__control -->
                </div><!-- /.form-one__group -->
            </form><!-- /.comments-form__form -->
            <div class="result"></div><!-- /.result -->
        </div><!-- /.comments-form -->
        <!-- /.product-comment-form -->
    </div><!-- /.container -->
</section>
<?php include 'footer.php' ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "name": "<?php echo $urun['baslik'] ?>",
        "description": "<?php echo mb_substr(strip_tags($urun['icerik']), 0, 160) ?>",
        "url": "<?php echo $ayar['ayar_site'] ?>urun/<?php echo seo($urun['baslik']) ?>/
    <?php echo $_GET['blog_id'] ?> ",
        "image": "<?php echo $ayar['ayar_site'] ?>upload/urun/<?php echo $urun['resim'] ?>"
    }
</script>
