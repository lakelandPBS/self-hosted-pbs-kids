<!DOCTYPE html>

<?php include_once('config.php'); ?>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
        
        <?php
            echo '<link rel="stylesheet" type="text/css" href="' . $siteUrl . '/library/css/style.css?' . filemtime(dirname(__FILE__) . '/library/css/style.css') . '">';

            echo '<meta name="description" content="' . $pageDesc . '" />';

            // facebook OG tags
            echo '<meta property="og:url" content="' . $siteUrl . '" />';
            echo '<meta property="og:title" content="Watch ' . $pageTitle . ' Online" />';
            echo '<meta property="og:site_name" content="' . $pageTitle . '" />';
            echo '<meta property="og:description" content="' . $pageDesc . '" />';
            echo '<meta property="og:image" content="' . $socialImage . '" />';

            // twitter tags
            echo '<meta name="twitter:card" content="summary" />';
            echo ( isset($twitterHandle) ? '<meta name="twitter:site" content="' . $twitterHandle . '" />' : '' );
            echo '<meta name="twitter:title" content="' . $pageTitle . '" />';
            echo '<meta name="twitter:description" content="' . $pageDesc . '" />';
            echo '<meta name="twitter:image" content="' . $socialImage . '" />';
        ?>
    </head>
    <body id="<?php echo (isset($error) ? $error : ''); ?>">
