<?php if ( $page->products() ) : ?>
  <aside class="featured">
    <h2 class="hidden"><?= l( 'products.title' ) ?></h2>
    <?php
      foreach ( $page->products()->toStructure() as $related ) :
      $product = $site->index()->findByURI($related->product());
    ?>
      <?php snippet( 'product-preview', array('product' => $product ) ); ?>
    <?php endforeach; ?>
    <?php if ( $page->productsCTATitle()->isNotEmpty() && $page->productsCTAUrl()->isNotEmpty() ) : ?>
      <a href="<?= $site->language()->url() ?>/<?= $page->productsCTAUrl()->html(); ?>" rel="bookmark" class="button"><?= $page->productsCTATitle()->html(); ?></a>
    <?php endif; ?>
  </aside>
<?php endif; ?>
