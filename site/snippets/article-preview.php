<article class="blog-preview">
  <a href="<?= $article->url() ?>" rel="bookmark" class="blog-preview-link">
    <?php if ( $image = $article->heroImage()->toFile() ) : ?>
      <div class="blog-preview-image">
        <?= thumb( $image, array( 'width' => 640, 'height' => 360, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>
    <div class="blog-preview-content">
      <?php if ( $article->heroTitle()->isNotEmpty() ): ?>
        <h3 class="h4 text-color-3"><?= $article->heroTitle()->html() ?></h3>
      <?php else : ?>
        <h3 class="h4 text-color-3"><?= $article->title()->html() ?></h3>
      <?php endif; ?>
      <p><?= $article->text()->kirbytext()->excerpt( 25, 'words' ) ?></p>
    </div>
  </a>
  <?php snippet( 'meta', array( 'article' => $article ) ); ?>
</article>
