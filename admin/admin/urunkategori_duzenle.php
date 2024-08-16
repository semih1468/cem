<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
$kategori_id=$_GET['kategori_id'];
$kategoricek=$db->prepare('select * from urun_kategori where id=:id');
$kategoricek->execute(array('id'=>$kategori_id));
$kategoribitir=$kategoricek->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Kategori Sayfalar</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form  method="post" data-parsley-validate class="form-horizontal form-label-left" action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="urun_kategori_baslik" value="<?php echo $kategoribitir['baslik']?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resim
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="last-name" name="urun_kategori_resim" placeholder="Başlığı Yazınız" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <input type="hidden" name="urun_kategori_id" value="<?php echo $kategori_id?>">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="urun_kategori_guncelle" class="btn btn-primary">Guncelle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
