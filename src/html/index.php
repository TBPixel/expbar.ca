<?php session_start(); ?>
<!DOCTYPE html>
<html class="html" lang="en" itemscope itemtype="http://schema.org/Restaurant">

<head>
    <!--
        Meta Parsing & Rendering Tags
    -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
        SEO & Indexing
    -->
    <title>EXP Restaurant + Bar | Vancouver's Gamer Bar</title>
    <meta name="description" content="">
    <!-- Do Not Index, Do Not Follow -->
    <meta name="robots" content="noindex,nofollow">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="EXP Restaurant + Bar | Vancouver's Gamer Bar">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="http://www.expbar.ca/images/svg/EXP-Logo.svg">


    <!--
        Open-Graph Facebook
    -->
    <meta property="og:url"                 content="http://www.expbar.ca" />
    <meta property="og:title"               content="EXP Restaurant + Bar | Vancouver's Gamer Bar" />
    <meta property="og:description"         content="" />
    <meta property="og:site_name"           content="EXP Restaurant + Bar" />
    <meta property="og:image"               content="http://www.expbar.ca/images/svg/EXP-Logo.svg" />
    <meta property="og:type"                content="website" />
    <meta property="og:locale"              content="en_CA" />


    <!--
        Twitter Cards
    -->
    <meta name="twitter:card"               content="summary">
    <meta name="twitter:site"               content="@expbar">
    <meta name="twitter:title" content="EXP Restaurant + Bar | Vancouver's Gamer Bar">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="@tbpixel">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://www.expbar.ca/images/svg/EXP-Logo.svg">


    <!--
        Stylesheets
    -->
    <!-- CRITICAL CSS -->
    <style>
        /* Inline of Navigation & Hero Area CSS Only */

        /* Body, Site Heading & Navigation */
        .body {
            margin: 0;
            padding: 0;
            background-color: #f5f7f9;
        }


        /* Header */
        .header {
            /* Sizing & Display Model */
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            width: 100%;
            /* Styles */
            background-color: #3F8FDD;
        }
            /* Header Logo */
            .header__logo {
                display: block;
                margin: 16px auto;
            }
            /* Header Logo SVG */
            .header__svg {
                display: block;
                height: 30px;
                stroke: #eaeff3;
                fill: #eaeff3;
            }
                /* Header Logo SVG - On Hover */
                .header__svg:hover,
                .header__svg:focus,
                .header__svg:active {
                    stroke: #f5f7f9;
                    fill: #f5f7f9;
                }


            /* Navigation */
            .nav {
                -webkit-box-flex: 100%;
                    -ms-flex: 100%;
                        flex: 100%;
            }

            .nav__list {
                margin-top: 0;
                margin-bottom: 0;
                padding-left: 0;
                list-style: none;
                text-align: center;
            }
                /* Navigation List Item */
                .nav__item {
                    display: inline-block;
                    width: 25%;
                    position: relative;
                    color: #eaeff3;
                }
                    /* Navigation List Item - On Hover */
                    .nav__item:hover,
                    .nav__item:focus,
                    .nav__item:active { color: #3F8FDD; }
                    /* Navigation List Item - On Hover - 'Before' Psuedo-Element*/
                    .nav__item:hover::before,
                    .nav__item:focus::before,
                    .nav__item:active::before { will-change: opacity; opacity: 1; }
                    /* Navigation List Item - 'Before' Psuedo-Element*/
                    .nav__item::before {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        content: '';
                        background-color: #f5f7f9;
                        z-index: 0;

                        opacity: 0;
                        -webkit-transition: opacity 166ms ease-in;
                        transition: opacity 166ms ease-in;
                    }
                        /* Navigation List Item Link */
                        .nav__link {
                            box-sizing: border-box;
                            display: block;
                            padding: 10px 16px;
                            height: 100%;

                            position: relative;

                            font-family: "Lato",sans-serif;
                            font-weight: 600;
                            text-decoration: none;
                            color: inherit;
                        }
    


        /* Landing Page Hero */
        .hero {
            /* Layout */
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            /* Spacing */
            padding-top: 64px;
            padding-bottom: 64px;
            /* Background */
            background-color: #3F8FDD;
        }
            /* Title Text for Landing Page Hero */
            .hero__title {
                /* Flexbox Fill Parent */
                -webkit-box-flex: 100%;
                    -ms-flex: 100%;
                        flex: 100%;
                /* Spacing */
                margin-top: 0;
                margin-bottom: 48px;
                /* Style & Alignment */
                font-family: 'Baloo Da', cursive;
                font-size: 48px;
                text-align: center;
                letter-spacing: 1px;
                color: #eaeff3;
            }
            /* Hero Image Container */
            .hero__image {
                /* Flexbox Sizing */
                -webkit-box-flex: 100%;
                    -ms-flex: 100%;
                        flex: 100%;
                /* Spacing */
                padding-bottom: 48px;
                /* Align svg contents to center */
                text-align: center;
            }
                /* Hero Image inline-SVG */
                .hero__svg {
                    /* Sizing */
                    width: 33%;
                    height: 33%;
                    /* Styling */
                    stroke: #eaeff3;
                    fill: #eaeff3;
                }


            /* Hero Text Content */
            .hero__content {
                /* Sizing */
                box-sizing: border-box;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                        flex-direction: column;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                -webkit-box-flex: 100%;
                    -ms-flex: 100%;
                        flex: 100%;
                /* Spacing */
                padding-right: 16px;
                padding-left: 16px;
            }
                /* Hero Text Content Heading */
                .hero__heading {
                    /* Spacing */
                    margin-top: 0;
                    margin-bottom: 32px;
                    /* Styles */
                    font-family: "Lato", sans-serif;
                    font-weight: 300;
                    font-size: 28px;
                    color: #f5f7f9;
                    text-align: center;
                }
                /* Hero Text Content Paragraph */
                .hero__text {
                    /* Clear Margins */
                    margin: 0 auto;
                    /* Sizing Restrictions */
                    max-width: 550px;
                    /* Styles */
                    font-family: "Open Sans", sans-serif;
                    font-weight: 400;
                    font-size: 18px;
                    text-indent: 16px;
                    line-height: 1.6;
                    color: #f5f7f9;
                }


            .hero__cta {
                /* Fill new row of parent */
                -webkit-box-flex: 100%;
                    -ms-flex: 100%;
                        flex: 100%;
                margin-top: 48px;
                /* Positioning for Absolute Psuedo-element */
                position: relative;
            }

                .hero__cta-button {
                    /* Sizing & Spacing */
                    box-sizing: border-box;
                    display: block;
                    margin: 0 auto;
                    padding: 24px 16px;
                    width: 300px;
                    /* Positioning & Layer in-front of Pseudo-element */
                    position: relative;
                    z-index: 1;
                    /* Style Container */
                    border-bottom: 2px solid #5b9b84;
                    background-color: #33DFA2;
                    /* Style Text */
                    font-family: "Lato", sans-serif;
                    font-weight: 700;
                    font-size: 19px;
                    text-align: center;
                    text-decoration: none;
                    text-transform: uppercase;
                    color: #f5f9f8;

                    -webkit-transition: -webkit-transform 128ms ease-in;
                    transition: -webkit-transform 128ms ease-in;
                    transition: transform 128ms ease-in;
                    transition: transform 128ms ease-in, -webkit-transform 128ms ease-in;
                    transition: transform 128ms, -webkit-transform 128ms ease-in;
                }

                    /* Hover Effects */
                    .hero__cta-button:hover,
                    .hero__cta-button:focus,
                    .hero__cta-button:active {
                        border-color: #3F8FDD;
                        will-change: transform;
                        -webkit-transform: translateY(2px);
                                transform: translateY(2px);
                    }


        /* Responsive Header Query */
        @media only screen and (min-width: 440px) {

            .header__logo { margin: 4px 16px; }

            .nav { -webkit-box-flex: 1; -ms-flex: auto; flex: auto; }
                .nav__list { text-align: left; }
                    .nav__item { width: auto; }
        }

        
        /* Responsive Hero Query 1100px */
        @media only screen and (min-width: 1100px) {

            /* Hero Image Area */
            .hero__image {
                /* Flexbox Sizing */
                -webkit-box-flex: 40%;
                -ms-flex: 40%;
                flex: 40%;
                /* Spacing */
                padding-bottom: 0;
            }
                .hero__svg {
                    /* Sizing */
                    width: 60%;
                    height: 60%;
                }


            .hero__content {
                /* Flex Sizing */
                -webkit-box-flex: 60%;
                        -ms-flex: 60%;
                            flex: 60%;
            }
                .hero__heading { text-align: left; }
                .hero__text {
                    margin: 0;
                }
        }
    </style>
    <!-- Cache-able Stylesheet -->
    <link href="./css/styles.min.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link href="./css/styles.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Da%7CLato:700,300%7COpen+Sans:300,400,400i,600" rel="stylesheet">
    </noscript>
    <!-- LoadCSS -->
    <script>
        /*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
        (function(w){
            "use strict";
            /* exported loadCSS */
            var loadCSS = function( href, before, media ){
                // Arguments explained:
                // `href` [REQUIRED] is the URL for your CSS file.
                // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
                    // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
                // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
                var doc = w.document;
                var ss = doc.createElement( "link" );
                var ref;
                if( before ){
                    ref = before;
                }
                else {
                    var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
                    ref = refs[ refs.length - 1];
                }

                var sheets = doc.styleSheets;
                ss.rel = "stylesheet";
                ss.href = href;
                // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
                ss.media = "only x";

                // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
                function ready( cb ){
                    if( doc.body ){
                        return cb();
                    }
                    setTimeout(function(){
                        ready( cb );
                    });
                }
                // Inject link
                    // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
                    // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
                ready( function(){
                    ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
                });
                // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
                var onloadcssdefined = function( cb ){
                    var resolvedHref = ss.href;
                    var i = sheets.length;
                    while( i-- ){
                        if( sheets[ i ].href === resolvedHref ){
                            return cb();
                        }
                    }
                    setTimeout(function() {
                        onloadcssdefined( cb );
                    });
                };

                function loadCB(){
                    if( ss.addEventListener ){
                        ss.removeEventListener( "load", loadCB );
                    }
                    ss.media = media || "all";
                }

                // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
                if( ss.addEventListener ){
                    ss.addEventListener( "load", loadCB);
                }
                ss.onloadcssdefined = onloadcssdefined;
                onloadcssdefined( loadCB );
                return ss;
            };
            // commonjs
            if( typeof exports !== "undefined" ){
                exports.loadCSS = loadCSS;
            }
            else {
                w.loadCSS = loadCSS;
            }
        }( typeof global !== "undefined" ? global : this ));


        loadCSS ( './css/styles.min.css' );
    </script>


    <!--
        Favicons
    -->
    <link href="/apple-touch-icon.png?v=m2dL6a6Gw8"     rel="apple-touch-icon"      sizes="180x180">
    <link href="/favicon-32x32.png?v=m2dL6a6Gw8"        rel="icon" type="image/png" sizes="32x32">
    <link href="/favicon-16x16.png?v=m2dL6a6Gw8"        rel="icon" type="image/png" sizes="16x16">
    <link href="/manifest.json?v=m2dL6a6Gw8"            rel="manifest">
    <link href="/safari-pinned-tab.svg?v=m2dL6a6Gw8"    rel="mask-icon">
    <link href="/favicon.ico?v=m2dL6a6Gw8"              rel="shortcut icon">
    <meta name="theme-color" content="#ffffff">


    <!-- HTML5 Shim CDN by Cloudfare -->
    <!--[if lt IE 9]> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> 
    <![endif]-->
</head>

<body class="body">
    <!-- Facebook Graph API Init -->
    <!--
    <script>
    
        JAVASCRIPT CODE TO BE USED IN DEMO ONLY

        window.fbAsyncInit = function() {
            FB.init({
                appId      : '199372583810994',
                xfbml      : true,
                version    : 'v2.7'
            });
            eventData.getData ();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    -->

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Site Header & Navigation -->
        <header class="header">

            <!-- Logo Container -->
            <a class="header__logo" id="logo" href="./" title="EXP Bar + Restaurant">
                
                <!-- Logo SVG -->
                <svg class="header__svg" id="EXP_Logo" data-name="EXP Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98.07 47">

                    <title>EXP Logo</title>

                    <path id="exp-logo-1" d="M55,48.15,65.49,59.38,67,61H60.4a3.72,3.72,0,0,1-1.14,0c-.21-.09-.45-.46-.61-.62L57.2,58.87l-4-4.07-2.51-2.58-3.87,3.9L44,59a15.27,15.27,0,0,1-1.83,1.85c-.49.34-1.21.18-1.83.18H6.61a6,6,0,0,1-4.67-2.66C.72,56.58,1,54.6,1,52.58V44.8c0-.67,0-1.34,0-2a5.46,5.46,0,0,1,2.19-4.17A6.66,6.66,0,0,1,6.27,37a19.51,19.51,0,0,1,2,0H23.22c.56,0,1.15,0,1.71,0a3.14,3.14,0,0,1,1.39.44c.73.45.68.67.68,1.43,0,1.33.2,2.43-.92,3.4a2.93,2.93,0,0,1-2.14.73h-16c-.15,0-.76-.09-.86,0s0,.76,0,1V47c.67-.46,1.16-1,2-1l3.79,0,4.62,0,2.11,0a5.93,5.93,0,0,1,1.14,1.42l.37,1.2a6.07,6.07,0,0,1,0,1.68,3.56,3.56,0,0,1-1.05,1.48h-2l-4.67,0L9,51.77c-1,0-1.43-.8-2.13-1.47l0,4.18c0,.75-.2.91.5.91l6.78,0,20.71,0h3a2.24,2.24,0,0,0,.93-.07,5.44,5.44,0,0,0,1-1l1.73-1.65L45.33,49c.25-.24,1-.7,1.08-1s.06,0-.08-.29a5.4,5.4,0,0,0-1-1l-1.55-1.63c-2.16-2.28-4.51-4.47-6.52-6.88-.28-.33-.27-.25-.3-.72,0-.65,0-.59.56-.6l4.9,0c.79,0,1.71-.26,2.31.27,1.12,1,2.12,2.14,3.16,3.2l1.89,1.92A7.16,7.16,0,0,0,51,43.47c.36.2,0,.17.36.05s.93-.89,1.24-1.19l3.8-3.64c.46-.44,1.17-1.46,1.78-1.69a4.85,4.85,0,0,1,1.39,0H92.14c2,0,3.77-.14,5.4,1.32A4.52,4.52,0,0,1,99,42.11v5.28c0,1.12.23,2.42-.34,3.43A4.47,4.47,0,0,1,94.9,53H82.66l0,4.64a5.9,5.9,0,0,1,0,1.77,5.34,5.34,0,0,1-1.54,1.47A4.27,4.27,0,0,1,79.3,61c-.8,0-1.06.12-1.6-.43S76.27,59.42,76,58.8a3.46,3.46,0,0,1,0-1.05L75.87,52l0-2.6a3.66,3.66,0,0,1,0-1.06c.4-1.16,1.18-1,2.15-1h5.26l10.22,0V45.2a7.39,7.39,0,0,0,0-2.26,2.56,2.56,0,0,0-1-.85,3.14,3.14,0,0,0-.78,0c-3.16,0-6.31,0-9.47,0-4.35,0-8.7,0-13.06,0H63.92a15.1,15.1,0,0,0-2.85,0c-.87.18-1.74,1.58-2.35,2.21Z" transform="translate(-0.97 -24.5)"/>
                    <circle id="exp-logo__Circle" cx="49.03" cy="23.5" r="21" fill="none" stroke-width="5"/>
                </svg>
            </a>

            <!-- Navigation -->
            <nav class="nav">
                <ul class="nav__list">
                    <!-- Nav Link Items -->
                    <li class="nav__item"><a class="nav__link" href="./">Home</a></li>
                    <li class="nav__item"><a class="nav__link" href="./specials/" itemprop="menu">Specials</a></li>
                    <li class="nav__item"><a class="nav__link" href="./food/" itemprop="menu">Food</a></li>
                    <li class="nav__item"><a class="nav__link" href="./drinks/" itemprop="menu">Drinks</a></li>
                </ul>
            </nav>
        </header>

        <!-- Site Main Content -->
        <main class="main">

            <!-- Introduction / Hero for new Visitors -->
            <section class="hero">

                <!-- Site + Hero Lead Title -->
                <h1 class="hero__title">Come level up with us at the EXP Restaurant</h1>

                <!-- Hero Image -->
                <div class="hero__image">

                    <svg class="hero__svg" id="Level_Up_Icon" data-name="Level Up Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                        <title>exp-level-up</title>

                        <polyline id="Notch" points="57.8 93.37 51.74 82.88 74.52 69.73 80.57 80.23"/>
                        <path id="Card" d="M83,63,42,87c-1,.55-1.45,0-2-1L25,61a2.43,2.43,0,0,1,1-3L67,34c1-.55,1.45,0,2,1L84,60A2.42,2.42,0,0,1,83,63Z" transform="translate(-2 -2)" fill="none"/>
                        <path id="exp-level-up__Circle-1" d="M37.73,5.65A46,46,0,1,1,15.95,19.07" transform="translate(-2 -2)" fill="none" stroke-width="4"/>
                        <polygon id="Arrow" points="20 2 62 19.67 49.68 27 54 34 31.5 47.5 27 40 15 47 20 2" fill="none"/>
                        <g id="exp-logo">
                            <path id="exp-logo-2" d="M56.72,59.26l6.19,1.88.89.27-2.4,1.39A1.57,1.57,0,0,1,61,63a1.26,1.26,0,0,1-.35-.1l-.85-.24-2.31-.64L56,61.66l-.59,2.24L55,65.53a6.43,6.43,0,0,1-.28,1.06c-.11.23-.4.32-.63.45L41.81,74.15a2.52,2.52,0,0,1-2.26,0A4,4,0,0,1,38,72.26l-1.64-2.83-.42-.73a2.3,2.3,0,0,1-.08-2,2.8,2.8,0,0,1,.78-1.24,8.21,8.21,0,0,1,.73-.42L42.8,61.9l.62-.36a1.32,1.32,0,0,1,.6-.13c.36,0,.39.1.55.38.28.48.59.84.38,1.43a1.23,1.23,0,0,1-.63.72L38.5,67.31c-.05,0-.3.13-.31.18s.16.28.21.36L39,68.95c.15-.31.21-.61.52-.79l1.38-.8,1.68-1,.77-.44a2.5,2.5,0,0,1,.71.28l.39.36a2.55,2.55,0,0,1,.35.61,1.5,1.5,0,0,1-.07.76l-.73.42-1.7,1-1.6.92c-.36.21-.69,0-1.09-.09l.88,1.52c.16.27.12.37.37.23l2.47-1.43,7.54-4.37L52,65.51a.94.94,0,0,0,.32-.22,2.29,2.29,0,0,0,.15-.57l.28-1,.61-2.14c0-.14.22-.47.18-.59s0,0-.09-.09a2.27,2.27,0,0,0-.57-.15L52,60.51c-1.27-.38-2.58-.68-3.82-1.13-.17-.06-.15,0-.26-.2s-.12-.21.08-.34l1.78-1c.29-.17.57-.46.9-.39.62.13,1.22.33,1.83.5l1.09.3a3,3,0,0,0,.7.18c.17,0,0,.06.14-.06a2.53,2.53,0,0,0,.2-.69l.62-2.13a3.33,3.33,0,0,1,.29-1,2,2,0,0,1,.51-.29l11.86-6.86a3,3,0,0,1,2.24-.66,1.9,1.9,0,0,1,1.33,1.07l1.11,1.92a2.93,2.93,0,0,1,.6,1.32,1.88,1.88,0,0,1-.91,1.59L67.81,55.2l1,1.69a2.48,2.48,0,0,1,.37.64,2.25,2.25,0,0,1-.25.86,1.8,1.8,0,0,1-.64.43c-.29.17-.36.27-.67.18a3.49,3.49,0,0,1-1-.29,1.46,1.46,0,0,1-.22-.38l-1.26-2.07-.55-.95a1.54,1.54,0,0,1-.22-.39c-.1-.51.22-.61.57-.82L66.85,53l3.72-2.15-.45-.78a3.11,3.11,0,0,0-.48-.82,1.08,1.08,0,0,0-.54-.1,1.32,1.32,0,0,0-.28.16l-3.45,2-4.76,2.75-1.92,1.11a6.35,6.35,0,0,0-1,.6c-.28.25-.3.94-.39,1.3Z" transform="translate(-2 -2)"/>
                            <circle id="exp-level-up__Circle-2" data-name="Circle" cx="54.87" cy="60.26" r="8.84" transform="translate(-24.81 33.59) rotate(-30.06)" fill="none"/>
                        </g>
                    </svg>
                </div>
                
                <!-- Hero Text Content -->
                <article class="hero__content">
                    
                    <h2 class="hero__heading">Grab a bite to eat, then game out with your friends!</h2>

                    <p class="hero__text">EXP is a restaurant in downtown Vancouver for the Gaming community. We're for everyone from the Smash Bros.

                    Community to the most tactical Settler of Catan players.

                    Join some friends for a fun night of thematic food &amp; drinks, tabletop treachery or even the perilous cliffs of Rainbow Road!</p>
                </article>

                <!-- Menu Call to Action -->
                <div class="hero__cta">
                    <a class="hero__cta-button" href="./specials/">View our specials</a>
                </div>
            </section>

            <!-- Board Games Listing -->
            <section class="boardgames">

                <!-- Board Games Title -->
                <h2 class="boardgames__title">Enjoy a game while we cook your meal</h2>

                <!-- 20 Side Die Image -->
                <div class="boardgames__image">
                    <!-- 20 Side Die SVG -->
                    <svg class="boardgames__svg" id="D20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.79 88.25">

                        <title>d20 icon</title>

                        <path id="Outline" d="M77.88,15.45c6.61,14.49,15.07,38.32,13.21,40.83-10.19,15.27-20.34,30.37-28.82,37C56.81,95,32.87,85.36,22.68,79.58c-6.08-9.14-10-21.47-13-35.2C11.39,36.63,24.7,18,37.16,6.28A304,304,0,0,1,77.88,15.45Z" transform="translate(-9.06 -5.75)" fill="none"/>

                        <path id="Inner_Lines" data-name="Inner Lines" d="M68.46,61.5c-18.35,4-33.92,7.52-46.27,8.28H22c1.48,4.73,30.63,22.71,38.92,23.71l1.34-.2Q66,77.4,68.46,61.5c5-15.38,9.15-40.5,9.22-45.79-12,2.42-27.53,4.92-45.57,8.07V24L37.28,6.3,32.41,24.08l-10.54,45a45,45,0,0,0,.82,10.52l-.83-10.43c-4-4.29-8.11-15.24-12.21-24.77A181.06,181.06,0,0,1,32.12,24L68.46,61.5a153.57,153.57,0,0,0,22.82-5.71" transform="translate(-9.06 -5.75)" fill="none"/>
                    </svg>
                </div>

                <!-- List of Boardgames -->
                <article class="boardgames__content">

                    <!-- List of Boardgames by Group -->
                    <ul class="boardgames__list boardgames__list--metalist">

                        <!-- Group Title -->
                        <li class="boardgames__item boardgames__item--list">

                            <h3 class="boardgames__category">Mature</h3>
                            <!-- Group List -->
                            <ul class="boardgames__list">
                                <li class="boardgames__item">Cards Against Humanity</li>
                            </ul>
                        </li>

                        <!-- Group Title -->
                        <li class="boardgames__item boardgames__item--list">

                            <h3 class="boardgames__category">Long-Term</h3>
                            <!-- Group List -->
                            <ul class="boardgames__list">
                                <li class="boardgames__item">Talisman</li>
                                <li class="boardgames__item">Pathfinder</li>
                            </ul>
                        </li>

                        <!-- Group Title -->
                        <li class="boardgames__item boardgames__item--list">

                            <h3 class="boardgames__category">Family Friendly</h3>
                            <!-- Group List -->
                            <ul class="boardgames__list">
                                <li class="boardgames__item">Apples-to-Apples</li>
                            </ul>
                        </li>

                        <!-- Group Title -->
                        <li class="boardgames__item boardgames__item--list">

                            <h3 class="boardgames__category">Classic</h3>
                            <!-- Group List -->
                            <ul class="boardgames__list">
                                <li class="boardgames__item">Settlers of Catan</li>
                            </ul>
                        </li>

                    </ul>
                </article>
            </section>


            <!-- About Us - Description Text -->
            <section class="about">

                <!-- Section Title -->
                <h2 class="about__title">We aim to redefine 'social gaming'</h2>

                <!-- Section Main Content -->
                <p class="about__text">Eat delicious items crafted by our expert chefs! Drink themed beverages after your favourite games! Enjoy social mixers, Game Industry Q&amp;A sessions, and various other special events throughout the week! Get hyped for tournaments with awesome prizes! Watch high-level matches in the pro-gaming scene! Literally Level Up as you visit with our experience points reward system!</p>
            </section>


            <!-- Events Listing -->
            <section class="events">

                <!-- Events Section Title -->
                <h2 class="events__title">Join the community with one of our events</h2>
                
                <!-- List of Ongoing Events -->
                <ul class="events__list">
                    <?php
                        require_once '../private/fb-app.php';

                        $request_url = 'https://graph.facebook.com/expbar/events?fields=name,start_time,cover&' . $access_token;
                        $result = file_get_contents ( $request_url );

                        $result = json_decode ( $result );
                        
                        $array = $result->data;

                        foreach ( $array as $value )
                        {
                            if ( (time () - (60 * 60 * 24) ) > strtotime ( $value->start_time ) ) { continue; }

                            $date = date_create ( $value->start_time );
                    ?>
                    <li class="events__item">
                        <a class="events__link" href="https://www.facebook.com/events/<?php echo $value->id; ?>"></a>
                        <img class="events__image" src="<?php echo $value->cover->source; ?>" alt="<?php echo $value->name; ?>">
                        <time class="events__date" datetime="<?php echo $value->start_time; ?>"><?php echo date_format ( $date,"d M" ); ?></time>
                        <strong class="events__text"><?php echo preg_replace('/[\[{\(].*[\]}\)]/U' , '', $value->name); ?></strong>
                        <i class="material-icons events__icon">chevron_right</i>
                    </li>
                    <?php } ?>
                </ul>
            </section>


            <!-- Hours of Operation -->
            <section class="hours">

                <!-- Section Image -->
                <div class="hours__image">
                    <svg class="hours__svg" fill="#CCCCCC" viewBox="0 0 24 24" preserveAspectRatio="xMinYMid" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                </div>

                <!-- Schedule -->
                <div class="hours__schedule">

                    <!-- Section Title -->
                    <h2 class="hours__title">Open for late night game-outs!</h2>
                    
                    <!-- Main Content -->
                    <h3 class="hours__weekdays">Sunday - Thursday</h3>
                    <time class="hours__time" datetime="5h">5pm - 10pm</time>

                    <h3 class="hours__weekdays">Friday &amp; Saturday</h3>
                    <time class="hours__time" datetime="7h">5pm - 12am</time>
                </div>
            </section>

            <!-- Location - Google Maps API -->
            <section class="location" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                <!-- Section Title -->
                <h2 class="location__title" itemprop="streetAddress">309 West Pender St.</h2>

                <!-- Google Maps Integration -->
                <div class="location__map" id="map" style="pointer-events: none;"></div>
            </section>
        </main>

        <!-- Site Footer -->
        <footer class="footer">

            <!-- Charity List -->
            <section class="footer__section">

                <!-- List Title -->
                <h4 class="footer__title">Charity Programs</h4>
                
                <!-- List Items -->
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="https://www.bcchf.ca/">EXP Boost</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://extra-life.org/">Extra Life</a></li>
                </ul>
            </section>

            <!-- EXP Online Community -->
            <section class="footer__section">

                <!-- List Title -->
                <h4 class="footer__title">Social Media</h4>

                <!-- List Items -->
                <ul class="footer__list">
                    <li class="footer__item">
                        <a class="footer__link" href="https://www.facebook.com/expbar">
                            <img class="footer__icon" src="./images/svg/social-icons/facebook.svg" alt="Facebook pictogram">Facebook
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="https://twitter.com/expbar">
                            <img class="footer__icon" src="./images/svg/social-icons/twitter.svg" alt="Twitter pictogram">Twitter
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="https://plus.google.com/u/0/111322866517194957392/posts">
                            <img class="footer__icon" src="./images/svg/social-icons/google+.svg" alt="Google+ pictogram">Google+
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="http://www.linkedin.com/company/exp-restaurant-bar">
                            <img class="footer__icon" src="./images/svg/social-icons/linkedin.svg" alt="LinkedIn pictogram">LinkedIn
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="http://twitch.tv/expbar">
                            <img class="footer__icon" src="./images/svg/social-icons/twitch.svg" alt="Twitch pictogram">Twitch
                        </a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__link" href="http://www.youtube.com/user/EXPRestaurantAndBar">
                            <img class="footer__icon" src="./images/svg/social-icons/youtube.svg" alt="Youtube pictogram">Youtube
                        </a>
                    </li>
                </ul>
            </section>

            <!-- Affiliates & Sponsors -->
            <section class="footer__section">

                <!-- List Title -->
                <h4 class="footer__title">Affiliates &amp; Sponsors</h4>

                <!-- List Items -->
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="https://www.asus.com/Monitors/VG248QE/">ASUS</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://www.ncix.com/article/soc-champion.htm">GIGABYTE</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://www.kantoliving.com/">Kanto Living</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://wcgeeksversusnerds.com/">Geeks Vs. Nerds Vancouver</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://www.gamedeals.ca/">Gamedeals Video Games</a></li>
                    <li class="footer__item"><a class="footer__link" href="https://www.strategiesgames.ca/strategies/">Strategies Games &amp; Hobbies</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://smartypantz.ca/">Smarty Pantz Escape Rooms</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://www.thefictionals.com/">The Fictionals</a></li>
                    <li class="footer__item"><a class="footer__link" href="http://northwaygames.com/">Northway Games</a></li>
                </ul>
            </section>
        </footer>
    </div>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="./js/scripts.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtuqBEgDNXlD7s0mwuu2zwUWsU9ay2fbI&callback=initMap" async defer></script>
</body>

</html>