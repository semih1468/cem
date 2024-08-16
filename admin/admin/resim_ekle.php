<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
?>
<link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
<script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Çoklu resim yükleme işlemleri</h2>
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

                                <div class="x_content ">
                                    <p>Yüklenecek resimlerin bulunduğu klasöre giderek tamamını tek seferde seçerek
                                        yükleyebilirsiniz.</p>
                                    <form method="post" data-parsley-validate class="form-horizontal form-label-left"
                                          action="islem/islem.php" enctype="multipart/form-data">
                                        <input type="hidden" name="dilkod" value="<?php echo $selectedLanguage ?>">
                                        <div class="form-group" align="center">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="kategoriust_id" class="form-control col-md-7 col-xs-12"
                                                >
                                                    <?php $kategorilercek = $db->prepare('select * from resim_kategori where dilkod=:dilkod');
                                                    $kategorilercek->execute(array('dilkod' => $selectedLanguage));
                                                    foreach ($kategorilercek as $kategori) {
                                                        echo '
                                                                                                    <option value="' . $kategori['resimkategori_id'] . '">' . $kategori['resimkategori_baslik'] . '</option>';

                                                    }
                                                    ?>


                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                                                Resmi <br>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" id="last-name" multiple name="resim[]"
                                                       placeholder="Başlığı Yazınız"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                                                Baslik
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last-name" name="resim_title"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group" align="center">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
                                                İçerik
                                            </label>
                                            <div class="col-md-12 col-sm-12 col-xs-12" aling="center">
                        <textarea name="resim_icerik" id="editor1" rows="15" cols="80">

                        </textarea>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="resim_ekle" class="btn btn-success">Kaydet
                                                </button>
                                            </div>
                                        </div>

                                    </form>


                                    <!--                                    <form action="islem/galeri.php" method="POST" class="">-->
                                    <!--                                        <input type="hidden" name="dilkod" value="-->
                                    <?php //echo $selectedLanguage ?><!--">-->
                                    <!--                                        <div class="form-group" align="center">-->
                                    <!--                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">-->
                                    <!--                                                Baslik-->
                                    <!--                                            </label>-->
                                    <!--                                            <div class="col-md-6 col-sm-6 col-xs-12">-->
                                    <!--                                                <input required type="text" id="last-name" name="resim_title"-->
                                    <!--                                                       class="form-control col-md-7 col-xs-12">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-group" align="center">-->
                                    <!--                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">-->
                                    <!--                                                 İçerik-->
                                    <!--                                            </label>-->
                                    <!--                                            <div class="col-md-6 col-sm-6 col-xs-12">-->
                                    <!--                                                <input required type="text" id="last-name" name="resim_aciklama"-->
                                    <!--                                                       class="form-control col-md-7 col-xs-12">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-group" align="center">-->
                                    <!--                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori-->
                                    <!--                                            </label>-->
                                    <!--                                            <div class="col-md-6 col-sm-6 col-xs-12">-->
                                    <!--                                                <select name="kategoriust_id" class="form-control col-md-7 col-xs-12"-->
                                    <!--                                                >-->
                                    <!--                                                    --><?php //$kategorilercek = $db->prepare('select * from resim_kategori where dilkod=:dilkod');
                                    //                                                    $kategorilercek->execute(array('dilkod' => $selectedLanguage));
                                    //                                                    foreach ($kategorilercek as $kategori) {
                                    //                                                        echo '
                                    //                                                        <option value="' . $kategori['resimkategori_id'] . '">' . $kategori['resimkategori_baslik'] . '</option>';
                                    //
                                    //                                                    }
                                    //                                                    ?>
                                    <!---->
                                    <!---->
                                    <!--                                                </select>-->
                                    <!---->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-group" align="center"><b style="color:red">Resimleri seçmeden önce lütfen-->
                                    <!--                                            yukarıdaki bilgileri-->
                                    <!--                                            doldurunuz</b>-->
                                    <!--                                        </div>-->
                                    <!--                                    </form>-->

                                </div>
                                <a href="resim_liste.php">
                                    <button type="submit" class="btn btn-primary">Geri Dön</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <style>
        .dropzone {
            display: flex !important;
            flex-direction: column !important;
        }

        .dz-message {
            background-image: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;

            .btn-grad {

            }


        }

        .dz-message:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
    </style>
    <?php include 'footer.php'; ?>
    <script>
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });
    </script>