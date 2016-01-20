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
    $html .= '

    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34803350 = new Ya.Metrika({
                    id:34803350,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ut:"noindex"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/34803350?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
    ';

    return $html;
}


