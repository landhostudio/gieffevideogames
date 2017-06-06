<header class="hero-product">
  <div class="container">

    <?php if ( $image = $page->heroImage()->toFile() ) : ?>
      <div class="hero-product-image">
        <div class="hero-product-image-container">
          <?= thumb( $image, array( 'width' => 1200, 'height' => 1200, 'crop' => true ) ) ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="hero-product-content">
      <a href="<?= $page->parent()->url() ?>" rel="prev" class="hero-product-content-category text-color-2 h5"><?= $page->parent()->title()->html() ?></a>

      <?php if ( $page->heroTitle()->isNotEmpty() ) : ?>
        <h2 class="text-color-3"><?= $page->heroTitle()->html(); ?></h2>
      <?php else : ?>
        <h2 class="text-color-3"><?= $page->title()->html(); ?></h2>
      <?php endif; ?>

      <?php if ( $page->heroText()->isNotEmpty() ) : ?>
        <p><?= $page->heroText()->html(); ?></p>
      <?php else : ?>
        <p><?= $page->description()->html(); ?></p>
      <?php endif; ?>

      <?php if ( $page->gallery()->isNotEmpty() || $page->iframe()->isNotEmpty() || $page->document() ): ?>
        <div class="hero-product-buttons">
          <?php if ( $page->gallery()->isNotEmpty() ): ?>
            <a href="#" class="button button--gallery button--color-2 button--m button--outline"><?= l( 'product.images.title' ) ?></a>
          <?php endif; ?>
          <?php if ( $page->iframe()->isNotEmpty() ): ?>
            <a href="<?= $page->iframe() ?>" class="button button--video button--color-2 button--m button--outline"><?= l( 'product.video.title' ) ?></a>
          <?php endif; ?>
          <?php if ( $page->document() ): ?>
            <a href="<?= $page->document()->url() ?>" rel="nofollow" class="button button--download button--color-2 button--m button--outline"><?= l( 'product.document.title' ) ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ( $page->gallery()->isNotEmpty() ): ?>
        <div class="hero-product-gallery hidden">
          <?php $n = 0; foreach ( $page->gallery()->yaml() as $image ) : $n++; ?>
            <?php if ( $image = $page->image( $image ) ) : ?>
              <a href="<?= thumb( $image, array( 'width' => 1920, 'height' => 1080, 'crop' => true ) )->url(); ?>">Image <?= $n ?></a>
            <?php endif ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
  </div>
</header>
