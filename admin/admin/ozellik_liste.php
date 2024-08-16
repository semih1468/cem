<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Proje Listesi</h2><?php if ($_GET && $_GET['sil']) {
                echo '<h2 style="color:green;" >&nbsp;Başarı ile Silinmiştir. </h2>';
            } ?>
            <?php if ($_GET && $_GET['ok']) {
                echo '<h2 style="color:green;" >&nbsp;Başarı ile Güncellenmiştir. </h2>';
            } ?>
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
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th> Başlık</th>
                    <th> İçerik</th>
                    <th> Sıra</th>
                    <th> Resim</th>
                    <th>Sil</th>
                    <th>Düzenle</th>


                </tr>
                </thead>
                <tbody>
                <?php $ozellikcek = $db->prepare('select * from ozellik where dilkod=:dilkod');
                $ozellikcek->execute(array('dilkod' => $selectedLanguage));
                foreach ($ozellikcek as $ozellik) {
                    echo '
                    <tr>
                 <td>' . $ozellik['ozellik_baslik'] . '</td>
                 <td><div style="width: 300px;overflow: hidden">' . strip_tags($ozellik['ozellik_icerik']) . '</div></td>
                 <td>' . $ozellik['ozellik_sira'] . '</td>
                 <td><img style="height: 150px" src="../../upload/ozellik/' . $ozellik['ozellik_resim'] . '"  class="img-fluid" alt=""></td>
                    <td>
                    <a href="islem/islem.php?ozellik_sil=ok&ozellik_id=' . $ozellik['ozellik_id'] . '&ozellik_resim=' . $ozellik['ozellik_resim'] . '">
                    <button class="btn btn-danger"type="submit" >Sil</button>
                    </a>
                    </td> 
                    <td>
                    <a href="ozellik_duzenle.php?ozellik_id=' . $ozellik['ozellik_id'] . '">
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

<?php include 'footer.php'; ?>
