<?php
function parse_images($dir) {
    $dir     = realpath($dir);
    $images  = array();
    $root_len = strlen($_SERVER['DOCUMENT_ROOT']);
    foreach(glob($dir.'/*.jpg') as $file) {
        $thumb = preg_replace('/images\/([^\/]+)$/','images/thumbnails/$1',$file);
        $desc  = @file_get_contents(preg_replace('/jpg$/', 'txt', $file));

        $cap = @explode("\n", $desc, 2);

        $img = (object) array(
            'url'     => substr($file, $root_len),
            'file'    => $file,
            'base'    => basename($file),
            'desc'    => $desc,
            'th_url'  => substr($thumb, $root_len),
            'th_file' => $thumb,
            'title'   => @$cap[0],
            'more'    => @$cap[1],

        );
        $images[] = $img;
    }
    return $images;
}

function get_file($dir, $file) {
    $file = $dir . '/' . $file;
    if(@is_readable($file)) {
        ob_start();
        include $file;
        return ob_get_clean();
    } else {
        return false;
    }
}

function H($str) {
    return htmlspecialchars($str);
}
?>
