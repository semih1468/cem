<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Resim Kategori Sayfası</h2>
                <?php if ($_GET&&$_GET['ok']) {
                    echo '<h2 style="color:green;" >&nbsp;Başarı ile Kaydedilmiştir. </h2>';
                } ?>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form method="post" data-parsley-validate class="form-horizontal form-label-left"
                      action="islem/islem.php" enctype="multipart/form-data">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ust_id"
                                    style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <option value="0">Ana Kategori</option>
                                <?php $kategoricek = $db->prepare('select * from resim_kategori where dilkod=:dilkod');
                                $kategoricek->execute(array('dilkod'=>$selectedLanguage));
                                foreach ($kategoricek as $kategori) {
                                    ?>

                                    <option value="<?php echo $kategori['resimkategori_id']?>"><?php echo $kategori['resimkategori_baslik']?></option>
                                <?php } ?>
                            </select></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resim Kategori Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="resimkategori_baslik" placeholder="Başlığı Yazınız"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resim
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="last-name" name="resimkategori_resim" required
                                   placeholder="Başlığı Yazınız" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="resimkategori_ekle" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
