<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
$kategori_id = $_GET['kategori_id'];
$kategoricek = $db->prepare('select * from resim_kategori where resimkategori_id=:id');
$kategoricek->execute(array('id' => $kategori_id));
$kategoribitir = $kategoricek->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Resim Kategori Sayfalar</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form method="post" data-parsley-validate class="form-horizontal form-label-left"
                      action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resim<br>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="last-name" name="resimkategori_resim" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dil
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="dilkod"  class="form-select" onchange="setLanguage(this.value)" id="language"
                                    style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <?php $diller = $db->prepare('select * from diller order by id  ');
                                $diller->execute();
                                foreach ($diller as $dil) { ?>
                                    <option value="<?php echo $dil['code'] ?>" <?php echo $selectedLanguage == $dil['code'] ? 'selected' : ''; ?>><?php echo $dil['dil'] ?></option>
                                <?php } ?>


                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ust_id"
                                    style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <option value="0">Ana Kategori</option>
                                <?php $kategoriler = $db->prepare('select * from resim_kategori where dilkod=:dilkod');
                                $kategoriler->execute(array('dilkod' => $selectedLanguage));
                                foreach ($kategoriler as $kategori) {
                                    ?>
                                    <?php

                                    if ($kategoribitir['ust_id'] == $kategori['resimkategori_id']&&$kategoribitir['resimkategori_id']!=$kategori['resimkategori_id']) {
                                        echo '   <option selected value="' . $kategori['resimkategori_id'] . '">' . $kategori['resimkategori_baslik'] . '</option>';
                                    } else if($kategoribitir['resimkategori_id']!=$kategori['resimkategori_id']) {
                                        echo '   <option value="' . $kategori['resimkategori_id'] . '">' . $kategori['resimkategori_baslik'] . '</option>';
                                    }

                                    ?>

                                <?php } ?>
                            </select></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resim Kategori Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="resimkategori_baslik"
                                   value="<?php echo $kategoribitir['resimkategori_baslik'] ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <input type="hidden" name="resimkategori_id" value="<?php echo $kategori_id ?>">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="kategori_guncelle" class="btn btn-primary">Guncelle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
