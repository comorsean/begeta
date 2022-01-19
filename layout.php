<?php
include_once __DIR__ . "/_vars.php";
?>
<!doctype html> 
<html class="no-js" lang="sv">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Begeta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/media/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/media/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/media/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/media/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/media/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/media/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/media/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/media/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/media/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/media/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/media/favicon-16x16.png">
        <!--<link rel="manifest" href="/assets/media/manifest.json">-->
        <meta name="msapplication-TileColor" content="#f16e20">
        <meta name="msapplication-TileImage" content="/assets/media/ms-icon-144x144.png">
        <meta name="theme-color" content="#f16e20">
        <!-- share -->
        <meta name="description" content="Xdesk är Sveriges bästa leverantör av webbaserade löneprogram, bokföringsprogram, faktureringsprogram mfl." />
        <meta property="og:title" content="Xdesk - Sveriges bästa webbaserade Ekonomisystem" />
        <meta property="og:description" content="Xdesk är Sveriges bästa leverantör av webbaserade löneprogram, bokföringsprogram, faktureringsprogram mfl." />
        <meta property="og:type" content="website" /> 
        <meta property="og:url" content="https://www.xdesk.se/"/>
        <meta property="og:site_name" content="Xdesk">
        <meta property="og:image" content="/assets/media/share.jpg" />
        <!--<link rel="preload" as="image" href="/dist/images/logo.png">
        <link rel="preload" as="image" href="/dist/images/close.png">
        <link rel="preload" as="image" href="/dist/images/hero-bckg.png">
        <link rel="preload" as="image" href="/dist/images/laptop.png">-->
        <!-- css -->   
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/d45f96029e61832fd84afffd3068b768?family=DIN+Condensed" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="dist/css/bootstrap/bootstrap-grid.css">  
        <link rel="stylesheet" href="dist/css/bootstrap/bootstrap-reboot.css">  
        <link rel="stylesheet" href="dist/css/bootstrap/bootstrap.css"> 
        <link rel="stylesheet" href="dist/css/app.css">  
    </head>
<body class="<?php if(isset($body_class))  : ?><?php echo $body_class; ?><?php endif; ?>">

        <!-- start: nav content -->
        <header id="header" class="header">
            <div class="container">
                <?php include_once __DIR__ . "/_above-track.php"; ?>
                <?php include_once __DIR__ . "/_nav.php"; ?>
            </div>
        </header>
        <!-- end: nav content -->
        <main class="main">
        <!-- start: page content -->
        <?php include_once $file; ?> 
        <!-- end: page content -->
        </main>

        <!-- start: footer content -->
        <footer id="footer" class="footer">
            <?php include_once __DIR__ . "/_footer.php"; ?>
        </footer>  
        <!-- end: footer content --> 
        <script src="/dist/js/1jquery.3.5.1.min.js"></script>
        <script src="https://kit.fontawesome.com/3f78aa4208.js" crossorigin="anonymous"></script>
        <script src="/dist/js/bootstrap.min.js"></script>
        <script src="/dist/js/z.app.js"></script>
    </body>
</html>
