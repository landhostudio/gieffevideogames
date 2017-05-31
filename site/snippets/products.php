<?php if ( $products->count() ) : ?>
  
  <?php if ( $page->template() == 'products-category' ) : ?>
    <?php snippet( 'pagination', array( 'pagination' => $pagination) ); ?>
  <?php endif; ?>

  <?php foreach ( $products as $product ) : ?>
    <?php if ( $product->template() == 'products-category' ) : ?>
      <?php snippet( 'products-category', array( 'product' => $product ) ); ?>
    <?php elseif ( $product->template() == 'product' ): ?>
      <?php snippet( 'product-preview', array( 'product' => $product ) ); ?>
    <?php endif; ?>
  <?php endforeach; ?>

  <?php if ( $page->template() == 'products-category' ) : ?>
    <?php snippet( 'pagination', array( 'pagination' => $pagination) ); ?>
  <?php endif; ?>

<?php else : ?>

  <?php snippet( 'none' ); ?>

<?php endif; ?>
