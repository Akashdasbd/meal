<!doctype html>
<html lang="<?php language_attributes();?>">

<head>
    <title>Meal &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <?php wp_head();?>

    <link rel="stylesheet" href="css/style.css">
    <script nonce="620fb0f7-9f23-4c42-9a91-15b014dac329">
        (function(w, d) {
            ! function(j, k, l, m) {
                j[l] = j[l] || {};
                j[l].executed = [];
                j.zaraz = {
                    deferred: [],
                    listeners: []
                };
                j.zaraz.q = [];
                j.zaraz._f = function(n) {
                    return async function() {
                        var o = Array.prototype.slice.call(arguments);
                        j.zaraz.q.push({
                            m: n,
                            a: o
                        })
                    }
                };
                for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                j.zaraz.init = () => {
                    var q = k.getElementsByTagName(m)[0],
                        r = k.createElement(m),
                        s = k.getElementsByTagName("title")[0];
                    s && (j[l].t = k.getElementsByTagName("title")[0].text);
                    j[l].x = Math.random();
                    j[l].w = j.screen.width;
                    j[l].h = j.screen.height;
                    j[l].j = j.innerHeight;
                    j[l].e = j.innerWidth;
                    j[l].l = j.location.href;
                    j[l].r = k.referrer;
                    j[l].k = j.screen.colorDepth;
                    j[l].n = k.characterSet;
                    j[l].o = (new Date).getTimezoneOffset();
                    if (j.dataLayer)
                        for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                ...x[1],
                                ...y[1]
                            })), {}))) zaraz.set(w[0], w[1], {
                            scope: "page"
                        });
                    j[l].q = [];
                    for (; j.zaraz.q.length;) {
                        const z = j.zaraz.q.shift();
                        j[l].q.push(z)
                    }
                    r.defer = !0;
                    for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
                        try {
                            j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                        } catch {
                            j[l]["z_" + B.slice(7)] = A.getItem(B)
                        }
                    }));
                    r.referrerPolicy = "origin";
                    r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                    q.parentNode.insertBefore(r, q)
                };
                ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
        <div class="site-wrap">
            <nav class="site-menu" id="ftco-navbar-spy">
                <div class="site-menu-inner" id="ftco-navbar">
                    <ul class="list-unstyled">
                        <li><a href="#section-home">Home</a></li>
                        <li><a href="#section-about">About Us</a></li>
                        <li><a href="#section-menu">Our Menu</a></li>
                        <li><a href="#section-reservation">Reserve A Table</a></li>
                        <li><a href="#section-contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <header class="site-header">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3">
                    </div>
                    <div class="col-2 col-md-6 text-center site-logo-wrap">
                        <a href="index.html" class="site-logo">M</a>
                    </div>
                    <div class="col-5 col-md-3 text-right menu-burger-wrap">
                        <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
                    </div>
                </div>
            </header>