<?php include 'header.php'; include 'sidebar.php'; include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Resim  Listesi</h2><?php if ($_GET&&$_GET['sil']){ echo '<h2 style="color:green;" >&nbsp;Başarı ile Silinmiştir. </h2>';}?>
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
                    <th>Resim</th>
                    <th>Resim Başlık</th>
                    <th>Resim Acıklama</th>
                    <th>Resim Kategori</th>
                    <th>Sil</th>


                </tr>
                </thead>
                <tbody>
                <?php $resimcek=$db->prepare('select * from resim where dilkod=:dilkod');
                $resimcek->execute(array('dilkod'=>$selectedLanguage));
                foreach ($resimcek as $resim){echo'
                    <tr>
                    <td><img style="width: 200px;height: 150px;" src="../../upload/resim/'.$resim['resim_baslik'].'"></td>
                       <td>'.$resim['resim_title'].'</td>
                    <td>'.mb_substr($resim['resim_aciklama'],0,150).'</td>
                    ';
                    $kategoricek=$db->prepare('select * from resim_kategori where resimkategori_id=:id');
                    $kategoricek->execute(array('id'=>$resim['kategoriust_id']));
                    $kategoribitir=$kategoricek->fetch(PDO::FETCH_ASSOC);
                    if ($kategoribitir['resimkategori_id']==$resim['kategoriust_id']){
                        echo'<td>'.$kategoribitir['resimkategori_baslik'].'</td>';
                    }

                    echo'
                    <td>
                    <a href="islem/islem.php?resim_sil=ok&resim_id='.$resim['resim_id'].'&resim_baslik='.$resim['resim_baslik'].'">
                    <button class="btn btn-danger"type="submit" >Sil</button>
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
