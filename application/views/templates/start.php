<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Spot the Jellyfish</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/solid.css" integrity="sha384-HTDlLIcgXajNzMJv5hiW5s2fwegQng6Hi+fN6t5VAcwO/9qbg2YEANIyKBlqLsiT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/regular.css" integrity="sha384-R7FIq3bpFaYzR4ogOiz75MKHyuVK0iHja8gmH1DHlZSq4tT/78gKAa7nl4PJD7GP" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/brands.css" integrity="sha384-KtmfosZaF4BaDBojD9RXBSrq5pNEO79xGiggBxf8tsX+w2dBRpVW5o0BPto2Rb2F" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/fontawesome.css" integrity="sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="<?=base_url('css/style.css')?>">
    </head>
    <body>

        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url('MainIcon/SpotTheJellyfishAppIcon.png')?>" width="40" height="40" alt="">
            </a>
            <a class="navbar-brand" href="#">
                Spot the Jellyfish
            </a>
            <ul class="navbar-nav mr-auto">
            <?php foreach ($nav as $page => $url): ?>
                <li class="nav-item">
                    <?=anchor($url, $page, array('class' => 'nav-link'));?>
                </li>
            <?php endforeach ?>
            </ul>
            <ul class="navbar-nav">
                <li class="mr-auto">
                    <a href="#" class="nav-link">Log Out</a> <!--Put logout function here-->
                </li>
            </ul>
        </nav>
