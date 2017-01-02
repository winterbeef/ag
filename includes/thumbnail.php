<?php
ob_start();
error_reporting(0);
$thumb = $_SERVER['DOCUMENT_ROOT'].$_REQUEST['path'];
$full  = str_replace('/thumbnails/','/',$thumb);

if(is_readable($thumb) && filemtime($full) < filemtime($thumb)) {
    // pass
} else {
    $template = "convert %s -resize '100x100' %s";
    $cmd = sprintf($template, $full, $thumb);
    exec($cmd);
}
ob_end_clean();

header('Content-type: image/jpeg');
header('Content-length: '.filesize($thumb));
header('Expires: '. date(DATE_RFC1123, time() + 86400));
header('Last-modified: '. date(DATE_RFC1123, filemtime($thumb)));
header('Cache-Control: max-age=86400');
readfile($thumb);
