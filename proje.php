<?php include "headerust.php";
$blogbul = $db->prepare('select * from ozellik where ozellik_id=:id');
$blogbul->execute(array('id' => $_GET['proje_id']));
$blog = $blogbul->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $blog['ozellik_baslik'] ?> | <?php echo $ayar['ayar_title'] ?></title>
<link rel="canonical"
      href="<?php echo $ayar['ayar_site'] ?>proje/<?php echo seo($blog['ozellik_baslik']) ?>/<?php echo $_GET['proje_id'] ?>"/>
<meta name="Description" content="<?php echo mb_substr(strip_tags($blog['ozellik_icerik']), 0, 160) ?>">
<?php include "headeralt.php"; ?>
<section class="page-header">
    <div class="page-header__bg"
         style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title"><?php echo $blog['ozellik_baslik'] ?></h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="index.php"><?php echo $ceviri['anasayfa']?></a></li>

            <li><span><?php echo $blog['ozellik_baslik'] ?></span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-page section-space">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="blog-card__image">
                            <img src="upload/ozellik/<?php echo $blog['ozellik_resim'] ?>"
                                 alt="<?php echo $blog['ozellik_baslik'] ?>">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><?php echo $blog['ozellik_baslik'] ?></h3>
                            <!-- /.blog-card__title -->

                            <div>
                                <p>
                                    <?php echo $blog['ozellik_icerik'] ?>
                                </p>
                            </div>
                        </div><!-- /.blog-card-four__content -->
                    </div><!-- /.blog-card -->

                </div><!-- /.blog-details -->


            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">

                        <div class="sidebar__posts-wrapper sidebar__single">
                            <h4 class="sidebar__title sidebar__posts-title"><?php echo $ceviri['songonderi']?></h4><!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">
                                <?php
                                $bloglar = $db->prepare("SELECT * from ozellik order by ozellik_sira asc limit  6  ");

                                $bloglar->execute();
                                while ($blogcek = $bloglar->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image" style="display:flex; align-items: center">
                                            <img src="upload/ozellik/<?php echo $blogcek['ozellik_resim'] ?>" alt="<?php echo $blogcek['ozellik_baslik'] ?>">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <h4 class="sidebar__posts__title"><a
                                                        href="proje/<?php echo seo($blogcek['ozellik_baslik']) ?>/<?php echo $blogcek['ozellik_id'] ?>"><?php echo $blogcek['ozellik_baslik'] ?></a>
                                            </h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                <?php } ?>
                            </ul><!-- /.sidebar__posts list-unstyled -->
                        </div><!-- /.sidebar__posts-wrapper sidebar__single -->


                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-page section-space -->
<?php include 'footer.php' ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "name": "<?php echo $blog['ozellik_baslik'] ?>",
        "description": "<?php echo mb_substr(strip_tags($blog['ozellik_icerik']), 0, 160) ?>",
        "url": "<?php echo $ayar['ayar_site'] ?>proje/<?php echo seo($blog['ozellik_baslik']) ?>/
    <?php echo $_GET['proje_id'] ?> ",
        "image": "<?php echo $ayar['ayar_site'] ?>upload/ozellik/<?php echo $blog['ozellik_resim'] ?>"
    }
</script>