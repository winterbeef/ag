<?php
$request = $_GET['action'] or $request = '.';
$image_dir = $request . '/images';
include 'includes/functions.php';
$images = parse_images($image_dir);

$intro = get_file($request, 'intro.php');
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
    <?php include 'navbar.php' ?>

    <div id="home-main" class="container-fluid">
        <?php if ($intro): ?>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $intro ?>
            </div><!-- .col-* -->
        </div><!-- .row -->
        <?php endif; ?>

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
                    data-fit="scaledown"
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
