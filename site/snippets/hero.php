<header class="hero">

  <?php if ( $icon = $page->heroIcon()->toFile() ) : ?>
    <div class="hero-icon<?= e( $icon->extension() == 'svg', ' hero-icon--has-svg', '' ) ?>">
      <div class="hero-icon-container">
        <?php if ( $icon->extension() == 'svg' ) : ?>
          <?= $icon->content() ?>
        <?php else : ?>
          <?= thumb( $icon, array( 'width' => 192, 'height' => 192, 'crop' => true ) ) ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( $image = $page->heroImage()->toFile() ) : ?>
    <div class="hero-image">
      <div class="hero-image-container">
        <?= thumb( $image, array( 'width' => 1440, 'height' => 600, 'crop' => true ) ) ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( $page->heroGallery()->isNotEmpty() ): ?>
    <div class="hero-gallery">
      <div class="hero-gallery-flickity<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>">
        <?php foreach ( $page->heroGallery()->yaml() as $image ) : ?>
          <?php if ( $image = $page->image( $image ) ) : ?>
            <div class="hero-gallery-flickity-item">
              <?= thumb( $image, array( 'width' => 1440, 'height' => 600, 'crop' => true ) ); ?>
            </div>
          <?php endif ?>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
  
  <div class="hero-content">

    <?php if ( $page->template() == 'product' ) : ?>
      <a href="<?= $page->parent()->url() ?>" rel="prev"><?= $page->parent()->title()->html() ?></a>
    <?php endif; ?>

    <?php if ( $page->heroTitle()->isNotEmpty() ) : ?>
      <h2><?= $page->heroTitle()->html(); ?></h2>
    <?php else : ?>
      <h2><?= $page->title()->html(); ?></h2>
    <?php endif; ?>
    
    <?php if ( $page->heroText()->isNotEmpty() ) : ?>
      <p><?= $page->heroText()->html(); ?></p>
    <?php else : ?>
      <p><?= $page->description()->html(); ?></p>
    <?php endif; ?>

    <?php if ( $page->heroCTATitle()->isNotEmpty() && $page->heroCTAUrl()->isNotEmpty() ) : ?>
      <a href="<?= $site->language()->url() ?>/<?= $page->heroCTAUrl()->html(); ?>" rel="bookmark" class="button"><?= $page->heroCTATitle()->html(); ?></a>
    <?php endif; ?>

    <?php if ( $page->template() == 'article' ) : ?>
      <?php snippet( 'meta', array( 'article' => $page ) ); ?>
    <?php endif; ?>

  </div>

  <?php if ( $page->gallery()->isNotEmpty() && $page->video()->isNotEmpty() && $page->document()->isNotEmpty() ): ?>
    <div class="hero-buttons">

      <?php if ( $page->gallery() ): ?>
        <a href="#" class="button button--gallery">Images</a>
      <?php endif; ?>

      <?php if ( $page->video() ): ?>
        <a href="#" class="button button--video">Video</a>
      <?php endif; ?>

      <?php if ( $page->document() ): ?>
        <a href="#" class="button button--download">Download</a>
      <?php endif; ?>

    </div>
  <?php endif; ?>

  <?php if ( $page->template() == 'blog' ) : ?>
    <?php snippet( 'articles-categories', array( 'categories' => $categories ) ) ?>
  <?php endif; ?>

</header>
