<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
$urun_id=$_GET['urun_id'];
$uruncek=$db->prepare('select * from urun where id=:id');
$uruncek->execute(array('id'=>$urun_id));
$urun=$uruncek->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ürün Düzenle Sayfası</h2>
                <?php if ($_GET&&$_GET['ok']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Kaydedilmiştir. </h2>';}?>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form  method="POST" data-parsley-validate class="form-horizontal form-label-left" action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="baslik" value="<?php echo $urun['baslik']?>" placeholder="Başlığı Yazınız" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <input type="hidden" name="urun_id" value="<?php echo $urun_id?>">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ust_id" style="width: 250px; font-size: 14px;font-weight: bold; height: 30px;">
                                <?php $kategorilercek=$db->query('select * from urun_kategori ',PDO::FETCH_ASSOC);
                                foreach ($kategorilercek as $kategori){ ?>
                              <?php
                                    if ($kategori['id']==$urun['ust_id']){
                                        echo '<option value="'.$kategori['id'].'" selected>'.$kategori['baslik'].'</option>';
                                    }else{
                                        echo '<option value="'.$kategori['id'].'">'.$kategori['baslik'].'</option>';
                                    }
                                    ?>


                               <?php }
                                ?>


                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa Sıra
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="sira" placeholder="Sıra" value="<?php echo $urun['sira']?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa Resim<br>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="last-name" name="resim" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ürün Sayfa İçerik
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12" aling="center">
                        <textarea  name="icerik" id="editor1" rows="15" cols="80">
<?php echo $urun['icerik']?>
                        </textarea>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="urun_duzenle" class="btn btn-success">Güncelle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('editor1',{
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
</script>
<?php include 'footer.php';?>
