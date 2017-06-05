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
    <div class="container">

      <?php if ( $page->heroTitle()->isNotEmpty() ) : ?>
        <h2 class="h1<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>"><?= $page->heroTitle()->html(); ?></h2>
      <?php else : ?>
        <h2 class="h1<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>"><?= $page->title()->html(); ?></h2>
      <?php endif; ?>

      <?php if ( $page->heroText()->isNotEmpty() ) : ?>
        <p><?= $page->heroText()->html(); ?></p>
      <?php else : ?>
        <p><?= $page->description()->html(); ?></p>
      <?php endif; ?>

      <?php if ( $page->heroCTATitle()->isNotEmpty() && $page->heroCTAUrl()->isNotEmpty() ) : ?>
        <a href="<?= $site->language()->url() ?>/<?= $page->heroCTAUrl()->html(); ?>" rel="bookmark" class="button button--color-2 button--l"><?= $page->heroCTATitle()->html(); ?></a>
      <?php endif; ?>

      <?php if ( $page->template() == 'blog' ) : ?>
        <?php snippet( 'articles-categories', array( 'categories' => $categories ) ) ?>
      <?php endif; ?>

      <?php if ( $page->template() == 'article' ) : ?>
        <?php snippet( 'meta', array( 'article' => $page ) ); ?>
      <?php endif; ?>

    </div>
  </div>
</header>
