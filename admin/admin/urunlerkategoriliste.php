<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Ürün Kategori</h2><?php if ($_GET&&$_GET['sil']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Silinmiştir. </h2>';}?>
            <?php if ($_GET&&$_GET['ok']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Güncellenmiştir. </h2>';}?>
            <select class="form-select" name="language" id="language"
                    style="outline: none; padding:5px; border-radius: 10px;"
                    onchange="setLanguage(this.value)">
                <?php $diller = $db->prepare('select * from diller order by id  ');
                $diller->execute();
                foreach ($diller as $dil) { ?>
                    <option value="<?php echo $dil['code'] ?>" <?php echo $selectedLanguage == $dil['code'] ? 'selected' : ''; ?>><?php echo $dil['dil'] ?></option>
                <?php } ?>
            </select>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Kategori Başlık</th>
                    <th>Kategorisi</th>
                    <th>Sil</th>
                    <th>Düzenle</th>

                </tr>
                </thead>
                <tbody>
                <?php $kategoricek=$db->prepare('select * from urun_kategori where dilkod=:dilkod');
                $kategoricek->execute(array('dilkod'=>$selectedLanguage));
                foreach ($kategoricek as $kategori){echo'
                    <tr>
                    <td>'.$kategori['baslik'].'</td>' ?>;
                <?php
                    if ($kategori['ust_id']==0){
                        echo '    <td>Ana Kategori</td>';
                    }else{
                        $kategorininkategorisicek=$db->prepare('select * from urun_kategori where id=:id');
                        $kategorininkategorisicek->execute(array('id'=>$kategori['ust_id']));
                        $kategorisi=$kategorininkategorisicek->fetch(PDO::FETCH_ASSOC);
                       echo '<td>'.$kategorisi['baslik'].'</td>';
                    }
                    ?>
                <?php
                    echo '
                    <td>
                    <a href="islem/islem.php?urun_kategori_sil=ok&kategori_id='.$kategori['id'].'">
                    <button class="btn btn-danger"type="submit" >Sil</button>
                    </a>
                    </td>
                    <td>
                    <a href="urunkategori_duzenle.php?kategori_id='.$kategori['id'].'">
                    <button class="btn btn-success" type="submit" >Düzenle</button>
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
