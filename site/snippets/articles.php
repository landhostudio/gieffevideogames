<?php if ( $articles->count() ) : ?>
  <?php foreach ( $articles as $article ) : ?>
    <?php snippet( 'article-preview', array( 'article' => $article ) ); ?>
  <?php endforeach ?>
<?php else: ?>
  <?php snippet('none') ?>
<?php endif ?>
