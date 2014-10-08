<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <?php Loader::element('header_required')?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/main.css">
    <script src="<?php echo $view->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>
    <script src="<?php echo $view->getThemePath(); ?>/bower_components/fastclick/lib/fastclick.js"></script>
</head>
<body>

<!-- concrete5 PageWrapperClass -->
<div class="<?php echo $c->getPageWrapperClass()?>">

<!-- scoping foundation stuff -->
<div class="fndtn">

<!-- nav area -->
<!-- off canvas sections wrapping the main content. these are closed in footer.php-->
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

        <?php 
        $a = new GlobalArea('Header Nav');
        $a->display();
        ?>

<!-- end nav area -->
<!-- end header.php -->
