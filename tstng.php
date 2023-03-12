<?php
error_reporting(E_ALL ^ E_WARNING); //skrývá varování, že nejsou definované proměnné

$user = $_POST['user'];
$pass = $_POST['pass'];

if(!($user == "test" && $pass == "heslo"))
{
    echo '<html><body><form method="POST" action="'.$_SERVER['REQUEST_URI'].'">
            Username: <input type="text" name="user"></input><br/>
            Password: <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Login"></input>
            </form></body></html>';
    exit();
}



?>

<!DOCTYPE html>
<html lang="cs" style="font-family: Cabin, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PKSSJJB');</script>
<!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - STRK</title>
    <meta property="og:image" content="https://www.strk.cz/assets/img/strk-bg1.jpg">
    <meta name="description" content="STRK - ušito s láskou, s důrazem na detail a preciznost">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/svg+xml" sizes="300x100" href="assets/img/Needle.svg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
    <link rel="stylesheet" href="assets/css/strk.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77"><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKSSJJB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<p>funguje zase krásně</p>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/strk.js"></script>
</body>

</html>