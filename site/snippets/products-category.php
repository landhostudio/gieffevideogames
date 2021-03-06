<article class="products-category">
  <a href="<?= $product->url() ?>" rel="bookmark" class="products-category-link">

    <?php if ( $icon = $product->heroIcon()->toFile() ) : ?>
      <div class="products-category-image<?= e( $icon->extension() == 'svg', ' products-category-image--has-svg', '' ) ?>">
        <?php if ( $icon->extension() == 'svg' ) : ?>
          <?= $icon->content() ?>
        <?php else : ?>
          <?= thumb( $icon, array( 'width' => 192, 'height' => 192, 'crop' => true ) ) ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="products-category-content">
      <?php if ( $product->heroTitle()->isNotEmpty() && $product->heroText()->isNotEmpty() ): ?>
        <h3 class="h4 text-color-2"><?= $product->heroTitle()->html() ?></h3>
        <?php if ( $product->heroText()->isNotEmpty() ): ?>
          <p class="text-color-3"><?= $product->heroText()->html() ?></p>
        <?php endif; ?>
      <?php else : ?>
        <h3 class="h4 text-color-2"><?= $product->title()->html() ?></h3>
        <?php if ( $product->description()->isNotEmpty() ): ?>
          <p class="text-color-3"><?= $product->description()->html() ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </a>
</article>
