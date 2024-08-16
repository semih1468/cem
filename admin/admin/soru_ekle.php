<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>S.S.S Sayfası</h2>
                <?php if ($_GET&&$_GET['ok']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Kaydedilmiştir. </h2>';}?>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form  method="GET" data-parsley-validate class="form-horizontal form-label-left" action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dil
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="dilkod" style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <?php $diller=$db->query('select * from diller ',PDO::FETCH_ASSOC);
                                foreach ($diller as $dil){
                                    echo'
                                                        <option value="'.$dil['code'].'">'.$dil['dil'].'</option>';

                                }
                                ?>


                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">S.S.S Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="soru_baslik" placeholder="Başlığı Yazınız" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">S.S.S İçerik
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12" aling="center">
                        <textarea  name="soru_icerik" id="editor1" rows="15" cols="80">

                        </textarea>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="soru_ekle" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('editor1',{
        filebrowserBrowseUrl:'ckfinder/ckfinder.html', // Öntanımlı Dosya Yöneticisi
        filebrowserImageBrowseUrl:'ckfinder/ckfinder.html', // Sadece Resim Dosyalarını Gösteren Dosya Yöneticisi
        removeDialogTabs: 'link:upload;image:upload' // Upload işlermlerini dosya Yöneticisi ile yapacağımız için upload butonlarını kaldırıyoruz
    });
</script>
<?php include 'footer.php';?>
