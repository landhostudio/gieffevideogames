<?php if ( $page->products() ) : ?>
  <aside class="featured">
    <div class="container">
      
      <h2 class="featured-title h2 text-color-4"><?= l( 'products.title' ) ?></h2>
      
      <div class="products">
        <?php
          foreach ( $page->products()->toStructure() as $related ) :
          $product = $site->index()->findByURI($related->product());
        ?>
          <?php snippet( 'product-preview', array('product' => $product ) ); ?>
        <?php endforeach; ?>
      </div>

      <?php if ( $page->productsCTATitle()->isNotEmpty() && $page->productsCTAUrl()->isNotEmpty() ) : ?>
        <div class="featured-buttons">
          <a href="<?= $site->language()->url() ?>/<?= $page->productsCTAUrl()->html(); ?>" rel="bookmark" class="button button--m button--color-4 button--outline"><?= $page->productsCTATitle()->html(); ?></a>
        </div>
      <?php endif; ?>

    </div>
  </aside>
<?php endif; ?>
