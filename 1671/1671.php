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
    $less->compileFile('less/1671.less', 'css/1671.css');
    
?>
<!DOCTYPE html>

<html lang="en" 
style="background-color: #f3f3f4;">

    <head>
        <title>1671</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/2047.css" rel="stylesheet" type="text/css" />  
         <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/1671-content.php'; ?>
    </body>
</html>