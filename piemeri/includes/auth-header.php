<html>

<head>
    <title>PUBLIKĀCIJU VADĪBAS SISTĒMA</title>
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

<body class="auth">

    <div class="content-holder">
