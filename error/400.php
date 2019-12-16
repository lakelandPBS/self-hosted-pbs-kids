<!DOCTYPE html>

<?php include_once('../config.php'); ?>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
        
        <?php
            echo '<link rel="stylesheet" type="text/css" href="' . $siteUrl . '/css/style.css?' . filemtime('css/style.css') . '">';
        ?>
    </head>
    <body>
        <?php
        
        include_once('header.php');
        
        echo '<h2>400 Bad Request</h2>';
        echo 'Bad Request. Your browser sent a request that this server could not understand.';
        
        ?>
    </body>
</html>
