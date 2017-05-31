<div class="breadcrumb">
  <ol>
    <?php foreach ( $site->breadcrumb() as $crumb ): ?>
      <?php if ( !$crumb->is( page( 'home' ) ) ) : ?>
        <li class="breadcrumb-item<?php e( $crumb->isActive(), ' breadcrumb-item--active' ) ?>">
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
