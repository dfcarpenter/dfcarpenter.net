<?php snippet('header') ?>
<main class="main">

<section class="content blogarticle">
  <article>
    <h1 class="blog-article--title"><?php echo html($page->title()) ?></h1>
     <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.Y') ?></time>
    <?php echo kirbytext($page->text()) ?>

    <a href="<?php echo url('blog') ?>">Back…</a>

  </article>
</section>
</main>

<?php snippet('footer') ?>