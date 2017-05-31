<header class="hero">

  <?php if ( $image = $page->heroImage()->toFile() ) : ?>
    <div class="hero-image">
      <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ) ?>
    </div>
  <?php endif; ?>

  <?php if ( $page->heroGallery()->isNotEmpty() ): ?>
    <div class="hero-gallery">
      <ul>
        <?php foreach ( $page->heroGallery()->yaml() as $image ) : ?>
          <?php if ( $image = $page->image( $image ) ) : ?>
            <li><?= thumb( $image, array( 'width' => 300, 'crop' => true ) ); ?></li>
          <?php endif ?>
        <?php endforeach; ?>
      </ul>
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
