<!doctype html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') الصفحة الرئيسية - Aba Resources</title>


    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap" rel="stylesheet">

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
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/ecademy-toolkit/inc/gradebook/assets/css/gradebookc8d8.css') }}' type='text/css'/>
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/learnpress-course-review/assets/css/course-reviewc8d8.css') }}' type='text/css'/>
    <link rel='stylesheet' href='{{ url('assets_public/wp-includes/css/dist/block-library/style-rtl.minc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style5c45.css') }}' type='text/css'/>
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style-rtl5c45.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/assets/css/select2af8e.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/yith-woocommerce-affiliates/assets/css/yith-wcafc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/contact-form-7/includes/css/styles5697.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/contact-form-7/includes/css/styles-rtl5697.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/ecademy-toolkit/assets/css/font-awesome.minc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/front-end-pm/assets/css/common-style6974.css') }}' type='text/css' media='all' />

    <style id='fep-common-style-inline-css' type='text/css'>
        #fep-wrapper{background-color:;color:#000000;} #fep-wrapper a:not(.fep-button,.fep-button-active) {color:#000080;} .fep-button{background-color:#F0FCFF;color:#000000;} .fep-button:hover,.fep-button-active{background-color:#D3EEF5;color:#000000;} .fep-odd-even > div:nth-child(odd) {background-color:#F2F7FC;} .fep-odd-even > div:nth-child(even) {background-color:#FAFAFA;} .fep-message .fep-message-title-heading, .fep-per-message .fep-message-title{background-color:#F2F7FC;} #fep-content-single-heads .fep-message-head:hover,#fep-content-single-heads .fep-message-head-active{background-color:#D3EEF5;color:#000000;}
    </style>

    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/templately/assets/css/editore7f0.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/assets/css/woocommerce-layout-rtlaf8e.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen-rtlaf8e.css') }}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/woocommerce/assets/css/woocommerce-rtlaf8e.css') }}' type='text/css' media='all' />

    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>

    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/wp-events-manager/inc/libraries/countdown/css/jquery.countdownc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/plugins/wp-events-manager/inc/libraries/magnific-popup/css/magnific-popupc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/themes/ecademy/style-rtlc8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/themes/ecademy/assets/css/vendor.mineca9.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/themes/ecademy/assets/css/woocommercec8d8.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/wp-content/themes/ecademy/assets/css/styleeca9.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ url('assets_public/css/style.css') }}' type='text/css' media='all' />

    <link rel='stylesheet' href='assets_public/wp-content/themes/ecademy/assets/css/responsiveeca9.css?ver=1643571367' type='text/css' media='all' />
    <link rel='stylesheet' id='ecademy-fonts-css'  href='http://fonts.googleapis.com/css2?family=Nunito%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&amp;display=swap&amp;ver=1.0.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.minc8d8.css?ver=5.8.3' type='text/css' media='all' />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
    </style>
    <link rel='stylesheet' id='elementor-icons-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'  href='assets_public/wp-content/plugins/elementor/assets/css/frontend-legacy-rtl.min1aae.css?ver=3.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'  href='assets_public/wp-content/plugins/elementor/assets/css/frontend-rtl.min1aae.css?ver=3.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-17-css'  href='assets_public/wp-content/uploads/elementor/css/post-173ea3.css?ver=1640783582' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.minbb93.css?ver=5.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.minbb93.css?ver=5.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-4679-css'  href='assets_public/wp-content/uploads/elementor/css/post-46792024.css?ver=1642420060' type='text/css' media='all' />
    <link rel='stylesheet' id='video-conferencing-with-zoom-api-css'  href='assets_public/wp-content/plugins/video-conferencing-with-zoom-api/assets/public/css/style.min3258.css?ver=3.8.16' type='text/css' media='all' />
    <link rel='stylesheet' id='redux-google-fonts-ecademy_opt-css'  href='https://fonts.googleapis.com/css?family=cairo&amp;ver=1640708942' type='text/css' media='all' />
    <link rel='stylesheet' id='learnpress-widgets-css'  href='assets_public/wp-content/plugins/learnpress/assets/css/widgets21c1.css?ver=4.1.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
    <script type="text/javascript">
        window._nslDOMReady = function (callback) {
            if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                callback();
            } else {
                document.addEventListener( "DOMContentLoaded", callback );
            }
        };
    </script><script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/ecademy-toolkit/inc/gradebook/assets/js/table-jsc8d8.js?ver=5.8.3' id='table-js-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/ecademy-toolkit/inc/gradebook/assets/js/gradebookc8d8.js?ver=5.8.3' id='gradebook-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/ecademy-toolkit/inc/gradebook/assets/js/papaparse.minc8d8.js?ver=5.8.3' id='papaparse-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/ecademy-toolkit/inc/gradebook/assets/js/frontend-gradebook-exportc8d8.js?ver=5.8.3' id='learn-press-gradebook-export-frontend-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/themes/ecademy/assets/js/vendor.mineca9.js?ver=1643571367' id='vendor-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/themes/ecademy/assets/js/jquery.smartifyeca9.js?ver=1643571367' id='jquery-smartify-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/themes/ecademy/assets/js/ecademy-smartifyeca9.js?ver=1643571367' id='ecademy-smartify-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/themes/ecademy/assets/js/cursor.mineca9.js?ver=1643571367' id='ecademy-cursor-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/themes/ecademy/assets/js/maineca9.js?ver=1643571367' id='ecademy-main-js'></script>

    <!-- Google Analytics snippet added by Site Kit -->
    <script type='text/javascript' src='https://www.googletagmanager.com/gtag/js?id=UA-214425829-1' id='google_gtagjs-js' async></script>
    <script type='text/javascript' id='google_gtagjs-js-after'>
        window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
        gtag('set', 'linker', {"domains":["aba-resources.com"]} );
        gtag("js", new Date());
        gtag("set", "developer_id.dZTNiMT", true);
        gtag("config", "UA-214425829-1", {"anonymize_ip":true});
        gtag("config", "G-JG38FFWY7B");
    </script>

    <!-- End Google Analytics snippet added by Site Kit -->
    <script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.minbb93.js?ver=5.0.0' id='font-awesome-4-shim-js'></script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/ecademy-toolkit/inc/content-drip/assets/js/frontendc8d8.js?ver=5.8.3' id='lpcd-frontend-js'></script>
    <script type='text/javascript' id='common-ajax-js-extra'>
        /* <![CDATA[ */
        var the_ajax_script = {"ajaxurl":"https:\/\/aba-resources.com\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='assets_public/wp-content/plugins/advance-bank-payment-transfer-gateway/includes/includes/js/commonc8d8.html?ver=5.8.3' id='common-ajax-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/4679.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.3" />
    <meta name="generator" content="WooCommerce 6.0.0" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed7a49.json?url=https%3A%2F%2Faba-resources.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedb2e5?url=https%3A%2F%2Faba-resources.com%2F&amp;format=xml" />
    <style type="text/css">
        @font-face { font-family:cairo;src:url(assets_public/wp-content/uploads/2021/11/Cairo-Regular_0.ttf) format('truetype');font-display: auto;}				</style>
    <meta name="generator" content="Site Kit by Google 1.48.1" />
    <style id="learn-press-custom-css">
        :root {
            --lp-primary-color: #b47f2b;
            --lp-secondary-color: #474747;
        }
    </style>

    <script src="../ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script>
        WebFont.load({
            google:{"families":["Cairo"],"subsets":""}				})
    </script>
    <script type="text/javascript">
        var ajaxurl = "wp-admin/admin-ajax.html";
    </script>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <link rel="icon" href="assets_public/wp-content/uploads/2021/11/cropped-BIG-LOGO-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets_public/wp-content/uploads/2021/11/cropped-BIG-LOGO-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets_public/wp-content/uploads/2021/11/cropped-BIG-LOGO-180x180.png" />
    <meta name="msapplication-TileImage" content="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/cropped-BIG-LOGO-270x270.png" />
    <style type="text/css">div.nsl-container[data-align="left"] {
            text-align: left;
        }

        div.nsl-container[data-align="center"] {
            text-align: center;
        }

        div.nsl-container[data-align="right"] {
            text-align: right;
        }


        div.nsl-container .nsl-container-buttons a {
            text-decoration: none !important;
            box-shadow: none !important;
            border: 0;
        }

        div.nsl-container .nsl-container-buttons {
            display: flex;
            padding: 5px 0;
        }

        div.nsl-container.nsl-container-block .nsl-container-buttons {
            display: inline-grid;
            grid-template-columns: minmax(145px, auto);
        }

        div.nsl-container-block-fullwidth .nsl-container-buttons {
            flex-flow: column;
            align-items: center;
        }

        div.nsl-container-block-fullwidth .nsl-container-buttons a,
        div.nsl-container-block .nsl-container-buttons a {
            flex: 1 1 auto;
            display: block;
            margin: 5px 0;
            width: 100%;
        }

        div.nsl-container-inline {
            margin: -5px;
            text-align: left;
        }

        div.nsl-container-inline .nsl-container-buttons {
            justify-content: center;
            flex-wrap: wrap;
        }

        div.nsl-container-inline .nsl-container-buttons a {
            margin: 5px;
            display: inline-block;
        }

        div.nsl-container-grid .nsl-container-buttons {
            flex-flow: row;
            align-items: center;
            flex-wrap: wrap;
        }

        div.nsl-container-grid .nsl-container-buttons a {
            flex: 1 1 auto;
            display: block;
            margin: 5px;
            max-width: 280px;
            width: 100%;
        }

        @media only screen and (min-width: 650px) {
            div.nsl-container-grid .nsl-container-buttons a {
                width: auto;
            }
        }

        div.nsl-container .nsl-button {
            cursor: pointer;
            vertical-align: top;
            border-radius: 4px;
        }

        div.nsl-container .nsl-button-default {
            color: #fff;
            display: flex;
        }

        div.nsl-container .nsl-button-icon {
            display: inline-block;
        }

        div.nsl-container .nsl-button-svg-container {
            flex: 0 0 auto;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        div.nsl-container svg {
            height: 24px;
            width: 24px;
            vertical-align: top;
        }

        div.nsl-container .nsl-button-default div.nsl-button-label-container {
            margin: 0 24px 0 12px;
            padding: 10px 0;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: .25px;
            overflow: hidden;
            text-align: center;
            text-overflow: clip;
            white-space: nowrap;
            flex: 1 1 auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-transform: none;
            display: inline-block;
        }

        div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
            margin: 1px;
            padding: 7px;
            border-radius: 3px;
            background: #fff;
        }

        div.nsl-container .nsl-button-google[data-skin="light"] {
            border-radius: 1px;
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
            color: RGBA(0, 0, 0, 0.54);
        }

        div.nsl-container .nsl-button-apple .nsl-button-svg-container {
            padding: 0 6px;
        }

        div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
            height: 40px;
            width: auto;
        }

        div.nsl-container .nsl-button-apple[data-skin="light"] {
            color: #000;
            box-shadow: 0 0 0 1px #000;
        }

        div.nsl-container .nsl-button-facebook[data-skin="white"] {
            color: #000;
            box-shadow: inset 0 0 0 1px #000;
        }

        div.nsl-container .nsl-button-facebook[data-skin="light"] {
            color: #1877F2;
            box-shadow: inset 0 0 0 1px #1877F2;
        }

        div.nsl-container .nsl-button-apple div.nsl-button-label-container {
            font-size: 17px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        div.nsl-container .nsl-button-slack div.nsl-button-label-container {
            font-size: 17px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        div.nsl-container .nsl-button-slack[data-skin="light"] {
            color: #000000;
            box-shadow: inset 0 0 0 1px #DDDDDD;
        }

        .nsl-clear {
            clear: both;
        }

        .nsl-container {
            clear: both;
        }

        /*Button align start*/

        div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
            justify-content: flex-start;
        }

        div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
            justify-content: center;
        }

        div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
            justify-content: flex-end;
        }


        div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
            justify-content: flex-start;
        }

        div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
            justify-content: center;
        }

        div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
            justify-content: flex-end;
        }

        div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
            justify-content: space-around;
        }

        div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
            justify-content: space-between;
        }

        /* Button align end*/

        /* Redirect */

        #nsl-redirect-overlay {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 1000000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(1px);
            background-color: RGBA(0, 0, 0, .32);;
        }

        #nsl-redirect-overlay-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }

        #nsl-redirect-overlay-spinner {
            content: '';
            display: block;
            margin: 20px;
            border: 9px solid RGBA(0, 0, 0, .6);
            border-top: 9px solid #fff;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
            width: 40px;
            height: 40px;
            animation: nsl-loader-spin 2s linear infinite;
        }

        @keyframes nsl-loader-spin {
            0% {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }

        #nsl-redirect-overlay-title {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: #3C434A;
        }

        #nsl-redirect-overlay-text {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            text-align: center;
            font-size: 14px;
            color: #3C434A;
        }

        /* Redirect END*/</style><style type="text/css" title="dynamic-css" class="options-output">.ecademy-nav .navbar .navbar-brand{width:180px;}.ecademy-responsive-menu>.logo>a>img{width:130px;}.preloader .loader .sbl-half-circle-spin, .preloader p{color:#dd9933;}.preloader p{font-family:cairo;line-height:40px;font-weight:normal;font-style:normal;font-size:40px;}.ecademy-nav .navbar .navbar-nav .nav-item a{font-family:cairo;font-weight:normal;font-style:normal;}.page-title-content h2{font-family:cairo;font-weight:normal;font-style:normal;}.page-title-content ul li, .learn-press-breadcrumb, .woocommerce-breadcrumb{font-family:cairo;font-weight:normal;font-style:normal;}.ecademy-cursor{background-color:#ddc133;}.ecademy-cursor2{border-color:#dd9933;}.ecademy-nav .navbar .navbar-nav .nav-item a, .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li a, .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a, .mean-container .mean-nav ul li a, .mean-container .mean-nav ul li li a{color:#221638;}.footer-area .single-footer-widget p, .footer-area .single-footer-widget ul li, .single-footer-widget .footer-contact-info li a{color:#e4e4e4;}body{font-family:cairo;}</style></head>

<body class="rtl home page-template page-template-elementor_header_footer page page-id-4679 theme-ecademy checkout courses become_a_teacher ecademy learnpress learnpress-page woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-17 elementor-page elementor-page-4679 eael-woo-cart">

<div class="navbar-area ">
    <div class="ecademy-responsive-nav">
        <div class="container">
            <div class="ecademy-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets_public/wp-content/uploads/2021/11/logoooo.png" alt="Aba Resources">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="ecademy-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets_public/wp-content/uploads/2021/11/logoooo.png" alt="Aba Resources">
                </a>

                <div class="collapse navbar-collapse mean-menu">

                    <ul id="menu-primary-menu-ar" class="navbar-nav ml-auto"><li id="menu-item-4346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4346 nav-item"><a title="من نحن" href="%d9%85%d9%86-%d9%86%d8%ad%d9%86/index.html" class="nav-link">من نحن</a></li>
                        <li id="menu-item-4382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4382 nav-item"><a title="للأسر" href="%d9%84%d9%84%d9%88%d8%a7%d9%84%d8%af%d9%8a%d9%86/index.html" class="nav-link">للأسر</a></li>
                        <li id="menu-item-4402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402 nav-item"><a title="للأخصائيين" href="%d9%84%d9%84%d9%85%d8%ad%d8%aa%d8%b1%d9%81%d9%8a%d9%86/index.html" class="nav-link">للأخصائيين</a></li>
                        <li id="menu-item-4408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4408 nav-item"><a title="للمؤسسات" href="%d9%84%d9%84%d9%85%d8%a4%d8%b3%d8%b3%d8%a7%d8%aa/index.html" class="nav-link">للمؤسسات</a></li>
                        <li id="menu-item-4433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4433 nav-item"><a title="المصادر" href="%d8%a7%d9%84%d9%83%d8%aa%d8%a7%d8%a8/index.html" class="nav-link">المصادر</a></li>
                        <li id="menu-item-4432" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4432 nav-item"><a title="اتصل بنا" href="%d8%a7%d8%aa%d8%b5%d9%84-%d8%a8%d9%86%d8%a7/index.html" class="nav-link">اتصل بنا</a></li>
                        <li id="menu-item-4678-en" class="lang-item lang-item-119 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-4678-en nav-item"><a title="English" href="en/elearning-school/index.html" class="nav-link" hreflang="en-US" lang="en-US">English</a></li>
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="%d8%b9%d8%b1%d8%a8%d8%a9-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%82/index.html"><i
                                        class="flaticon-shopping-cart"></i>
                                    <span class="mini-cart-count"></span></a>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="en/profile/index.html" class="default-btn">
                                <i class="flaticon-user"></i>
                                دخول/تسجيل<span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="%d8%b9%d8%b1%d8%a8%d8%a9-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%82/index.html"><i
                                        class="flaticon-shopping-cart"></i>
                                    <span class="mini-cart-count"></span></a>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="en/profile/index.html" class="default-btn">
                                <i class="flaticon-user"></i>
                                دخول/تسجيل<span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-elementor-type="wp-page" data-elementor-id="4679" class="elementor elementor-4679" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <div class="elementor-section elementor-top-section elementor-element elementor-element-0df3277 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0df3277" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-812c6ac" data-id="812c6ac" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-0fa4dd8 elementor-widget elementor-widget-eCademy_Main_Banner" data-id="0fa4dd8" data-element_type="widget" data-widget_type="eCademy_Main_Banner.default">
                                        <div class="elementor-widget-container">

                                            <div class="main-banner-area">
                                                <div class="container-fluid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="main-banner-content-style-two">
                                                                <h1 >
                                                                    أهلًا بكم في ABA Resources …                                        							</h1>
                                                                <p >المنصة الأولى عربياً  للمؤسسات والأسر و المختصين المهتمين بالتدريب على احدث الطرق العلمية والعملية  لتأهيل وتعليم الاطفال من ذوي الاضطرابات النمائية بشكل عام وذوي اضطراب طيف التوحد بشكل خاص.</p>
                                                                <a href="%d8%aa%d8%b3%d8%ac%d9%8a%d9%84-%d8%a7%d9%84%d8%af%d8%ae%d9%88%d9%84/index.html" class="default-btn"><i class="flaticon-user"></i>انضموا الينا<span></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="main-banner-image-style-two">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/65623256.png" alt="أهلًا بكم في ABA Resources …                                        ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="banner-shape1" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2020/06/k-shape5.png" alt="shape image">
                                                </div>

                                                <div class="banner-shape2" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2020/06/shape17.png" alt="shape image">
                                                </div>

                                                <div class="banner-shape3" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/banner-shape3.png" alt="shape image">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-8c9dd73 elementor-section-height-min-height elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-items-middle" data-id="8c9dd73" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c2c17b" data-id="1c2c17b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-abec076 elementor-widget elementor-widget-heading" data-id="abec076" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default"><strong><span style="color: #B47F2B;">QABA</span></strong></h2>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-486767d elementor-widget elementor-widget-text-editor" data-id="486767d" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p><span style="color: #ffffff;">برنامج بورد تحليل السلوك التطبيقي المعتمد/ من QABA </span></p>
                                                <p></p>
                                                <p><span style="color: #ffffff;">هذه البرامج مخصصة للمختصين ممن يقومون بتطبيق خدمات تحليل السلوك التطبيقي .</span></p>					</div>
                                        </div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-1d7799a elementor-section-full_width elementor-section-height-min-height elementor-section-content-middle elementor-section-height-default" data-id="1d7799a" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0876c6d" data-id="0876c6d" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-ce79d84 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="ce79d84" data-element_type="widget" data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <a class="elementor-icon elementor-animation-grow" href="ar/qasp-sar/index.html">
                                                                                <i aria-hidden="true" class="fas fa-chalkboard-teacher"></i>				</a>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h1 class="elementor-icon-box-title">
                                                                                <a href="ar/qasp-sar/index.html" >
                                                                                    QASP-S					</a>
                                                                            </h1>
                                                                            <p class="elementor-icon-box-description">
                                                                                هذا البرنامج مخصص للأخصائيين الحاصلين على درجة <span style="color: #bd9c09;"><strong> البكالوريوس </strong></span>					</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5573117" data-id="5573117" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-a0ed864 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a0ed864" data-element_type="widget" data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <a class="elementor-icon elementor-animation-bounce-in" href="ar/qbaar/index.html">
                                                                                <i aria-hidden="true" class="fas fa-user-plus"></i>				</a>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h1 class="elementor-icon-box-title">
                                                                                <a href="ar/qbaar/index.html" >
                                                                                    QBA					</a>
                                                                            </h1>
                                                                            <p class="elementor-icon-box-description">
                                                                                هذا البرنامج مخصص للأخصائيين الحاصلين على درجة <span style="color: #bd9c09;"><strong> الماجستير </strong></span>					</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="elementor-section elementor-top-section elementor-element elementor-element-3e224ed elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3e224ed" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-41e5934" data-id="41e5934" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-8705dda animated-slow elementor-invisible elementor-widget elementor-widget-Distance_Learning" data-id="8705dda" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="Distance_Learning.default">
                                        <div class="elementor-widget-container">
                                            <div class="about-area bg-fef8ef ptb-100">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="about-image">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                                                        <div class="image wow fadeInLeft">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/002.png" alt="About Us">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                                                        <div class="image wow fadeInDown">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/04.png" alt="About Us">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                                                        <div class="image wow fadeInUp">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/0303030.png" alt="About Us">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                                                        <div class="image wow fadeInRight">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/040404.png" alt="About Us">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="about-content">
                                                                <span class="sub-title"></span>
                                                                <h2 >نهدف إلى تطوير و تمكين المؤسسات والاسر و المختصين الذين يسعون إلى تقديم خدمات وتدخلات فعالة قائمة على الدليل العلمي.</h2>
                                                                <p >نوفر تدريب عالٍ الجودة وبتكلفة مناسبة يمكنكم الوصول اليه في اي وقت ومن اي مكان في العالم من خلال منصتنا الرقمية وباللغة العربية.
                                                                </p>
                                                                <ul class="features-list">
                                                                    <li><span><i class="flaticon-verify"></i> برامج متخصصة ومعتمدة دوليا</span></li>
                                                                    <li><span><i class="fa fa-book"></i> مصادر ومراجع عربية موثوقة</span></li>
                                                                    <li><span><i class="flaticon-computer"></i> تعلم رقمي ووجاهي  </span></li>
                                                                    <li><span><i class="flaticon-self-growth"></i> خبراء عرب</span></li>
                                                                </ul>

                                                                <a href="%d8%a7%d9%84%d8%b5%d9%81%d8%ad%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9/index.html" class="default-btn"><i class="flaticon-user"></i>عرض جميع الدورات<span></span></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="shape1" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape1.png" alt="About Us">
                                                </div>


                                                <div class="shape3" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape3.png" alt="About Us">
                                                </div>

                                                <div class="shape4" data-speed="0.06" data-revert="true">
                                                    <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape4.png" alt="About Us">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-9591f3f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9591f3f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-85e9f51" data-id="85e9f51" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-f1c6a4e courses-area ptb-100 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f1c6a4e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7eaa5b5" data-id="7eaa5b5" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-f81c27b elementor-widget elementor-widget-Section" data-id="f81c27b" data-element_type="widget" data-widget_type="Section.default">
                                        <div class="elementor-widget-container">
                                            <div class="section-title">
                                                <span class="sub-title">ABA Resources </span>
                                                <h2 >البرامج التدريبية الأكثر طلبا​</h2>
                                                <p >تم تصميم برامجنا وتقديمها من قبل خبراء في تحليل السلوك التطبيقي، التربية الخاصة، النطق واللغة، العلاج الوظيفي وعلم النفس واستنادًا إلى أحدث الأبحاث وبشهادات معتمدة دوليًا</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-98f2997 elementor-widget elementor-widget-eCademy_Courses" data-id="98f2997" data-element_type="widget" data-widget_type="eCademy_Courses.default">
                                        <div class="elementor-widget-container">

                                            <div class="container">
                                                <div class="courses-slides owl-carousel owl-theme">
                                                    <div class="single-courses-box ">
                                                        <div class="courses-image">
                                                            <a href="course/%d9%85%d9%8f%d8%ad%d9%84%d9%84-%d8%b3%d9%84%d9%88%d9%83-%d9%85%d8%b9%d8%aa%d9%85%d8%af-qba%e2%80%8b/index.html" class="d-block image">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/pexels-vlada-karpovich-4050320-750x500.jpg" alt="">
                                                            </a>

                                                            <div class="course-price">
                                                                <span class="price">مجانية</span>

                                                            </div>
                                                        </div>
                                                        <div class="courses-content">
                                                            <div class="course-author d-flex align-items-center">
                                                                <img loading="lazy" alt="Mahmoud Al Sheyab" src="assets_public/wp-content/uploads/learn-press-profile/4/1dba2da5251beafe816abf0f575ae187.png" class="avatar avatar-96 photo" height="251" width="250" />                                    <span><a href="en/profile/Mahmoud%2bAl%2bSheyab/indexd6cc.html?lang=ar"><span>Mahmoud Al Sheyab</span></a></span>
                                                            </div>
                                                            <h3><a href="course/%d9%85%d9%8f%d8%ad%d9%84%d9%84-%d8%b3%d9%84%d9%88%d9%83-%d9%85%d8%b9%d8%aa%d9%85%d8%af-qba%e2%80%8b/index.html">محمي: مُحلل سلوك معتمد QBA</a></h3>
                                                            <p><p>لا يوجد مختصر لأن هذه المقالة محمية بكلمة مرور.</p>
                                                            </p>

                                                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                                                <li>
                                                                    <i class='flaticon-agenda'></i>
                                                                    4 جلسة                                     </li>

                                                                <li>
                                                                    <i class='flaticon-people'></i> 61  تلاميذ                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="single-courses-box ">
                                                        <div class="courses-image">
                                                            <a href="course/%d8%a7%d9%84%d8%b9%d9%84%d8%a7%d8%ac-%d8%a8%d8%a7%d9%84%d9%82%d8%a8%d9%88%d9%84-%d9%88%d8%a7%d9%84%d8%a5%d9%84%d8%aa%d8%b2%d8%a7%d9%85/index.html" class="d-block image">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/pexels-artem-podrez-5125231-1-750x500.jpg" alt="">
                                                            </a>

                                                            <div class="course-price">		<span class="origin-price">&#x62f;.&#x627;250</span>

                                                                <span class="price">&#x62f;.&#x627;160</span>

                                                            </div>
                                                        </div>
                                                        <div class="courses-content">
                                                            <div class="course-author d-flex align-items-center">
                                                                <img alt='User Avatar' src='https://secure.gravatar.com/avatar/cd3b7aae8059076407aa3b393339467b?s=96&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/cd3b7aae8059076407aa3b393339467b?s=192&#038;d=mm&#038;r=g 2x' class='avatar avatar-96 photo' height='251' width='250' loading='lazy'/>                                    <span><a href="en/profile/Abeer%2bLababneh/indexd6cc.html?lang=ar"><span>abeer Lababneh</span></a></span>
                                                            </div>
                                                            <h3><a href="course/%d8%a7%d9%84%d8%b9%d9%84%d8%a7%d8%ac-%d8%a8%d8%a7%d9%84%d9%82%d8%a8%d9%88%d9%84-%d9%88%d8%a7%d9%84%d8%a5%d9%84%d8%aa%d8%b2%d8%a7%d9%85/index.html">العلاج بالقبول والالتزام</a></h3>
                                                            <p><p>يساعد العلاج بالقبول والالتزام ACT الناس على قبول صعوباتهم والمضي قدمًا ، تاركين السلبيات وراءهم ، ويعتقد العديد من علماء </p>
                                                            </p>

                                                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                                                <li>
                                                                    <i class='flaticon-agenda'></i>
                                                                    9 جلسة                                     </li>

                                                                <li>
                                                                    <i class='flaticon-people'></i> 1  تلاميذ                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="single-courses-box ">
                                                        <div class="courses-image">
                                                            <a href="course/learning-language-loving-it/index.html" class="d-block image">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/13131313-750x500.png" alt="">
                                                            </a>

                                                            <div class="course-price">		<span class="origin-price">&#x62f;.&#x627;200</span>

                                                                <span class="price">&#x62f;.&#x627;170</span>

                                                            </div>
                                                        </div>
                                                        <div class="courses-content">
                                                            <div class="course-author d-flex align-items-center">
                                                                <img loading="lazy" alt="Faten Al Ansari" src="assets_public/wp-content/uploads/learn-press-profile/8/8ca5c42dabfc246823769783fdf5e0ee.png" class="avatar avatar-96 photo" height="251" width="250" />                                    <span><a href="en/profile/Faten%2bAl%2bAnsari/indexd6cc.html?lang=ar"><span>Faten Al Ansari</span></a></span>
                                                            </div>
                                                            <h3><a href="course/learning-language-loving-it/index.html">Learning Language &#038; Loving it</a></h3>
                                                            <p><p>يبدأ التدريب بتاريخ 5-3-2022 ولمدة 3 اسابيع، ايام السبت والاثنين والأربعاء من كل أسبوع من الساعة السابعة مساءً وحتى العاشرة </p>
                                                            </p>

                                                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                                                <li>
                                                                    <i class='flaticon-agenda'></i>
                                                                    8 جلسة                                     </li>

                                                                <li>
                                                                    <i class='flaticon-people'></i> 33  تلاميذ                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="single-courses-box ">
                                                        <div class="courses-image">
                                                            <a href="course/%d8%a8%d8%b1%d9%86%d8%a7%d9%85%d8%ac-%d9%81%d9%86%d9%8a-%d8%a7%d9%84%d8%b3%d9%84%d9%88%d9%83-%d8%a7%d9%84%d9%85%d8%b3%d8%ac%d9%84-rbt-%d8%a7%d9%84%d8%aa%d8%af%d8%b1%d9%8a%d8%a8%d9%8a-%d8%a7%d9%84/index.html" class="d-block image">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/0L9A6185-750x500.png" alt="">
                                                            </a>

                                                            <div class="course-price">		<span class="origin-price">&#x62f;.&#x627;350</span>

                                                                <span class="price">&#x62f;.&#x627;250</span>

                                                            </div>
                                                        </div>
                                                        <div class="courses-content">
                                                            <div class="course-author d-flex align-items-center">
                                                                <img loading="lazy" alt="Mahmoud Al Sheyab" src="assets_public/wp-content/uploads/learn-press-profile/4/1dba2da5251beafe816abf0f575ae187.png" class="avatar avatar-96 photo" height="251" width="250" />                                    <span><a href="en/profile/Mahmoud%2bAl%2bSheyab/indexd6cc.html?lang=ar"><span>Mahmoud Al Sheyab</span></a></span>
                                                            </div>
                                                            <h3><a href="course/%d8%a8%d8%b1%d9%86%d8%a7%d9%85%d8%ac-%d9%81%d9%86%d9%8a-%d8%a7%d9%84%d8%b3%d9%84%d9%88%d9%83-%d8%a7%d9%84%d9%85%d8%b3%d8%ac%d9%84-rbt-%d8%a7%d9%84%d8%aa%d8%af%d8%b1%d9%8a%d8%a8%d9%8a-%d8%a7%d9%84/index.html">البرنامج المكثف في استراتيجيات وتطبيقات تحليل السلوك التطبيقي والتوحد &#8211; المستوى الاول</a></h3>
                                                            <p><p>سيتمكن الأفراد المشاركين بهذا البرنامج التدريبي من اكتساب المعرفة والمهارات والاستراتيجيات اللازمة لتطبيق تحليل السلوك التطبيقي بمهنية واحتراف عاليين. هدفنا هو تهيئة افراد قادرين على اتباع وممارسة الواجبات والمسؤوليات حسب أسس علمية معتمدة ومحكمة</p>
                                                            </p>

                                                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                                                <li>
                                                                    <i class='flaticon-agenda'></i>
                                                                    16 جلسة                                     </li>

                                                                <li>
                                                                    <i class='flaticon-people'></i> 995  تلاميذ                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="single-courses-box ">
                                                        <div class="courses-image">
                                                            <a href="course/more-than-words/index.html" class="d-block image">
                                                                <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/3656-750x500.png" alt="">
                                                            </a>

                                                            <div class="course-price">		<span class="origin-price">&#x62f;.&#x627;200</span>

                                                                <span class="price">&#x62f;.&#x627;170</span>

                                                            </div>
                                                        </div>
                                                        <div class="courses-content">
                                                            <div class="course-author d-flex align-items-center">
                                                                <img loading="lazy" alt="Faten Al Ansari" src="assets_public/wp-content/uploads/learn-press-profile/8/8ca5c42dabfc246823769783fdf5e0ee.png" class="avatar avatar-96 photo" height="251" width="250" />                                    <span><a href="en/profile/Faten%2bAl%2bAnsari/indexd6cc.html?lang=ar"><span>Faten Al Ansari</span></a></span>
                                                            </div>
                                                            <h3><a href="course/more-than-words/index.html">More than words</a></h3>
                                                            <p><p>يبدأ التدريب بتاريخ 5-2-2022 ولمدة 3 اسابيع، ايام السبت والاثنين والأربعاء من كل أسبوع من الساعة السابعة مساءً وحتى العاشرة </p>
                                                            </p>

                                                            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                                                <li>
                                                                    <i class='flaticon-agenda'></i>
                                                                    11 جلسة                                     </li>

                                                                <li>
                                                                    <i class='flaticon-people'></i> 28  تلاميذ                                    </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="courses-info">
                                                    <p>استمتع بأساليب التعلم من الدرجة الأولى وحقق مهارات المستوى التالي! أنت منشئ حياتك المهنية وسنوجهك خلال ذلك. <a href="%d9%84%d9%84%d9%85%d8%ad%d8%aa%d8%b1%d9%81%d9%8a%d9%86/index.html"><strong>سجل مجانا الآن !.</strong>​</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-inner-section elementor-element elementor-element-91bb114 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="91bb114" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ab8567c" data-id="ab8567c" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-ed94f5b elementor-widget elementor-widget-spacer" data-id="ed94f5b" data-element_type="widget" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6854cc0 elementor-widget elementor-widget-eCademy_Video_Box" data-id="6854cc0" data-element_type="widget" data-widget_type="eCademy_Video_Box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="video-box">
                                                                        <div class="image">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/0L9A6119.jpg" class="shadow" alt="Video Image">
                                                                        </div>

                                                                        <a href="https://yhttps://www.youtube.com/watch?v=c6Y7sBqaTJY" class="video-btn popup-youtube"><i class="flaticon-play"></i></a>

                                                                        <div class="shape10" data-speed="0.03" data-revert="true">
                                                                            <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape9.png" alt="Shape Image">
                                                                        </div>
                                                                    </div>

                                                                    <div class="shape2" data-speed="0.03" data-revert="true">
                                                                        <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape2.png" alt="Shape Image">
                                                                    </div>
                                                                    <div class="shape3" data-speed="0.03" data-revert="true">
                                                                        <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape3.png" alt="Shape Image">
                                                                    </div>
                                                                    <div class="shape4" data-speed="0.03" data-revert="true">
                                                                        <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape4.png" alt="Shape Image">
                                                                    </div>
                                                                    <div class="shape9" data-speed="0.03" data-revert="true">
                                                                        <img sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2020/05/shape8.png" alt="Shape Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-416dc37 courses-area ptb-100 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="416dc37" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9197fb5" data-id="9197fb5" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-ba6155a elementor-widget elementor-widget-Section" data-id="ba6155a" data-element_type="widget" data-widget_type="Section.default">
                                        <div class="elementor-widget-container">
                                            <div class="section-title">
                                                <span class="sub-title">اسشارة عن بعد / بشكل مباشر</span>
                                                <h2 >الاستشارات </h2>
                                                <p >نقدم اسشارات علمية متخصصة توفر ارشادات مناسبة واستراتيجية من شأنها أن تساعدكم على تحسين الخدمات المقدمة القائمة على الادلى العلمية. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4df1060 elementor-widget elementor-widget-eCademy_Features_Boxe" data-id="4df1060" data-element_type="widget" data-widget_type="eCademy_Features_Boxe.default">
                                        <div class="elementor-widget-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="single-lifestyle-box">
                                                            <div class="icon">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <h3>للأخصائين</h3>
                                                            <p>نساعد اخصائين السلوك التربية الخاصة، النطق واللغة، العلاج الوظيفي والمعلمين بشكل مباشر ومستمر على تجاوز التحديات التطبيقية لتقديم خدماتهم بجودة عالية.</p>

                                                            <a target="_self" href ="%d8%a7%d9%84%d8%b5%d9%81%d8%ad%d8%a9-%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d8%a9/index.html" class="link-btn">احجز الآن</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="single-lifestyle-box">
                                                            <div class="icon">
                                                                <i class="flaticon-people"></i>
                                                            </div>
                                                            <h3>للأسرة والطفل</h3>
                                                            <p>نساعد الأسر في تخطيط رحلة علاج اطفالهم وتجاوز التحديات التي يواجهونها، والتحقق من جودة الخدمات المقدمة لهم بالاستناد إلى منهجيات علمية محكمة٫</p>

                                                            <a target="_self" href ="%d8%a7%d8%b3%d8%aa%d8%b4%d8%a7%d8%b1%d8%a7%d8%aa-%d8%a7%d9%84%d8%a3%d9%87%d8%a7%d9%84%d9%8a/index.html" class="link-btn">احجز الآن</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <div class="single-lifestyle-box">
                                                            <div class="icon">
                                                                <i class="fa fa-building-o"></i>
                                                            </div>
                                                            <h3>للمؤسسات</h3>
                                                            <p>نقدم للمؤسسات الحكومية والخاصة حلول علمية مبتكرة ومتخصصة وقابلة للتطبيق تضمن خدمات عالية الجودة بأعلى المعاير العالمية.</p>

                                                            <a target="_self" href ="en/consultation-for-organisations/index.html" class="link-btn">احجز الآن</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-b16fa0c elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="b16fa0c" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5cf6e2f" data-id="5cf6e2f" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-9505f41 elementor-widget elementor-widget-Feedback" data-id="9505f41" data-element_type="widget" data-widget_type="Feedback.default">
                                        <div class="elementor-widget-container">
                                            <div class="testimonials-area ptb-100">
                                                <div class="container">
                                                    <div class="section-title">
                                                        <span class="sub-title"></span>
                                                        <h2 >برامج متخصصة معتمدة دوليًا</h2>
                                                        <p >نقدم مجموعة من البرامج المتخصصة والمعتمدة دوليا التي تستهدف رفع كفاءة ومهارات المعلمين المختصين والأسر حول الوطن العربي في مجالات علم تحليل السلوك التطبييقي (ABA) والعلوم التأهيلية ذات العلاقة لتحسين الخدمات المقدمة للأطفال والاشخاص ذوي التحديات</p>
                                                    </div>

                                                    <div class="testimonials-slides owl-carousel owl-theme">
                                                        <div class="single-testimonials-item">
                                                            <img class="client-img" sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2021/11/Unknown-e1637069168445.jpeg" alt="د. سهام حميمات">

                                                            <p>هذه الدورة كانت حول مبادئ وممارسات تحليل السلوك التطبيقي مع التركيز على كيفية تدريس المهارات بما في ذلك المهارات اللغوية والاجتماعية للأطفال في المنزل والمدرسة. يشمل التدريب أيضًا كيفية استخدام أساليب واستراتيجيات إدارة السلوك في المنزل والمدرسة.
                                                                التدريب مفيد وواضح، واعتمد على فنيات متنوعة تثري الجانب النظري والعملي من خلال تقديم أمثلة ومشاركة المتدربين وتحفيزهم على توظيف التقنيات المطروحة في مواقف تعليمية.
                                                            </p>
                                                            <h3>د. سهام حميمات</h3>
                                                            <span> مديرة مركز للتوحد - الإمارات العربية المتحدة</span>

                                                            <div class="shape-img">
                                                            </div>
                                                        </div>
                                                        <div class="single-testimonials-item">
                                                            <img class="client-img" sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2021/11/WhatsApp-Image-2021-11-14-at-11.29.06-PM-e1636996783149.jpeg" alt="د. بلال بني سلامة">

                                                            <p>يتميز التدريب بعرض المادة العلمية بطريقة مبسطة ورائعة مع التطبيق العملي بتنظيم رائع ممنهج.
                                                            </p>
                                                            <h3>د. بلال بني سلامة</h3>
                                                            <span>دكتور التربية الخاصة - الأردن</span>

                                                            <div class="shape-img">
                                                            </div>
                                                        </div>
                                                        <div class="single-testimonials-item">
                                                            <img class="client-img" sm-src="https://aba-resources.josequal.net/assets_public/wp-content/uploads/2021/11/WhatsApp-Image-2021-11-15-at-12.47.36-PM-scaled-e1636996919168.jpeg" alt="هيفاء العمري الخاصة - الأردن">

                                                            <p>تجربة رائعة أضافت لي الكثير من العلم والمعرفة وفتحت لي آفاق جديدة .اشكركم من كل قلبي</p>
                                                            <h3>هيفاء العمري الخاصة - الأردن</h3>
                                                            <span> أخصائية سلوك ومالكة مركز للتربية</span>

                                                            <div class="shape-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-485ae61 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="485ae61" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-08a7d6a" data-id="08a7d6a" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-b4134b8" data-id="b4134b8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-cf6b05c elementor-widget elementor-widget-spacer" data-id="cf6b05c" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6fe0232 elementor-widget elementor-widget-counter" data-id="6fe0232" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="800" data-from-value="0">0</span>
                                                    <span class="elementor-counter-number-suffix"></span>
                                                </div>
                                                <div class="elementor-counter-title">اخصائي/ة</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3a4e4f0 elementor-widget elementor-widget-spacer" data-id="3a4e4f0" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-7feada9" data-id="7feada9" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-db956d2 elementor-widget elementor-widget-spacer" data-id="db956d2" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-816d323 elementor-widget elementor-widget-counter" data-id="816d323" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="1285" data-from-value="0">0</span>
                                                    <span class="elementor-counter-number-suffix"></span>
                                                </div>
                                                <div class="elementor-counter-title">الأسر​</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-651b966 elementor-widget elementor-widget-spacer" data-id="651b966" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-ce33853" data-id="ce33853" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-cc63cfb elementor-widget elementor-widget-spacer" data-id="cc63cfb" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-794f6d5 elementor-widget elementor-widget-counter" data-id="794f6d5" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="37" data-from-value="0">0</span>
                                                    <span class="elementor-counter-number-suffix"></span>
                                                </div>
                                                <div class="elementor-counter-title">دولة</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-efdc70d elementor-widget elementor-widget-spacer" data-id="efdc70d" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-65b0e5b" data-id="65b0e5b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-23fa099 elementor-widget elementor-widget-spacer" data-id="23fa099" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-add4217 elementor-widget elementor-widget-counter" data-id="add4217" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="1080" data-from-value="0">0</span>
                                                    <span class="elementor-counter-number-suffix"></span>
                                                </div>
                                                <div class="elementor-counter-title">ساعة تدريبية</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-27637ba elementor-widget elementor-widget-spacer" data-id="27637ba" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-4fe4f7b" data-id="4fe4f7b" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c278e45 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c278e45" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9045dcf" data-id="9045dcf" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="elementor-section elementor-top-section elementor-element elementor-element-dec0ba9 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="dec0ba9" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b1aeead" data-id="b1aeead" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-83d54c7 elementor-widget elementor-widget-heading" data-id="83d54c7" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">عملاؤنا</h2>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-6567540 elementor-widget elementor-widget-spacer" data-id="6567540" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-950282a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="950282a" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ed772ba" data-id="ed772ba" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-6a15c85" data-id="6a15c85" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-572c19f elementor-widget elementor-widget-spacer" data-id="572c19f" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-446350f elementor-widget elementor-widget-image" data-id="446350f" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="640" height="641" src="assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o.png 970w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-300x300.png 300w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-150x150.png 150w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-768x769.png 768w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-400x400.png 400w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-600x601.png 600w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/11044531_728735613891662_2283512200475810724_o-100x100.png 100w" sizes="(max-width: 640px) 100vw, 640px" />														</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-0c1c38c" data-id="0c1c38c" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-bc23bf6 elementor-widget elementor-widget-spacer" data-id="bc23bf6" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-918fc42 elementor-widget elementor-widget-image" data-id="918fc42" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="640" height="266" src="assets_public/wp-content/uploads/2021/11/%d8%b3%d9%88%d8%a7%d8%a7%d8%a7-1-e1637314017762-1024x425.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-1024x425.png 1024w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-600x249.png 600w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-300x125.png 300w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-768x319.png 768w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-1536x638.png 1536w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/سوااا-1-e1637314017762-2048x851.png 2048w" sizes="(max-width: 640px) 100vw, 640px" />														</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0a1fe77 elementor-widget elementor-widget-spacer" data-id="0a1fe77" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-22659f0 elementor-widget elementor-widget-heading" data-id="22659f0" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">أكاديمية سوا للتربية الخاصة</p>		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-9a638ae" data-id="9a638ae" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-9d577cc elementor-widget elementor-widget-spacer" data-id="9d577cc" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9484432 elementor-widget elementor-widget-image" data-id="9484432" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="640" height="266" src="assets_public/wp-content/uploads/2021/11/%d9%81%d9%8a%d8%b1%d8%b3%d8%aa-%d8%b3%d8%aa%d9%8a%d8%a8-1-e1637314062955-1024x425.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-1024x425.png 1024w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-600x249.png 600w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-300x125.png 300w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-768x319.png 768w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-1536x638.png 1536w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/فيرست-ستيب-1-e1637314062955-2048x851.png 2048w" sizes="(max-width: 640px) 100vw, 640px" />														</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-976ed8d elementor-widget elementor-widget-spacer" data-id="976ed8d" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-76d9a8d elementor-widget elementor-widget-heading" data-id="76d9a8d" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">مركز فيرست ستيب للاستشارات </p>		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-222fedf" data-id="222fedf" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-69020fa elementor-widget elementor-widget-spacer" data-id="69020fa" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d565903 elementor-widget elementor-widget-image" data-id="d565903" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="100" height="102" src="assets_public/wp-content/uploads/2021/11/5454545-e1637052492387.png" class="attachment-large size-large" alt="" loading="lazy" />														</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-72fe8f5 elementor-widget elementor-widget-heading" data-id="72fe8f5" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">الجمعية الاردنية للتأهيل النفسي - الصفصاف </p>		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-72a344f" data-id="72a344f" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2ba1095 elementor-widget elementor-widget-image" data-id="2ba1095" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="150" height="150" src="assets_public/wp-content/uploads/2021/11/tag-fasela-ai-e1637313772349-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/tag-fasela-ai-e1637313772349-150x150.png 150w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/tag-fasela-ai-e1637313772349-100x100.png 100w, https://aba-resources.com/assets_public/wp-content/uploads/2021/11/tag-fasela-ai-e1637313772349.png 190w" sizes="(max-width: 150px) 100vw, 150px" />														</div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3431a5c elementor-widget elementor-widget-heading" data-id="3431a5c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">مشروع فسيلة </p>		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-337f05e" data-id="337f05e" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-63d89a0 elementor-section-full_width blog-area pt-100 pb-70 elementor-section-height-default elementor-section-height-default" data-id="63d89a0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7246d2" data-id="a7246d2" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-137a33f elementor-widget elementor-widget-spacer" data-id="137a33f" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-90ad2dc elementor-widget elementor-widget-Section" data-id="90ad2dc" data-element_type="widget" data-widget_type="Section.default">
                                        <div class="elementor-widget-container">
                                            <div class="section-title">
                                                <span class="sub-title">الأخبار والمدونات</span>
                                                <h2 >أحدث إصداراتنا</h2>
                                                <p >نحن دائمًا نولي اهتمامًا إضافيًا بتقديم مصادر تهدف إلى تحسين مهارات عملاءنا ونشعر بالحماس لمشاركة أحدث أبحاثنا ومصادرنا.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e549764 elementor-widget elementor-widget-eCademy_Posts" data-id="e549764" data-element_type="widget" data-widget_type="eCademy_Posts.default">
                                        <div class="elementor-widget-container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-blog-post">
                                                            <div class="post-image">
                                                                <a href="%d8%aa%d8%b4%d8%ac%d9%8a%d8%b9-%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d8%b1-%d8%a7%d9%84%d9%84%d8%ba%d9%88%d9%8a-%d8%a7%d9%84%d9%85%d8%a8%d9%83%d8%b1-%d8%b9%d9%86%d8%af-%d8%a7%d9%84%d8%a3%d8%b7%d9%81%d8%a7/index.html" class="d-block">
                                                                    <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2020/05/video-img1-750x500.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3><a href="%d8%aa%d8%b4%d8%ac%d9%8a%d8%b9-%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d8%b1-%d8%a7%d9%84%d9%84%d8%ba%d9%88%d9%8a-%d8%a7%d9%84%d9%85%d8%a8%d9%83%d8%b1-%d8%b9%d9%86%d8%af-%d8%a7%d9%84%d8%a3%d8%b7%d9%81%d8%a7/index.html">تشجيع التطور اللغوي المبكر عند الأطفال</a></h3>
                                                                <ul class="post-content-footer d-flex justify-content-between align-items-center">
                                                                    <li>
                                                                        <div class="post-author d-flex align-items-center">
                                                                            <img sm-src="https://secure.gravatar.com/avatar/0d75d450e8a61232bad5ea68a8fe4765?s=51&#038;d=mm&#038;r=g" class="rounded-circle" alt="Faten Al Ansari">
                                                                            <span>Faten Al Ansari</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class='flaticon-calendar'></i> 2021-11-17                                            </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-blog-post">
                                                            <div class="post-image">
                                                                <a href="%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d8%b1-%d8%a7%d9%84%d9%84%d8%ba%d9%88%d9%8a/index.html" class="d-block">
                                                                    <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2020/07/kindergarten-img4-750x500.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3><a href="%d8%a7%d9%84%d8%aa%d8%b7%d9%88%d8%b1-%d8%a7%d9%84%d9%84%d8%ba%d9%88%d9%8a/index.html">التطور اللغوي</a></h3>
                                                                <ul class="post-content-footer d-flex justify-content-between align-items-center">
                                                                    <li>
                                                                        <div class="post-author d-flex align-items-center">
                                                                            <img sm-src="https://secure.gravatar.com/avatar/0d75d450e8a61232bad5ea68a8fe4765?s=51&#038;d=mm&#038;r=g" class="rounded-circle" alt="Faten Al Ansari">
                                                                            <span>Faten Al Ansari</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class='flaticon-calendar'></i> 2021-11-17                                            </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single-blog-post">
                                                            <div class="post-image">
                                                                <a href="%d8%aa%d8%af%d8%b1%d9%8a%d8%a8-%d8%a7%d9%84%d9%85%d8%ad%d8%a7%d9%88%d9%84%d8%a7%d8%aa-%d8%a7%d9%84%d9%85%d9%86%d9%81%d8%b5%d9%84%d8%a9-dtt/index.html" class="d-block">
                                                                    <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2020/07/kindergarten-blog-img1-750x500.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3><a href="%d8%aa%d8%af%d8%b1%d9%8a%d8%a8-%d8%a7%d9%84%d9%85%d8%ad%d8%a7%d9%88%d9%84%d8%a7%d8%aa-%d8%a7%d9%84%d9%85%d9%86%d9%81%d8%b5%d9%84%d8%a9-dtt/index.html">تدريب المحاولات المنفصلة (DTT)</a></h3>
                                                                <ul class="post-content-footer d-flex justify-content-between align-items-center">
                                                                    <li>
                                                                        <div class="post-author d-flex align-items-center">
                                                                            <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/nsl_avatars/a59f598678fa9762af119debb2ca10be.png" class="rounded-circle" alt="Sara Ibrahim Essa AL - Adarbeh">
                                                                            <span>Sara Ibrahim Essa AL - Adarbeh</span>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <i class='flaticon-calendar'></i> 2021-11-17                                            </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c273545 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c273545" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10aabec" data-id="10aabec" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-1943480 elementor-widget elementor-widget-shortcode" data-id="1943480" data-element_type="widget" data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">

                                                <div class="leaflet-map WPLeafletMap" style="height:500px; width:100%;"></div><script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMapShortcode() {/*<script>*/
                                                        var baseUrl = '../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png';
                                                        var base = (!baseUrl && window.MQ) ?
                                                            window.MQ.mapLayer() : L.tileLayer(baseUrl,
                                                                L.Util.extend({}, {
                                                                        detectRetina: 0,
                                                                        minZoom: 0,
                                                                        maxZoom: 20,
                                                                    },
                                                                    {"subdomains":"abc","noWrap":false}        )
                                                            );
                                                        var options = L.Util.extend({}, {
                                                                layers: [base],
                                                                attributionControl: false
                                                            },
                                                            {"zoomControl":true,"scrollWheelZoom":false,"doubleClickZoom":true,"fitBounds":true,"minZoom":0,"maxZoom":20,"attribution":"<a href=\"http:\/\/leafletjs.com\" title=\"A JS library for interactive maps\">Leaflet<\/a>; \u00a9 <a href=\"http:\/\/www.openstreetmap.org\/copyright\">OpenStreetMap<\/a> contributors"},
                                                            {});
                                                        window.WPLeafletMapPlugin.createMap(options).setView([44.67,-63.61],11);});</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [25.6242618,42.3528328],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [28.0000272,2.9999825],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [33.0955793,44.1749775],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [33.8439408,9.400138],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [29.2733964,47.4979476],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [21.0000287,57.0036901],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>




                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [26.2540493,29.2675469],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>



                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [24.0002488,53.9994829],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [31.1667049,36.941628],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [25.3336984,51.2295295],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [26.8234472,18.1236723],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [8.0300284,-1.0800271],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [39.7837304,-100.445882],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [34.6401861,39.0494106],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [31.5313113,34.8667654],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [33.8750629,35.843409],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [26.1551249,50.5344606],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [16.3471243,47.8915271],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [-24.7761086,134.755],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [46.603354,1.8883335],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [52.15517,5.38721],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [59.6749712,14.5208584],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [54.7023545,-3.2765753],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>

                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [61.0666922,-107.991707],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [34.9823018,33.1451285],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [55.670249,10.3333283],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [51.0834196,10.4234469],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [38.9597594,34.9249653],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [47.2,13.2],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [52.865196,-7.9794599],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [-4.0324901,22.457478747924],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [39.3260685,-4.8379791],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [42.6384261,12.674297],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [60.5000209,9.0999715],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [8.0300284,-1.0800271],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>


                                                <script>
                                                    window.WPLeafletMapPlugin = window.WPLeafletMapPlugin || [];
                                                    window.WPLeafletMapPlugin.push(function WPLeafletMarkerShortcode() {/*<script>*/
                                                        var map = window.WPLeafletMapPlugin.getCurrentMap();
                                                        var group = window.WPLeafletMapPlugin.getCurrentGroup();
                                                        var marker_options = window.WPLeafletMapPlugin.getIconOptions({"iconUrl":"https:\/\/aba-resources.josequal.net\/wp-content\/uploads\/2021\/11\/cropped-BIG-LOGO.png","iconSize":"30,30"});
                                                        var marker = L.marker(
                                                            [63.2467777,25.9209164],
                                                            marker_options
                                                        );
                                                        var is_image = map.is_image_map;
                                                        if (marker_options.draggable) {
                                                            marker.on('dragend', function () {
                                                                var latlng = this.getLatLng();
                                                                var lat = latlng.lat;
                                                                var lng = latlng.lng;
                                                                if (is_image) {
                                                                    console.log('leaflet-marker y=' + lat + ' x=' + lng);
                                                                } else {
                                                                    console.log('leaflet-marker lat=' + lat + ' lng=' + lng);
                                                                }
                                                            });
                                                        }
                                                        marker.addTo( group );
                                                        window.WPLeafletMapPlugin.markers.push( marker );
                                                    });</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>





<footer class="footer-area">

    <div class="container">

        <div class="row">



            <div class="col-lg-4 col-md-4">

                <div class="single-footer-widget">



                    <a class="logo" href="index.html">



                        <img sm-src="https://aba-resources.com/assets_public/wp-content/uploads/2021/11/Symbol-png-1-e1638089416404.png" alt="Aba Resources">



                    </a>


                    <p>نعمل على إحداث تغييرات كبيرة في التعلم المستند إلى الإنترنت من خلال إجراء بحث مكثف لإعداد مناهج الدورة التدريبية ، ومشاركة الطلاب ، والتطلع إلى التعليم المرن!</p>



                    <ul class="social-link">
                        <li>
                            <a class="d-block twitter" target="_blank" href="https://twitter.com/abaresourcesjo"> <i class="bx bxl-twitter"></i></a>
                        </li>


                        <li>
                            <a class="d-block facebook" target="_blank" href="https://www.facebook.com/abaresourcesjo/"> <i class="bx bxl-facebook"></i></a>
                        </li>

                        <li>
                            <a class="d-block instagram" target="_blank" href="https://www.instagram.com/abaresourcesjo/"> <i class="bx bxl-instagram"></i></a>
                        </li>

                        <li>
                            <a class="d-block" target="_blank" href="https://www.linkedin.com/company/abaresourcesjo" > <i class="bx bxl-linkedin"></i></a>
                        </li>









                    </ul>


                </div>

            </div>





            <div class="single-footer-widget col-lg-4 col-md-4 widget_nav_menu"><h3>يكتشف</h3><div class="menu-footer-explore-container"><ul id="menu-footer-explore" class="menu"><li id="menu-item-8006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4679 current_page_item menu-item-8006"><a href="index.html" aria-current="page">الصفحة الرئيسية</a></li>
                        <li id="menu-item-8007" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8007"><a href="%d9%85%d9%86-%d9%86%d8%ad%d9%86/index.html">من نحن</a></li>
                        <li id="menu-item-8005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8005"><a href="%d8%a7%d8%aa%d8%b5%d9%84-%d8%a8%d9%86%d8%a7/index.html">اتصل بنا</a></li>
                        <li id="menu-item-8003" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8003"><a href="qasp-sar/index.html">QASP-S</a></li>
                        <li id="menu-item-8004" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8004"><a href="qbaar/index.html">QAP</a></li>
                        <li id="menu-item-9325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9325"><a href="%d8%a7%d9%84%d8%b4%d8%b1%d9%88%d8%b7-%d9%88%d8%a7%d9%84%d8%a3%d8%ad%d9%83%d8%a7%d9%85/index.html">الشروط والأحكام</a></li>
                        <li id="menu-item-9327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9327"><a href="%d8%b3%d9%8a%d8%a7%d8%b3%d8%a7%d8%aa-%d8%a7%d9%84%d8%ae%d8%b5%d9%88%d8%b5%d9%8a%d8%a9/index.html">سياسات الخصوصية</a></li>
                        <li id="menu-item-9328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9328"><a href="training-policy/index.html">Training Policy</a></li>
                    </ul></div></div><div class="single-footer-widget col-lg-4 col-md-4 widget_media_image"><h3>Certified By</h3><img width="300" height="277" src="assets_public/wp-content/uploads/2022/01/90987-300x277.png" class="image wp-image-9184  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://aba-resources.com/assets_public/wp-content/uploads/2022/01/90987-300x277.png 300w, https://aba-resources.com/assets_public/wp-content/uploads/2022/01/90987.png 600w" sizes="(max-width: 300px) 100vw, 300px" /></div>

        </div>




        <div class="footer-bottom-area">

            <div class="row align-items-center">

                <div class="col-lg-5 col-md-6">
                    <div class="developed">
                                        <span>Developed by <a href="https://www.josequal.com/" target="_blank">Josequal</a><span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="visa-img">
                        <img src="assets_public/wp-content/themes/ecademy/assets/img/payment-logo.png" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">

                    <ul id="menu-footer-menu-ar" class="menu"><li id="menu-item-8675" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8675"><a href="en/index3f35.html?page_id=8">Terms &#038; Conditions</a></li>
                    </ul>
                </div>

            </div>

        </div>


    </div>




    <div class="lines">

        <div class="line"></div>

        <div class="line"></div>

        <div class="line"></div>

    </div>


</footer>



<!-- End Footer Area -->




<div class="go-top"><i class='bx bx-chevron-up'></i></div>





<div class="container">

    <div class="ecademy-cursor"></div>

    <div class="ecademy-cursor2"></div>

</div>





<script>
    jQuery(document).ready(function($){
        $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
            $input = $(this).prev('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            $input.val( val + step ).change();
        });
        $(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
            function(e) {
                $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                var step = $input.attr('step');
                step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                if (val > 0) {
                    $input.val( val - step ).change();
                }
            });
    });
</script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","../chimpstatic.com/mcjs-connected/js/users/dce5502bde90a4bb2c7c3e1b4/9da0c961977ebd871bdd0ef86.js");</script><!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.7 -->
<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-2  " id="ht-ctc-chat"
     style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
    <div class="ht_ctc_style ht_ctc_chat_style">
        <div  style="display: flex; justify-content: center; align-items: center; flex-direction:row-reverse; " class="ctc-analytics">
            <p class="ctc-analytics ctc_cta ht-ctc-cta  ht-ctc-cta-hover " style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25D366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 0; ">WhatsApp us</p>
            <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1024 1024">
                <defs>
                    <path id="htwasqicona-chat" d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z"/>
                </defs>
                <linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978" x2="512.001" y2="1025.023">
                    <stop offset="0" stop-color="#61fd7d"/>
                    <stop offset="1" stop-color="#2bb826"/>
                </linearGradient>
                <use xlink:href="#htwasqicona-chat" overflow="visible" fill="url(#htwasqiconb-chat)"/>
                <g>
                    <path fill="#FFF" d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z"/>
                </g>
            </svg></div>                </div>
</div>
<span class="ht_ctc_chat_data"
      data-no_number=""
      data-settings="{&quot;number&quot;:&quot;962775221105&quot;,&quot;pre_filled&quot;:&quot;\u0623\u0631\u064a\u062f \u0627\u0644\u0627\u0633\u062a\u0641\u0633\u0627\u0631 \u0639\u0646 ..&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;web&quot;:&quot;y&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"
></span>
<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" aria-label="إغلاق (Esc)"></button>
                <button class="pswp__button pswp__button--share" aria-label="مشاركة"></button>
                <button class="pswp__button pswp__button--fs" aria-label="وضع ملء الشاشة"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="تكبير/تصغير"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" aria-label="السابق (سهم يسار)"></button>
            <button class="pswp__button pswp__button--arrow--right" aria-label="التالي (سهم يمين)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/template" id="tmpl-variation-template">
{{--    <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>--}}
{{--    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>--}}
{{--    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>--}}
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
    <p>عفوًا، هذا المنتج غير متوفر. يرجى اختيار مجموعة أخرى.</p>
</script>
<link rel='stylesheet' id='leaflet_stylesheet-css'  href='../unpkg.com/leaflet%401.7.1/dist/leaflet.css' type='text/css' media='' />
<link rel='stylesheet' id='e-animations-css'  href='assets_public/wp-content/plugins/elementor/assets/lib/animations/animations.min1aae.css?ver=3.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-css'  href='assets_public/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.minaf8e.css?ver=6.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='assets_public/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.minaf8e.css?ver=6.0.0' type='text/css' media='all' />
<script type='text/javascript' id='ht_ctc_app_js-js-extra'>
    /* <![CDATA[ */
    var ht_ctc_chat_var = {"number":"962775221105","pre_filled":"\u0623\u0631\u064a\u062f \u0627\u0644\u0627\u0633\u062a\u0641\u0633\u0627\u0631 \u0639\u0646 ..","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; right: 15px;","pos_m":"position: fixed; bottom: 15px; right: 15px;","schedule":"no","se":"150","ani":"no-animations","web":"y","ga":"yes","fb":"yes"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/332.appef85.js?ver=3.7' id='ht_ctc_app_js-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min35d0.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
    jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"\u0625\u063a\u0644\u0627\u0642","currentText":"\u0627\u0644\u064a\u0648\u0645","monthNames":["\u064a\u0646\u0627\u064a\u0631","\u0641\u0628\u0631\u0627\u064a\u0631","\u0645\u0627\u0631\u0633","\u0623\u0628\u0631\u064a\u0644","\u0645\u0627\u064a\u0648","\u064a\u0648\u0646\u064a\u0648","\u064a\u0648\u0644\u064a\u0648","\u0623\u063a\u0633\u0637\u0633","\u0633\u0628\u062a\u0645\u0628\u0631","\u0623\u0643\u062a\u0648\u0628\u0631","\u0646\u0648\u0641\u0645\u0628\u0631","\u062f\u064a\u0633\u0645\u0628\u0631"],"monthNamesShort":["\u064a\u0646\u0627\u064a\u0631","\u0641\u0628\u0631\u0627\u064a\u0631","\u0645\u0627\u0631\u0633","\u0623\u0628\u0631\u064a\u0644","\u0645\u0627\u064a\u0648","\u064a\u0648\u0646\u064a\u0648","\u064a\u0648\u0644\u064a\u0648","\u0623\u063a\u0633\u0637\u0633","\u0633\u0628\u062a\u0645\u0628\u0631","\u0623\u0643\u062a\u0648\u0628\u0631","\u0646\u0648\u0641\u0645\u0628\u0631","\u062f\u064a\u0633\u0645\u0628\u0631"],"nextText":"\u0627\u0644\u062a\u0627\u0644\u064a","prevText":"\u0627\u0644\u0633\u0627\u0628\u0642","dayNames":["\u0627\u0644\u0623\u062d\u062f","\u0627\u0644\u0625\u062b\u0646\u064a\u0646","\u0627\u0644\u062b\u0644\u0627\u062b\u0627\u0621","\u0627\u0644\u0623\u0631\u0628\u0639\u0627\u0621","\u0627\u0644\u062e\u0645\u064a\u0633","\u0627\u0644\u062c\u0645\u0639\u0629","\u0627\u0644\u0633\u0628\u062a"],"dayNamesShort":["\u0627\u0644\u0623\u062d\u062f","\u0627\u0644\u0623\u062b\u0646\u064a\u0646","\u0627\u0644\u062b\u0644\u0627\u062b\u0627\u0621","\u0627\u0644\u0623\u0631\u0628\u0639\u0627\u0621","\u0627\u0644\u062e\u0645\u064a\u0633","\u0627\u0644\u062c\u0645\u0639\u0629","\u0627\u0644\u0633\u0628\u062a"],"dayNamesMin":["\u062f","\u0646","\u062b","\u0623\u0631\u0628","\u062e","\u062c","\u0633"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":true});});
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.minaf8e.js?ver=6.0.0' id='selectWoo-js'></script>
<script type='text/javascript' id='wc-country-select-js-extra'>
    /* <![CDATA[ */
    var wc_country_select_params = {"countries":"{\"AF\":[],\"AO\":{\"BGO\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0646\\u063a\\u0648\",\"BLU\":\"\\u0628\\u0646\\u063a\\u064a\\u0644\\u0627\",\"BIE\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u064a\\u064a\",\"CAB\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0627\\u0628\\u064a\\u0646\\u062f\\u0627\",\"CNN\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0646\\u064a\\u0646\\u064a\",\"HUA\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0647\\u0648\\u0627\\u0645\\u0628\\u0648\",\"HUI\":\"\\u0647\\u0648\\u064a\\u0644\\u0627\",\"CCU\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0627\\u0646\\u062f\\u0648 \\u0643\\u0648\\u0628\\u0627\\u0646\\u063a\\u0648\",\"CNO\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0627\\u0646\\u0632\\u0627 \\u0646\\u0648\\u0631\\u062a\",\"CUS\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0627\\u0646\\u0632\\u0627 \\u0633\\u0648\\u0644\",\"LUA\":\"\\u0644\\u0648\\u0627\\u0646\\u062f\\u0627\",\"LNO\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0644\\u0648\\u0646\\u062f\\u0627 \\u0646\\u0648\\u0631\\u062a\\u064a\",\"LSU\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0644\\u0648\\u0646\\u062f\\u0627 \\u0633\\u0648\\u0644\",\"MAL\":\"\\u0645\\u0627\\u0644\\u0627\\u0646\\u062c\",\"MOX\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0645\\u0648\\u0643\\u0633\\u064a\\u0643\\u0648\",\"NAM\":\"\\u0646\\u0627\\u0645\\u064a\\u0628\\u064a\",\"UIG\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0623\\u0648\\u062c\\u064a\",\"ZAI\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0627\\u0626\\u064a\\u0631\"},\"AR\":{\"C\":\"\\u0628\\u0648\\u064a\\u0646\\u0633 \\u0622\\u064a\\u0631\\u0633\",\"B\":\"\\u0628\\u0648\\u064a\\u0646\\u0633 \\u0622\\u064a\\u0631\\u0633\",\"K\":\"\\u0643\\u0627\\u062a\\u0627\\u0645\\u0627\\u0631\\u0643\\u0627\",\"H\":\"\\u062a\\u0634\\u0627\\u0643\\u0648\",\"U\":\"\\u062a\\u0634\\u0648\\u0628\\u0648\\u062a\",\"X\":\"\\u0642\\u0631\\u0637\\u0628\\u0629\",\"W\":\"\\u0643\\u0648\\u0631\\u064a\\u0646\\u062a\\u0633\",\"E\":\"\\u0627\\u0646\\u062a\\u0631\\u064a \\u0631\\u064a\\u0648\\u0633\",\"P\":\"\\u0641\\u0648\\u0631\\u0645\\u0648\\u0632\\u0627\",\"Y\":\"\\u062e\\u0648\\u062e\\u0648\\u064a\",\"L\":\"\\u0644\\u0627 \\u0628\\u0627\\u0645\\u0628\\u0627\",\"F\":\"La Rioja\",\"M\":\"\\u0645\\u0646\\u062f\\u0648\\u0632\\u0627\",\"N\":\"\\u0645\\u064a\\u0633\\u064a\\u0648\\u0646\\u0633\",\"Q\":\"\\u0646\\u064a\\u0648\\u0643\\u0648\\u064a\\u0646\",\"R\":\"\\u0631\\u0627\\u064a\\u0648 \\u0646\\u064a\\u062c\\u0631\\u0648\",\"A\":\"\\u0633\\u0627\\u0644\\u062a\\u0627\",\"J\":\"\\u0633\\u0627\\u0646 \\u062e\\u0648\\u0627\\u0646\",\"D\":\"\\u0633\\u0627\\u0646 \\u0644\\u0648\\u064a\\u0633\",\"Z\":\"\\u0633\\u0627\\u0646\\u062a\\u0627 \\u0643\\u0631\\u0648\\u0632\",\"S\":\"\\u0633\\u0627\\u0646\\u062a\\u0627 \\u0641\\u064a\\u0647\",\"G\":\"\\u0633\\u0627\\u0646\\u062a\\u064a\\u0627\\u063a\\u0648 \\u062f\\u064a\\u0644 \\u0627\\u0633\\u062a\\u064a\\u0631\\u0648\",\"V\":\"\\u062a\\u064a\\u064a\\u0631\\u0627 \\u062f\\u064a\\u0644 \\u0641\\u0648\\u064a\\u063a\\u0648\",\"T\":\"\\u062a\\u0648\\u0643\\u0648\\u0645\\u0627\\u0646\"},\"AT\":[],\"AU\":{\"ACT\":\"\\u0627\\u0644\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0627\\u0644\\u0623\\u0633\\u062a\\u0631\\u0627\\u0644\\u064a\\u0629 \\u0628\\u0623\\u0646\\u062a\\u0627\\u0631\\u0643\\u062a\\u064a\\u0643\\u0627\",\"NSW\":\"\\u0646\\u064a\\u0648\\u0633\\u0627\\u0648\\u062b \\u0648\\u064a\\u0644\\u0632\",\"NT\":\"\\u0627\\u0644\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\",\"QLD\":\"\\u0643\\u0648\\u064a\\u0646\\u0632\\u0644\\u0627\\u0646\\u062f\",\"SA\":\"\\u062c\\u0646\\u0648\\u0628 \\u0623\\u0633\\u062a\\u0631\\u0627\\u0644\\u064a\\u0627\",\"TAS\":\"\\u062a\\u0633\\u0645\\u0627\\u0646\\u064a\\u0627\",\"VIC\":\"\\u0641\\u064a\\u0643\\u062a\\u0648\\u0631\\u064a\\u0627\",\"WA\":\"\\u0623\\u0633\\u062a\\u0631\\u0627\\u0644\\u064a\\u0627 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\"},\"AX\":[],\"BD\":{\"BD-05\":\"\\u0628\\u0627\\u062c\\u064a\\u0631\\u0647\\u0627\\u062a\",\"BD-01\":\"\\u0628\\u0646\\u062f\\u0631\\u0628\\u0627\\u0646\",\"BD-02\":\"\\u0628\\u0627\\u0631\\u062c\\u0648\\u0646\\u0627\",\"BD-06\":\"\\u0628\\u0627\\u0631\\u064a\\u0633\\u0627\\u0644\",\"BD-07\":\"Bhola\",\"BD-03\":\"\\u0628\\u0648\\u063a\\u0631\\u0627\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"\\u0634\\u064a\\u062a\\u0627\\u063a\\u0648\\u0646\\u063a\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"\\u0643\\u0648\\u0645\\u064a\\u0644\\u0627\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"\\u062c\\u064a\\u0633\\u0648\\u0631\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"\\u062b\\u0627\\u0643\\u0631\\u0642\\u0648\\u0646\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"\\u0645\\u0648\\u0646\\u062a\\u0627\\u0646\\u0627\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia\",\"BG-22\":\"Sofia-Grad\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BJ\":{\"AL\":\"\\u0623\\u0644\\u064a\\u0628\\u0648\\u0631\\u064a\",\"AK\":\"\\u0623\\u062a\\u0627\\u0643\\u0648\\u0631\\u0627\",\"AQ\":\"\\u0623\\u062a\\u0644\\u0627\\u0646\\u062a\\u064a\\u0643\",\"BO\":\"\\u0628\\u0648\\u0631\\u062c\\u0648\",\"CO\":\"\\u0643\\u0648\\u0644\\u064a\\u0646\\u0632\",\"KO\":\"\\u0643\\u0648\\u0641\\u0648\",\"DO\":\"\\u062f\\u0648\\u0646\\u062c\\u0627\",\"LI\":\"\\u0644\\u064a\\u062a\\u0648\\u0631\\u0627\\u0644\",\"MO\":\"\\u0645\\u0648\\u0646\\u0648\",\"OU\":\"\\u0623\\u0648\\u064a\\u0645\\u064a\\u0647\",\"PL\":\"\\u0628\\u0644\\u0627\\u062a\\u0648\",\"ZO\":\"\\u0632\\u0648\"},\"BO\":{\"B\":\"\\u0634\\u0648\\u0643\\u064a\\u0633\\u0627\\u0643\\u0627 - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\",\"H\":\"\\u0628\\u0650\\u0646\\u0650\\u064a - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\",\"C\":\"\\u0643\\u0648\\u062a\\u0634\\u0627\\u0628\\u0627\\u0645\\u0628\\u0627\",\"L\":\"\\u0644\\u0627\\u0628\\u0627\\u0632\",\"O\":\"\\u0623\\u0648\\u0631\\u0648\\u0631\\u0648 - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\",\"N\":\"\\u0628\\u0627\\u0646\\u062f\\u0648 - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\",\"P\":\"\\u0628\\u0648\\u062a\\u0648\\u0633\\u064a - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\",\"S\":\"\\u0633\\u0627\\u0646\\u062a\\u0627 \\u0643\\u0631\\u0648\\u0632\",\"T\":\"\\u062a\\u0627\\u0631\\u064a\\u062c\\u0627 - \\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\\u0627\"},\"BR\":{\"AC\":\"\\u0623\\u0643\\u0631\\u064a\",\"AL\":\"\\u0623\\u0644\\u0627\\u063a\\u0648\\u0627\\u0633\",\"AP\":\"\\u0623\\u0645\\u0627\\u0628\\u0627\",\"AM\":\"\\u0627\\u0644\\u0623\\u0645\\u0627\\u0632\\u0648\\u0646\",\"BA\":\"\\u0628\\u0627\\u0647\\u064a\\u0627\",\"CE\":\"\\u0633\\u064a\\u0627\\u0631\\u0627\",\"DF\":\"\\u062f\\u064a\\u0633\\u062a\\u0631\\u064a\\u062a\\u0648 \\u0641\\u064a\\u062f\\u064a\\u0631\\u0627\\u0644\",\"ES\":\"\\u0625\\u0633\\u0628\\u064a\\u0631\\u064a\\u062a\\u0648 \\u0633\\u0627\\u0646\\u062a\\u0648\",\"GO\":\"\\u063a\\u0648\\u064a\\u0627\\u0633\",\"MA\":\"\\u0645\\u0627\\u0631\\u0627\\u0646\\u0647\\u0627\\u0648\",\"MT\":\"\\u0645\\u0627\\u062a\\u0648 \\u063a\\u0631\\u0648\\u0633\\u0648\",\"MS\":\"\\u0645\\u0627\\u062a\\u0648 \\u063a\\u0631\\u0648\\u0633\\u0648 \\u062f\\u0648 \\u0633\\u0648\\u0644\",\"MG\":\"\\u0645\\u064a\\u0646\\u0627\\u0633 \\u062c\\u064a\\u0631\\u0627\\u064a\\u0633\",\"PA\":\"\\u0628\\u0627\\u0631\\u0627\",\"PB\":\"\\u0628\\u0627\\u0631\\u0627\\u064a\\u0628\\u0627\",\"PR\":\"\\u0628\\u0627\\u0631\\u0627\\u0646\\u0627\",\"PE\":\"\\u0628\\u064a\\u0631\\u0646\\u0627\\u0645\\u0628\\u0648\\u0643\\u0648\",\"PI\":\"\\u0628\\u064a\\u0627\\u0648\\u064a\",\"RJ\":\"\\u0631\\u064a\\u0648 \\u062f\\u064a \\u062c\\u0627\\u0646\\u064a\\u0631\\u0648\",\"RN\":\"\\u0631\\u064a\\u0648 \\u063a\\u0631\\u0627\\u0646\\u062f\\u064a \\u062f\\u0648 \\u0646\\u0648\\u0631\\u062a\\u064a\",\"RS\":\"\\u0631\\u064a\\u0648 \\u063a\\u0631\\u0627\\u0646\\u062f\\u064a \\u062f\\u0648 \\u0633\\u0648\\u0644\",\"RO\":\"\\u0631\\u0648\\u0646\\u062f\\u0648\\u0646\\u064a\\u0627\",\"RR\":\"\\u0631\\u0648\\u0631\\u0627\\u064a\\u0645\\u0627\",\"SC\":\"\\u0633\\u0627\\u0646\\u062a\\u0627 \\u0643\\u0627\\u062a\\u0627\\u0631\\u064a\\u0646\\u0627\",\"SP\":\"\\u0633\\u0627\\u0648 \\u0628\\u0627\\u0648\\u0644\\u0648\",\"SE\":\"\\u0633\\u064a\\u0631\\u062c\\u064a\\u0628\\u064a\",\"TO\":\"\\u062a\\u0648\\u0643\\u0627\\u0646\\u062a\\u064a\\u0646\\u0633\"},\"CA\":{\"AB\":\"\\u0623\\u0644\\u0628\\u0631\\u062a\\u0627\",\"BC\":\"\\u0643\\u0648\\u0644\\u0648\\u0645\\u0628\\u064a\\u0627 \\u0627\\u0644\\u0628\\u0631\\u064a\\u0637\\u0627\\u0646\\u064a\\u0629\",\"MB\":\"\\u0645\\u0627\\u0646\\u064a\\u062a\\u0648\\u0628\\u0627\",\"NB\":\"\\u0646\\u064a\\u0648 \\u0628\\u0631\\u0648\\u0646\\u0632\\u0648\\u064a\\u0643\",\"NL\":\"\\u0646\\u064a\\u0648\\u0641\\u0627\\u0648\\u0646\\u062f\\u0644\\u0627\\u0646\\u062f \\u0648 \\u0644\\u0627\\u0628\\u0631\\u0627\\u062f\\u0648\\u0631\",\"NT\":\"\\u0627\\u0644\\u0623\\u0642\\u0627\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"NS\":\"\\u0646\\u0648\\u0641\\u0627 \\u0633\\u0643\\u0648\\u062a\\u064a\\u0627\",\"NU\":\"\\u0646\\u0648\\u0646\\u0627\\u0641\\u0648\\u062a\",\"ON\":\"\\u0623\\u0648\\u0646\\u062a\\u0627\\u0631\\u064a\\u0648\",\"PE\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0627\\u0644\\u0623\\u0645\\u064a\\u0631 \\u0625\\u062f\\u0648\\u0627\\u0631\\u062f\",\"QC\":\"\\u0643\\u064a\\u0628\\u064a\\u0643\",\"SK\":\"\\u0633\\u0627\\u0633\\u0643\\u0627\\u062a\\u0634\\u0648\\u0627\\u0646\",\"YT\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u064a\\u0648\\u0643\\u0648\\u0646\"},\"CH\":{\"AG\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0623\\u0631\\u062c\\u0627\\u0648\",\"AR\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0623\\u0628\\u064a\\u0646\\u0632\\u064a\\u0644 \\u0623\\u0648\\u0633\\u064a\\u0631\\u0647\\u0648\\u062f\\u0646\",\"AI\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0623\\u0628\\u064a\\u0646\\u0632\\u064a\\u0644 \\u0625\\u064a\\u0646\\u0631\\u0647\\u0648\\u062f\\u0646\",\"BL\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0631\\u064a\\u0641 \\u0628\\u0627\\u0632\\u0644\",\"BS\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0645\\u062f\\u064a\\u0646\\u0629 \\u0628\\u0627\\u0632\\u0644\",\"BE\":\"\\u0628\\u0631\\u0646\",\"FR\":\"\\u0641\\u0631\\u064a\\u0628\\u0648\\u0631\\u063a\",\"GE\":\"\\u062c\\u0646\\u064a\\u0641\",\"GL\":\"\\u063a\\u0644\\u0631\\u0648\\u0633\",\"GR\":\"\\u063a\\u0631\\u0627\\u0648\\u0628\\u0648\\u0646\\u062f\\u0646\",\"JU\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u062c\\u0648\\u0631\\u0627\",\"LU\":\"\\u0644\\u0648\\u0633\\u0631\\u0646\",\"NE\":\"\\u0646\\u064a\\u0648\\u0634\\u0627\\u062a\\u064a\\u0644\",\"NW\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0646\\u064a\\u062f\\u0641\\u0627\\u0644\\u062f\\u0646\",\"OW\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0623\\u0648\\u0628\\u0641\\u0627\\u0644\\u062f\\u0646\",\"SH\":\"\\u0634\\u0627\\u0641\\u0647\\u0627\\u0648\\u0632\\u0646\",\"SZ\":\"\\u0634\\u0648\\u064a\\u0632\",\"SO\":\"\\u0633\\u0648\\u0644\\u0648\\u062a\\u0648\\u0631\\u0646\",\"SG\":\"\\u0633\\u0627\\u0646\\u062a \\u063a\\u0627\\u0644\\u0646\",\"TG\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u062a\\u0648\\u0631\\u063a\\u0627\\u0648\",\"TI\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u062a\\u064a\\u0633\\u064a\\u0646\\u0648\",\"UR\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0623\\u0648\\u0631\\u064a\",\"VS\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0641\\u0627\\u0644\\u064a\\u0632\",\"VD\":\"\\u0643\\u0627\\u0646\\u062a\\u0648\\u0646 \\u0641\\u0648\\u062f\",\"ZG\":\"\\u0632\\u0648\\u063a\",\"ZH\":\"\\u0632\\u064a\\u0648\\u0631\\u062e\"},\"CL\":{\"CL-AI\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0622\\u064a\\u0633\\u0646 \\u062f\\u064a\\u0644 \\u062c\\u0646\\u0631\\u0627\\u0644 \\u0643\\u0627\\u0631\\u0644\\u0648\\u0633 \\u0625\\u064a\\u0628\\u0627\\u0646\\u064a\\u0633 \\u062f\\u064a\\u0644 \\u0643\\u0627\\u0645\\u0628\\u0648\",\"CL-AN\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0623\\u0646\\u062a\\u0648\\u0641\\u0627\\u063a\\u0627\\u0633\\u062a\\u0627\",\"CL-AP\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0623\\u0631\\u064a\\u0643\\u0627 \\u0648\\u0628\\u0627\\u0631\\u064a\\u0646\\u0643\\u0648\\u062a\\u0627\",\"CL-AR\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0644\\u0627 \\u0623\\u0631\\u0648\\u0643\\u0627\\u0646\\u064a\\u0627\",\"CL-AT\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0623\\u062a\\u0627\\u0643\\u0627\\u0645\\u0627\",\"CL-BI\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0628\\u064a\\u0648\\u0628\\u064a\\u0648\",\"CL-CO\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0643\\u0648\\u0643\\u064a\\u0645\\u0628\\u0648\",\"CL-LI\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0623\\u0648\\u0647\\u064a\\u063a\\u064a\\u0646\\u0632\",\"CL-LL\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0644\\u0648\\u0633 \\u0644\\u0627\\u062c\\u0648\\u0633\",\"CL-LR\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0644\\u0648\\u0633 \\u0631\\u064a\\u0648\\u0633\",\"CL-MA\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0645\\u0627\\u062c\\u0644\\u0627\\u0646\",\"CL-ML\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0645\\u0648\\u0644\",\"CL-NB\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0646\\u0648\\u0628\\u0644\",\"CL-RM\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0633\\u0627\\u0646\\u062a\\u064a\\u0627\\u063a\\u0648 \\u0645\\u062a\\u0631\\u0648\\u0628\\u0648\\u0644\\u064a\\u062a\\u0627\\u0646\",\"CL-TA\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u062a\\u0627\\u0631\\u0627\\u0628\\u0627\\u0643\\u0627\",\"CL-VS\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0641\\u0627\\u0644\\u0628\\u0627\\u0631\\u064a\\u0633\\u0648\"},\"CN\":{\"CN1\":\"\\u064a\\u0648\\u0646\\u0627\\u0646 \\\/ \\u4e91\\u5357\",\"CN2\":\"\\u0628\\u0643\\u064a\\u0646 \\\/ \\u5317\\u4eac\",\"CN3\":\"\\u062a\\u064a\\u0627\\u0646\\u062c\\u064a\\u0646 \\\/ \\u5929\\u6d25\",\"CN4\":\"\\u062e\\u0628\\u064a \\\/ \\u6cb3\\u5317\",\"CN5\":\"\\u0634\\u0627\\u0646\\u0634\\u064a \\\/ \\u5c71\\u897f\",\"CN6\":\"\\u0645\\u0646\\u063a\\u0648\\u0644\\u064a\\u0627 \\u0627\\u0644\\u062f\\u0627\\u062e\\u0644\\u064a\\u0629 \\\/ \\u5167\\u8499\\u53e4\",\"CN7\":\"\\u0644\\u064a\\u0627\\u0648\\u0646\\u064a\\u0646\\u063a \\\/ \\u8fbd\\u5b81\",\"CN8\":\"\\u062c\\u064a\\u0644\\u064a\\u0646 \\\/ \\u5409\\u6797\",\"CN9\":\"\\u0647\\u064a\\u0644\\u0648\\u0646\\u063a\\u062c\\u064a\\u0627\\u0646\\u063a \\\/ \\u9ed1\\u9f99\\u6c5f\",\"CN10\":\"\\u0634\\u0627\\u0646\\u063a\\u0647\\u0627\\u064a \\\/ \\u4e0a\\u6d77\",\"CN11\":\"\\u062c\\u064a\\u0627\\u0646\\u063a\\u0633\\u0648 \\\/ \\u6c5f\\u82cf\",\"CN12\":\"\\u062a\\u0634\\u062c\\u064a\\u0627\\u0646\\u063a \\\/ \\u6d59\\u6c5f\",\"CN13\":\"\\u0622\\u0646\\u0647\\u0648\\u064a \\\/ \\u5b89\\u5fbd\",\"CN14\":\"\\u0641\\u0648\\u062c\\u064a\\u0627\\u0646 \\\/ \\u798f\\u5efa\",\"CN15\":\"\\u062c\\u064a\\u0627\\u0646\\u063a\\u0634\\u064a \\\/ \\u6c5f\\u897f\",\"CN16\":\"\\u0634\\u0627\\u0646\\u062f\\u0648\\u0646\\u063a \\\/ \\u5c71\\u4e1c\",\"CN17\":\"\\u062e\\u0646\\u0627\\u0646 \\\/ \\u6cb3\\u5357\",\"CN18\":\"\\u0647\\u0648\\u0628\\u064a \\\/ \\u6e56\\u5317\",\"CN19\":\"\\u0647\\u0648\\u0646\\u0627\\u0646 \\\/ \\u6e56\\u5357\",\"CN20\":\"\\u063a\\u0648\\u0627\\u0646\\u063a\\u062f\\u0648\\u0646\\u063a \\\/ \\u5e7f\\u4e1c\",\"CN21\":\"\\u0642\\u0648\\u0627\\u0646\\u063a\\u0634\\u064a \\u062a\\u0634\\u0648\\u0627\\u0646\\u063a \\\/ \\u5e7f\\u897f\\u58ee\\u65cf\",\"CN22\":\"\\u0647\\u0627\\u064a\\u0646\\u0627\\u0646 \\\/ \\u6d77\\u5357\",\"CN23\":\"\\u062a\\u0634\\u0648\\u0646\\u063a\\u062a\\u0634\\u064a\\u0646\\u063a \\\/ \\u91cd\\u5e86\",\"CN24\":\"\\u0633\\u064a\\u062a\\u0634\\u0648\\u0627\\u0646 \\\/ \\u56db\\u5ddd\",\"CN25\":\"\\u0642\\u0648\\u064a\\u062a\\u0634\\u0648 \\\/ \\u8d35\\u5dde\",\"CN26\":\"\\u0634\\u0646\\u0633\\u064a \\\/ \\u9655\\u897f\",\"CN27\":\"\\u0642\\u0627\\u0646\\u0633\\u0648 \\\/ \\u7518\\u8083\",\"CN28\":\"\\u062a\\u0634\\u064a\\u0646\\u063a\\u0647\\u0627\\u064a \\\/ \\u9752\\u6d77\",\"CN29\":\"\\u0646\\u064a\\u0646\\u063a\\u0634\\u064a\\u0627 \\\/ \\u5b81\\u590f\",\"CN30\":\"\\u0645\\u0627\\u0643\\u0627\\u0648 \\\/ \\u6fb3\\u95e8\",\"CN31\":\"\\u0627\\u0644\\u062a\\u0628\\u062a \\\/ \\u897f\\u85cf\",\"CN32\":\"\\u0633\\u0646\\u062c\\u0627\\u0646 \\\/ \\u0634\\u064a\\u0646\\u062c\\u064a\\u0627\\u0646\\u063a \\\/ \\u65b0\\u7586\"},\"CZ\":[],\"DE\":[],\"DK\":[],\"DO\":{\"DO-01\":\"\\u062f\\u064a\\u0633\\u062a\\u0631\\u064a\\u062a\\u0648 \\u0646\\u0627\\u0633\\u064a\\u0648\\u0646\\u0627\\u0644\",\"DO-02\":\"\\u0623\\u0632\\u0648\\u0627\",\"DO-03\":\"\\u0628\\u0627\\u0647\\u0648\\u0631\\u0643\\u0648\",\"DO-04\":\"\\u0628\\u0627\\u0631\\u0627\\u0647\\u0648\\u0646\\u0627\",\"DO-05\":\"\\u062f\\u0627\\u062c\\u0627\\u0628\\u0648\\u0646\",\"DO-06\":\"\\u062f\\u0648\\u0627\\u0631\\u062a\\u064a\",\"DO-07\":\"\\u0625\\u0644\\u064a\\u0627\\u0633 \\u0628\\u064a\\u0646\\u0627\",\"DO-08\":\"\\u0625\\u0644 \\u0633\\u064a\\u0628\\u0648\",\"DO-09\":\"\\u0625\\u0633\\u0628\\u0627\\u064a\\u0644\\u0627\\u062a\",\"DO-10\":\"\\u0625\\u064a\\u0646\\u062f\\u064a\\u0628\\u064a\\u0646\\u062f\\u064a\\u0633\\u064a\\u0627\",\"DO-11\":\"\\u0644\\u0627 \\u0623\\u0644\\u062a\\u0627\\u062c\\u0631\\u0627\\u0633\\u064a\\u0627\",\"DO-12\":\"\\u0644\\u0627 \\u0631\\u0648\\u0645\\u0627\\u0646\\u0627\",\"DO-13\":\"\\u0644\\u0627 \\u0641\\u064a\\u062c\\u0627\",\"DO-14\":\"\\u0645\\u0627\\u0631\\u064a\\u0627 \\u062a\\u0631\\u064a\\u0646\\u064a\\u062f\\u0627\\u062f \\u0633\\u0627\\u0646\\u0634\\u064a\\u0632\",\"DO-15\":\"\\u0645\\u0648\\u0646\\u062a\\u064a \\u0643\\u0631\\u064a\\u0633\\u062a\\u064a\",\"DO-16\":\"\\u0628\\u064a\\u062f\\u064a\\u0631\\u0646\\u0627\\u0644\\u064a\\u0633\",\"DO-17\":\"\\u0628\\u064a\\u0631\\u0627\\u0641\\u064a\\u0627\",\"DO-18\":\"\\u0628\\u0648\\u064a\\u0631\\u062a\\u0648 \\u0628\\u0644\\u0627\\u062a\\u0627\",\"DO-19\":\"\\u0647\\u064a\\u0631\\u0645\\u0627\\u0646\\u0627\\u0633 \\u0645\\u064a\\u0631\\u0627\\u0628\\u0627\\u0644\",\"DO-20\":\"\\u0633\\u0627\\u0645\\u0627\\u0646\\u0627\",\"DO-21\":\"\\u0633\\u0627\\u0646 \\u0643\\u0631\\u064a\\u0633\\u062a\\u0648\\u0628\\u0627\\u0644\",\"DO-22\":\"\\u0633\\u0627\\u0646 \\u062e\\u0648\\u0627\\u0646\",\"DO-23\":\"\\u0633\\u0627\\u0646 \\u0628\\u064a\\u062f\\u0631\\u0648 \\u062f\\u064a \\u0645\\u0627\\u0643\\u0648\\u0631\\u064a\\u0633\",\"DO-24\":\"\\u0633\\u0627\\u0646\\u0634\\u064a\\u0632 \\u0631\\u0627\\u0645\\u064a\\u0631\\u064a\\u0632\",\"DO-25\":\"\\u0633\\u0627\\u0646\\u062a\\u064a\\u0627\\u062c\\u0648\",\"DO-26\":\"\\u0633\\u0627\\u0646\\u062a\\u064a\\u0627\\u062c\\u0648 \\u0631\\u0648\\u062f\\u0631\\u064a\\u062c\\u064a\\u0632\",\"DO-27\":\"\\u0641\\u0627\\u0644\\u0641\\u064a\\u0631\\u062f\\u064a\",\"DO-28\":\"\\u0645\\u0648\\u0646\\u0633\\u064a\\u0646\\u0648\\u0631 \\u0646\\u0648\\u064a\\u0644\",\"DO-29\":\"\\u0645\\u0648\\u0646\\u062a\\u064a \\u0628\\u0644\\u0627\\u062a\\u0627\",\"DO-30\":\"\\u0647\\u0627\\u062a\\u0648 \\u0645\\u0627\\u064a\\u0648\\u0631\",\"DO-31\":\"\\u0633\\u0627\\u0646 \\u062e\\u0648\\u0633\\u064a\\u0647 \\u062f\\u064a \\u0627\\u0643\\u0648\\u0627\",\"DO-32\":\"\\u0633\\u0627\\u0646\\u062a\\u0648 \\u062f\\u0648\\u0645\\u064a\\u0646\\u063a\\u0648\"},\"DZ\":{\"DZ-01\":\"\\u0623\\u062f\\u0631\\u0627\\u0631\",\"DZ-02\":\"\\u0627\\u0644\\u0634\\u0644\\u0641\",\"DZ-03\":\"\\u0627\\u0644\\u0623\\u063a\\u0648\\u0627\\u0637\",\"DZ-04\":\"\\u0623\\u0645 \\u0627\\u0644\\u0628\\u0648\\u0627\\u0642\\u064a\",\"DZ-05\":\"\\u0628\\u0627\\u062a\\u0646\\u0629\",\"DZ-06\":\"\\u0628\\u062c\\u0627\\u064a\\u0629\",\"DZ-07\":\"\\u0628\\u0633\\u0643\\u0631\\u0629\",\"DZ-08\":\"\\u0628\\u0634\\u0627\\u0631\",\"DZ-09\":\"\\u0627\\u0644\\u0628\\u0644\\u064a\\u062f\\u0629\",\"DZ-10\":\"\\u0627\\u0644\\u0628\\u0648\\u064a\\u0631\\u0629\",\"DZ-11\":\"\\u062a\\u0645\\u0646\\u0631\\u0627\\u0633\\u062a\",\"DZ-12\":\"\\u062a\\u0628\\u0633\\u0629\",\"DZ-13\":\"\\u062a\\u0644\\u0645\\u0633\\u0627\\u0646\",\"DZ-14\":\"\\u062a\\u064a\\u0627\\u0631\\u062a\",\"DZ-15\":\"\\u062a\\u064a\\u0632\\u064a \\u0648\\u0632\\u0648\",\"DZ-16\":\"\\u0627\\u0644\\u062c\\u0632\\u0627\\u0626\\u0631 \\u0627\\u0644\\u0639\\u0627\\u0635\\u0645\\u0629\",\"DZ-17\":\"\\u0627\\u0644\\u062c\\u0644\\u0641\\u0629\",\"DZ-18\":\"\\u062c\\u064a\\u062c\\u0644\",\"DZ-19\":\"\\u0633\\u0637\\u064a\\u0641\\u200e\",\"DZ-20\":\"\\u0633\\u0639\\u064a\\u062f\\u0629\",\"DZ-21\":\"\\u0633\\u0643\\u064a\\u0643\\u062f\\u0629\",\"DZ-22\":\"\\u0633\\u064a\\u062f\\u064a \\u0628\\u0644\\u0639\\u0628\\u0627\\u0633\\u200e\",\"DZ-23\":\"\\u0639\\u0646\\u0627\\u0628\\u0629\",\"DZ-24\":\"\\u0642\\u0627\\u0644\\u0645\\u0629\",\"DZ-25\":\"\\u0642\\u0633\\u0646\\u0637\\u064a\\u0646\\u0629\",\"DZ-26\":\"\\u0627\\u0644\\u0645\\u062f\\u064a\\u0629\",\"DZ-27\":\"\\u0645\\u0633\\u062a\\u063a\\u0627\\u0646\\u0645\",\"DZ-28\":\"\\u0627\\u0644\\u0645\\u0633\\u064a\\u0644\\u0629\\u200e\",\"DZ-29\":\"\\u0623\\u0645 \\u0639\\u0633\\u0643\\u0631\",\"DZ-30\":\"\\u0648\\u0631\\u0642\\u0644\\u0629\",\"DZ-31\":\"\\u0648\\u0647\\u0631\\u0627\\u0646\",\"DZ-32\":\"\\u0627\\u0644\\u0628\\u064a\\u0636\",\"DZ-33\":\"\\u0627\\u0644\\u064a\\u0632\\u064a\",\"DZ-34\":\"\\u0628\\u0631\\u062c \\u0628\\u0648\\u0639\\u0631\\u064a\\u0631\\u064a\\u062c\\u200e\",\"DZ-35\":\"\\u0628\\u0648\\u0645\\u0631\\u062f\\u0627\\u0633\",\"DZ-36\":\"\\u0627\\u0644\\u0637\\u0627\\u0631\\u0641\",\"DZ-37\":\"\\u062a\\u0646\\u062f\\u0648\\u0641\",\"DZ-38\":\"\\u062a\\u064a\\u0633\\u0645\\u0633\\u064a\\u0644\\u062a\",\"DZ-39\":\"\\u0627\\u0644\\u0648\\u0627\\u062f\\u064a\",\"DZ-40\":\"\\u062e\\u0646\\u0634\\u0644\\u0629\",\"DZ-41\":\"\\u0633\\u0648\\u0642 \\u0623\\u0647\\u0631\\u0627\\u0633\",\"DZ-42\":\"\\u062a\\u064a\\u0628\\u0627\\u0632\\u0629\",\"DZ-43\":\"\\u0645\\u064a\\u0644\\u0629\",\"DZ-44\":\"\\u0639\\u064a\\u0646 \\u0627\\u0644\\u062f\\u0641\\u0644\\u0649\",\"DZ-45\":\"\\u0627\\u0644\\u0646\\u0639\\u0627\\u0645\\u0629\",\"DZ-46\":\"\\u0639\\u064a\\u0646 \\u062a\\u0645\\u0648\\u0634\\u0646\\u062a\",\"DZ-47\":\"\\u063a\\u0631\\u062f\\u0627\\u064a\\u0629\",\"DZ-48\":\"\\u063a\\u0644\\u064a\\u0632\\u0627\\u0646\"},\"EE\":[],\"EG\":{\"EGALX\":\"\\u0627\\u0644\\u0625\\u0633\\u0643\\u0646\\u062f\\u0631\\u064a\\u0629\",\"EGASN\":\"\\u0623\\u0633\\u0648\\u0627\\u0646\",\"EGAST\":\"\\u0623\\u0633\\u064a\\u0648\\u0637\",\"EGBA\":\"\\u0627\\u0644\\u0628\\u062d\\u0631 \\u0627\\u0644\\u0623\\u062d\\u0645\\u0631\",\"EGBH\":\"\\u0627\\u0644\\u0628\\u062d\\u064a\\u0631\\u0629\",\"EGBNS\":\"\\u0628\\u0646\\u064a \\u0633\\u0648\\u064a\\u0641\",\"EGC\":\"\\u0627\\u0644\\u0642\\u0627\\u0647\\u0631\\u0629\",\"EGDK\":\"\\u0627\\u0644\\u062f\\u0642\\u0647\\u0644\\u064a\\u0629\",\"EGDT\":\"\\u062f\\u0645\\u064a\\u0627\\u0637\",\"EGFYM\":\"\\u0627\\u0644\\u0641\\u064a\\u0648\\u0645\",\"EGGH\":\"\\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"EGGZ\":\"\\u0627\\u0644\\u062c\\u064a\\u0632\\u0629\",\"EGIS\":\"\\u0627\\u0644\\u0625\\u0633\\u0645\\u0627\\u0639\\u064a\\u0644\\u064a\\u0629\",\"EGJS\":\"\\u062c\\u0646\\u0648\\u0628 \\u0633\\u064a\\u0646\\u0627\\u0621\",\"EGKB\":\"\\u0627\\u0644\\u0642\\u0644\\u064a\\u0648\\u0628\\u064a\\u0629\",\"EGKFS\":\"\\u0643\\u0641\\u0631 \\u0627\\u0644\\u0634\\u064a\\u062e\",\"EGKN\":\"\\u0642\\u0646\\u0627\",\"EGLX\":\"\\u0627\\u0644\\u0623\\u0642\\u0635\\u0631\",\"EGMN\":\"\\u0627\\u0644\\u0645\\u0646\\u064a\\u0627\",\"EGMNF\":\"\\u0627\\u0644\\u0645\\u0646\\u0648\\u0641\\u064a\\u0629\",\"EGMT\":\"\\u0645\\u0637\\u0631\\u0648\\u062d\",\"EGPTS\":\"\\u0628\\u0648\\u0631\\u0633\\u0639\\u064a\\u062f\",\"EGSHG\":\"\\u0633\\u0648\\u0647\\u0627\\u062c\",\"EGSHR\":\"\\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"EGSIN\":\"\\u0634\\u0645\\u0627\\u0644 \\u0633\\u064a\\u0646\\u0627\\u0621\",\"EGSUZ\":\"\\u0627\\u0644\\u0633\\u0648\\u064a\\u0633\",\"EGWAD\":\"\\u0627\\u0644\\u0648\\u0627\\u062f\\u064a \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\"},\"ES\":{\"C\":\"\\u0644\\u0627 \\u0643\\u0648\\u0631\\u0648\\u0646\\u064a\\u0627\",\"VI\":\"\\u0623\\u0644\\u0627\\u0641\\u0627\\\/Araba\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"\\u0627\\u0644\\u0645\\u064a\\u0631\\u064a\\u0627\",\"O\":\"Asturias\",\"AV\":\"\\u0623\\u0641\\u064a\\u0644\\u0627\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"\\u0628\\u0631\\u0634\\u0644\\u0648\\u0646\\u0627\",\"BU\":\"\\u0628\\u0631\\u0627\\u063a\",\"CC\":\"\\u0643\\u0627\\u062b\\u064a\\u0631\\u064a\\u0633\",\"CA\":\"\\u063a\\u0627\\u062f\\u0633\",\"S\":\"Cantabria\",\"CS\":\"\\u0643\\u0627\\u0633\\u062a\\u064a\\u0648\\u0646\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"\\u0642\\u0631\\u0637\\u0628\\u0629\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"\\u063a\\u0631\\u064a\\u0646\\u0627\\u062f\\u0627\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"\\u062e\\u0627\\u064a\\u0646\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"\\u0644\\u064a\\u0648\\u0646\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"\\u0645\\u0627\\u0644\\u0642\\u0629\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"\\u0637\\u0644\\u064a\\u0637\\u0644\\u0629\",\"V\":\"\\u0641\\u0644\\u064a\\u0646\\u0633\\u064a\\u0627\",\"VA\":\"Valladolid\",\"BI\":\"\\u0628\\u0633\\u0643\\u0627\\u064a\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"FI\":[],\"FR\":[],\"GF\":[],\"GH\":{\"AF\":\"\\u0623\\u0647\\u0627\\u0641\\u0648\",\"AH\":\"\\u0623\\u0634\\u0627\\u0646\\u062a\\u064a\",\"BA\":\"\\u0628\\u0631\\u0648\\u0646\\u062c \\u0623\\u0647\\u0627\\u0641\\u0648\",\"BO\":\"\\u0628\\u0648\\u0646\\u0648\",\"BE\":\"\\u0634\\u0631\\u0642 \\u0628\\u0648\\u0646\\u0648\",\"CP\":\"\\u0633\\u0646\\u062a\\u0631\\u0627\\u0644\",\"EP\":\"\\u0627\\u0644\\u0634\\u0631\\u0642\",\"AA\":\"\\u0623\\u0643\\u0631\\u0627 \\u0627\\u0644\\u0643\\u0628\\u0631\\u0649\",\"NE\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\",\"NP\":\"\\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\",\"OT\":\"\\u0623\\u0648\\u062a\\u064a\",\"SV\":\"\\u0633\\u0627\\u0641\\u0627\\u0646\\u0627\",\"UE\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642 \\u0627\\u0644\\u0639\\u0644\\u064a\\u0627\",\"UW\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0628 \\u0627\\u0644\\u0639\\u0644\\u064a\\u0627\",\"TV\":\"\\u0641\\u0648\\u0644\\u062a\\u0627\",\"WP\":\"\\u0627\\u0644\\u063a\\u0631\\u0628\",\"WN\":\"\\u0627\\u0644\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\"},\"GP\":[],\"GR\":{\"I\":\"\\u0623\\u062a\\u064a\\u0643\\u0627\",\"A\":\"\\u0634\\u0631\\u0642 \\u0645\\u0642\\u062f\\u0648\\u0646\\u064a\\u0627 \\u0648\\u062a\\u0631\\u0627\\u0642\\u064a\\u0627\",\"B\":\"\\u0648\\u0633\\u0637 \\u0645\\u0642\\u062f\\u0648\\u0646\\u064a\\u0627\",\"C\":\"\\u063a\\u0631\\u0628 \\u0645\\u0642\\u062f\\u0648\\u0646\\u064a\\u0627\",\"D\":\"\\u0625\\u0628\\u064a\\u0631\\u0648\\u0633\",\"E\":\"\\u062b\\u064a\\u062b\\u0627\\u0644\\u064a\",\"F\":\"\\u0627\\u0644\\u062c\\u0632\\u0631 \\u0627\\u0644\\u0623\\u064a\\u0648\\u0646\\u064a\\u0629\",\"G\":\"\\u063a\\u0631\\u0628 \\u0627\\u0644\\u064a\\u0648\\u0646\\u0627\\u0646\",\"H\":\"\\u0648\\u0633\\u0637 \\u0627\\u0644\\u064a\\u0648\\u0646\\u0627\\u0646\",\"J\":\"\\u0628\\u064a\\u0644\\u0648\\u0628\\u0648\\u0646\\u064a\\u0632\",\"K\":\"\\u0634\\u0645\\u0627\\u0644 \\u0625\\u064a\\u062c\\u0629\",\"L\":\"\\u062c\\u0646\\u0648\\u0628 \\u0625\\u064a\\u062c\\u0629\",\"M\":\"\\u0643\\u0631\\u064a\\u062a\"},\"GT\":{\"AV\":\"\\u0623\\u0644\\u062a\\u0627 \\u0641\\u064a\\u0631\\u0627\\u0628\\u0627\\u0632\",\"BV\":\"\\u0628\\u0627\\u062c\\u0627 \\u0641\\u064a\\u0631\\u0627\\u0628\\u0627\\u0632\",\"CM\":\"\\u062a\\u0634\\u064a\\u0645\\u0627\\u0644\\u062a\\u0646\\u0627\\u0646\\u062c\\u0648\",\"CQ\":\"\\u0634\\u064a\\u0643\\u064a\\u0645\\u0648\\u0644\\u0627\",\"PR\":\"\\u0625\\u0644\\u0628\\u0631\\u0648\\u062c\\u0631\\u064a\\u0633\\u0648\",\"ES\":\"\\u0625\\u064a\\u0633\\u0643\\u0648\\u064a\\u0646\\u062a\\u0644\\u0627\",\"GU\":\"\\u063a\\u0648\\u0627\\u062a\\u064a\\u0645\\u0627\\u0644\\u0627\",\"HU\":\"\\u0647\\u0648\\u064a\\u0647\\u0648\\u064a\\u062a\\u0646\\u0627\\u0646\\u062c\\u0648\",\"IZ\":\"\\u0625\\u0632\\u0627\\u0628\\u0627\\u0644\",\"JA\":\"\\u062c\\u0627\\u0644\\u0627\\u0628\\u0627\",\"JU\":\"\\u062e\\u0648\\u062a\\u064a\\u0627\\u0628\\u0627\",\"PE\":\"\\u0628\\u064a\\u062a\\u0646\",\"QZ\":\"\\u0643\\u0648\\u064a\\u0632\\u0627\\u0644\\u062a\\u064a\\u0646\\u0627\\u0646\\u062c\\u0648\",\"QC\":\"\\u0643\\u0648\\u064a\\u0634\\u064a\",\"RE\":\"\\u0631\\u064a\\u062a\\u0627\\u0644\\u0647\\u0648\\u0644\\u064a\\u0648\",\"SA\":\"\\u0633\\u0643\\u0627\\u062a\\u064a\\u0628\\u064a\\u0643\\u064a\\u0632\",\"SM\":\"\\u0633\\u0627\\u0646 \\u0645\\u0627\\u0631\\u0643\\u0648\\u0633\",\"SR\":\"\\u0633\\u0627\\u0646\\u062a\\u0627 \\u0631\\u0648\\u0632\\u0627\",\"SO\":\"\\u0633\\u0648\\u0644\\u0648\\u0644\\u0627\",\"SU\":\"\\u0633\\u0648\\u0634\\u064a\\u062a\\u0628\\u064a\\u0643\\u064a\\u0632\",\"TO\":\"\\u062a\\u0648\\u062a\\u0648\\u0646\\u064a\\u0643\\u0627\\u0628\\u0627\\u0646\",\"ZA\":\"\\u062b\\u0627\\u0643\\u0627\\u0628\\u0627\"},\"HK\":{\"HONG KONG\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0647\\u0648\\u0646\\u063a \\u0643\\u0648\\u0646\\u063a\",\"KOWLOON\":\"\\u0643\\u0648\\u0644\\u0648\\u0646\",\"NEW TERRITORIES\":\"\\u0627\\u0644\\u0623\\u0642\\u0627\\u0644\\u064a\\u0645 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"\\u0628\\u0643\\u064a\\u0634\",\"BA\":\"\\u0628\\u0627\\u0631\\u0627\\u0646\\u064a\\u0627\",\"BZ\":\"\\u0628\\u0648\\u0631\\u0633\\u0648\\u062f-\\u0622\\u0628\\u0627\\u0626\\u0648\\u064a-\\u0632\\u0645\\u0628\\u0644\\u0646\",\"BU\":\"\\u0628\\u0634\\u062a\",\"CS\":\"\\u0643\\u0633\\u0648\\u0646\\u062c\\u0631\\u0627\\u062f \\u0643\\u0633\\u0627\\u0646\\u0627\\u062f\",\"FE\":\"\\u0641\\u064a\\u064a\\u0631\",\"GS\":\"\\u062f\\u064a\\u0648\\u0631-\\u0645\\u0648\\u0634\\u0648\\u0646-\\u0633\\u0648\\u0628\\u0631\\u0648\\u0646\",\"HB\":\"\\u0647\\u0627\\u064a\\u062f\\u0648-\\u0628\\u064a\\u0647\\u0627\\u0631\",\"HE\":\"\\u0647\\u0641\\u0634\",\"JN\":\"\\u064a\\u0627\\u0633-\\u0646\\u0627\\u062f\\u0643\\u0648\\u0646-\\u0633\\u0648\\u0644\\u0646\\u0643\",\"KE\":\"\\u0643\\u0648\\u0645\\u0627\\u0631\\u0648\\u0645-\\u0625\\u0633\\u062a\\u0631\\u0643\\u0648\\u0645\",\"NO\":\"\\u0646\\u0648\\u063a\\u0631\\u0627\\u062f\",\"PE\":\"\\u0628\\u0634\\u062a\",\"SO\":\"\\u0634\\u0648\\u0645\\u0648\\u062f\",\"SZ\":\"\\u0633\\u0627\\u0628\\u0648\\u0644\\u062a\\u0634-\\u0633\\u0627\\u062a\\u0645\\u0627\\u0631-\\u0628\\u0631\\u064a\\u063a\",\"TO\":\"\\u062a\\u0648\\u0644\\u0646\\u0627\",\"VA\":\"\\u0641\\u0627\\u0633\",\"VE\":\"\\u0641\\u0633\\u0628\\u0631\\u0645\",\"ZA\":\"\\u0632\\u0627\\ufefb\"},\"ID\":{\"AC\":\"\\u0622\\u062a\\u0634\\u064a\\u0647\",\"SU\":\"\\u0633\\u0648\\u0645\\u0637\\u0631\\u0629 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"SB\":\"\\u0633\\u0648\\u0645\\u0637\\u0631\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"RI\":\"\\u0631\\u064a\\u0627\\u0648\",\"KR\":\"\\u062c\\u0632\\u0631 \\u0631\\u064a\\u0627\\u0648\",\"JA\":\"\\u062c\\u0627\\u0645\\u0628\\u064a\",\"SS\":\"\\u0633\\u0648\\u0645\\u0637\\u0631\\u0629 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"BB\":\"\\u0628\\u0627\\u0646\\u062c\\u0643\\u0627 - \\u0628\\u0644\\u064a\\u062a\\u0648\\u0646\\u062c\",\"BE\":\"\\u0628\\u0646\\u062c\\u0643\\u0648\\u0644\\u0648\",\"LA\":\"\\u0644\\u0627\\u0645\\u0628\\u0648\\u0646\\u062c\",\"JK\":\"\\u062c\\u0627\\u0643\\u0627\\u0631\\u062a\\u0627\",\"JB\":\"\\u062c\\u0627\\u0648\\u0629 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"BT\":\"\\u0628\\u0627\\u0646\\u062a\\u0646\",\"JT\":\"\\u062c\\u0627\\u0648\\u0629 \\u0627\\u0644\\u0648\\u0633\\u0637\\u0649\",\"JI\":\"\\u062c\\u0627\\u0648\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"YO\":\"\\u064a\\u0648\\u062c\\u064a\\u0627\\u0643\\u0631\\u062a\\u0627\",\"BA\":\"\\u0628\\u0627\\u0644\\u064a\",\"NB\":\"\\u0646\\u0648\\u0633\\u0627 \\u062a\\u0646\\u062c\\u0627\\u0631\\u0627 \\u063a\\u0631\\u0628\",\"NT\":\"\\u0646\\u0648\\u0633\\u0627 \\u062a\\u0646\\u062c\\u0627\\u0631\\u0627 \\u0634\\u0631\\u0642\",\"KB\":\"\\u0643\\u0627\\u0644\\u0645\\u0646\\u062a\\u0627\\u0646 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"KT\":\"\\u0643\\u0627\\u0644\\u0645\\u0646\\u062a\\u0627\\u0646 \\u0627\\u0644\\u0648\\u0633\\u0637\\u0649\",\"KI\":\"\\u0643\\u0627\\u0644\\u0645\\u0646\\u062a\\u0627\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"KS\":\"\\u0643\\u0627\\u0644\\u064a\\u0645\\u0627\\u0646\\u062a\\u0627\\u0646 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"KU\":\"\\u0643\\u0627\\u0644\\u064a\\u0645\\u0627\\u0646\\u062a\\u0627\\u0646 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"SA\":\"\\u0633\\u0648\\u0644\\u0627\\u0648\\u0633\\u064a \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"ST\":\"\\u0633\\u0648\\u0644\\u0627\\u0648\\u0633\\u064a \\u0627\\u0644\\u0648\\u0633\\u0637\\u0649\",\"SG\":\"\\u0633\\u0648\\u0644\\u0627\\u0648\\u0633\\u064a \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"SR\":\"\\u0633\\u0648\\u0644\\u0627\\u0648\\u0633\\u064a \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"SN\":\"\\u0633\\u0648\\u0644\\u0627\\u0648\\u0633\\u064a \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"GO\":\"\\u062c\\u0648\\u0631\\u0648\\u0646\\u062a\\u0627\\u0644\\u0648\",\"MA\":\"\\u0645\\u0627\\u0644\\u0648\\u0643\\u0648\",\"MU\":\"\\u0645\\u0627\\u0644\\u0648\\u0643\\u0648 \\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"PA\":\"\\u0628\\u0627\\u0628\\u0648\\u0627\",\"PB\":\"\\u0628\\u0627\\u0628\\u0648\\u0627 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\"},\"IE\":{\"CW\":\"\\u0643\\u0627\\u0631\\u0644\\u0648\",\"CN\":\"\\u0643\\u0627\\u0641\\u0627\\u0646\",\"CE\":\"\\u0643\\u0644\\u064a\\u0631\",\"CO\":\"\\u0643\\u0648\\u0631\\u0643\",\"DL\":\"\\u062f\\u0648\\u0646\\u064a\\u062c\\u0627\\u0644\",\"D\":\"\\u062f\\u0628\\u0644\\u0646\",\"G\":\"\\u063a\\u0627\\u0644\\u0648\\u0627\\u064a\",\"KY\":\"\\u0643\\u0631\\u064a\",\"KE\":\"\\u0643\\u064a\\u0644\\u062f\\u064a\\u0631\",\"KK\":\"\\u0643\\u064a\\u0644\\u0643\\u064a\\u0646\\u064a\",\"LS\":\"Laois\",\"LM\":\"\\u0644\\u064a\\u062a\\u0631\\u064a\\u0645\",\"LK\":\"\\u0644\\u064a\\u0645\\u0631\\u064a\\u0643\",\"LD\":\"\\u0644\\u0648\\u0646\\u062c\\u0641\\u0648\\u0631\\u062f\",\"LH\":\"\\u0644\\u0627\\u0648\\u062b\",\"MO\":\"\\u0645\\u0627\\u064a\\u0648\",\"MH\":\"\\u0645\\u064a\\u062b\",\"MN\":\"\\u0645\\u0648\\u0646\\u0627\\u063a\\u0627\\u0646\",\"OY\":\"\\u0623\\u0648\\u0641\\u0627\\u0644\\u064a\",\"RN\":\"\\u0631\\u0648\\u0633\\u0643\\u0648\\u0645\\u0648\\u0646\",\"SO\":\"\\u0633\\u0644\\u0627\\u064a\\u063a\\u0648\",\"TA\":\"\\u062a\\u064a\\u0628\\u064a\\u0631\\u0627\\u0631\\u064a\",\"WD\":\"\\u0648\\u062a\\u0631\\u0641\\u0648\\u0631\\u062f\",\"WH\":\"\\u0648\\u0633\\u062a\\u0645\\u064a\\u062b\",\"WX\":\"\\u0648\\u0643\\u0633\\u0641\\u0648\\u0631\\u062f\",\"WW\":\"\\u0648\\u064a\\u0643\\u0644\\u0627\\u0648\"},\"IN\":{\"AP\":\"\\u0623\\u0646\\u062f\\u0631\\u0627 \\u0628\\u0631\\u062f\\u064a\\u0634\",\"AR\":\"\\u0623\\u0631\\u0648\\u0646\\u0627\\u062c\\u0644 \\u0628\\u0631\\u062f\\u064a\\u0634\",\"AS\":\"\\u0622\\u0633\\u0627\\u0645\",\"BR\":\"\\u0628\\u064a\\u0647\\u0627\\u0631\",\"CT\":\"\\u0634\\u0627\\u0646\\u062f\\u064a\\u063a\\u0627\\u0631\",\"GA\":\"\\u063a\\u0648\\u0627\",\"GJ\":\"\\u063a\\u0648\\u062c\\u0627\\u0631\\u0627\\u062a\",\"HR\":\"\\u0647\\u0627\\u0631\\u064a\\u0627\\u0646\\u0627\",\"HP\":\"\\u0647\\u064a\\u0645\\u0627\\u062c\\u0644 \\u0628\\u0631\\u062f\\u064a\\u0634\",\"JK\":\"\\u062c\\u0627\\u0645\\u0648 \\u0648\\u0643\\u0634\\u0645\\u064a\\u0631\",\"JH\":\"\\u062c\\u0647\\u0627\\u0631\\u062e\\u0627\\u0646\\u062f\",\"KA\":\"\\u0643\\u0627\\u0631\\u0646\\u0627\\u062a\\u0627\\u0643\\u0627\",\"KL\":\"\\u0643\\u064a\\u0631\\u0644\\u0627\",\"LA\":\"Ladakh\",\"MP\":\"\\u0645\\u0627\\u062f\\u064a\\u0627 \\u0628\\u0631\\u0627\\u062f\\u064a\\u0634\",\"MH\":\"\\u0645\\u0627\\u0647\\u0627\\u0631\\u0627\\u0634\\u062a\\u0631\\u0627\",\"MN\":\"\\u0645\\u0627\\u0646\\u064a\\u0628\\u0648\\u0631\",\"ML\":\"\\u0645\\u064a\\u063a\\u0627\\u0644\\u0627\\u064a\\u0627\",\"MZ\":\"\\u0645\\u064a\\u0632\\u0648\\u0631\\u0627\\u0645\",\"NL\":\"\\u0646\\u0627\\u062c\\u0627\\u0644\\u0627\\u0646\\u062f\",\"OR\":\"\\u0623\\u0648\\u062f\\u064a\\u0634\\u0627\",\"PB\":\"\\u0628\\u0646\\u062c\\u0627\\u0628\",\"RJ\":\"\\u0631\\u0627\\u062c\\u0633\\u062a\\u0627\\u0646\",\"SK\":\"\\u0633\\u064a\\u0643\\u064a\\u0645\",\"TN\":\"\\u062a\\u0627\\u0645\\u0644 \\u0646\\u0627\\u062f\\u0648\",\"TS\":\"\\u062a\\u064a\\u0644\\u0627\\u0646\\u062c\\u0627\\u0646\\u0627\",\"TR\":\"\\u062a\\u0631\\u0627\\u064a\\u0628\\u0648\\u0631\\u0627\",\"UK\":\"\\u0623\\u0648\\u062a\\u0627\\u0631\\u0627\\u062e\\u0646\\u062f\",\"UP\":\"\\u0623\\u062a\\u0631 \\u0628\\u0631\\u062f\\u064a\\u0634\",\"WB\":\"\\u0628\\u0646\\u063a\\u0627\\u0644 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"AN\":\"\\u062c\\u0632\\u0631 \\u0623\\u0646\\u062f\\u0645\\u0627\\u0646 \\u0648\\u0646\\u064a\\u0643\\u0648\\u0628\\u0627\\u0631\",\"CH\":\"\\u0634\\u0627\\u0646\\u062f\\u064a\\u063a\\u0627\\u0631\",\"DN\":\"\\u062f\\u0627\\u062f\\u0631\\u0627 \\u0648\\u0646\\u0627\\u062c\\u0627\\u0631 \\u0647\\u0627\\u0641\\u0644\\u064a\",\"DD\":\"\\u062f\\u0645\\u0646 \\u0648\\u062f\\u064a\\u0648\",\"DL\":\"\\u062f\\u0644\\u0647\\u064a\",\"LD\":\"\\u0644\\u0643\\u0634\\u062f\\u064a\\u0628\",\"PY\":\"\\u0628\\u0648\\u0646\\u062f\\u064a\\u062a\\u0634\\u064a\\u0631\\u064a\"},\"IR\":{\"KHZ\":\"\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646 (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"\\u0637\\u0647\\u0631\\u0627\\u0646 (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"\\u0623\\u0630\\u0631\\u0628\\u064a\\u062c\\u0627\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"WAZ\":\"\\u0623\\u0630\\u0631\\u0628\\u064a\\u062c\\u0627\\u0646 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"\\u0628\\u0648\\u0644\\u0648\\u0646\\u064a\\u0627\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"\\u0644\\u0627\\u0643\\u0648\\u064a\\u0644\\u0627\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"\\u0631\\u0648\\u0645\\u0627\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"\\u0633\\u0648\\u062f \\u0633\\u0627\\u0631\\u062f\\u064a\\u0646\\u064a\\u0627\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JM\":{\"JM-01\":\"\\u0643\\u0646\\u062c\\u0633\\u062a\\u0648\\u0646\",\"JM-02\":\"\\u0633\\u0627\\u0646\\u062a \\u0623\\u0646\\u062f\\u0631\\u0648\",\"JM-03\":\"\\u0633\\u0627\\u0646\\u062a \\u062a\\u0648\\u0645\\u0627\\u0633\",\"JM-04\":\"\\u0628\\u0648\\u0631\\u062a\\u0644\\u0627\\u0646\\u062f\",\"JM-05\":\"\\u0633\\u0627\\u0646\\u062a \\u0645\\u0627\\u0631\\u064a\",\"JM-06\":\"\\u0633\\u0627\\u0646\\u062a \\u0622\\u0646\",\"JM-07\":\"\\u062a\\u0631\\u064a\\u0644\\u0627\\u0648\\u0646\\u064a\",\"JM-08\":\"\\u0633\\u0627\\u0646\\u062a \\u062c\\u064a\\u0645\\u0633\",\"JM-09\":\"\\u0647\\u0627\\u0646\\u0648\\u0641\\u0631\",\"JM-10\":\"\\u0648\\u064a\\u0633\\u062a\\u0645\\u0648\\u0631\\u0644\\u0627\\u0646\\u062f\",\"JM-11\":\"\\u0633\\u0627\\u0646\\u062a \\u0625\\u0644\\u064a\\u0632\\u0627\\u0628\\u064a\\u062b\",\"JM-12\":\"\\u0645\\u0627\\u0646\\u0634\\u0633\\u062a\\u0631\",\"JM-13\":\"\\u0643\\u0644\\u0627\\u0631\\u064a\\u0646\\u062f\\u0648\\u0646\",\"JM-14\":\"\\u0633\\u0627\\u0646\\u062a \\u0643\\u0627\\u062a\\u0631\\u064a\\u0646\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"\\u0643\\u064a\\u0648\\u062a\\u0648\",\"JP27\":\"Osaka\",\"JP28\":\"\\u0647\\u064a\\u0648\\u063a\\u0648\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KE\":{\"KE01\":\"\\u0628\\u0627\\u0631\\u064a\\u0646\\u062c\\u0648\",\"KE02\":\"\\u0628\\u0648\\u0645\\u064a\\u0647\",\"KE03\":\"\\u0628\\u0648\\u0646\\u062c\\u0648\\u0645\\u0627\",\"KE04\":\"\\u0628\\u0648\\u0633\\u064a\\u0627\",\"KE05\":\"\\u0625\\u0644\\u062c\\u064a\\u0648 \\u0645\\u0627\\u0631\\u0627\\u0643\\u0648\\u064a\\u062a\",\"KE06\":\"\\u0625\\u0645\\u0628\\u0648\",\"KE07\":\"\\u062c\\u0627\\u0631\\u064a\\u0633\\u0627\",\"KE08\":\"\\u0647\\u0648\\u0645\\u0627 \\u0628\\u0627\\u064a\",\"KE09\":\"\\u0625\\u0633\\u064a\\u0648\\u0644\\u0648\",\"KE10\":\"\\u0643\\u0627\\u062c\\u064a\\u0627\\u062f\\u0648\",\"KE11\":\"\\u0643\\u0627\\u0643\\u0627\\u0645\\u064a\\u062c\\u0627\",\"KE12\":\"\\u0643\\u064a\\u0631\\u064a\\u0643\\u0648\",\"KE13\":\"\\u0643\\u064a\\u0627\\u0645\\u0628\\u0648\",\"KE14\":\"\\u0643\\u064a\\u0644\\u064a\\u0641\\u064a\",\"KE15\":\"\\u0643\\u064a\\u0631\\u064a\\u0646\\u064a\\u0627\\u062c\\u0627\",\"KE16\":\"\\u0643\\u064a\\u0633\\u064a\",\"KE17\":\"\\u0643\\u064a\\u0633\\u0648\\u0645\\u0648\",\"KE18\":\"\\u0643\\u064a\\u062a\\u0648\\u064a\",\"KE19\":\"\\u0643\\u0648\\u0627\\u0644\\u064a\",\"KE20\":\"\\u0644\\u0627\\u064a\\u0643\\u064a\\u0628\\u064a\\u0627\",\"KE21\":\"\\u0644\\u0627\\u0645\\u0648\",\"KE22\":\"\\u0645\\u0627\\u062a\\u0634\\u0627\\u0643\\u0648\\u0633\",\"KE23\":\"\\u0645\\u0627\\u0643\\u0648\\u064a\\u0646\\u064a\",\"KE24\":\"\\u0645\\u0627\\u0646\\u062f\\u064a\\u0631\\u0627\",\"KE25\":\"\\u0645\\u0627\\u0631\\u0633\\u0627\\u0628\\u064a\\u062a\",\"KE26\":\"\\u0645\\u064a\\u0631\\u0648\",\"KE27\":\"\\u0645\\u064a\\u062c\\u0648\\u0631\\u064a\",\"KE28\":\"\\u0645\\u0648\\u0645\\u0628\\u0627\\u0633\\u0627\",\"KE29\":\"\\u0645\\u0648\\u0631\\u0627\\u0646\\u062c\\u0627\",\"KE30\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0646\\u064a\\u0631\\u0648\\u0628\\u064a\",\"KE31\":\"\\u0646\\u0627\\u0643\\u0648\\u0631\\u0648\",\"KE32\":\"\\u0646\\u0627\\u0646\\u062f\\u064a\",\"KE33\":\"\\u0646\\u0627\\u0631\\u0648\\u0643\",\"KE34\":\"\\u0646\\u064a\\u0627\\u0645\\u064a\\u0631\\u0627\",\"KE35\":\"\\u0646\\u064a\\u0627\\u0646\\u062f\\u0627\\u0631\\u0648\\u0627\",\"KE36\":\"\\u0646\\u064a\\u064a\\u0631\\u064a\",\"KE37\":\"\\u0633\\u0627\\u0645\\u0628\\u0648\\u0631\\u0648\",\"KE38\":\"\\u0633\\u064a\\u0627\\u064a\\u0627\",\"KE39\":\"\\u062a\\u0627\\u064a\\u062a\\u0627 \\u062a\\u0627\\u0641\\u064a\\u062a\\u0627\",\"KE40\":\"\\u0646\\u0647\\u0631 \\u062a\\u0627\\u0646\\u0627\",\"KE41\":\"\\u062b\\u0627\\u0631\\u0627\\u0643\\u0627 \\u0646\\u064a\\u062b\\u064a\",\"KE42\":\"\\u062a\\u0631\\u0627\\u0646\\u0633 \\u0646\\u0632\\u0648\\u064a\\u0627\",\"KE43\":\"\\u062a\\u0648\\u0631\\u0643\\u0627\\u0646\\u0627\",\"KE44\":\"\\u064a\\u0648\\u0627\\u0633\\u064a\\u0646 \\u062c\\u064a\\u0634\\u0648\",\"KE45\":\"\\u0641\\u064a\\u0647\\u064a\\u062c\\u0627\",\"KE46\":\"\\u0648\\u0627\\u062c\\u064a\\u0631\",\"KE47\":\"\\u0628\\u0648\\u0643\\u0648\\u062a \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\"},\"KR\":[],\"KW\":[],\"LA\":{\"AT\":\"\\u0622\\u062a\\u0627\\u0628\\u0648\",\"BK\":\"\\u0628\\u0648\\u0643\\u064a\\u0648\",\"BL\":\"\\u0628\\u0648\\u0644\\u064a\\u062e\\u0627\\u0645\\u0627\\u0633\\u064a\",\"CH\":\"\\u062a\\u0634\\u0627\\u0645\\u0628\\u0627\\u0633\\u0627\\u0643\",\"HO\":\"\\u0647\\u0648\\u0641\\u0627\\u0646\",\"KH\":\"\\u062e\\u0627\\u0645\\u0648\\u0627\\u0646\",\"LM\":\"\\u0644\\u0648\\u0627\\u0646\\u063a \\u0646\\u0627\\u0645\\u062b\\u0627\",\"LP\":\"\\u0644\\u0648\\u0627\\u0646\\u0643 \\u0641\\u0627\\u0628\\u0627\\u0646\\u0643\",\"OU\":\"\\u0623\\u0648\\u062f\\u0648\\u0645\\u0643\\u0633\\u0627\\u064a\",\"PH\":\"\\u0641\\u0648\\u0646\\u063a\\u0633\\u0627\\u0644\\u064a\",\"SL\":\"\\u0633\\u0627\\u0644\\u0627\\u0641\\u0627\\u0646\",\"SV\":\"\\u0633\\u0627\\u0641\\u0627\\u0646\\u062e\\u062a\",\"VI\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0641\\u064a\\u0646\\u062a\\u064a\\u0627\\u0646\",\"VT\":\"\\u0641\\u064a\\u0646\\u062a\\u064a\\u0627\\u0646\",\"XA\":\"\\u0633\\u0627\\u064a\\u0630\\u064a\\u0628\\u0648\\u0644\\u064a\",\"XE\":\"\\u0632\\u064a\\u0643\\u0648\\u0646\\u062c\",\"XI\":\"\\u0632\\u064a\\u0627\\u0646\\u063a\\u0647\\u0648\\u0627\\u0646\\u063a\",\"XS\":\"\\u0633\\u0627\\u064a\\u0632\\u0648\\u0645\\u0628\\u0648\\u0646\"},\"LB\":[],\"LR\":{\"BM\":\"\\u0628\\u0648\\u0645\\u064a\",\"BN\":\"\\u0628\\u0648\\u0646\\u063a\",\"GA\":\"\\u063a\\u0628\\u0627\\u0631\\u0628\\u0648\\u0644\\u0648\",\"GB\":\"\\u063a\\u0631\\u0627\\u0646\\u062f \\u0628\\u0627\\u0633\\u0627\",\"GC\":\"\\u063a\\u0631\\u0627\\u0646\\u062f \\u0643\\u064a\\u0628 \\u0645\\u0627\\u0648\\u0646\\u062a\",\"GG\":\"\\u063a\\u0631\\u0627\\u0646\\u062f \\u062c\\u062f\\u0629\",\"GK\":\"\\u063a\\u0631\\u0627\\u0646\\u062f \\u0643\\u0631\\u0648\",\"LO\":\"\\u0644\\u0648\\u0641\\u0627\",\"MA\":\"\\u0645\\u063a\\u0631\\u0628\\u064a\",\"MY\":\"\\u0645\\u0627\\u0631\\u064a\\u0644\\u0627\\u0646\\u062f\",\"MO\":\"\\u0645\\u0648\\u0646\\u062a\\u0633\\u064a\\u0631\\u0627\\u062f\\u0648\",\"NM\":\"\\u0646\\u064a\\u0645\\u0628\\u0627\",\"RV\":\"\\u0631\\u064a\\u0641\\u0631 \\u0633\\u064a\\u0633\",\"RG\":\"\\u0631\\u064a\\u0641\\u0631 \\u062c\\u064a\",\"SN\":\"\\u0633\\u064a\\u0646\\u0648\"},\"LU\":[],\"MD\":{\"C\":\"\\u0643\\u064a\\u0634\\u0646\\u064a\\u0646\\u0627\\u0648\",\"BL\":\"\\u0628\\u0627\\u0644\\u062a\\u0633\\u064a\",\"AN\":\"\\u0623\\u0646\\u064a\\u0646\\u064a \\u0646\\u0648\\u064a\",\"BS\":\"\\u0628\\u0627\\u0633\\u0627\\u0631\\u0627\\u0628\\u064a\\u0627\\u0633\\u0643\\u0627\",\"BR\":\"\\u0628\\u0631\\u064a\\u0633\\u064a\\u0646\\u064a\",\"CH\":\"\\u0643\\u0627\\u0647\\u0648\\u0644\",\"CT\":\"\\u0643\\u0627\\u0646\\u062a\\u064a\\u0645\\u064a\\u0631\",\"CL\":\"\\u0643\\u0627\\u0644\\u0627\\u0631\\u0627\\u0634\",\"CS\":\"\\u0643\\u0648\\u0633\\u064a\\u0646\\u064a\",\"CM\":\"\\u0633\\u064a\\u0645\\u064a\\u0634\\u0644\\u064a\\u0627\",\"CR\":\"\\u0643\\u0631\\u064a\\u0648\\u0644\\u064a\\u0646\\u064a\",\"DN\":\"\\u062f\\u0648\\u0646\\u062f\\u0648\\u0633\\u064a\\u0646\\u064a\",\"DR\":\"\\u062f\\u0631\\u0648\\u062a\\u0634\\u064a\\u0627\",\"DB\":\"\\u062f\\u0648\\u0628\\u0627\\u0633\\u0627\\u0631\\u064a\",\"ED\":\"\\u0625\\u064a\\u062f\\u064a\\u0646\\u062a\",\"FL\":\"\\u0641\\u0627\\u0644\\u064a\\u0633\\u062a\\u064a\",\"FR\":\"\\u0641\\u0644\\u0648\\u0631\\u064a\\u0633\\u062a\\u064a\",\"GE\":\"\\u063a\\u0627\\u063a\\u0627\\u0648\\u0632\\u064a\\u0627\",\"GL\":\"\\u062c\\u0644\\u0648\\u062f\\u0646\\u064a\",\"HN\":\"\\u0647\\u064a\\u0646\\u0633\\u0634\\u062a\\u064a\",\"IL\":\"\\u0625\\u064a\\u0644\\u0648\\u0641\\u064a\\u0646\\u064a\",\"LV\":\"\\u0644\\u064a\\u0648\\u0641\\u0627\",\"NS\":\"\\u0646\\u064a\\u0633\\u0628\\u0648\\u0631\\u064a\\u0646\\u064a\",\"OC\":\"\\u0623\\u0648\\u0646\\u064a\\u062a\\u0627\",\"OR\":\"\\u0623\\u0648\\u0631\\u0647\\u064a\",\"RZ\":\"\\u0631\\u064a\\u0632\\u0627\\u064a\\u0646\\u0627\",\"RS\":\"\\u0631\\u0634\\u0643\\u0627\\u0646\",\"SG\":\"\\u0633\\u0646\\u062c\\u0631\\u064a\",\"SR\":\"\\u0633\\u0648\\u0631\\u0648\\u0643\\u0627\",\"ST\":\"\\u0633\\u062a\\u0631\\u0627\\u0634\\u064a\",\"SD\":\"\\u0634\\u0648\\u0644\\u062f\\u0627\\u0646\\u064a\\u0634\\u062a\\u064a\",\"SV\":\"\\u0633\\u062a\\u064a\\u0641\\u0627\\u0646 \\u0641\\u0648\\u062f\\u0627\",\"TR\":\"\\u062a\\u0627\\u0631\\u0627\\u0643\\u0644\\u064a\\u0627\",\"TL\":\"\\u062a\\u064a\\u0644\\u064a\\u0646\\u064a\\u0634\\u062a\\u064a\",\"UN\":\"\\u0623\\u0648\\u0646\\u063a\\u064a\\u0646\\u064a\"},\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"\\u0645\\u062f\\u064a\\u0646\\u0629 \\u0645\\u0643\\u0633\\u064a\\u0643\\u0648\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"\\u0648\\u0644\\u0627\\u064a\\u0629 \\u0645\\u0643\\u0633\\u064a\\u0643\\u0648\",\"MI\":\"Michoac\\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"\\u0644\\u0627\\u0628\\u0648\\u0627\\u0646\",\"MLK\":\"\\u0645\\u0644\\u0642\\u0627 (\\u0645\\u0644\\u0627\\u0643\\u0627)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"\\u0628\\u064a\\u0646\\u0627\\u0646\\u0642 (\\u0628\\u0648\\u0644\\u0627\\u0648 \\u0628\\u064a\\u0646\\u063a)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"\\u0628\\u0648\\u062a\\u0631\\u0627\\u062c\\u0627\\u064a\",\"KUL\":\"\\u0643\\u0648\\u0627\\u0644\\u0627 \\u0644\\u0645\\u0628\\u0648\\u0631\"},\"MZ\":{\"MZP\":\"\\u0643\\u0627\\u0628\\u0648 \\u062f\\u064a\\u0644\\u062c\\u0627\\u062f\\u0648\",\"MZG\":\"\\u063a\\u0632\\u0629\",\"MZI\":\"\\u0625\\u0646\\u0647\\u0627\\u0645\\u0628\\u0627\\u0646\",\"MZB\":\"\\u0645\\u0627\\u0646\\u064a\\u0643\\u0627\",\"MZL\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0645\\u0627\\u0628\\u0648\\u062a\\u0648\",\"MZMPM\":\"\\u0645\\u0627\\u0628\\u0648\\u062a\\u0648\",\"MZN\":\"\\u0646\\u0627\\u0645\\u0628\\u0648\\u0644\\u0627\",\"MZA\":\"\\u0646\\u064a\\u0627\\u0633\\u0627\",\"MZS\":\"\\u0633\\u0648\\u0641\\u0627\\u0644\\u0627\",\"MZT\":\"\\u062a\\u064a\\u062a\\u064a\",\"MZQ\":\"\\u0632\\u0627\\u0645\\u0628\\u064a\\u0632\\u064a\\u0627\"},\"NA\":{\"ER\":\"\\u0625\\u064a\\u0631\\u0648\\u0646\\u062c\\u0648\",\"HA\":\"\\u0647\\u0627\\u0631\\u062f\\u0627\\u0628\",\"KA\":\"\\u0643\\u0627\\u0631\\u0627\\u0633\",\"KE\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0643\\u0627\\u0641\\u0627\\u0646\\u062c\\u0648 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\",\"KW\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0643\\u0627\\u0641\\u0627\\u0646\\u062c\\u0648 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\",\"KH\":\"\\u062e\\u0648\\u0645\\u0627\\u0633\",\"KU\":\"\\u0643\\u0648\\u0646\\u064a\\u064a\\u0646\",\"OW\":\"\\u0623\\u0648\\u0647\\u0627\\u0646\\u062c\\u0648\\u064a\\u0646\\u0627\",\"OH\":\"\\u0623\\u0648\\u0645\\u0627\\u0647\\u064a\\u0643\\u064a\",\"OS\":\"\\u0623\\u0648\\u0645\\u0648\\u0633\\u0627\\u062a\\u064a\",\"ON\":\"\\u0623\\u0648\\u0634\\u0627\\u0646\\u0627\",\"OT\":\"\\u0623\\u0648\\u0634\\u064a\\u0643\\u0648\\u062a\\u0648\",\"OD\":\"\\u0623\\u0648\\u062a\\u062c\\u0648\\u0632\\u0648\\u0646\\u062f\\u062a\\u0648\\u0628\\u0627\",\"CA\":\"\\u0632\\u0627\\u0645\\u0628\\u064a\\u0632\\u064a\"},\"NG\":{\"AB\":\"\\u0623\\u0628\\u064a\\u0627\",\"FC\":\"\\u0623\\u0628\\u0648\\u062c\\u0627\",\"AD\":\"\\u0622\\u062f\\u0645\\u0627\\u0648\\u0629\",\"AK\":\"\\u0627\\u0643\\u0648\\u0627 \\u0627\\u064a\\u0628\\u0648\\u0645\",\"AN\":\"\\u0623\\u0646\\u0645\\u0628\\u0631\\u0629\",\"BA\":\"\\u0628\\u0627\\u0648\\u062a\\u0634\\u064a\",\"BY\":\"\\u0628\\u0627\\u064a\\u0644\\u0633\\u0627\",\"BE\":\"\\u0628\\u0646\\u0648\\u064a\\u0647\",\"BO\":\"\\u0628\\u0631\\u0646\\u0648\",\"CR\":\"\\u0643\\u0631\\u0648\\u0633 \\u0631\\u064a\\u0641\\u0631\",\"DE\":\"\\u062f\\u0644\\u062a\\u0627\",\"EB\":\"\\u0623\\u064a\\u0628\\u0648\\u0646\\u064a\",\"ED\":\"\\u0625\\u062f\\u0648\",\"EK\":\"\\u0625\\u0643\\u064a\\u062a\\u064a\",\"EN\":\"\\u0625\\u0646\\u0648\\u063a\\u0648\",\"GO\":\"\\u063a\\u0648\\u0645\\u0628\\u064a\",\"IM\":\"\\u0625\\u0645\\u0648\",\"JI\":\"\\u062c\\u064a\\u063a\\u0627\\u0648\\u0629\",\"KD\":\"\\u0643\\u0627\\u062f\\u0648\\u0646\\u0627\",\"KN\":\"\\u0643\\u0627\\u0646\\u0648\",\"KT\":\"\\u0643\\u0627\\u062a\\u0633\\u064a\\u0646\\u0627\",\"KE\":\"\\u0643\\u0628\\u064a\",\"KO\":\"\\u0643\\u0648\\u062c\\u064a\",\"KW\":\"\\u0643\\u0648\\u0627\\u0631\\u0629\",\"LA\":\"\\u0644\\u0627\\u063a\\u0648\\u0633\",\"NA\":\"\\u0646\\u0635\\u0631\\u0627\\u0648\\u0629\",\"NI\":\"\\u0627\\u0644\\u0646\\u064a\\u062c\\u0631\",\"OG\":\"\\u0623\\u0648\\u062c\\u064a\\u0646\",\"ON\":\"\\u0623\\u0648\\u0646\\u062f\\u0648\",\"OS\":\"\\u0623\\u0648\\u0634\\u0648\\u0646\",\"OY\":\"\\u0623\\u0648\\u064a\\u0648\",\"PL\":\"\\u0628\\u0644\\u0627\\u062a\\u0648\",\"RI\":\"\\u0631\\u064a\\u0641\\u0631\\u0632\",\"SO\":\"\\u0633\\u0648\\u0643\\u0648\\u062a\\u0648\",\"TA\":\"\\u062a\\u0631\\u0627\\u0628\\u0629\",\"YO\":\"\\u064a\\u0648\\u0628\\u064a\",\"ZA\":\"\\u0632\\u0627\\u0645\\u0641\\u0627\\u0631\\u0629\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"\\u0628\\u0627\\u062c\\u0645\\u0627\\u062a\\u064a\",\"BHE\":\"\\u0628\\u0647\\u0631\\u064a\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"\\u063a\\u0627\\u0646\\u062f\\u0627\\u0643\\u064a\",\"JAN\":\"\\u062c\\u0627\\u0646\\u0627\\u0643\\u0628\\u0648\\u0631\",\"KAR\":\"\\u0643\\u0627\\u0631\\u0646\\u0627\\u0644\\u064a\",\"KOS\":\"\\u0643\\u0648\\u0634\\u064a\",\"LUM\":\"\\u0644\\u0648\\u0645\\u0628\\u064a\\u0646\\u064a\",\"MAH\":\"\\u0645\\u0627\\u0647\\u0627\\u0643\\u0627\\u0644\\u064a\",\"MEC\":\"\\u0645\\u064a\\u062a\\u0634\\u064a\",\"NAR\":\"\\u0646\\u0627\\u0631\\u0627\\u064a\\u0627\\u0646\\u064a\",\"RAP\":\"\\u0631\\u0627\\u0628\\u062a\\u064a\",\"SAG\":\"\\u0633\\u0627\\u062c\\u0627\\u0631\\u0645\\u0627\\u062b\\u0627\",\"SET\":\"\\u0633\\u064a\\u062a\\u064a\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"GI\":\"Gisborne\",\"HB\":\"\\u0647\\u0627\\u0648\\u0643\\u0633 \\u0628\\u0627\\u064a\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"\\u0646\\u064a\\u0644\\u0633\\u0648\\u0646\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"\\u0627\\u0644\\u0623\\u0645\\u0627\\u0632\\u0648\\u0646\",\"ANC\":\"Ancash\",\"APU\":\"\\u0623\\u0628\\u0648\\u0631\\u064a\\u0645\\u0627\\u0643\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"\\u0647\\u0648\\u0627\\u0646\\u0648\\u0643\\u0648\",\"ICA\":\"Ica\",\"JUN\":\"\\u062c\\u0648\\u0646\\u064a\\u0646\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"\\u0633\\u0627\\u0646 \\u0645\\u0627\\u0631\\u062a\\u0646\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"\\u0623\\u0628\\u0631\\u0627\",\"AGN\":\"\\u0623\\u062c\\u0648\\u0633\\u0627\\u0646 \\u062f\\u064a\\u0644 \\u0646\\u0648\\u0631\\u062a\",\"AGS\":\"\\u0623\\u062c\\u0648\\u0633\\u0627\\u0646 \\u062f\\u064a\\u0644 \\u0633\\u0648\\u0631\",\"AKL\":\"\\u0623\\u0643\\u0644\\u0627\\u0646\",\"ALB\":\"\\u0627\\u0644\\u0628\\u0627\\u064a\",\"ANT\":\"\\u0622\\u0646\\u062a\\u064a\\u0643\",\"APA\":\"\\u0622\\u0628\\u0627\\u064a\\u0627\\u0648\",\"AUR\":\"\\u0627\\u0644\\u0634\\u0641\\u0642 \\u0627\\u0644\\u0642\\u0637\\u0628\\u064a\",\"BAS\":\"\\u0628\\u0627\\u0633\\u064a\\u0644\\u0627\\u0646\",\"BAN\":\"\\u0628\\u0627\\u062a\\u0627\\u0646\",\"BTN\":\"\\u0628\\u0627\\u062a\\u0627\\u0646\\u0633\",\"BTG\":\"\\u0628\\u0627\\u062a\\u0627\\u0646\\u062c\\u0627\\u0633\",\"BEN\":\"\\u0628\\u0646\\u062c\\u0648\\u064a\\u062a\",\"BIL\":\"\\u0628\\u064a\\u0644\\u064a\\u0631\\u0627\\u0646\",\"BOH\":\"\\u0628\\u0648\\u0647\\u0648\\u0644\",\"BUK\":\"\\u0628\\u0648\\u0643\\u064a\\u062f\\u0646\\u0648\\u0646\",\"BUL\":\"\\u0628\\u0648\\u0644\\u0627\\u0643\\u0627\\u0646\",\"CAG\":\"\\u0643\\u0627\\u063a\\u0627\\u064a\\u0627\\u0646\",\"CAN\":\"\\u0643\\u0627\\u0645\\u0627\\u0631\\u064a\\u0646\\u0633 \\u0646\\u0648\\u0631\\u062a\",\"CAS\":\"\\u0643\\u0627\\u0645\\u0627\\u0631\\u064a\\u0646\\u0633 \\u0633\\u0648\\u0631\",\"CAM\":\"\\u0643\\u0627\\u0645\\u064a\\u063a\\u0648\\u064a\\u064a\\u0646\",\"CAP\":\"\\u0643\\u0627\\u0628\\u064a\\u0632\",\"CAT\":\"\\u0643\\u0627\\u062a\\u0627\\u0646\\u062f\\u0648\\u0627\\u0646\\u0647\",\"CAV\":\"\\u0643\\u0627\\u0648\\u064a\\u062a\\u0647\",\"CEB\":\"\\u0633\\u064a\\u0628\\u0648\",\"COM\":\"\\u0643\\u0627\\u0645\\u0628\\u0648\\u0633\\u062a\\u0644\\u0627 \\u0648\\u0644\\u064a\",\"NCO\":\"\\u0643\\u0648\\u062a\\u0627\\u0628\\u0627\\u062a\\u0648\",\"DAV\":\"\\u062f\\u0627\\u0641\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0646\\u0648\\u0631\\u062a\",\"DAS\":\"\\u062f\\u0627\\u0641\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0633\\u0648\\u0631\",\"DAC\":\"\\u062f\\u0627\\u0641\\u0627\\u0648 \\u0623\\u0648\\u0643\\u0633\\u064a\\u062f\\u0646\\u062a\\u0627\\u0644\",\"DAO\":\"\\u062f\\u0627\\u0641\\u0627\\u0648 \\u0623\\u0648\\u0631\\u064a\\u0646\\u062a\\u0627\\u0644\",\"DIN\":\"\\u062c\\u0632\\u0631 \\u062f\\u064a\\u0646\\u0627\\u063a\\u0627\\u062a\",\"EAS\":\"\\u0633\\u0627\\u0645\\u0627\\u0631 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"GUI\":\"\\u063a\\u064a\\u0645\\u0627\\u0631\\u0627\\u0633\",\"IFU\":\"\\u0627\\u064a\\u0641\\u0648\\u063a\\u0627\\u064a\\u0648\",\"ILN\":\"\\u0625\\u064a\\u0644\\u0648\\u0643\\u0648\\u0633 \\u0646\\u0648\\u0631\\u062a\",\"ILS\":\"\\u0625\\u064a\\u0644\\u0648\\u0643\\u0648\\u0633 \\u0633\\u0648\\u0631\",\"ILI\":\"\\u0625\\u064a\\u0644\\u0648\\u064a\\u0644\\u0648\",\"ISA\":\"\\u0627\\u064a\\u0632\\u0627\\u0628\\u064a\\u0644\\u0627\",\"KAL\":\"\\u0643\\u0627\\u0644\\u064a\\u0646\\u062c\\u0627\",\"LUN\":\"\\u0644\\u0627 \\u064a\\u0648\\u0646\\u064a\\u0648\\u0646\",\"LAG\":\"\\u0644\\u0627\\u063a\\u0648\\u0646\\u0627\",\"LAN\":\"\\u0644\\u0627\\u0646\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0646\\u0648\\u0631\\u062a\",\"LAS\":\"\\u0644\\u0627\\u0646\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0633\\u0648\\u0631\",\"LEY\":\"\\u0644\\u064a\\u062a\\u0629\",\"MAG\":\"\\u0645\\u0627\\u063a\\u0648\\u064a\\u064a\\u0646\\u062f\\u0627\\u0646\\u0627\\u064a\\u0648\",\"MAD\":\"\\u0645\\u0627\\u0631\\u064a\\u0646\\u062f\\u0648\\u0643\",\"MAS\":\"\\u0645\\u0627\\u0633\\u0628\\u0627\\u062a\",\"MSC\":\"\\u0645\\u064a\\u0633\\u0627\\u0645\\u064a\\u0633 \\u0623\\u0648\\u0643\\u0633\\u064a\\u062f\\u0646\\u062a\\u0627\\u0644\",\"MSR\":\"\\u0645\\u064a\\u0633\\u0627\\u0645\\u064a\\u0633 \\u0623\\u0648\\u0631\\u064a\\u0646\\u062a\\u0627\\u0644\",\"MOU\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0645\\u0627\\u0648\\u0646\\u062a\\u064a\\u0646\",\"NEC\":\"\\u0646\\u064a\\u062c\\u0631\\u0648\\u0633 \\u0623\\u0648\\u0643\\u0633\\u064a\\u062f\\u0646\\u062a\\u0627\\u0644\",\"NER\":\"\\u0646\\u064a\\u062c\\u0631\\u0648\\u0633 \\u0623\\u0648\\u0631\\u064a\\u0646\\u062a\\u0627\\u0644\",\"NSA\":\"\\u0633\\u0645\\u0631 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"NUE\":\"\\u0646\\u0648\\u064a\\u0641\\u0627 \\u0627\\u064a\\u0633\\u064a\\u062c\\u0627\",\"NUV\":\"\\u0646\\u0648\\u064a\\u0641\\u0627 \\u0641\\u064a\\u0632\\u0643\\u0627\\u064a\\u0627\",\"MDC\":\"\\u0645\\u0646\\u062f\\u0648\\u0631\\u0648 \\u0623\\u0648\\u0643\\u0633\\u064a\\u062f\\u0646\\u062a\\u0627\\u0644\",\"MDR\":\"\\u0645\\u0646\\u062f\\u0648\\u0631\\u0648 \\u0623\\u0648\\u0631\\u064a\\u0646\\u062a\\u0627\\u0644\",\"PLW\":\"\\u0628\\u0627\\u0644\\u0627\\u0648\\u0627\\u0646\",\"PAM\":\"\\u0628\\u0627\\u0645\\u0628\\u0627\\u0646\\u063a\\u0627\",\"PAN\":\"\\u0628\\u0627\\u0646\\u063a\\u0627\\u0633\\u064a\\u0646\\u0627\\u0646\",\"QUE\":\"\\u0643\\u064a\\u0648\\u0632\\u0648\\u0646\",\"QUI\":\"\\u0643\\u0648\\u064a\\u0631\\u064a\\u0646\\u0648\",\"RIZ\":\"\\u0631\\u064a\\u0632\\u0627\\u0644\",\"ROM\":\"\\u0631\\u0648\\u0645\\u0628\\u0644\\u0648\\u0646\",\"WSA\":\"\\u0633\\u0627\\u0645\\u0627\\u0631\",\"SAR\":\"\\u0633\\u0627\\u0631\\u0627\\u0646\\u063a\\u0627\\u0646\\u064a\",\"SIQ\":\"\\u0633\\u064a\\u0643\\u064a\\u062e\\u0648\\u0631\",\"SOR\":\"\\u0633\\u0648\\u0631\\u0648\\u0633\\u0648\\u063a\\u0648\\u0646\",\"SCO\":\"\\u0643\\u0648\\u062a\\u0627\\u0628\\u0627\\u062a\\u0648 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"SLE\":\"\\u0644\\u0627\\u064a\\u062a\\u064a \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"SUK\":\"\\u0633\\u0644\\u0637\\u0627\\u0646 \\u0643\\u0648\\u062f\\u0627\\u0631\\u0627\\u062a\",\"SLU\":\"\\u0633\\u0648\\u0644\\u0648\",\"SUN\":\"\\u0633\\u0648\\u0631\\u064a\\u062c\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0646\\u0648\\u0631\\u062a\",\"SUR\":\"\\u0633\\u0648\\u0631\\u064a\\u062c\\u0627\\u0648 \\u062f\\u064a\\u0644 \\u0633\\u0648\\u0631\",\"TAR\":\"\\u062a\\u0627\\u0631\\u0644\\u0627\\u0643\",\"TAW\":\"\\u062a\\u0627\\u0648\\u064a \\u062a\\u0627\\u0648\\u064a\",\"ZMB\":\"\\u0632\\u0627\\u0645\\u0628\\u0627\\u0644\\u0647\",\"ZAN\":\"\\u0632\\u0627\\u0645\\u0628\\u0648\\u0627\\u0646\\u062c\\u0627 \\u062f\\u064a\\u0644 \\u0646\\u0648\\u0631\\u062a\",\"ZAS\":\"\\u0632\\u0627\\u0645\\u0628\\u0648\\u0627\\u0646\\u062c\\u0627 \\u062f\\u064a\\u0644 \\u0633\\u0648\\u0631\",\"ZSI\":\"\\u0632\\u0627\\u0645\\u0628\\u0648\\u0627\\u0646\\u063a\\u0627 \\u0633\\u064a\\u0628\\u0648\\u063a\\u0627\\u064a\",\"00\":\"\\u0645\\u062a\\u0631\\u0648 \\u0645\\u0627\\u0646\\u064a\\u0644\\u0627\"},\"PK\":{\"JK\":\"\\u0622\\u0632\\u0627\\u062f \\u0643\\u0634\\u0645\\u064a\\u0631\",\"BA\":\"\\u0628\\u0644\\u0648\\u0634\\u0633\\u062a\\u0627\\u0646\",\"TA\":\"\\u0627\\u0644\\u0645\\u0646\\u0627\\u0637\\u0642 \\u0627\\u0644\\u0642\\u0628\\u0644\\u064a\\u0629 \\u0627\\u0644\\u062e\\u0627\\u0636\\u0639\\u0629 \\u0644\\u0644\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0627\\u062a\\u062d\\u0627\\u062f\\u064a\\u0629 (FATA)\",\"GB\":\"\\u062c\\u064a\\u0644\\u062c\\u064a\\u062a \\u0628\\u0627\\u0644\\u062a\\u0633\\u062a\\u0627\\u0646\",\"IS\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0635\\u0645\\u0629 \\u0625\\u0633\\u0644\\u0627\\u0645 \\u0622\\u0628\\u0627\\u062f\",\"KP\":\"\\u062e\\u064a\\u0628\\u0631 \\u0628\\u0627\\u062e\\u062a\\u0648\\u0646\\u062e\\u0648\\u0627\",\"PB\":\"\\u0628\\u0646\\u062c\\u0627\\u0628\",\"SD\":\"\\u0627\\u0644\\u0633\\u0646\\u062f\"},\"PL\":[],\"PR\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"\\u0623\\u0633\\u0648\\u0646\\u0633\\u064a\\u0648\\u0646\",\"PY-1\":\"\\u0643\\u0648\\u0646\\u0633\\u064a\\u0628\\u0633\\u064a\\u0648\\u0646\",\"PY-2\":\"\\u0633\\u0627\\u0646 \\u0628\\u064a\\u062f\\u0631\\u0648\",\"PY-3\":\"\\u0643\\u0648\\u0631\\u062f\\u064a\\u0644\\u064a\\u0631\\u0627\",\"PY-4\":\"\\u062c\\u0648\\u0627\\u064a\\u0631\\u0627\",\"PY-5\":\"\\u0643\\u0627\\u062c\\u0648\\u0627\\u0632\\u0648\",\"PY-6\":\"\\u0643\\u0627\\u0632\\u0627\\u0628\\u0627\",\"PY-7\":\"\\u0625\\u062a\\u0627\\u0628\\u0648\\u0627\",\"PY-8\":\"\\u0645\\u064a\\u0633\\u064a\\u0648\\u0646\\u0633\",\"PY-9\":\"\\u0628\\u0627\\u0631\\u0627\\u062c\\u0648\\u0627\\u0631\\u064a\",\"PY-10\":\"\\u0623\\u0644\\u062a\\u0648 \\u0628\\u0627\\u0631\\u0627\\u0646\\u0627\",\"PY-11\":\"\\u0633\\u0646\\u062a\\u0631\\u0627\\u0644\",\"PY-12\":\"\\u0646\\u064a\\u0645\\u0628\\u0648\\u0643\\u0648\",\"PY-13\":\"\\u0623\\u0645\\u0627\\u0645\\u0628\\u0627\\u064a\",\"PY-14\":\"\\u0643\\u0627\\u0646\\u064a\\u0646\\u062f\\u064a\\u0648\",\"PY-15\":\"\\u0628\\u0631\\u064a\\u0633\\u064a\\u062f\\u064a\\u0646\\u062a\\u064a \\u0647\\u0627\\u064a\\u064a\\u0633\",\"PY-16\":\"\\u0623\\u0644\\u062a\\u0648 \\u0628\\u0627\\u0631\\u0627\\u062c\\u0648\\u0627\\u064a\",\"PY-17\":\"\\u0628\\u0648\\u0643\\u064a\\u0631\\u0648\\u0646\"},\"RE\":[],\"RO\":{\"AB\":\"\\u0623\\u0644\\u0628\\u0627\",\"AR\":\"\\u0627\\u0631\\u0627\\u062f\",\"AG\":\"\\u0623\\u0631\\u062c\\u064a\\u0633\",\"BC\":\"\\u0628\\u0627\\u0643\\u0627\\u0648\",\"BH\":\"\\u0628\\u064a\\u0647\\u0648\\u0631\",\"BN\":\"\\u0628\\u064a\\u0633\\u062a\\u0631\\u064a\\u062a\\u0633\\u0627 \\u0646\\u0627\\u0633\\u0627\\u0648\\u0648\\u062f\",\"BT\":\"\\u0628\\u0648\\u062a\\u0648\\u0634\\u0627\\u0646\\u064a\",\"BR\":\"\\u0628\\u0631\\u0627\\u064a\\u0644\\u0627\",\"BV\":\"\\u0628\\u0631\\u0627\\u0634\\u0648\\u0641\",\"B\":\"\\u0628\\u0648\\u062e\\u0627\\u0631\\u0633\\u062a\",\"BZ\":\"\\u0628\\u0648\\u0632\\u0627\\u0648\",\"CL\":\"\\u0643\\u0627\\u0644\\u0627\\u0631\\u0627\\u0634\",\"CS\":\"\\u0643\\u0627\\u0631\\u0627\\u0633 \\u0633\\u064a\\u0641\\u0631\\u064a\\u0646\",\"CJ\":\"\\u0643\\u0644\\u0648\\u062c\",\"CT\":\"\\u0643\\u0648\\u0646\\u0633\\u062a\\u0627\\u0646\\u062a\\u0633\\u0627\",\"CV\":\"\\u0643\\u0648\\u0641\\u0627\\u0633\\u0646\\u0627\",\"DB\":\"\\u062f\\u064a\\u0645\\u0628\\u0648\\u0641\\u064a\\u062a\\u0633\\u0627\",\"DJ\":\"\\u062f\\u0648\\u0644\\u062c\",\"GL\":\"\\u063a\\u0627\\u0644\\u0627\\u062a\\u0633\",\"GR\":\"\\u062c\\u0648\\u0631\\u062c\\u064a\\u0648\",\"GJ\":\"\\u063a\\u0648\\u0631\\u062c\",\"HR\":\"\\u0647\\u0627\\u0631\\u063a\\u064a\\u062a\\u0627\",\"HD\":\"\\u0647\\u0648\\u0646\\u064a\\u062f\\u0648\\u0627\\u0631\\u0627\",\"IL\":\"\\u0627\\u064a\\u0627\\u0644\\u0648\\u0645\\u064a\\u062a\\u0633\\u0627\",\"IS\":\"\\u064a\\u0627\\u0634\",\"IF\":\"\\u0625\\u0644\\u0641\\u0648\\u0641\",\"MM\":\"\\u0645\\u0627\\u0631\\u0627\\u0645\\u0648\\u0631\\u064a\\u0634\",\"MH\":\"\\u0645\\u064a\\u0647\\u064a\\u062f\\u064a\\u0646\\u062a\\u0633\",\"MS\":\"\\u0645\\u0648\\u0631\\u064a\\u0634\",\"NT\":\"\\u0646\\u064a\\u0627\\u0645\\u062a\\u0633\",\"OT\":\"\\u0623\\u0648\\u0644\\u062a\",\"PH\":\"\\u0628\\u0631\\u0627\\u0647\\u0648\\u0641\\u0627\",\"SJ\":\"\\u0633\\u0627\\u0644\\u0627\\u062c\",\"SM\":\"\\u0633\\u0627\\u062a\\u0648 \\u0645\\u0627\\u0631\\u064a\",\"SB\":\"\\u0633\\u064a\\u0628\\u064a\\u0648\",\"SV\":\"\\u0633\\u0648\\u062a\\u0634\\u0627\\u0641\\u0627\",\"TR\":\"\\u062a\\u064a\\u0644\\u064a\\u0648\\u0631\\u0645\\u0627\\u0646\",\"TM\":\"\\u062a\\u064a\\u0645\\u064a\\u0634\",\"TL\":\"\\u062a\\u0648\\u0644\\u062a\\u0634\\u064a\\u0627\",\"VL\":\"\\u0641\\u064a\\u0644\\u062a\\u0634\\u0627\",\"VS\":\"\\u0641\\u0627\\u0633\\u0644\\u0648\\u064a\",\"VN\":\"\\u0641\\u0631\\u0627\\u0646\\u062a\\u0634\\u0627\"},\"SG\":[],\"SK\":[],\"SI\":[],\"TH\":{\"TH-37\":\"\\u0623\\u0645\\u0646\\u0627\\u062a \\u062a\\u0634\\u0627\\u0631\\u0648\\u064a\\u0646\",\"TH-15\":\"\\u0623\\u0646\\u063a \\u062b\\u0648\\u0646\\u063a\",\"TH-14\":\"\\u0623\\u064a\\u0648\\u062a\\u062b\\u0627\\u064a\\u0627\",\"TH-10\":\"\\u0628\\u0627\\u0646\\u0643\\u0648\\u0643\",\"TH-38\":\"\\u0628\\u0648\\u064a\\u0646\\u063a \\u0643\\u0627\\u0646\",\"TH-31\":\"\\u0628\\u0648\\u0631\\u064a\\u0631\\u0627\\u0645\",\"TH-24\":\"\\u0634\\u0627\\u0634\\u0648\\u064a\\u0646\\u062c\\u0633\\u0627\\u0648\",\"TH-18\":\"\\u062a\\u0634\\u0627\\u064a\\u0646\\u0627\\u062a\",\"TH-36\":\"\\u062a\\u0634\\u0627\\u064a\\u0627\\u0641\\u0648\\u0645\",\"TH-22\":\"\\u062a\\u0634\\u0627\\u0646\\u062b\\u0627\\u0628\\u0648\\u0631\\u064a\",\"TH-50\":\"\\u0634\\u064a\\u0627\\u0646\\u062c \\u0645\\u0627\\u064a\",\"TH-57\":\"\\u0634\\u064a\\u0627\\u0646\\u062c \\u0631\\u0627\\u064a\",\"TH-20\":\"\\u062a\\u0634\\u0648\\u0646\\u0628\\u0648\\u0631\\u064a\",\"TH-86\":\"\\u062a\\u0634\\u0648\\u0645\\u0641\\u0648\\u0646\",\"TH-46\":\"\\u0643\\u0627\\u0644\\u0627\\u0633\\u064a\\u0646\",\"TH-62\":\"\\u0643\\u0627\\u0645\\u0641\\u0627\\u064a\\u0646\\u063a \\u0641\\u064a\\u062a\",\"TH-71\":\"\\u0643\\u0627\\u0646\\u0634\\u0627\\u0646\\u0627\\u0628\\u0648\\u0631\\u064a\",\"TH-40\":\"\\u062e\\u0648\\u0646 \\u0643\\u0627\\u064a\\u0646\",\"TH-81\":\"\\u0643\\u0631\\u0627\\u0628\\u064a\",\"TH-52\":\"\\u0644\\u0627\\u0645\\u0628\\u0627\\u0646\\u063a\",\"TH-51\":\"\\u0644\\u0627\\u0645\\u0641\\u0648\\u0646\",\"TH-42\":\"\\u0644\\u0648\\u064a\\u064a\",\"TH-16\":\"\\u0644\\u0648\\u0628\\u0648\\u0631\\u064a\",\"TH-58\":\"\\u0645\\u0627\\u064a \\u0647\\u0648\\u0646\\u063a \\u0633\\u0648\\u0646\",\"TH-44\":\"\\u0645\\u0627\\u0647\\u0627 \\u0633\\u0627\\u0631\\u0627\\u062e\\u0627\\u0645\",\"TH-49\":\"\\u0645\\u0648\\u0643\\u062f\\u0627\\u0647\\u0627\\u0646\",\"TH-26\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0646\\u0627\\u064a\\u0648\\u0643\",\"TH-73\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0628\\u0627\\u062a\\u0648\\u0645\",\"TH-48\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0641\\u0627\\u0646\\u0648\\u0645\",\"TH-30\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0631\\u0627\\u062a\\u0634\\u0627\\u0633\\u064a\\u0645\\u0627\",\"TH-60\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0635\\u0648\\u0627\\u0646\",\"TH-80\":\"\\u0646\\u0627\\u062e\\u0648\\u0646 \\u0633\\u064a \\u062b\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a\",\"TH-55\":\"\\u0646\\u0627\\u0646\",\"TH-96\":\"\\u0646\\u0627\\u0631\\u0627\\u062a\\u064a\\u0648\\u0627\\u062a\",\"TH-39\":\"\\u0646\\u0648\\u0646\\u063a \\u0628\\u0648\\u0627 \\u0644\\u0627\\u0645\\u0641\\u0648\",\"TH-43\":\"\\u0646\\u0648\\u0646\\u063a \\u062e\\u0627\\u064a\",\"TH-12\":\"\\u0646\\u0648\\u0646\\u062b\\u0627\\u0628\\u0648\\u0631\\u064a\",\"TH-13\":\"\\u0628\\u0627\\u062b\\u0648\\u0645 \\u062b\\u0627\\u0646\\u064a\",\"TH-94\":\"\\u0641\\u0637\\u0627\\u0646\\u064a\",\"TH-82\":\"\\u0641\\u0627\\u0646\\u063a \\u0646\\u063a\\u0627\",\"TH-93\":\"\\u0641\\u0627\\u062a\\u0627\\u0644\\u0648\\u0646\\u063a\",\"TH-56\":\"\\u0641\\u0627\\u064a\\u0627\\u0648\",\"TH-67\":\"\\u0641\\u064a\\u062a\\u0634\\u0627\\u0628\\u0648\\u0646\",\"TH-76\":\"\\u0628\\u0631\\u0627\\u062a\\u0634\\u064a\\u0646\\u0628\\u0648\\u0631\\u064a\",\"TH-66\":\"\\u0641\\u064a\\u062a\\u0634\\u064a\\u062a\",\"TH-65\":\"\\u0641\\u064a\\u062a\\u0633\\u0627\\u0646\\u0648\\u0644\\u0648\\u0643\",\"TH-54\":\"\\u0641\\u0631\\u0627\\u064a\",\"TH-83\":\"\\u0641\\u0648\\u0643\\u064a\\u062a\",\"TH-25\":\"\\u0628\\u0631\\u0627\\u0634\\u064a\\u0646\\u0628\\u0648\\u0631\\u064a\",\"TH-77\":\"\\u0628\\u0631\\u0627\\u062a\\u0634\\u0648\\u0627\\u0628 \\u062e\\u064a\\u0631\\u064a \\u062e\\u0627\\u0646\",\"TH-85\":\"\\u0631\\u0627\\u0646\\u0648\\u0646\\u063a\",\"TH-70\":\"\\u0631\\u0627\\u062a\\u0634\\u0627\\u0628\\u0648\\u0631\\u064a\",\"TH-21\":\"\\u0631\\u0627\\u064a\\u0648\\u0646\\u063a\",\"TH-45\":\"\\u0631\\u0648\\u064a \\u0625\\u062a\",\"TH-27\":\"\\u0633\\u0627 \\u0643\\u0627\\u064a\\u0648\",\"TH-47\":\"\\u0633\\u0627\\u0643\\u0648\\u0646 \\u0646\\u0627\\u062e\\u0648\\u0646\",\"TH-11\":\"\\u0633\\u0627\\u0645\\u0648\\u062a \\u0628\\u0631\\u0627\\u0643\\u0627\\u0646\",\"TH-74\":\"\\u0633\\u0627\\u0645\\u0648\\u062a \\u0633\\u0627\\u062e\\u0648\\u0646\",\"TH-75\":\"\\u0633\\u0627\\u0645\\u0648\\u062a \\u0633\\u0648\\u0646\\u063a\\u062e\\u0631\\u0627\\u0645\",\"TH-19\":\"\\u0633\\u0627\\u0631\\u0627\\u0628\\u0648\\u0631\\u064a\",\"TH-91\":\"\\u0633\\u0627\\u062a\\u0648\\u0646\",\"TH-17\":\"\\u0633\\u0646\\u063a \\u0628\\u0648\\u0631\\u064a\",\"TH-33\":\"\\u0633\\u064a \\u0633\\u0627 \\u0643\\u062a\",\"TH-90\":\"\\u0633\\u0648\\u0646\\u063a\\u0643\\u0644\\u0627\",\"TH-64\":\"\\u0633\\u0648\\u0643\\u0648\\u062a\\u0627\\u064a\",\"TH-72\":\"\\u0633\\u0648\\u0641\\u0627\\u0646\\u0628\\u0648\\u0631\\u064a\",\"TH-84\":\"\\u0633\\u0648\\u0631\\u0627\\u062a \\u062b\\u0627\\u0646\\u064a\",\"TH-32\":\"\\u0633\\u0648\\u0631\\u064a\\u0646\",\"TH-63\":\"\\u062a\\u0627\\u0643\",\"TH-92\":\"\\u062a\\u0631\\u0627\\u0646\\u063a\",\"TH-23\":\"\\u062a\\u0631\\u0627\\u062a\",\"TH-34\":\"\\u0623\\u0648\\u0628\\u0648\\u0646 \\u0631\\u0627\\u062a\\u0634\\u0627\\u062b\\u0627\\u0646\\u064a\",\"TH-41\":\"\\u0648\\u062f\\u0648\\u0646 \\u062a\\u0627\\u0646\\u064a\",\"TH-61\":\"\\u064a\\u0648\\u062b\\u0627\\u064a \\u062b\\u0627\\u0646\",\"TH-53\":\"\\u0623\\u0648\\u062a\\u0627\\u0631\\u0627\\u062f\\u064a\\u062a\",\"TH-95\":\"\\u064a\\u0627\\u0644\\u0627\",\"TH-35\":\"\\u064a\\u0627\\u0633\\u0648\\u062b\\u0648\\u0646\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"\\u0623\\u062f\\u064a\\u0627\\u0645\\u0627\\u0646\",\"TR03\":\"Afyon\",\"TR04\":\"\\u0623\\u062c\\u0631\\u064a\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"\\u0623\\u064a\\u062f\\u064a\\u0646\",\"TR10\":\"\\u0628\\u0627\\u0644\\u0642 \\u0623\\u0633\\u064a\\u0631\",\"TR11\":\"Bilecik\",\"TR12\":\"\\u0628\\u064a\\u0646\\u063a\\u0648\\u0644\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\\u062c\\u0646\\u0642 \\u0642\\u0644\\u0639\\u0629\",\"TR18\":\"\\u062c\\u0627\\u0646\\u0642\\u0631\\u064a\",\"TR19\":\"\\u062c\\u0648\\u0631\\u0648\\u0645\",\"TR20\":\"Denizli\",\"TR21\":\"\\u062f\\u064a\\u0627\\u0631 \\u0628\\u0643\\u0631\",\"TR22\":\"Edirne\",\"TR23\":\"\\u0645\\u0639\\u0645\\u0648\\u0631\\u0629 \\u0627\\u0644\\u0639\\u0632\\u064a\\u0632\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"\\u0625\\u0633\\u0643\\u064a \\u0634\\u0647\\u0631\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"\\u0643\\u0648\\u0645\\u0648\\u0634 \\u062e\\u0627\\u0646\\u0629\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"\\u0625\\u0633\\u0628\\u0631\\u0637\\u0629\",\"TR33\":\"\\u0645\\u0631\\u0633\\u064a\\u0646\",\"TR34\":\"\\u0627\\u0633\\u0637\\u0646\\u0628\\u0648\\u0644\",\"TR35\":\"\\u0625\\u0632\\u0645\\u064a\\u0631\",\"TR36\":\"\\u0642\\u0627\\u0631\\u0635\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"\\u0642\\u0631\\u0642\\u0644\\u0631 \\u0625\\u064a\\u0644\\u064a\",\"TR40\":\"\\u0642\\u0631\\u0634\\u0647\\u064a\\u0631\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"\\u0643\\u0648\\u062a\\u0627\\u0647\\u064a\\u0629\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"\\u0642\\u0647\\u0631\\u0645\\u0627\\u0646 \\u0645\\u0631\\u0639\\u0634\",\"TR47\":\"Mardin\",\"TR48\":\"\\u0645\\u0648\\u062c\\u0644\\u0627\",\"TR49\":\"\\u0645\\u0648\\u0634\",\"TR50\":\"\\u0646\\u0648\\u0634\\u0647\\u0631\",\"TR51\":\"\\u0646\\u064a\\u062f\\u0627\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"\\u062a\\u064a\\u0643\\u064a\\u0631\\u062f\\u0627\\u063a\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\\u0634\\u0627\\u0646\\u0644\\u064a \\u0623\\u0648\\u0631\\u0641\\u0627\",\"TR64\":\"\\u0623\\u0648\\u0634\\u0627\\u0643\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"\\u0642\\u0631\\u0642 \\u0642\\u0644\\u0639\\u0629\",\"TR72\":\"Batman\",\"TR73\":\"\\u0634\\u0631\\u0646\\u0627\\u0642\",\"TR74\":\"\\u0628\\u0627\\u0631\\u062a\\u064a\\u0646\",\"TR75\":\"Ardahan\",\"TR76\":\"\\u0623\\u063a\\u062f\\u064a\\u0631 \",\"TR77\":\"Yalova\",\"TR78\":\"\\u0642\\u0631\\u0647 \\u0628\\u0648\\u0643\",\"TR79\":\"\\u0643\\u0644\\u0651\\u0633\",\"TR80\":\"\\u0639\\u062b\\u0645\\u0627\\u0646\\u064a\\u0629\",\"TR81\":\"\\u062f\\u0648\\u0632\\u062c\\u0647\"},\"TZ\":{\"TZ01\":\"\\u0623\\u0631\\u0648\\u0634\\u0627\",\"TZ02\":\"\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0644\\u0627\\u0645\",\"TZ03\":\"\\u062f\\u0648\\u062f\\u0648\\u0645\\u0627\",\"TZ04\":\"\\u0625\\u064a\\u0631\\u064a\\u0646\\u063a\\u0627\",\"TZ05\":\"\\u0643\\u0627\\u062c\\u064a\\u0631\\u0627\",\"TZ06\":\"\\u0634\\u0645\\u0627\\u0644 \\u0628\\u064a\\u0645\\u0628\\u0627\",\"TZ07\":\"\\u0634\\u0645\\u0627\\u0644 \\u0632\\u0646\\u062c\\u0628\\u0627\\u0631\",\"TZ08\":\"\\u0643\\u064a\\u063a\\u0648\\u0645\\u0627\",\"TZ09\":\"\\u0643\\u0644\\u064a\\u0645\\u0646\\u062c\\u0627\\u0631\\u0648\",\"TZ10\":\"\\u062c\\u0646\\u0648\\u0628 \\u0628\\u064a\\u0645\\u0628\\u0627\",\"TZ11\":\"\\u062c\\u0646\\u0648\\u0628 \\u0632\\u0646\\u062c\\u0628\\u0627\\u0631\",\"TZ12\":\"\\u0644\\u064a\\u0646\\u062f\\u064a\",\"TZ13\":\"\\u0645\\u0627\\u0631\\u0627\",\"TZ14\":\"\\u0645\\u0628\\u064a\\u0627\",\"TZ15\":\"\\u063a\\u0631\\u0628 \\u0632\\u0646\\u062c\\u0628\\u0627\\u0631\",\"TZ16\":\"\\u0645\\u0648\\u0631\\u0648\\u063a\\u0648\\u0631\\u0648\",\"TZ17\":\"\\u0645\\u062a\\u0648\\u0627\\u0631\\u0627\",\"TZ18\":\"\\u0645\\u0648\\u0627\\u0646\\u0632\\u0627\",\"TZ19\":\"\\u0643\\u0648\\u0633\\u062a\",\"TZ20\":\"\\u0631\\u0648\\u0643\\u0648\\u0627\",\"TZ21\":\"\\u0631\\u0648\\u0641\\u0648\\u0645\\u0627\",\"TZ22\":\"\\u0634\\u064a\\u0646\\u064a\\u0627\\u0646\\u063a\\u0627\",\"TZ23\":\"\\u0633\\u064a\\u0646\\u062c\\u064a\\u062f\\u0627\",\"TZ24\":\"\\u062a\\u0627\\u0628\\u0648\\u0631\\u0627\",\"TZ25\":\"\\u062a\\u0646\\u062c\\u0627\",\"TZ26\":\"\\u0645\\u0627\\u0646\\u064a\\u0627\\u0631\\u0627\",\"TZ27\":\"\\u062c\\u064a\\u062a\\u0627\",\"TZ28\":\"\\u0643\\u0627\\u062a\\u0627\\u0641\\u064a\",\"TZ29\":\"\\u0646\\u062c\\u0648\\u0645\\u0628\\u064a\",\"TZ30\":\"\\u0633\\u064a\\u0645\\u064a\\u0648\"},\"LK\":[],\"RS\":{\"RS00\":\"\\u0628\\u0644\\u063a\\u0631\\u0627\\u062f\",\"RS14\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0648\\u0631\",\"RS11\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0631\\u0627\\u0646\\u064a\\u062a\\u0634\\u064a\\u0641\\u0648\",\"RS02\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0633\\u0646\\u062a\\u0631\\u0627\\u0644 \\u0628\\u0627\\u0646\\u0627\\u062a\",\"RS10\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0627\\u0644\\u062f\\u0627\\u0646\\u0648\\u0628\",\"RS23\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u064a\\u0627\\u0628\\u0644\\u0627\\u0646\\u064a\\u0643\\u0627\",\"RS09\":\"\\u0645\\u062f\\u064a\\u0631\\u064a\\u0629 \\u0643\\u0648\\u0644\\u0648\\u0628\\u0627\\u0631\\u0627\",\"RS08\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0645\\u0627\\u0643\\u0641\\u0627\",\"RS17\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0645\\u0648\\u0631\\u0627\\u0641\\u0627\",\"RS20\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0646\\u064a\\u0634\\u0627\\u0641\\u0627\",\"RS01\":\"\\u0645\\u062f\\u064a\\u0631\\u064a\\u0629 \\u0634\\u0645\\u0627\\u0644 \\u0628\\u0627\\u0643\\u0634\\u062a\\u0627\",\"RS03\":\"\\u0645\\u062f\\u064a\\u0631\\u064a\\u0629 \\u0634\\u0645\\u0627\\u0644 \\u0628\\u0627\\u0646\\u0627\\u062a\",\"RS24\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0627\\u062a\\u0634\\u0628\\u0646\\u064a\\u0627\",\"RS22\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0627\\u064a\\u0631\\u064f\\u062a\",\"RS13\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0648\\u0645\\u0648\\u0631\\u0627\\u0641\\u0644\\u064a\\u0647\",\"RS19\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0631\\u0627\\u0633\\u064a\\u0646\\u0627\",\"RS18\":\"\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0631\\u0627\\u0634\\u0643\\u0627\",\"RS06\":\"\\u0645\\u062f\\u064a\\u0631\\u064a\\u0629 \\u062c\\u0646\\u0648\\u0628 \\u0628\\u0627\\u062a\\u0634\\u0643\\u0627\",\"RS04\":\"\\u0645\\u062f\\u064a\\u0631\\u064a\\u0629 \\u062c\\u0646\\u0648\\u0628 \\u0628\\u0627\\u0646\\u0627\\u062a\",\"RS07\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0633\\u0631\\u064a\\u0645\",\"RS12\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0634\\u0648\\u0645\\u0627\\u062f\\u064a\\u0627\",\"RS21\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062a\\u0648\\u0628\\u0644\\u064a\\u0643\\u0627\",\"RS05\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u063a\\u0631\\u0628 \\u0628\\u0627\\u0643\\u0634\\u062a\\u0627\",\"RS15\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0627\\u064a\\u064a\\u062a\\u0634\\u0627\\u0631\",\"RS16\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0644\\u0627\\u062a\\u064a\\u0628\\u0648\\u0631\",\"RS25\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0633\\u0648\\u0641\\u0648\",\"RS26\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u064a\\u062c\\u0627\",\"RS27\":\"\\u0628\\u0631\\u064a\\u0632\\u0631\\u0646\",\"RS28\":\"\\u0643\\u0648\\u0633\\u0648\\u0641\\u0633\\u0643\\u0627 \\u0645\\u064a\\u062a\\u0631\\u0648\\u0641\\u064a\\u062a\\u0633\\u0627\",\"RS29\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0633\\u0648\\u0641\\u0627 \\u0628\\u0648\\u0645\\u0648\\u0631\\u0627\\u0641\\u0644\\u064a\\u0647\",\"RSKM\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0633\\u0648\\u0641\\u0648 \\u0648\\u0645\\u064a\\u062a\\u0648\\u0647\\u064a\\u0627\",\"RSVO\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0641\\u0648\\u064a\\u0641\\u0648\\u062f\\u064a\\u0646\\u0627\"},\"SE\":[],\"UA\":{\"VN\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0641\\u064a\\u0646\\u064a\\u062a\\u0633\\u0627\",\"VL\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0641\\u0648\\u0644\\u064a\\u0646\",\"DP\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062f\\u0646\\u064a\\u0628\\u0631\\u0648\\u0628\\u064a\\u062a\\u0631\\u0648\\u0641\\u064a\\u0633\\u0643\",\"DT\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062f\\u0648\\u0646\\u064a\\u0633\\u062a\\u0643\",\"ZT\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0647\\u064a\\u062a\\u0648\\u0645\\u064a\\u0631\",\"ZK\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0627\\u0643\\u0627\\u0631\\u0628\\u0627\\u062a\\u064a\\u0627\",\"ZP\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0632\\u0627\\u0628\\u0648\\u0631\\u064a\\u0632\\u0647\\u0632\\u0647\\u064a\\u0627\",\"IF\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0627\\u064a\\u0641\\u0627\\u0646\\u0648 \\u0641\\u0631\\u0627\\u0646\\u0643\\u064a\\u0641\\u0633\\u0643\",\"KV\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u064a\\u064a\\u0641\",\"KH\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u064a\\u0631\\u0648\\u0641\\u0648\\u0647\\u0631\\u0627\\u062f\",\"LH\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0644\\u0648\\u0647\\u0627\\u0646\\u0633\\u0643\",\"LV\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0644\\u064a\\u0641\\u064a\\u0641\",\"MY\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0645\\u064a\\u0643\\u0648\\u0644\\u0627\\u064a\\u0641\",\"OD\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0623\\u0648\\u062f\\u064a\\u0633\\u0627\",\"PL\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0628\\u0648\\u0644\\u062a\\u0627\\u0641\\u0627\",\"RV\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0631\\u064a\\u0641\\u0646\",\"SM\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0633\\u0648\\u0645\\u064a\",\"TP\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062a\\u064a\\u0631\\u0646\\u0648\\u0628\\u064a\\u0644\",\"KK\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062e\\u0627\\u0631\\u0643\\u064a\\u0641\",\"KS\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062e\\u064a\\u0631\\u0633\\u0648\\u0646\",\"KM\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0645\\u064a\\u0644\\u0646\\u064a\\u062a\\u0633\\u0643\\u0627\\u064a\\u064a\",\"CK\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062a\\u0634\\u064a\\u0631\\u0643\\u0627\\u0633\\u064a\",\"CH\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062a\\u0634\\u0631\\u0646\\u064a\\u0647\\u064a\\u0641\",\"CV\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u062a\\u0634\\u064a\\u0631\\u0646\\u064a\\u0641\\u062a\\u0633\\u064a\"},\"UG\":{\"UG314\":\"\\u0623\\u0628\\u064a\\u0645\",\"UG301\":\"\\u0623\\u062f\\u062c\\u0648\\u0645\\u0627\\u0646\\u064a\",\"UG322\":\"\\u0623\\u063a\\u0627\\u062c\\u0648\",\"UG323\":\"\\u0627\\u064a\\u0628\\u062a\\u0648\\u0646\\u063a\",\"UG315\":\"\\u0623\\u0645\\u0648\\u0644\\u0627\\u062a\\u0627\\u0631\",\"UG324\":\"\\u0623\\u0645\\u0648\\u062f\\u0627\\u062a\",\"UG216\":\"\\u0623\\u0645\\u0648\\u0631\\u064a\\u0627\",\"UG316\":\"\\u0623\\u0645\\u0648\\u0631\\u0648\",\"UG302\":\"\\u0623\\u0628\\u0627\\u0643\",\"UG303\":\"\\u0623\\u0631\\u0648\\u0627\",\"UG217\":\"\\u0628\\u0648\\u062f\\u0627\\u0643\\u0627\",\"UG218\":\"\\u0628\\u0648\\u062f\\u0648\\u062f\\u0627\",\"UG201\":\"\\u0628\\u0648\\u062c\\u064a\\u0631\\u064a\",\"UG235\":\"\\u0628\\u0648\\u062c\\u0648\\u0631\\u064a\",\"UG420\":\"\\u0628\\u0648\\u0647\\u064a\\u0648\\u064a\\u0648\",\"UG117\":\"\\u0628\\u0648\\u064a\\u0643\\u0648\\u064a\",\"UG219\":\"\\u0628\\u0648\\u0643\\u064a\\u062f\\u064a\\u0627\",\"UG118\":\"\\u0628\\u0648\\u0643\\u0648\\u0645\\u0627\\u0646\\u0633\\u064a\\u0645\\u0628\\u064a\",\"UG220\":\"\\u0628\\u0648\\u0643\\u0648\",\"UG225\":\"\\u0628\\u0648\\u0644\\u0627\\u0645\\u0628\\u0648\\u0644\\u064a\",\"UG416\":\"\\u0628\\u0648\\u0644\\u064a\\u0633\\u0627\",\"UG401\":\"\\u0628\\u0648\\u0646\\u062f\\u064a\\u0628\\u0648\\u062c\\u064a\\u0648\",\"UG430\":\"\\u0628\\u0646\\u064a\\u0627\\u0646\\u063a\\u0627\\u0628\\u0648\",\"UG402\":\"\\u0628\\u0648\\u0634\\u064a\\u0646\\u064a\",\"UG202\":\"\\u0628\\u0648\\u0633\\u064a\\u0627\",\"UG221\":\"\\u0628\\u0648\\u062a\\u0644\\u064a\\u062c\\u0627\",\"UG119\":\"\\u0628\\u0648\\u062a\\u0645\\u0628\\u0627\\u0644\\u0627\",\"UG233\":\"\\u0628\\u0648\\u062a\\u064a\\u0628\\u0648\",\"UG120\":\"\\u0628\\u0648\\u0641\\u0648\\u0645\\u0627\",\"UG226\":\"\\u0628\\u0648\\u064a\\u0646\\u062f\\u064a\",\"UG317\":\"\\u062f\\u0648\\u0643\\u0648\\u0644\\u0648\",\"UG121\":\"\\u062c\\u0648\\u0645\\u0628\\u0627\",\"UG304\":\"\\u062c\\u0648\\u0644\\u0648\",\"UG403\":\"\\u0647\\u0648\\u064a\\u0645\\u0627\",\"UG417\":\"\\u0625\\u064a\\u0628\\u0627\\u0646\\u062f\\u0627\",\"UG203\":\"\\u0625\\u064a\\u063a\\u0627\\u0646\\u063a\\u0627\",\"UG418\":\"\\u0625\\u064a\\u0633\\u064a\\u0646\\u062c\\u064a\\u0631\\u0648\",\"UG204\":\"\\u062c\\u064a\\u0646\\u062c\\u0627\",\"UG318\":\"\\u0643\\u0627\\u0628\\u0648\\u0646\\u062c\",\"UG404\":\"\\u0643\\u0627\\u0628\\u0627\\u0644\\u064a\",\"UG405\":\"\\u0643\\u0627\\u0628\\u0627\\u0631\\u0648\\u0644\\u064a\",\"UG213\":\"\\u0643\\u0627\\u0628\\u064a\\u0631\\u0627\\u0645\\u0627\\u064a\\u062f\\u0648\",\"UG427\":\"\\u0643\\u0627\\u062c\\u0627\\u062f\\u064a\",\"UG428\":\"\\u0643\\u0627\\u0643\\u0648\\u0645\\u064a\\u0631\\u0648\",\"UG101\":\"\\u0643\\u0627\\u0644\\u0627\\u0646\\u062c\\u0627\\u0644\\u0627\",\"UG222\":\"\\u0643\\u0627\\u0644\\u064a\\u0631\\u0648\",\"UG122\":\"\\u0643\\u0627\\u0644\\u0648\\u0646\\u062c\\u0648\",\"UG102\":\"\\u0643\\u0645\\u0628\\u0627\\u0644\\u0627\",\"UG205\":\"\\u0643\\u0627\\u0645\\u0648\\u0644\\u064a\",\"UG413\":\"\\u0643\\u0627\\u0645\\u0648\\u064a\\u0646\\u062c\",\"UG414\":\"\\u0643\\u0646\\u0648\\u0646\\u063a\",\"UG206\":\"\\u0643\\u0627\\u0628\\u0634\\u0648\\u0631\\u0648\\u0627\",\"UG236\":\"\\u0643\\u0627\\u0628\\u064a\\u0644\\u064a\\u0628\\u064a\\u0648\\u0646\\u062c\",\"UG126\":\"\\u0643\\u0627\\u0633\\u0627\\u0646\\u062f\\u0627\",\"UG406\":\"\\u0643\\u0627\\u0633\\u064a\\u0633\",\"UG207\":\"\\u0643\\u0627\\u062a\\u0627\\u0643\\u0648\\u064a\",\"UG112\":\"\\u0643\\u064a\\u0648\\u0646\\u062c\\u0627\",\"UG407\":\"\\u0643\\u064a\\u0628\\u0627\\u0644\",\"UG103\":\"\\u0643\\u064a\\u0628\\u0648\\u062c\\u0627\",\"UG227\":\"\\u0643\\u064a\\u0628\\u0648\\u0643\\u0648\",\"UG432\":\"\\u0643\\u064a\\u0643\\u0648\\u0628\\u064a\",\"UG419\":\"\\u0643\\u064a\\u0631\\u0648\\u0647\\u0648\\u0631\\u0627\",\"UG421\":\"\\u0643\\u064a\\u0631\\u064a\\u0627\\u0646\\u062f\\u0648\\u0646\\u063a\\u0648\",\"UG408\":\"\\u0643\\u064a\\u0633\\u0648\\u0631\\u0648\",\"UG305\":\"\\u0643\\u064a\\u062a\\u062c\\u0648\\u0645\",\"UG319\":\"\\u0643\\u0648\\u0628\\u0648\\u0643\\u0648\",\"UG325\":\"\\u0643\\u0648\\u0644\",\"UG306\":\"\\u0643\\u0648\\u062a\\u064a\\u062f\\u0648\",\"UG208\":\"\\u0643\\u0648\\u0645\\u064a\",\"UG333\":\"\\u0643\\u0648\\u0627\\u0646\\u064a\\u0627\",\"UG228\":\"\\u0643\\u0648\\u064a\\u0646\",\"UG123\":\"\\u0643\\u064a\\u0627\\u0646\\u0643\\u0648\\u0627\\u0646\\u0632\\u064a\",\"UG422\":\"\\u0643\\u064a\\u062c\\u064a\\u063a\\u0648\\u0627\",\"UG415\":\"\\u0643\\u064a\\u0646\\u062c\\u0648\\u062c\\u0648\",\"UG125\":\"\\u0643\\u064a\\u0648\\u062a\\u064a\\u0631\\u0627\",\"UG326\":\"\\u0644\\u0627\\u0645\\u0648\",\"UG307\":\"\\u0644\\u064a\\u0631\\u0627\",\"UG229\":\"\\u0644\\u0648\\u0643\\u0627\",\"UG104\":\"\\u0644\\u0648\\u064a\\u0631\\u0648\",\"UG124\":\"\\u0644\\u0648\\u064a\\u0646\\u063a\\u0648\",\"UG114\":\"\\u0644\\u064a\\u0627\\u0646\\u062a\\u0648\\u0646\\u062f\",\"UG223\":\"\\u0645\\u0627\\u0646\\u0627\\u0641\\u0648\\u0627\",\"UG320\":\"\\u0645\\u0627\\u0631\\u0634\\u0627\",\"UG105\":\"\\u0645\\u0627\\u0633\\u0627\\u0643\\u0627\",\"UG409\":\"\\u0645\\u0627\\u0633\\u064a\\u0646\\u062f\\u064a\",\"UG214\":\"\\u0645\\u0627\\u064a\\u0648\\u062c\",\"UG209\":\"\\u0645\\u0628\\u0627\\u0644\\u064a\",\"UG410\":\"\\u0645\\u0628\\u0627\\u0631\\u0627\\u0631\\u0627\",\"UG423\":\"\\u0645\\u064a\\u062a\\u0648\\u0645\\u0627\",\"UG115\":\"\\u0645\\u064a\\u062a\\u064a\\u0627\\u0646\\u0627\",\"UG308\":\"\\u0645\\u0648\\u0631\\u0648\\u062a\\u0648\",\"UG309\":\"\\u0645\\u0648\\u064a\\u0648\",\"UG106\":\"\\u0645\\u0628\\u064a\\u062c\\u064a\",\"UG107\":\"\\u0645\\u0648\\u0628\\u064a\\u0646\\u062f\\u064a\",\"UG108\":\"\\u0645\\u0648\\u0643\\u0648\\u0646\\u0648\",\"UG334\":\"\\u0646\\u0628\\u064a\\u0644\\u0627\\u062a\\u0648\\u0643\",\"UG311\":\"\\u0646\\u0627\\u0643\\u0627\\u0628\\u064a\\u0631\\u064a\\u0628\\u064a\\u0631\\u064a\\u062a\",\"UG116\":\"\\u0646\\u0627\\u0643\\u0627\\u0633\\u064a\\u0643\",\"UG109\":\"\\u0646\\u0627\\u0643\\u0627\\u0633\\u0648\\u0646\\u062c\\u0648\\u0644\\u0627\",\"UG230\":\"\\u0646\\u0627\\u0645\\u0627\\u064a\\u064a\\u0646\\u063a\\u0648\",\"UG234\":\"\\u0646\\u0627\\u0645\\u064a\\u0633\\u064a\\u0646\\u062f\\u0648\\u0627\",\"UG224\":\"\\u0646\\u0627\\u0645\\u0648\\u062a\\u0648\\u0645\\u0628\\u0627\",\"UG327\":\"\\u0646\\u0627\\u0628\\u0627\\u0643\",\"UG310\":\"\\u0646\\u064a\\u0628\\u064a\",\"UG231\":\"\\u0646\\u062c\\u0648\\u0631\\u0627\",\"UG424\":\"\\u0646\\u062a\\u0648\\u0631\\u0648\\u0643\\u0648\",\"UG411\":\"\\u0646\\u062a\\u0648\\u0646\\u062c\\u0627\\u0645\\u0648\",\"UG328\":\"\\u0646\\u0648\\u064a\\u0627\",\"UG331\":\"\\u0623\\u0648\\u0645\\u0648\\u0631\\u0648\",\"UG329\":\"\\u0623\\u0648\\u062a\\u0648\\u0643\",\"UG321\":\"\\u0623\\u0648\\u064a\\u0627\\u0645\",\"UG312\":\"\\u0628\\u0627\\u062f\\u0631\",\"UG332\":\"\\u0628\\u0627\\u0643\\u0648\\u0627\\u0634\",\"UG210\":\"\\u0628\\u0627\\u0644\\u064a\\u0632\\u0627\",\"UG110\":\"\\u0631\\u0627\\u0643\\u0627\\u064a\",\"UG429\":\"\\u0631\\u0648\\u0628\\u0627\\u0646\\u062f\\u0627\",\"UG425\":\"\\u0631\\u0648\\u0628\\u064a\\u0631\\u064a\\u0632\\u064a\",\"UG431\":\"\\u0631\\u0648\\u0643\\u064a\\u062c\\u0627\",\"UG412\":\"\\u0631\\u0648\\u0643\\u0648\\u0646\\u062c\\u064a\\u0631\\u064a\",\"UG111\":\"\\u0633\\u064a\\u0645\\u0628\\u0627\\u0628\\u0648\\u0644\",\"UG232\":\"\\u0633\\u064a\\u0631\\u064a\\u0631\",\"UG426\":\"\\u0634\\u064a\\u0645\\u0627\",\"UG215\":\"\\u0633\\u064a\\u0631\\u0648\\u0646\\u0643\\u0648\",\"UG211\":\"\\u0633\\u0648\\u0631\\u0648\\u062a\\u064a\",\"UG212\":\"\\u062a\\u0648\\u0631\\u0648\\u0631\\u0648\",\"UG113\":\"\\u0648\\u0627\\u0643\\u064a\\u0633\\u0648\",\"UG313\":\"\\u064a\\u0648\\u0645\\u0628\\u064a\",\"UG330\":\"\\u0632\\u0648\\u0645\\u0628\\u0648\"},\"UM\":{\"81\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0628\\u064a\\u0643\\u0631\",\"84\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0647\\u0627\\u0648\\u0644\\u0627\\u0646\\u062f\",\"86\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u062c\\u0627\\u0631\\u0641\\u064a\\u0633\",\"67\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u062c\\u0648\\u0646\\u0633\\u062a\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0631\\u062c\\u0627\\u0646\\u064a\\u0629\",\"89\":\"\\u0634\\u0639\\u0628 \\u0643\\u064a\\u0646\\u062c\\u0645\\u0627\\u0646 \\u0627\\u0644\\u0645\\u0631\\u062c\\u0627\\u0646\\u064a\\u0629\",\"71\":\"\\u062c\\u0632\\u0631 \\u0627\\u0644\\u0645\\u064a\\u062f\\u0627\\u0648\\u064a\",\"76\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0646\\u0627\\u0641\\u0627\\u0633\\u0627\",\"95\":\"\\u062c\\u0632\\u0631 \\u0628\\u0627\\u0644\\u0645\\u064a\\u0631\\u0627 \\u0627\\u0644\\u0645\\u0631\\u062c\\u0627\\u0646\\u064a\\u0629\",\"79\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0648\\u064a\\u0643\"},\"US\":{\"AL\":\"\\u0623\\u0644\\u0627\\u0628\\u0627\\u0645\\u0627\",\"AK\":\"\\u0623\\u0644\\u0627\\u0633\\u0643\\u0627\",\"AZ\":\"\\u0623\\u0631\\u064a\\u0632\\u0648\\u0646\\u0627\",\"AR\":\"\\u0622\\u0631\\u0643\\u0646\\u0633\\u0627\\u0633 \",\"CA\":\"\\u0643\\u0627\\u0644\\u064a\\u0641\\u0648\\u0631\\u0646\\u064a\\u0627\",\"CO\":\"\\u0643\\u0648\\u0644\\u0648\\u0631\\u0627\\u062f\\u0648\",\"CT\":\"\\u0643\\u0648\\u0646\\u064a\\u062a\\u064a\\u0643\\u062a\",\"DE\":\"\\u062f\\u064a\\u0644\\u0627\\u0648\\u064a\\u0631\",\"DC\":\"\\u0645\\u0642\\u0627\\u0637\\u0639\\u0629 \\u0643\\u0648\\u0644\\u0648\\u0645\\u0628\\u064a\\u0627\",\"FL\":\"\\u0641\\u0644\\u0648\\u0631\\u064a\\u062f\\u0627\",\"GA\":\"\\u062c\\u0648\\u0631\\u062c\\u064a\\u0627\",\"HI\":\"\\u0647\\u0627\\u0648\\u0627\\u064a\",\"ID\":\"\\u0623\\u064a\\u062f\\u0627\\u0647\\u0648\",\"IL\":\"\\u0625\\u0644\\u064a\\u0646\\u0648\\u064a\",\"IN\":\"\\u0625\\u0646\\u062f\\u064a\\u0627\\u0646\\u0627\",\"IA\":\"\\u0622\\u064a\\u0648\\u0627\",\"KS\":\"\\u0643\\u0627\\u0646\\u0633\\u0627\\u0633\",\"KY\":\"\\u0643\\u0646\\u062a\\u0627\\u0643\\u064a\",\"LA\":\"\\u0644\\u0648\\u064a\\u0632\\u064a\\u0627\\u0646\\u0627\",\"ME\":\"\\u0645\\u064a\\u0646\",\"MD\":\"\\u0645\\u0627\\u0631\\u064a\\u0644\\u0627\\u0646\\u062f\",\"MA\":\"\\u0645\\u0627\\u0633\\u0627\\u062a\\u0634\\u0648\\u0633\\u062a\\u0633\",\"MI\":\"\\u0645\\u064a\\u0634\\u064a\\u063a\\u0627\\u0646\",\"MN\":\"\\u0645\\u064a\\u0646\\u064a\\u0633\\u0648\\u062a\\u0627\",\"MS\":\"\\u0645\\u064a\\u0633\\u064a\\u0633\\u064a\\u0628\\u064a\",\"MO\":\"\\u0645\\u064a\\u0632\\u0648\\u0631\\u064a\",\"MT\":\"\\u0645\\u0648\\u0646\\u062a\\u0627\\u0646\\u0627\",\"NE\":\"\\u0646\\u0628\\u0631\\u0627\\u0633\\u0643\\u0627\",\"NV\":\"\\u0646\\u064a\\u0641\\u0627\\u062f\\u0627\",\"NH\":\"\\u0646\\u064a\\u0648\\u0647\\u0627\\u0645\\u0634\\u064a\\u0631\",\"NJ\":\"\\u0646\\u064a\\u0648 \\u062c\\u064a\\u0631\\u0633\\u064a\",\"NM\":\"\\u0646\\u064a\\u0648 \\u0645\\u0643\\u0633\\u064a\\u0643\\u0648\",\"NY\":\"\\u0646\\u064a\\u0648\\u064a\\u0648\\u0631\\u0643\",\"NC\":\"\\u0643\\u0627\\u0631\\u0648\\u0644\\u0627\\u064a\\u0646\\u0627 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"ND\":\"\\u062f\\u0627\\u0643\\u0648\\u062a\\u0627 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"OH\":\"\\u0623\\u0648\\u0647\\u0627\\u064a\\u0648\",\"OK\":\"\\u0623\\u0648\\u0643\\u0644\\u0627\\u0647\\u0648\\u0645\\u0627\",\"OR\":\"\\u0623\\u0648\\u0631\\u064a\\u063a\\u0648\\u0646\",\"PA\":\"\\u0628\\u0646\\u0633\\u0644\\u0641\\u0627\\u0646\\u064a\\u0627\",\"RI\":\"\\u0631\\u0648\\u062f \\u0622\\u064a\\u0644\\u0627\\u0646\\u062f\",\"SC\":\"\\u0643\\u0627\\u0631\\u0648\\u0644\\u064a\\u0646\\u0627 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"SD\":\"\\u062f\\u0627\\u0643\\u0648\\u062a\\u0627 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\",\"TN\":\"\\u062a\\u064a\\u0646\\u064a\\u0633\\u064a\",\"TX\":\"\\u062a\\u0643\\u0633\\u0627\\u0633\",\"UT\":\"\\u064a\\u0648\\u062a\\u0627\",\"VT\":\"\\u0641\\u064a\\u0631\\u0645\\u0648\\u0646\\u062a\",\"VA\":\"\\u0641\\u0631\\u062c\\u064a\\u0646\\u064a\\u0627\",\"WA\":\"\\u0648\\u0627\\u0634\\u0646\\u0637\\u0646\",\"WV\":\"\\u0641\\u064a\\u0631\\u062c\\u064a\\u0646\\u064a\\u0627 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\",\"WI\":\"\\u0648\\u064a\\u0633\\u0643\\u0648\\u0646\\u0633\\u0646\",\"WY\":\"\\u0648\\u0627\\u064a\\u0648\\u0645\\u0646\\u063a\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"VE\":{\"A\":\"\\u0627\\u0644\\u0639\\u0627\\u0635\\u0645\\u0629\",\"B\":\"\\u0623\\u0646\\u0632\\u0648\\u0627\\u062a\\u064a\\u062c\\u064a\",\"C\":\"\\u0623\\u0628\\u0648\\u0631\\u064a\",\"D\":\"\\u0623\\u0631\\u0627\\u062c\\u0648\\u0627\",\"E\":\"\\u0628\\u0627\\u0631\\u064a\\u0646\\u0627\\u0633\",\"F\":\"\\u0628\\u0648\\u0644\\u064a\\u0641\\u0627\\u0631\",\"G\":\"\\u0643\\u0627\\u0631\\u0627\\u0628\\u0648\\u0628\\u0648\",\"H\":\"\\u0643\\u0648\\u062c\\u064a\\u062f\\u064a\\u0633\",\"I\":\"\\u0641\\u0627\\u0644\\u0643\\u0648\\u0646\",\"J\":\"\\u062c\\u0648\\u0627\\u0631\\u064a\\u0643\\u0648\",\"K\":\"\\u0644\\u0627\\u0631\\u0627\",\"L\":\"\\u0645\\u064a\\u0631\\u064a\\u062f\\u0627\",\"M\":\"\\u0645\\u064a\\u0631\\u0627\\u0646\\u062f\\u0627\",\"N\":\"\\u0645\\u0648\\u0646\\u0627\\u062c\\u0627\\u0633\",\"O\":\"\\u0646\\u0648\\u0641\\u0627 \\u0627\\u0633\\u0628\\u0627\\u0631\\u062a\\u0627\",\"P\":\"\\u0628\\u0648\\u0631\\u062a\\u0648\\u063a\\u064a\\u0632\\u0627\",\"R\":\"\\u0633\\u0648\\u0643\\u0631\\u064a\\u0647\",\"S\":\"\\u062a\\u0627\\u0643\\u064a\\u0631\\u0627\",\"T\":\"\\u062a\\u0631\\u0648\\u062e\\u064a\\u0648\",\"U\":\"\\u064a\\u0627\\u0631\\u0627\\u0643\\u0648\\u064a\",\"V\":\"\\u0632\\u0648\\u0644\\u064a\\u0627\",\"W\":\"\\u0627\\u0644\\u062a\\u0628\\u0639\\u064a\\u0627\\u062a \\u0627\\u0644\\u0627\\u062a\\u062d\\u0627\\u062f\\u064a\\u0629\",\"X\":\"\\u0641\\u0627\\u0631\\u062c\\u0627\\u0633\",\"Y\":\"\\u062f\\u0644\\u062a\\u0627 \\u0623\\u0645\\u0627\\u0643\\u0648\\u0631\\u0648\",\"Z\":\"\\u0627\\u0644\\u0623\\u0645\\u0627\\u0632\\u0648\\u0646\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"\\u0643\\u064a\\u0628 \\u0627\\u0644\\u0634\\u0631\\u0642\\u064a\\u0629\",\"FS\":\"Free State\",\"GP\":\"\\u062e\\u0627\\u0648\\u062a\\u064a\\u0646\\u063a\",\"KZN\":\"\\u0643\\u0648\\u0627\\u0632\\u0648\\u0644\\u0648 \\u0646\\u0627\\u062a\\u0627\\u0644\",\"LP\":\"\\u0644\\u064a\\u0645\\u0628\\u0648\\u0628\\u0648\",\"MP\":\"\\u0645\\u0628\\u0648\\u0645\\u0627\\u0644\\u0627\\u0646\\u063a\\u0627\",\"NC\":\"\\u0643\\u064a\\u0628 \\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\\u064a\\u0629\",\"NW\":\"\\u0627\\u0644\\u0634\\u0645\\u0627\\u0644 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\",\"WC\":\"\\u0643\\u064a\\u0628 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\\u0629\"},\"ZM\":{\"ZM-01\":\"\\u0627\\u0644\\u063a\\u0631\\u0628\",\"ZM-02\":\"\\u0633\\u0646\\u062a\\u0631\\u0627\\u0644\",\"ZM-03\":\"\\u0627\\u0644\\u0634\\u0631\\u0642\",\"ZM-04\":\"\\u0644\\u0648\\u0627\\u0628\\u0648\\u0644\\u0627\",\"ZM-05\":\"\\u0627\\u0644\\u0634\\u0645\\u0627\\u0644\",\"ZM-06\":\"\\u0627\\u0644\\u0634\\u0645\\u0627\\u0644 \\u0627\\u0644\\u063a\\u0631\\u0628\\u064a\",\"ZM-07\":\"\\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\",\"ZM-08\":\"\\u0643\\u0648\\u0628\\u0631\\u0628\\u064a\\u0644\\u062a\",\"ZM-09\":\"\\u0644\\u0648\\u0633\\u0627\\u0643\\u0627\",\"ZM-10\":\"\\u0645\\u0648\\u062a\\u0634\\u064a\\u0646\\u062c\\u0627\"}}","i18n_select_state_text":"\u062d\u062f\u062f \u062e\u064a\u0627\u0631\u064b\u0627\u2026","i18n_no_matches":"\u0644\u0645 \u064a\u062a\u0645 \u0627\u0644\u0639\u062b\u0648\u0631 \u0639\u0644\u0649 \u0646\u062a\u0627\u0626\u062c","i18n_ajax_error":"\u0641\u0634\u0644 \u0627\u0644\u062a\u062d\u0645\u064a\u0644","i18n_input_too_short_1":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u062d\u0631\u0641 \u0648\u0627\u062d\u062f \u0623\u0648 \u0623\u0643\u062b\u0631","i18n_input_too_short_n":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 %qty% \u0623\u062d\u0631\u0641 \u0623\u0648 \u0623\u0643\u062b\u0631","i18n_input_too_long_1":"\u0627\u0644\u0631\u062c\u0627\u0621 \u062d\u0630\u0641 \u062d\u0631\u0641 \u0648\u0627\u062d\u062f","i18n_input_too_long_n":"\u0627\u0644\u0631\u062c\u0627\u0621 \u062d\u0631\u0641 %qty% \u062d\u0631\u0648\u0641","i18n_selection_too_long_1":"\u0628\u0625\u0645\u0643\u0627\u0646\u0643 \u0627\u062e\u062a\u064a\u0627\u0631 \u0639\u0646\u0635\u0631 \u0648\u0627\u062d\u062f \u0641\u0642\u0637","i18n_selection_too_long_n":"\u0628\u0625\u0645\u0643\u0627\u0646\u0643 \u0627\u062e\u062a\u064a\u0627\u0631 %qty% \u0639\u0646\u0627\u0635\u0631 \u0641\u0642\u0637","i18n_load_more":"\u062a\u062d\u0645\u064a\u0644 \u0627\u0644\u0645\u0632\u064a\u062f \u0645\u0646 \u0627\u0644\u0646\u062a\u0627\u0626\u062c\u2026","i18n_searching":"\u062c\u0627\u0631\u064a \u0627\u0644\u0628\u062d\u062b\u2026"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/country-select.minaf8e.js?ver=6.0.0' id='wc-country-select-js'></script>
<script type='text/javascript' id='yith-wcaf-js-extra'>
    /* <![CDATA[ */
    var yith_wcaf = {"labels":{"select2_i18n_matches_1":"One result is available, press enter to select it.","select2_i18n_matches_n":"%qty% results are available, use up and down arrow keys to navigate.","select2_i18n_no_matches":"\u0644\u0645 \u064a\u062a\u0645 \u0627\u0644\u0639\u062b\u0648\u0631 \u0639\u0644\u0649 \u0646\u062a\u0627\u0626\u062c","select2_i18n_ajax_error":"\u0641\u0634\u0644 \u0627\u0644\u062a\u062d\u0645\u064a\u0644","select2_i18n_input_too_short_1":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 \u062d\u0631\u0641 \u0648\u0627\u062d\u062f \u0623\u0648 \u0623\u0643\u062b\u0631","select2_i18n_input_too_short_n":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062f\u062e\u0627\u0644 %qty% \u0623\u062d\u0631\u0641 \u0623\u0648 \u0623\u0643\u062b\u0631","select2_i18n_input_too_long_1":"\u0627\u0644\u0631\u062c\u0627\u0621 \u062d\u0630\u0641 \u062d\u0631\u0641 \u0648\u0627\u062d\u062f","select2_i18n_input_too_long_n":"\u0627\u0644\u0631\u062c\u0627\u0621 \u062d\u0631\u0641 %qty% \u062d\u0631\u0648\u0641","select2_i18n_selection_too_long_1":"\u0628\u0625\u0645\u0643\u0627\u0646\u0643 \u0627\u062e\u062a\u064a\u0627\u0631 \u0639\u0646\u0635\u0631 \u0648\u0627\u062d\u062f \u0641\u0642\u0637","select2_i18n_selection_too_long_n":"\u0628\u0625\u0645\u0643\u0627\u0646\u0643 \u0627\u062e\u062a\u064a\u0627\u0631 %qty% \u0639\u0646\u0627\u0635\u0631 \u0641\u0642\u0637","select2_i18n_load_more":"\u062a\u062d\u0645\u064a\u0644 \u0627\u0644\u0645\u0632\u064a\u062f \u0645\u0646 \u0627\u0644\u0646\u062a\u0627\u0626\u062c&hellip;","select2_i18n_searching":"\u062c\u0627\u0631\u064a \u0627\u0644\u0628\u062d\u062b&hellip;","link_copied_message":"URL copied"},"ajax_url":"https:\/\/aba-resources.com\/wp-admin\/admin-ajax.php","set_cookie_via_ajax":"","referral_var":"ref","search_products_nonce":"fc453d88fa","set_referrer_nonce":"788b1bec82","get_withdraw_amount":"f2ec9fab54"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/yith-woocommerce-affiliates/assets/js/yith-wcaf.minc8d8.js?ver=5.8.3' id='yith-wcaf-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/aba-resources.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/contact-form-7/includes/js/index5697.js?ver=5.5.3' id='contact-form-7-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min8811.js?ver=2.7.0-wc.6.0.0' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"\u0639\u0631\u0636 \u0627\u0644\u0633\u0644\u0629","cart_url":"https:\/\/aba-resources.com\/%d8%b9%d8%b1%d8%a8%d8%a9-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%82\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minaf8e.js?ver=6.0.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mineff6.js?ver=2.1.4-wc.6.0.0' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minaf8e.js?ver=6.0.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_68bfe20208fb12da94320ac0ee87ea47","fragment_name":"wc_fragments_68bfe20208fb12da94320ac0ee87ea47","request_timeout":"5000"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minaf8e.js?ver=6.0.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min0028.js?ver=1.13.1' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/wp-util.minc8d8.js?ver=5.8.3' id='wp-util-js'></script>
<script type='text/javascript' src='wp-includes/js/backbone.min2fca.js?ver=1.4.0' id='backbone-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/wp-events-manager/inc/libraries/countdown/js/jquery.plugin.minc8d8.js?ver=5.8.3' id='wpems-countdown-plugin-js-js'></script>
<script type='text/javascript' id='wpems-countdown-js-js-extra'>
    /* <![CDATA[ */
    var WPEMS = {"gmt_offset":"0","current_time":"Jan 30, 2022 19:36:00 +0000","l18n":{"labels":["Years","Months","Weeks","Days","Hours","Minutes","Seconds"],"labels1":["Year","Month","Week","Day","Hour","Minute","Second"]},"ajaxurl":"https:\/\/aba-resources.com\/wp-admin\/admin-ajax.php","something_wrong":"Something went wrong","register_button":"dd4f4354e2"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/wp-events-manager/inc/libraries/countdown/js/jquery.countdown.minc8d8.js?ver=5.8.3' id='wpems-countdown-js-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/wp-events-manager/inc/libraries/magnific-popup/js/jquery.magnific-popup.mincc91.js?ver=2.1.8' id='wpems-magnific-popup-js-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/wp-events-manager/assets/js/frontend/events.minc8d8.js?ver=5.8.3' id='wpems-frontend-js-js'></script>
<script type='text/javascript' id='mailchimp-woocommerce-js-extra'>
    /* <![CDATA[ */
    var mailchimp_public_data = {"site_url":"https:\/\/aba-resources.com","ajax_url":"https:\/\/aba-resources.com\/wp-admin\/admin-ajax.php","language":"ar","allowed_to_set_cookies":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min21bb.js?ver=2.5.4' id='mailchimp-woocommerce-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min9309.js?ver=1.4.1-wc.6.0.0' id='jquery-cookie-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.minc8d8.js?ver=5.8.3' id='wp-embed-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1' id='jquery-numerator-js'></script>
<script type='text/javascript' src='../unpkg.com/leaflet%401.7.1/dist/leaflet.js' id='leaflet_js-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/leaflet-map/scripts/construct-leaflet-map.min459e.js?ver=3.0.4' id='wp_leaflet_map-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/js/webpack.runtime.min1aae.js?ver=3.5.3' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/js/frontend-modules.min1aae.js?ver=3.5.3' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/share-link/share-link.min1aae.js?ver=3.5.3' id='share-link-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u0641\u064a\u0633\u0628\u0648\u0643","shareOnTwitter":"\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u062a\u0648\u064a\u062a\u0631","pinIt":"\u062b\u0628\u062a\u0647\u0627 ","download":"\u062a\u062d\u0645\u064a\u0644","downloadImage":"\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0635\u0648\u0631\u0629","fullscreen":"\u0639\u0631\u0636 \u0634\u0627\u0634\u0629 \u0643\u0627\u0645\u0644\u0629","zoom":"\u062a\u0643\u0628\u064a\u0631","share":"\u0645\u0634\u0627\u0631\u0643\u0629","playVideo":"\u062a\u0634\u063a\u064a\u0644 \u0627\u0644\u0641\u064a\u062f\u064a\u0648","previous":"\u0627\u0644\u0633\u0627\u0628\u0642","next":"\u0627\u0644\u062a\u0627\u0644\u064a","close":"\u0625\u063a\u0644\u0627\u0642"},"is_rtl":true,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"\u0627\u0644\u0647\u0627\u062a\u0641 \u0627\u0644\u0645\u062d\u0645\u0648\u0644","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"\u0647\u0627\u062a\u0641 \u0645\u062d\u0645\u0648\u0644 - \u0623\u0641\u0642\u064a","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"\u0627\u0644\u0623\u062c\u0647\u0632\u0629 \u0627\u0644\u0644\u0648\u062d\u064a\u0629","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"\u062c\u0647\u0627\u0632 \u0644\u0648\u062d\u064a -\u0623\u0641\u0642\u064a","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"\u062d\u0627\u0633\u0648\u0628 \u0645\u062d\u0645\u0648\u0644","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u0627\u0644\u0634\u0627\u0634\u0629 \u0627\u0644\u0639\u0631\u064a\u0636\u0629","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.5.3","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/aba-resources.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":4679,"title":"Aba%20Resources%20%E2%80%93%20%D9%83%D9%84%20%D8%B4%D9%8A%D8%A1%20%D8%B9%D9%86%20%D8%A7%D9%84%D8%B3%D9%84%D9%88%D9%83","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/js/frontend.min1aae.js?ver=3.5.3' id='elementor-frontend-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/elementor/assets/js/preloaded-modules.min1aae.js?ver=3.5.3' id='preloaded-modules-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.mine5ce.js?ver=1.7.21-wc.6.0.0' id='zoom-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minfee1.js?ver=2.7.2-wc.6.0.0' id='flexslider-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min45b8.js?ver=4.1.1-wc.6.0.0' id='photoswipe-js'></script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min45b8.js?ver=4.1.1-wc.6.0.0' id='photoswipe-ui-default-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"\u0644\u0644\u0623\u0633\u0641 \u0644\u0627 \u062a\u0648\u062c\u062f \u0645\u0646\u062a\u062c\u0627\u062a \u062a\u0637\u0627\u0628\u0642 \u0627\u062e\u062a\u064a\u0627\u0631\u0627\u062a\u0643. \u0627\u0644\u0631\u062c\u0627\u0621 \u0627\u062e\u062a\u064a\u0627\u0631 \u0645\u062c\u0645\u0648\u0639\u0629 \u0645\u062e\u062a\u0644\u0641\u0629.","i18n_make_a_selection_text":"\u0627\u0644\u0631\u062c\u0627\u0621 \u062a\u062d\u062f\u064a\u062f \u0628\u0639\u0636 \u062e\u064a\u0627\u0631\u0627\u062a \u0627\u0644\u0645\u0646\u062a\u062c \u0642\u0628\u0644 \u0625\u0636\u0627\u0641\u0629 \u0647\u0630\u0627 \u0627\u0644\u0645\u0646\u062a\u062c \u0625\u0644\u0649 \u0633\u0644\u0629 \u0645\u0634\u062a\u0631\u064a\u0627\u062a\u0643.","i18n_unavailable_text":"\u0639\u0641\u0648\u064b\u0627\u060c \u0647\u0630\u0627 \u0627\u0644\u0645\u0646\u062a\u062c \u063a\u064a\u0631 \u0645\u062a\u0648\u0641\u0631. \u064a\u0631\u062c\u0649 \u0627\u062e\u062a\u064a\u0627\u0631 \u0645\u062c\u0645\u0648\u0639\u0629 \u0623\u062e\u0631\u0649."};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minaf8e.js?ver=6.0.0' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' id='wc-single-product-js-extra'>
    /* <![CDATA[ */
    var wc_single_product_params = {"i18n_required_rating_text":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062e\u062a\u064a\u0627\u0631 \u062a\u0642\u064a\u064a\u0645 \u0644\u0644\u0645\u0646\u062a\u062c","review_rating_required":"yes","flexslider":{"rtl":true,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='assets_public/wp-content/plugins/woocommerce/assets/js/frontend/single-product.minaf8e.js?ver=6.0.0' id='wc-single-product-js'></script>
<script type="text/javascript">(function (undefined) {var _localizedStrings={"redirect_overlay_title":"Hold On","redirect_overlay_text":"You are being redirected to another page,<br>it may take a few seconds."};var _targetWindow="prefer-popup";var _redirectOverlay="overlay-with-spinner-and-message";
        window.NSLPopup = function (url, title, w, h) {
            var userAgent = navigator.userAgent,
                mobile = function () {
                    return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                        /\b(iP[ao]d)/.test(userAgent) ||
                        /Android/i.test(userAgent) ||
                        /Mobile/i.test(userAgent);
                },
                screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
                screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
                outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
                outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
                targetWidth = mobile() ? null : w,
                targetHeight = mobile() ? null : h,
                V = screenX < 0 ? window.screen.width + screenX : screenX,
                left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
                right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
                features = [];
            if (targetWidth !== null) {
                features.push('width=' + targetWidth);
            }
            if (targetHeight !== null) {
                features.push('height=' + targetHeight);
            }
            features.push('left=' + left);
            features.push('top=' + right);
            features.push('scrollbars=1');

            var newWindow = window.open(url, title, features.join(','));

            if (window.focus) {
                newWindow.focus();
            }

            return newWindow;
        };

        var isWebView = null;

        function checkWebView() {
            if (isWebView === null) {
                function _detectOS(ua) {
                    if (/Android/.test(ua)) {
                        return "Android";
                    } else if (/iPhone|iPad|iPod/.test(ua)) {
                        return "iOS";
                    } else if (/Windows/.test(ua)) {
                        return "Windows";
                    } else if (/Mac OS X/.test(ua)) {
                        return "Mac";
                    } else if (/CrOS/.test(ua)) {
                        return "Chrome OS";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox OS";
                    }
                    return "";
                }

                function _detectBrowser(ua) {
                    var android = /Android/.test(ua);

                    if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                        return "Opera";
                    } else if (/CriOS/.test(ua)) {
                        return "Chrome for iOS";
                    } else if (/Edge/.test(ua)) {
                        return "Edge";
                    } else if (android && /Silk\//.test(ua)) {
                        return "Silk";
                    } else if (/Chrome/.test(ua)) {
                        return "Chrome";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox";
                    } else if (android) {
                        return "AOSP";
                    } else if (/MSIE|Trident/.test(ua)) {
                        return "IE";
                    } else if (/Safari\//.test(ua)) {
                        return "Safari";
                    } else if (/AppleWebKit/.test(ua)) {
                        return "WebKit";
                    }
                    return "";
                }

                function _detectBrowserVersion(ua, browser) {
                    if (browser === "Opera") {
                        return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera%20Mini/index.html") :
                            / OPR/.test(ua) ? _getVersion(ua, "OPR/index.html") :
                                _getVersion(ua, "OPT/index.html");
                    } else if (browser === "Chrome for iOS") {
                        return _getVersion(ua, "CriOS/index.html");
                    } else if (browser === "Edge") {
                        return _getVersion(ua, "Edge/index.html");
                    } else if (browser === "Chrome") {
                        return _getVersion(ua, "Chrome/index.html");
                    } else if (browser === "Firefox") {
                        return _getVersion(ua, "Firefox/index.html");
                    } else if (browser === "Silk") {
                        return _getVersion(ua, "Silk/index.html");
                    } else if (browser === "AOSP") {
                        return _getVersion(ua, "Version/index.html");
                    } else if (browser === "IE") {
                        return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/index.html") :
                            /MSIE/.test(ua) ? _getVersion(ua, "MSIE ")
                                :
                                _getVersion(ua, "rv:");
                    } else if (browser === "Safari") {
                        return _getVersion(ua, "Version/index.html");
                    } else if (browser === "WebKit") {
                        return _getVersion(ua, "WebKit/index.html");
                    }
                    return "0.0.0";
                }

                function _getVersion(ua, token) {
                    try {
                        return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
                    } catch (o_O) {
                    }
                    return "0.0.0";
                }

                function _normalizeSemverString(version) {
                    var ary = version.split(/[\._]/);
                    return (parseInt(ary[0], 10) || 0) + "." +
                        (parseInt(ary[1], 10) || 0) + "." +
                        (parseInt(ary[2], 10) || 0);
                }

                function _isWebView(ua, os, browser, version, options) {
                    switch (os + browser) {
                        case "iOSSafari":
                            return false;
                        case "iOSWebKit":
                            return _isWebView_iOS(options);
                        case "AndroidAOSP":
                            return false;
                        case "AndroidChrome":
                            return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
                    }
                    return false;
                }

                function _isWebView_iOS(options) {
                    var document = (window["document"] || {});

                    if ("WEB_VIEW" in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
                }

                function _isWebView_Android(options) {
                    if ("WEB_VIEW" in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
                }

                var options = {};
                var nav = window.navigator || {};
                var ua = nav.userAgent || "";
                var os = _detectOS(ua);
                var browser = _detectBrowser(ua);
                var browserVersion = _detectBrowserVersion(ua, browser);

                isWebView = _isWebView(ua, os, browser, browserVersion, options);
            }

            return isWebView;
        }

        function isAllowedWebViewForUserAgent(provider) {
            var googleAllowedWebViews = [
                'Instagram',
                'FBAV',
                'FBAN',
                'Line',
            ], facebookAllowedWebViews = [
                'Instagram',
                'FBAV',
                'FBAN'
            ], whitelist = [];

            switch (provider) {
                case 'facebook':
                    whitelist = facebookAllowedWebViews;
                    break;
                case 'google':
                    whitelist = googleAllowedWebViews;
                    break;
            }

            var nav = window.navigator || {};
            var ua = nav.userAgent || "";

            if (whitelist.length && ua.match(new RegExp(whitelist.join('|')))) {
                return true;
            }

            return false;
        }

        window._nslDOMReady(function () {

            window.nslRedirect = function (url) {
                if (_redirectOverlay) {
                    var overlay = document.createElement('div');
                    overlay.id = "nsl-redirect-overlay";
                    var overlayHTML = '',
                        overlayContainer = "<div id='nsl-redirect-overlay-container'>",
                        overlayContainerClose = "</div>",
                        overlaySpinner = "<div id='nsl-redirect-overlay-spinner'></div>",
                        overlayTitle = "<p id='nsl-redirect-overlay-title'>" + _localizedStrings.redirect_overlay_title + "</p>",
                        overlayText = "<p id='nsl-redirect-overlay-text'>" + _localizedStrings.redirect_overlay_text + "</p>";

                    switch (_redirectOverlay) {
                        case "overlay-only":
                            break;
                        case "overlay-with-spinner":
                            overlayHTML = overlayContainer + overlaySpinner + overlayContainerClose;
                            break;
                        default:
                            overlayHTML = overlayContainer + overlaySpinner + overlayTitle + overlayText + overlayContainerClose;
                            break;
                    }

                    overlay.insertAdjacentHTML("afterbegin", overlayHTML);
                    document.body.appendChild(overlay);
                }

                window.location = url;
            };

            var targetWindow = _targetWindow || 'prefer-popup',
                lastPopup = false;


            var buttonLinks = document.querySelectorAll(' a[data-plugin="nsl"][data-action="connect"], a[data-plugin="nsl"][data-action="link"]');
            buttonLinks.forEach(function (buttonLink) {
                buttonLink.addEventListener('click', function (e) {
                    if (lastPopup && !lastPopup.closed) {
                        e.preventDefault();
                        lastPopup.focus();
                    } else {

                        var href = this.href,
                            success = false;
                        if (href.indexOf('?') !== -1) {
                            href += '&';
                        } else {
                            href += '?';
                        }

                        var redirectTo = this.dataset.redirect;
                        if (redirectTo === 'current') {
                            href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                        } else if (redirectTo && redirectTo !== '') {
                            href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                        }

                        if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                            targetWindow = 'prefer-same-window';
                        }

                        if (targetWindow === 'prefer-popup') {
                            lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', this.dataset.popupwidth, this.dataset.popupheight);
                            if (lastPopup) {
                                success = true;
                                e.preventDefault();
                            }
                        } else if (targetWindow === 'prefer-new-tab') {
                            var newTab = window.open(href + 'display=popup', '_blank');
                            if (newTab) {
                                if (window.focus) {
                                    newTab.focus();
                                }
                                success = true;
                                e.preventDefault();
                            }
                        }

                        if (!success) {
                            window.location = href;
                            e.preventDefault();
                        }
                    }
                });
            });

            var googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
            if (googleLoginButtons.length && checkWebView() && !isAllowedWebViewForUserAgent('google')) {
                googleLoginButtons.forEach(function (googleLoginButton) {
                    googleLoginButton.remove();
                });
            }

            var facebookLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="facebook"]');
            if (facebookLoginButtons.length && checkWebView() && /Android/.test(window.navigator.userAgent) && !isAllowedWebViewForUserAgent('facebook')) {
                facebookLoginButtons.forEach(function (facebookLoginButton) {
                    facebookLoginButton.remove();
                });
            }
        });})();</script>


</body>


</html>
