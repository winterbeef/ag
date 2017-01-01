<?php
include '/home/allisongildersleeve/allisongildersleeve.com/includes/functions.php';
$images = listImages('/home/allisongildersleeve/allisongildersleeve.com/paintings/');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Allison Gildersleeve</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="author" content="winterbeef@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootswatch/3.3.6/spacelab/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.fotorama/4.6.4/fotorama.min.css">
    <style type="text/css">
    body {
        margin-top: 80px;
    }
    .fotorama__caption__wrap,
    .fotorama__caption {
        background-color: #f0f0f0;
        /*box-shadow: 1px 1px 1px rgba(0,0,0,.5);*/
        font-size: .9em;
        font-style: italic;
        color:#999;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="http://www.wikipedia.com">Wikipedia</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right:1px;">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fun Stuff <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://gmail.com"><i class="fa fa-phone fa-fw"></i>Gmail</a></li>
                        <li><a href="http://dogeweather.com/"><i class="fa fa-cloud fa-fw"></i> Such Weather</a></li>
                        <li class="divider"></li>
                        <li><a href="/help"><i class="fa fa-question-circle"></i> Help</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div id="home-main" class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="fotorama"
                    data-width="100%"
                    data-ratio="4/3"
                    data-nav="thumbs"
                    data-allowfullscreen="native"
                    xxxxdata-fit="scaledown"
                    data-clicktransition="crossfade"
                    data-hash="true"
                    data-keyboard="true"
                >

                    <?php
                    $base = "http://allisongildersleeve.com/paintings/images/";
                    ?>
                    <?php foreach($images as $img): ?>
                    <a
                        href="<?=$base,'/', basename($img['file'])?>"
                        data-caption="<?=htmlspecialchars($img['desc'])?>"
                        id="<?=basename($img['file'])?>"
                    >
                        <img
                            src="<?=$base,'/thumbnails/',basename($img['file'])?>"
                        >
                    </a>
                    <?php endforeach; ?>

                </div>
            </div><!-- .col-* -->
        </div><!-- .row -->
    </div>

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/handlebarsjs/4.0.5/handlebars.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.fotorama/4.6.4/fotorama.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

    });
    </script>
</body>
</html>
