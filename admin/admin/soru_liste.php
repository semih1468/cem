<?php include 'header.php';
include 'sidebar.php';
include 'ust.php'; ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title"><h2>S.S.S Listesi</h2><?php if ($_GET && $_GET['ok']) {
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
                    <th>S.S.S Başlık</th>
                    <th>S.S.S İçerik</th>
                    <th>Sil</th>
                    <th>Düzenle</th>
                </tr>
                </thead>
                <tbody>
                <?php $sorucek = $db->prepare('select * from soru where dilkod=:dilkod');
                $sorucek->execute(array('dilkod' => $selectedLanguage));
                foreach ($sorucek as $soru) {
                    echo '                    <tr>                    <td><p>' . substr($soru['soru_baslik'], 0, 50) . '</p></td>                    <td><p>' . substr(strip_tags($soru['soru_icerik']), 0, 100) . '</p></td>                    <td>                    <a href="islem/islem.php?soru_sil=ok&soru_id=' . $soru['soru_id'] . '">                    <button class="btn btn-danger"type="submit" >Sil</button>                    </a>                    </td>                    <td>                    <a href="soru_duzenle.php?soru_id=' . $soru['soru_id'] . '">                    <button class="btn btn-success" type="submit" >Düzenle</button>                    </a>                    </td>                </tr> ';
                } ?>                </tbody>
            </table>
        </div>
    </div></div><?php include 'footer.php'; ?>