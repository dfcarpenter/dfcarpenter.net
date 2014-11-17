<?php snippet('header') ?>

<main class="main">
<section class="content blog">

 <!--  <h1><?php echo html($page->title()) ?></h1> -->
  <?php echo kirbytext($page->text()) ?>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article class="blog-article--snippet">
    <h1><?php echo html($article->title()) ?> </h1>
    <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('d.m.Y') ?></time>
    <p><?php echo excerpt($article->text(), 300) ?></p>
    <a href="<?php echo $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>
</main>

<?php snippet('footer') ?>