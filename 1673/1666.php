<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1666.less', 'css/1666.css');
    
?>
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>1666</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/1666.css" rel="stylesheet" type="text/css" />  
        <script src="js/swiper.min.js"></script>
        <script  src="js/jquery.min.js"></script>
        <script src="js/1666.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/1666-content.php'; ?>
    </body>
</html>