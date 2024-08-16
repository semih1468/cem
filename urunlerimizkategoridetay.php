<?php include'headerust.php';?>
<title><?php echo $ayar['ayar_title']?></title>
<meta name="Description" content="<?php echo $ayar['ayar_description']?>">
<?php include'headeralt.php';?>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Ürünlerimiz</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="anasayfa">Anasayfa</a></li>
            <li><span>Ürünlerimiz</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="product-page product-page--left section-space-bottom">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-xl-3 col-lg-4">
                <aside class="product__sidebar" style="margin-top: 0;">
                    <div class="product__categories product__sidebar__item" >
                        <h3 class="product__sidebar__title product__categories__title"><?php echo $ceviri['kategori']?></h3>
                        <ul class="list-unstyled">
                            <?php $urunlerkategori = $db->prepare('select * from urun_kategori where dilkod=:dilkod order by sira  desc ');
                            $urunlerkategori->execute(array('dilkod'=>$selectedLanguage));
                            foreach ($urunlerkategori as $kategori) { ?>

                                <li><a href="urunkategori/<?php echo seo($kategori['baslik']) ?>/<?php echo $kategori['id'] ?>"><span><?php echo $kategori['baslik'] ?></span></a></li>
                            <?php } ?>
                        </ul>
                    </div><!-- /.category-widget -->
                </aside><!-- /.shop-sidebar -->
            </div><!-- /.col-xl-3 col-lg-4 -->
            <div class="col-xl-9 col-lg-8">

                <div class="row gutter-y-30">

                    <?php

                    $sayfada = 24;
                    $sorgu = $db->prepare('select * from urun where ust_id=:id and dilkod=:dilkod order by sira desc');
                    $sorgu->execute(array(
                            'id'=>$_GET['kategori_id'],
                        'dilkod'=>$selectedLanguage
                    ));
                    $toplam_hizmet = $sorgu->rowCount();

                    $toplam_sayfa = ceil($toplam_hizmet / $sayfada);

                    $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
                    if ($sayfa < 1) {
                        $sayfa = 1;
                        # code...
                    }
                    if ($sayfa > $toplam_sayfa) {
                        $sayfa = $toplam_sayfa;
                    }
                    $limit1 = ($sayfa - 1) * $sayfada;

                    $hizmetsor = $db->prepare("SELECT * from urun where ust_id=:id and dilkod=:dilkod order by sira desc limit  $limit1 ,$sayfada  ");
                    $hizmetsor->execute(array('id'=>$_GET['kategori_id'],
                        'dilkod'=>$selectedLanguage));

                    while ($urun = $hizmetsor->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 ">
                            <div class="product__item wow fadeInUp"  data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="product__item__image">
                                    <img src="upload/urun/<?php echo $urun['resim']?>" alt="<?php echo $urun['baslik']?>">
                                </div><!-- /.product-image -->
                                <div class="product__item__content">

                                    <h4 class="product__item__title"><a href="urun/<?php echo seo($urun['baslik']) ?>/<?php echo $urun['id'] ?>"><?php echo $urun['baslik']?></a></h4><!-- /.product-title -->
                                    <a href="urun/<?php echo seo($urun['baslik']) ?>/<?php echo $urun['id'] ?>" class="floens-btn product__item__link">
                                        <span><?php echo $ceviri['incele']?></span>
                                        <i class="icon-search"></i>
                                    </a>
                                </div><!-- /.product-content -->
                            </div><!-- /.product-item -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    <?php } ?>
                    <div class="col-12">
                        <ul class="post-pagination">

                            <?php $s = 0;
                            while ($s < $toplam_sayfa) {
                                $s++;

                                if ($s == $sayfa) { ?>

                                    <li  class="active">
                                        <a href="#"><?php echo $s ?></a>
                                    </li>

                                <?php } else { ?>
                                    <li>
                                        <a href="urunlerimiz.php?sayfa=<?php echo $s ?>"><?php echo $s ?></a>
                                    </li>
                                <?php }
                            } ?>

                        </ul>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.col-lxl9  col-lg-8-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.product-page section-space-bottom -->
<?php include 'footer.php'?>
