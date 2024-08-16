<?php include "headerust.php";
$hakkimizda = $db->prepare("select * from hakkimizda where dilkod=:dilkod");
$hakkimizda->execute(array('dilkod' => $selectedLanguage));
$hak = $hakkimizda->fetch(PDO::FETCH_ASSOC);

?>
    <title>Hakkımızda | <?php echo $ayar['ayar_title'] ?></title>
    <meta name="Description" content="<?php echo mb_substr(strip_tags($hak['hakkimizda_icerik']), 0, 160) ?>">
<?php include "headeralt.php"; ?>


    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title"><?php echo $ceviri['hakkimizda'] ?></h2>
            <ul class="floens-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa'] ?></a></li>
                <li><span><?php echo $ceviri['hakkimizda'] ?></span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="about-one section-space" id="about">
        <div class="container">
            <div class="row gutter-y-60">

                <div class="col-lg-8">
                    <div class="about-one__content">
                        <div class="sec-title sec-title--border">

                            <h6 class="sec-title__tagline"><?php echo $ceviri['hakkimizda'] ?></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title"><?php echo $hak['hakkimizda_baslik'] ?></h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->


                        <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms"
                             data-wow-delay="00ms">

                            <!-- /.about-one__text-title -->
                            <p class="about-one__text"><?php echo $hak['hakkimizda_icerik'] ?></p>
                            <!-- /.about-one__text -->
                        </div><!-- /.about-one__content__text -->

                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="about-one__image-grid">
                        <div class="about-one__image">
                            <img src="assets/images/about/about-1-3.png" alt="about" class="about-one__image__one">
                            <img src="assets/images/about/about-1-2.jpg" alt="about" class="about-one__image__two">
                        </div><!-- /.about-one__image -->
                        <div class="about-one__image">
                            <img src="assets/images/about/about-1-1.jpg" alt="about" class="about-one__image__three">
                        </div><!-- /.about-one__image -->
                        <div class="about-one__circle-text">
                            <div class="about-one__circle-text__bg"
                                 style="background-image: url('assets/images/resources/about-award-bg.jpg');"></div>
                            <img src="assets/images/resources/about-award-symbol.png" alt="award-symbole"
                                 class="about-one__circle-text__image">
                            <div class="about-one__curved-circle curved-circle">
                                <!-- curved-circle start-->
                                <div class="about-one__curved-circle__item curved-circle__item"
                                     data-circle-text-options='{
                         "radius": 84,
                         "forceWidth": true,
                         "forceHeight": true}'>
                                    Ekopen
                                </div>
                            </div><!-- curved-circle end-->
                        </div><!-- /.about-one__circle-text -->
                    </div><!-- /.about-one__image-grid -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="about-one__shapes">
            <img src="assets/images/shapes/about-shape-1-1.jpg" alt="about-shape"
                 class="about-one__shape about-one__shape--one">
            <img src="assets/images/shapes/about-shape-1-1.jpg" alt="about-shape"
                 class="about-one__shape about-one__shape--two">
        </div><!-- /.about-one__shapes -->
    </section><!-- /.about-one section-space -->

<?php include 'footer.php' ?>