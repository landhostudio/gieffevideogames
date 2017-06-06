<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <div class="breadcrumb-prev">
        <a href="<?= $page->parent()->url() ?>" rel="prev"><?= l( 'breadcrumb.prev' ) ?></a>
      </div>
      <ol class="breadcrumb-pages no-list inline-list">
        <?php foreach ( $site->breadcrumb() as $crumb ): ?>
          <?php if ( !$crumb->is( page( 'home' ) ) ) : ?>
            <li class="breadcrumb-page<?php e( $crumb->isActive(), ' breadcrumb-page--active' ) ?>">
              <?php if ( $crumb->isActive() ) : ?>
                <span><?= $crumb->title()->html() ?></span>
              <?php else : ?>
                <a href="<?= $crumb->url() ?>"><?= $crumb->title()->html() ?></a>
              <?php endif; ?>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</div>
