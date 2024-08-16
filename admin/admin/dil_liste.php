<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>dil Listesi</h2><?php if ($_GET&&$_GET['sil']) {
                echo '<h2 style="color:green;" >&nbsp;Successfully Deleted. </h2>';
            } ?>
            <?php if ($_GET&&$_GET['ok']) {
                echo '<h2 style="color:green;" >&nbsp;Başarıyla güncellendi.</h2>';
            } ?>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Dil</th>
                    <th>Kod</th>
                    <th>Düzenle</th>
                    <!--                    <th>sil</th>-->


                </tr>
                </thead>
                <tbody>
                <?php $diller = $db->query('select * from diller', PDO::FETCH_ASSOC);
                foreach ($diller as $dil) {
                    echo '
                    <tr>
                  
                    <td>' . $dil['dil'] . '</td>
                    <td>' . $dil['code'] . '</td>
                    <td>
                    <a href="dil_duzenle.php?dil_id=' . $dil['id'] . '">
                    <button class="btn btn-success"type="submit" >Düzenle</button>
                    </a>
                    </td>

                  

                </tr> ';
                }
                ?>
                <style>
                    iframe {
                        width: 250px !important;
                        height: 200px !important;
                    }
                </style>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
