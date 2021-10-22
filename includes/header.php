<html>

<head>
    <title>DIZAINA SISTĒMA</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">


<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <?php

    //echo $_SERVER["DOCUMENT_ROOT"];

    $styletime = date("YmdHi", filemtime($_SERVER["DOCUMENT_ROOT"] . "/style/style.min.css")); ?>

    <link rel="stylesheet" type="text/css" href="/fancybox/dist/jquery.fancybox.min.css">

    <link href="/style/style.min.css?v=<?php echo $styletime; ?>" rel="stylesheet">

</head>

<body onload="checkCookie()" <?php

if($_COOKIE['minimenu']=='on') {
  echo "class='mini-menu'";
}
?>>

    <?php

    //echo $parent;

    $saite = $_SERVER['REQUEST_URI'];

    $url = 'http://' . $_SERVER['SERVER_NAME'] . $saite;

    ?>

    <div class="left_menu">

        <div class="logo-holder">
            <a class="logo" href="/"><img src="/images/logo.png"></a>

        </div>

        <div class="menu-holder-wrapper">
            <div class="menu-holder">

                <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/menu.php'; ?>
            </div>


        </div>

        <div class="mini-menu-button set-cookie" onClick="setCookie('minimenu','on','1')">
            <i class="bi bi-chevron-right"></i> <span>Sakļaut</span>
        </div>

        <div class="mini-menu-button unset-cookie" onClick="setCookie('minimenu','off','1')">
            <i class="bi bi-chevron-right"></i>
        </div>

    </div>

    <div class="active-menu-bg"><i class="ri-close-line"></i></div>
    <header>

        <div class="menu_opener"><i class="bi bi-list"></i></div>

        <div class="app_title"><?php echo $title; ?></div>

        <div class="top_nav">

            <span class="top_nav_items">
                <a href="#" class="btn btn-link"><i class="bi bi-question-circle"></i></a>

                <a href="#" class="btn btn-link"><i class="bi bi-info-circle"></i></a>

                <a href="#" class="btn btn-link"><i class="bi bi-chat"></i></a>

                <a href="#" class="btn btn-link"><i class="bi bi-bell"></i></a>

                <a href="#" class="btn btn-link"><i class="bi bi-grid-3x3-gap-fill"></i></a>
            </span>
            <div class="account">
                <span>AC</span>
            </div>

            <a href="#" class="btn btn-link dots"><i class="bi bi-three-dots-vertical"></i></a>

        </div>

    </header>

    <div class="content-holder">
