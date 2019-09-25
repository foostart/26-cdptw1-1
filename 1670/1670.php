<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once $dir_block.'/libs/lessc.inc.php';
    }

    $less = new lessc();
    $less->compileFile('less/1670.less', 'css/1670.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>1670</title>
    <link href="<?php echo $url_path; ?>/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo $url_path; ?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $url_path; ?>/css/1670.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/bootstrap.js"></script>
</head>
<body>
    <?php include '1670-content.php'; ?>
</body>
   
</html>