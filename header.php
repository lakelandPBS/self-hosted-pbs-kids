<!DOCTYPE html>

<?php include_once('config.php'); ?>
<?php include_once('include/functions.php'); ?>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
        
        <?php
            echo '<link rel="stylesheet" type="text/css" href="library/css/style.css?' . filemtime('library/css/style.css') . '">';
            echo '<meta property="og:url" content="' . $siteUrl . '" />';
            echo '<meta property="og:title" content="Watch ' . $pageTitle . ' Online" />';
            echo '<meta property="og:site_name" content="' . $pageTitle . '" />';
            echo '<meta property="og:description" content="Stream LIVE ' . $pageTitle . ' or watch on-demand episodes of your favorite shows." />';
            echo '<meta property="og:image" content="' . $ogImage . '" />';
        ?>
    </head>
    <body>

<?php /*
        // soon to come... maybe
        print_nav_menu($stationMenuItems);
 */ ?>
