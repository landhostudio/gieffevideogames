<article class="article">
  <a href="<?= $article->url() ?>" rel="bookmark">
    <?php if ( $image = $article->heroImage()->toFile() ) : ?>
      <div class="product-image">
        <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>
    <div class="product-content">
      <?php if ( $article->heroTitle()->isNotEmpty() ): ?>
        <h3><?= $article->heroTitle()->html() ?></h3>
      <?php else : ?>
        <h3><?= $article->title()->html() ?></h3>
      <?php endif; ?>
      <p><?= $article->text()->kirbytext()->excerpt(25, 'words') ?></p>
    </div>
  </a>
  <?php snippet( 'meta', array( 'article' => $article ) ); ?>
</article>
