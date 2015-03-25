<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
     <h1 class="tagline"><?php echo $page->tagline()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects-teaser') ?>

  </main>

<?php snippet('footer') ?>
