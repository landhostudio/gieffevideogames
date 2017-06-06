<article class="products-preview">
  <a href="<?= $product->url() ?>" rel="bookmark" class="products-preview-link">

    <?php if ( $image = $product->heroImage()->toFile() ) : ?>
      <div class="products-preview-image">
        <?= thumb( $image, array( 'width' => 720, 'height' => 720, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>

    <div class="products-preview-content">
      <?php if ( $product->heroTitle() ): ?>
        <h3 class="text-color-2"><?= $product->heroTitle()->html() ?></h3>
      <?php else : ?>
        <h3 class="text-color-2"><?= $product->title()->html() ?></h3>
      <?php endif; ?>
    </div>
  </a>
</article>
