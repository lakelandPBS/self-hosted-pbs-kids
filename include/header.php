<!DOCTYPE html>

<?php include_once('variables.php'); // get branding variables ?>
<?php include_once('functions.php'); ?>

<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
        
        <link rel="stylesheet" type="text/css" href="library/css/base.css?<? echo filemtime('library/css/base.css'); ?>">
    </head>
    <body>

        <?php print_nav_menu($stationMenuItems); ?>
