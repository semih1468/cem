<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
$soru_id = $_GET['soru_id'];
$sorucek = $db->prepare('select * from soru where soru_id=:id');
$sorucek->execute(array('id' => $soru_id));
$sorubitir = $sorucek->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>S.S.S Sayfalar</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form method="GET" data-parsley-validate class="form-horizontal form-label-left"
                      action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dil
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="dilkod"
                                    style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <?php $diller = $db->query('select * from diller ', PDO::FETCH_ASSOC);
                                foreach ($diller as $dil) {
                                    if ($dil['code'] == $sorubitir['dilkod']) {
                                        echo '
                                                        <option selected  value="' . $dil['code'] . '">' . $dil['dil'] . '</option>';
                                    } else {
                                        echo '
                                                        <option  value="' . $dil['code'] . '">' . $dil['dil'] . '</option>';
                                    }


                                }
                                ?>


                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">S.S.S Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="soru_baslik"
                                   value="<?php echo $sorubitir['soru_baslik'] ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <input type="hidden" name="soru_id" value="<?php echo $soru_id ?>">

                    <div class="form-group" align="center">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">S.S.S İçerik
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12" aling="center">
                        <textarea name="soru_icerik" id="editor1" rows="15" cols="80">
<?php echo $sorubitir['soru_icerik'] ?>
                        </textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="soru_guncelle" class="btn btn-primary">Guncelle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html', // Öntanımlı Dosya Yöneticisi
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html', // Sadece Resim Dosyalarını Gösteren Dosya Yöneticisi
        removeDialogTabs: 'link:upload;image:upload' // Upload işlermlerini dosya Yöneticisi ile yapacağımız için upload butonlarını kaldırıyoruz
    });
</script>
<?php include 'footer.php'; ?>
