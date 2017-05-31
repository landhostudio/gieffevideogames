<article class="product">
  <a href="<?= $product->url() ?>" rel="bookmark">
    <?php if ( $image = $product->heroImage()->toFile() ) : ?>
      <div class="product-image">
        <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>
    <div class="product-content">
      <?php if ( $product->heroTitle() ): ?>
        <h3><?= $product->heroTitle()->html() ?></h3>
      <?php else : ?>
        <h3><?= $product->title()->html() ?></h3>
      <?php endif; ?>
    </div>
  </a>
</article>
