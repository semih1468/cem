<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Ürünler</h2><?php if ($_GET&&$_GET['sil']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Silinmiştir. </h2>';}?>
            <?php if ($_GET&&$_GET['ok']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Güncellenmiştir. </h2>';}?>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Sil</th>
                    <th>Düzenle</th>
                    <th>Resim</th>

                </tr>
                </thead>
                <tbody>
                <?php $uruncek=$db->query('select * from urun',PDO::FETCH_ASSOC);
                foreach ($uruncek as $urun){echo'
                    <tr>
                    <td><img style="width: 150px;height: 150px;" src="../../upload/urun/'.$urun['resim'].'"></td>
                    <td>'.$urun['baslik'].'</td>
                    <td>
                    <a href="islem/islem.php?urun_sil=ok&urun_id='.$urun['id'].'">
                    <button class="btn btn-danger"type="submit" >Sil</button>
                    </a>
                    </td>
                    <td>
                    <a href="urun_duzenle.php?urun_id='.$urun['id'].'">
                    <button class="btn btn-success" type="submit" >Düzenle</button>
                    </a>
                    </td>
                     <td>
                    <a href="urun_resim.php?urun_id='.$urun['id'].'">
                    <button class="btn btn-danger"type="submit" >Resim ekle</button>
                    </a>
                    </td>

                </tr> ';
                }
                ?>


                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include 'footer.php';?>
