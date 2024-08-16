<?php include 'header.php';
include 'sidebar.php';
include 'ust.php';
include 'baglan/baglan.php';
$ayarcek = $db->prepare('select * from cevir where dilkod=:dilkod');
$ayarcek->execute(array('dilkod'=>$selectedLanguage));
$ayarbitir = $ayarcek->fetch(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Site Ayar</h2>
                <?php if ($_GET&&$_GET['ok']) {
                    echo '<h2 style="color:green;" >&nbsp;Başarı ile Güncellenmiştir </h2>';
                } ?>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>

                <form id="demo-form2" method="get" data-parsley-validate class="form-horizontal form-label-left"
                      action="islem/islem.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dil
                        </label>

                            <select  class="form-select" name="language" id="language"
                                    style="outline: none; padding:5px; border-radius: 10px;"
                                    onchange="setLanguage(this.value)">
                                <?php $diller = $db->prepare('select * from diller order by id  ');
                                $diller->execute();
                                foreach ($diller as $dil) { ?>
                                    <option value="<?php echo $dil['code']?>" <?php echo $selectedLanguage == $dil['code'] ? 'selected' : ''; ?>><?php echo $dil['dil']?></option>
                                <?php } ?>
                            </select>


                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">anasayfa
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="anasayfa"
                                   value="<?php echo $ayarbitir['anasayfa']; ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">hakkimizda
                            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['hakkimizda']; ?>" type="text"
                                   name="hakkimizda">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">bloglar
                             </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['bloglar']; ?>" type="text"
                                   name="bloglar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">projelerimiz
                            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['projelerimiz']; ?>" type="text" name="projelerimiz">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">urunlerimiz</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['urunlerimiz']; ?>" type="text" name="urunlerimiz">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">iletisim</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['iletisim']; ?>" type="text" name="iletisim">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ileri</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['ileri']; ?>" type="text" name="ileri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">geri</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['geri']; ?>" type="text" name="geri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">tumu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['tumu']; ?>" type="text" name="tumu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">eniyiurun</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['eniyiurun']; ?>" type="text" name="eniyiurun">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">sikcasorulan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['sikcasorulan']; ?>" type="text"
                                   name="sikcasorulan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">eniyihaber</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['eniyihaber']; ?>" type="text" name="eniyihaber">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">bizdenhaber</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['bizdenhaber']; ?>" type="text" name="bizdenhaber">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">hizlimenu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['hizlimenu']; ?>" type="text" name="hizlimenu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">songonderi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['songonderi']; ?>" type="text" name="songonderi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">kategori</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['kategori']; ?>" type="text" name="kategori">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">incele</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['incele']; ?>" type="text" name="incele">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">iletisimegec</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['iletisimegec']; ?>" type="text" name="iletisimegec">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">gonder</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['gonder']; ?>" type="text" name="gonder">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ismin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['ismin']; ?>" type="text" name="ismin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['mail']; ?>" type="text" name="mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">notu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['notu']; ?>" type="text" name="notu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">bizeulas</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['bizeulas']; ?>" type="text" name="bizeulas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">siziarayalim</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                   value="<?php echo $ayarbitir['siziarayalim']; ?>" type="text" name="siziarayalim">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="ceviri_guncelle" class="btn btn-success">Güncelle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
