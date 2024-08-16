<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Blog Sayfa Listesi</h2><?php if ($_GET && $_GET['sil']) {
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
                    <th>Blog Başlık</th>
                    <th>Blog İçerik</th>
                    <th>Blog Sıra</th>
                    <th>Sil</th>
                    <th>Düzenle</th>

                </tr>
                </thead>
                <tbody>
                <?php $kurumsalcek = $db->prepare('select * from kurumsal where dilkod=:dilkod');
                $kurumsalcek->execute(array('dilkod' => $selectedLanguage));
                foreach ($kurumsalcek as $kurumsal) {
                    echo '
                    <tr>
                    <td><p>' . substr($kurumsal['kurumsal_baslik'], 0, 50) . '</p></td>
                    <td ><div style="width: 200px;height:50px;overflow: hidden;">' . strip_tags($kurumsal['kurumsal_icerik']) . '</div></td>
                    <td><p>' . substr(strip_tags($kurumsal['sira']), 0, 100) . '</p></td>
                    <td>
                    <a href="islem/islem.php?kurumsal_sil=ok&kurumsal_id=' . $kurumsal['kurumsal_id'] . '&kurumsal_resim=' . $kurumsal['kurumsal_resim'] . '">
                    <button class="btn btn-danger"type="submit" >Sil</button>
                    </a>
                    </td>
                    <td>
                    <a href="kurumsal_duzenle.php?kurumsal_id=' . $kurumsal['kurumsal_id'] . '">
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
