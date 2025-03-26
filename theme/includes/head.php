<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="description" content="<?= $Wcms->page('description') ?>" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Site Title -->
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="<?= $Wcms->asset("images/favicon.ico") ?>">

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="<?= $Wcms->asset("css/themify-icons.css") ?>" />
    <link rel="stylesheet" type="text/css" href="<?= $Wcms->asset("css/materialdesignicons.min.css") ?>" />

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="<?= $Wcms->asset("css/swiper-bundle.min.css") ?>"/>

    <!-- Accordion Css-->
    <link rel="stylesheet" href="<?= $Wcms->asset("css/accordion.min.css") ?>" />

    <!-- Tobii Css -->
    <link rel="stylesheet" href="<?= $Wcms->asset("css/tobii.min.css") ?>">

    <!-- Landik Css -->
    <link rel="stylesheet" href="<?= $Wcms->asset("css/style.css") ?>" />

    <!-- Admin CSS -->
    <?= $Wcms->css() ?>
</head>