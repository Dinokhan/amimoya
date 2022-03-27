<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://shtheme.org/demosd/logio/wp-content/uploads/2020/05/favicon.ico">
    <title>Aneka &#8211; Logistic </title>
    <link rel='dns-prefetch' href='//maps.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/shtheme.org\/demosd\/logio\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.12"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='{{ asset('js/style.min.css') }}'
          type='text/css' media='all' crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{ asset('js/styles.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css'
          href='{{ asset('js/bootstrap.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-carousel-css'
          href='{{ asset('js/owl.carousel.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='animate-css'
          href='{{ asset('js/animate.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-magnific-popup-css'
          href='{{ asset('js/magnific-popup.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='fontawesome-css'
          href='{{ asset('js/fontawesome-all.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-themify-icons-css'
          href='{{ asset('js/themify-icons.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-meanmenu-css'
          href='{{ asset('js/meanmenu.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-slick-css'
          href='{{ asset('js/slick.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-default-css'
          href='{{ asset('js/default.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-main-css'
          href='{{ asset('js/main.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='logio-responsive-css'
          href='{{ asset('js/responsive.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='logio-css-css'
          href='{{ asset('js/style.css') }}'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='{{ asset('js/elementor-icons.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-animations-css'
          href='{{ asset('js/animations.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
          href='{{ asset('js/frontend-legacy.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='{{ asset('js/frontend.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-post-516-css'
          href='{{ asset('js/post-516.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css'
          href='{{ asset('js/font-awesome.min.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-global-css'
          href='{{ asset('js/global.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.3.12'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='{{ asset('js/jquery.js') }}'></script>
    <script type='text/javascript'
            src='{{ asset('js/jquery-migrate.min.js') }}'></script>

    <script type='text/javascript'
            src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c&#038;ver=5.3.12'></script>
    <link rel='https://api.w.org/' href='https://shtheme.org/demosd/logio/index.php?rest_route=/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://shtheme.org/demosd/logio/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://shtheme.org/demosd/logio/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.3.12"/>
    <link rel="canonical" href="https://shtheme.org/demosd/logio/"/>
    <link rel='shortlink' href='https://shtheme.org/demosd/logio/'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://shtheme.org/demosd/logio/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fshtheme.org%2Fdemosd%2Flogio%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://shtheme.org/demosd/logio/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fshtheme.org%2Fdemosd%2Flogio%2F&#038;format=xml"/>
    <style type="text/css" class="options-output">
        body {
            font-weight: normal;
            font-style: normal;
            color: #333;
        }
        .ami{
            background-color: #af1a27 !important;
        }
        .teling{
            color: #af1a27 !important;
        }
    </style>
</head>
