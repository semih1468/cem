<?php include'headerust.php';?>
<title><?php echo $ayar['ayar_title']?></title>
<meta name="Description" content="<?php echo $ayar['ayar_description']?>">
<?php include'headeralt.php';?>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title"><?php echo $ceviri['bloglar']?></h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa']?></a></li>
            <li><span><?php echo $ceviri['bloglar']?></span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="blog-page section-space">
    <div class="container">
        <div class="row gutter-y-30">
            <?php

            $sayfada = 6;
            $sorgu = $db->prepare('select * from kurumsal where dilkod=:dilkod order by sira desc');
            $sorgu->execute(array('dilkod'=>$selectedLanguage));
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

            $hizmetsor = $db->prepare("SELECT * from kurumsal  where dilkod=:dilkod order by sira asc limit  $limit1 ,$sayfada  ");

            $hizmetsor->execute(array('dilkod'=>$selectedLanguage));

            while ($blogcek = $hizmetsor->fetch(PDO::FETCH_ASSOC)) { ?>
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
                               class="blog-card__image__link"><span class="sr-only"> <?php echo mb_substr($blogcek['kurumsal_baslik'], 0, 50) ?></span>
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



            <div class="col-12">
                <ul class="post-pagination">
                    <li>
                        <a href="#"><span class="icon-arrow-left"></span></a>
                    </li>

                    <?php $s = 0;
                    while ($s < $toplam_sayfa) {
                        $s++;

                        if ($s == $sayfa) { ?>

                            <li  class="active">
                                <a href="#"><?php echo $s ?></a>
                            </li>

                        <?php } else { ?>
                            <li>
                                <a href="bloglar.php?sayfa=<?php echo $s ?>"><?php echo $s ?></a>
                            </li>
                        <?php }
                    } ?>

                    <li >
                        <a href="#"><span class="icon-arrow-right"></span></a>
                    </li>
                </ul>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-page section-space -->
<?php include'footer.php';?>
