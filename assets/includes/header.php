<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $data->title ?></title>
        <meta name="description" content="<?= $data->description ?>" />
        <link href="<?= $data->url ?>" rel="canonical" />
        <meta name="keywords" content="<?= $data->keywords ?>" />
        <meta name="DC.title" content="<?= $data->dc_title ?>" />
        <meta name="geo.region" content="<?= $data->geo_region ?>" />
        <meta name="geo.placename" content="<?= $data->geo_placename ?>" />
        <meta name="geo.position" content="<?= $data->geo_position ?>" />
        <meta name="ICBM" content="<?= $data->ICBM ?>" />
        <meta name="google-site-verification" content="<?= $data->google_site_verification ?>" />
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <header>
            <h1><?= $data->name ?> <small><?= $data->slogan ?></small></h1>
        </header>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>