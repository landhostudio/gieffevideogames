<article class="products-preview">
  <a href="<?= $product->url() ?>" rel="bookmark" class="products-preview-link">

    <?php if ( $image = $product->heroImage()->toFile() ) : ?>
      <div class="products-preview-image<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>">
        <?= thumb( $image, array( 'width' => 720, 'height' => 720, 'crop' => true ) ) ?>
      </div>
    <?php endif; ?>

    <div class="products-preview-content">
      <?php if ( $product->heroTitle()->isNotEmpty() ): ?>
        <h3 class="<?php if ( $page->template() == 'virtual-reality' ) : ?>text-color-4<?php else : ?>text-color-2<?php endif; ?>"><?= $product->heroTitle()->html() ?></h3>
      <?php else : ?>
        <h3 class="<?php if ( $page->template() == 'virtual-reality' ) : ?>text-color-4<?php else : ?>text-color-2<?php endif; ?>"><?= $product->title()->html() ?></h3>
      <?php endif; ?>
    </div>
  </a>
</article>
