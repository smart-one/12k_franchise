<?php

function renderPage( $head = "", $header = "", $body = "", $footer = "" )
{
    $html = "
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!--meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1'-->

    <link rel='stylesheet' type='text/css' href='/css/fonts.css'>
    <link rel='stylesheet' type='text/css' href='/css/jquery.fullPage.css'>
    <link rel='stylesheet' type='text/css' href='/css/swiper.min.css'>
    <link rel='stylesheet' type='text/css' href='/css/template_style.css'>

    <script type='text/javascript' src='/js/jquery-2.1.3.min.js'></script>
    <script type='text/javascript' src='/js/jquery.fullPage.min.js'></script>
    <script type='text/javascript' src='/js/swiper/swiper.jquery.min.js'></script>
    ";
    $html .= $head;
    $html .= "
</head>
<body>
    ";

    $html .= $body;
    $html .= $footer;
    $html .= "

</body>
</html>
    ";

    return $html;
}


