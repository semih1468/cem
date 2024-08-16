<?php include 'headerust.php'; ?>
    <title><?php echo $ayar['ayar_title'] ?></title>
    <meta name="Description" content="<?php echo $ayar['ayar_description'] ?>">
<?php include 'headeralt.php'; ?>

    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title"><?php echo $ceviri['urunlerimiz'] ?></h2>
            <ul class="floens-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="anasayfa"><?php echo $ceviri['anasayfa'] ?></a></li>
                <li><span><?php echo $ceviri['urunlerimiz'] ?></span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="gallery-one section-space">
        <div class="container-fluid">
            <div class="text-center">
                <ul class="list-unstyled post-filter gallery-one__filter__list">
                    <li data-filter=".filter-item"><span>all</span></li>
                    <?php $urunlerkategori = $db->prepare('select * from resim_kategori where ust_id=:ust_id order by resimkategori_id   ');
                    $urunlerkategori->execute(array('ust_id' => $_GET['kategori_id']));
                    foreach ($urunlerkategori as $kategori) { ?>
                        <li data-filter=".<?php echo seo($kategori['resimkategori_baslik']) ?>">
                            <span><?php echo $kategori['resimkategori_baslik'] ?></span></li>
                    <?php } ?>

                </ul><!-- /.list-unstyledf -->
            </div><!-- /.text-center -->
            <div class="row masonry-layout filter-layout">
                <?php
                $resimler = $db->prepare('select * from resim where kategoriust_id=:kategoriust_id order by resim_id  ');
                $resimler->execute(array('kategoriust_id' => $_GET['kategori_id']));

                foreach ($resimler as $resim) {
                    $blogbul = $db->prepare('select * from resim_kategori where resimkategori_id=:id');
                    $blogbul->execute(array('id' => $resim['kategoriust_id']));
                    $blog = $blogbul->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="col-sm-6 col-xl-3 filter-item <?php echo seo($blog['resimkategori_baslik']) ?>">
                        <div class="gallery-one__card">
                            <img src="upload/resim/<?php echo $resim['resim_baslik'] ?>" alt="gallery">
                            <div class="gallery-one__card__hover">
                                <a href="upload/resim/<?php echo $resim['resim_baslik'] ?>" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
                            </div><!-- /.gallery-one__card__hover -->
                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-sm-6 col-xl-3 -->
                <?php } ?>
                <?php
                $blogkategoribul = $db->prepare('select * from resim_kategori where ust_id=:id');
                $blogkategoribul->execute(array('id' => $_GET['kategori_id']));
                foreach ($blogkategoribul as $kategori) {

                    ?>

                    <?php
                    $resimler = $db->prepare('select * from resim where kategoriust_id=:kategoriust_id order by resim_id  ');
                    $resimler->execute(array('kategoriust_id' => $kategori['resimkategori_id']));

                    foreach ($resimler as $resim) {
                        $blogbul = $db->prepare('select * from resim_kategori where resimkategori_id=:id');
                        $blogbul->execute(array('id' => $resim['kategoriust_id']));
                        $blog = $blogbul->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-sm-6 col-xl-3 filter-item <?php echo seo($blog['resimkategori_baslik']) ?>">
                            <div class="gallery-one__card">
                                <img src="upload/resim/<?php echo $resim['resim_baslik'] ?>" alt="gallery">
                                <div class="gallery-one__card__hover">
                                    <a href="urun-detay/<?php echo seo($blog['resimkategori_baslik']) ?>/<?php echo $resim['resim_id'] ?>" >
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div><!-- /.gallery-one__card__hover -->
                            </div><!-- /.gallery-one__card -->
                        </div><!-- /.col-sm-6 col-xl-3 -->
                    <?php } ?>
                <?php } ?>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.gallery-one section-space" -->
<?php include 'footer.php'; ?>
<script>

    if ($(".img-popup").length) {
        var groups = {};
        $(".img-popup").each(function () {
            var id = parseInt($(this).attr("data-group"), 10);

            if (!groups[id]) {
                groups[id] = [];
            }

            groups[id].push(this);
        });

        $.each(groups, function () {
            $(this).magnificPopup({
                type: "image",
                closeOnContentClick: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true
                }
            });
        });
    }
</script>
