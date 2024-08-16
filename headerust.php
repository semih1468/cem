<?php session_start();
ob_start();
include 'admin/admin/baglan/baglan.php';
include 'seo.php';
$selectedLanguage = isset($_SESSION['language']) ? $_SESSION['language'] : 'tr'; // Varsayılan dil Türkçe
$ayarcek = $db->prepare('select * from ayar where dilkod=:dilkod');
$ayarcek->execute(array('dilkod' => $selectedLanguage));
$ayar = $ayarcek->fetch(PDO::FETCH_ASSOC);
$ceviricek = $db->prepare('select * from cevir where dilkod=:dilkod');
$ceviricek->execute(array('dilkod' => $selectedLanguage));
$ceviri = $ceviricek->fetch(PDO::FETCH_ASSOC);
$menucek = $db->prepare('select * from menu');
$menucek->execute();
$menu = $menucek->fetch(PDO::FETCH_ASSOC);

function tum_bosluk_sil($veri)
{
    $veri = str_replace("/s+/", "", $veri);
    $veri = str_replace(" ", "", $veri);
    $veri = str_replace(" ", "", $veri);
    $veri = str_replace(" ", "", $veri);
    $veri = str_replace("/s/g", "", $veri);
    $veri = str_replace("/s+/g", "", $veri);
    $veri = trim($veri);
    return $veri;
}

; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <base href="<?php echo $ayar['ayar_site'] ?>"><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png"/>
    <link rel="manifest" href="assets/images/favicons/site.webmanifest"/>
    <meta name="description"
          content="Floens is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses."/>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css"/>
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css"/>
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css"/>
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/vendors/floens-icons/style.css"/>
    <link rel="stylesheet" href="assets/vendors/swiper/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="assets/vendors/slick/slick.css"/>

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/floens.css"/>