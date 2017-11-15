<!DOCTYPE html>

<?php include_once('config.php'); ?>
<?php include_once('include/functions.php'); ?>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
        
        <?php
            echo '<link rel="stylesheet" type="text/css" href="library/css/style.css?' . filemtime('library/css/style.css') . '">';

            echo '<meta name="description" content="' . $pageDesc . '" />';

            // facebook OG tags
            echo '<meta property="og:url" content="' . $siteUrl . '" />';
            echo '<meta property="og:title" content="Watch ' . $pageTitle . ' Online" />';
            echo '<meta property="og:site_name" content="' . $pageTitle . '" />';
            echo '<meta property="og:description" content="' . $pageDesc . '" />';
            echo '<meta property="og:image" content="' . $socialImage . '" />';

            // twitter tags
            echo '<meta name="twitter:card" content="summary" />';
            echo ( $twitterHandle ? '<meta name="twitter:site" content="' . $twitterHandle . '" />' : '' );
            echo '<meta name="twitter:title" content="' . $pageTitle . '" />';
            echo '<meta name="twitter:description" content="' . $pageDesc . '" />';
            echo '<meta name="twitter:image" content="' . $socialImage . '" />';
        ?>
    </head>
    <body>

<?php /*
        // soon to come... maybe
        print_nav_menu($stationMenuItems);
 */ ?>
