<?php include "headerust.php";
$resimbul = $db->prepare('select * from resim where resim_id=:resim_id ');
$resimbul->execute(array('resim_id' => $_GET['resim_id']));
$resim = $resimbul->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $resim['baslik'] ?> | <?php echo $ayar['ayar_title'] ?></title>
<link rel="canonical"
      href="<?php echo $ayar['ayar_site'] ?>urun-detay/<?php echo seo($resim['resim_baslik']) ?>/<?php echo $_GET['resim_id'] ?>"/>
<meta name="Description" content="<?php echo mb_substr(strip_tags($resim['resim_aciklama']), 0, 160) ?>">
<?php include "headeralt.php"; ?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title"><?php echo $resim['resim_title'] ?></h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa']?></a></li>
            <li><span><?php echo $resim['resim_title'] ?></span></li>
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
                                <img src="upload/resim/<?php echo $resim['resim_baslik'] ?>" alt="product details image" class="product-details__gallery-top__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.column -->
            <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="product-details__content">
                    <div class="product-details__top">
                        <div class="product-details__top__left">
                            <h3 class="product-details__name"><?php echo $resim['resim_title'] ?></h3><!-- /.product-title -->
                        </div><!-- /.product-details__price -->
                    </div>
                    <div class="product-details__excerpt">
                        <?php echo $resim['resim_aciklama'] ?>
                    </div><!-- /.excerp-text -->

                </div>
            </div>
        </div>
        <!-- /.product-details -->
    </div>




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
