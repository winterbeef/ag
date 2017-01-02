<?php
$image_dir = 'images';
include 'includes/functions.php';
$images = parse_images($image_dir);
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
            <a class="navbar-brand" href="/">Allison Gildersleeve</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="margin-right:2px;">
                <li><a href="/paintings">paintings</a></li>
                <li><a href="/drawings">drawings</a></li>
                <li><a href="/prints">prints</a></li>
                <li><a href="/bio">bio</a></li>
                <li><a href="/statement">statement</a></li>
                <li><a href="/press">press</a></li>
                <li><a href="/contact">contact</a></li>
            </ul>
        </div>
    </nav>

    <div id="home-main" class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- See: http://fotorama.io/customize/ -->
                <div class="fotorama"
                    data-width="100%"
                    data-ratio="4/3"
                    data-nav="thumbs"
                    data-allowfullscreen="native"
                    data-clicktransition="crossfade"
                    data-hash="true"
                    data-keyboard="true">
                    <?php foreach($images as $img): ?>
                    <a
                        href="<?=$img->url?>"
                        data-caption="<?=htmlspecialchars($img->desc)?>"
                        id="<?=$img->base?>">
                        <img src="<?=$img->th_url?>">
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
