<?php

ob_start();

session_start();

include '../baglan/baglan.php'; include 'resimseo.php';



if (isset($_POST['urun_id'])){

    if (!empty($_FILES)) {


        $resimboyut=$_FILES['file']['size'];
        $update_dir='../../../upload/urun';
        $tmp_name=$_FILES['file']["tmp_name"];
        $name=rseo($_FILES['file']["name"]);
        $benzersiz1=rand(2500,3000);
        $benzersiz2=rand(2500,3000);
        $benzersiz3=rand(2500,3000);
        $benzersiz4=rand(2500,3000);
        $benzersizad=$benzersiz1.$benzersiz2.$benzersiz3.$benzersiz4;
        $resimyol=$update_dir."/".$benzersizad.$name;
        move_uploaded_file($tmp_name, "$update_dir/$benzersizad$name");

        $kaydet=$db->prepare("insert into urun_resim set

		resim=:resim,
		urun_id=:urun_id
");

        $insert=$kaydet->execute(array(

            'resim' => $benzersizad.$name,
            'urun_id'=>$_POST['urun_id']


        ));



    }
}






?>