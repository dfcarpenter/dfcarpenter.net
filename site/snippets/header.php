<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <script src="//use.typekit.net/xud6thq.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/styles.css') ?>

</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
     DFC
    </a>
    <?php snippet('menu') ?>
  </header>