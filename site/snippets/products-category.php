<article class="category">
  <a href="<?= $product->url() ?>" rel="bookmark">
    <?php if ( $image = $product->heroImage()->toFile() ) : ?>
      <div class="category-image">
        <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>
    <div class="category-content">
      <?php if ( $product->heroTitle() && $product->heroText() ): ?>
        <h3><?= $product->heroTitle()->html() ?></h3>
        <p><?= $product->heroText()->html() ?></p>
      <?php else : ?>
        <h3><?= $product->title()->html() ?></h3>
        <p><?= $product->description()->html() ?></p>
      <?php endif; ?>
    </div>
  </a>
</article>
