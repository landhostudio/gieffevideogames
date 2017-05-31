<?php if ( $page->locations() ) : ?>
  <?php foreach ( $page->locations()->toStructure() as $location ) : ?>
    <article class="location">
      <?php if ( $image = $page->image( $location->image() ) ) : ?>
        <div class="location-image">
          <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ); ?>
        </div>
      <?php endif; ?>
      <div class="location-content">
        <h3><?= $location->title(); ?></h3>
        <?= $location->text()->kirbytext() ?>
      </div>
    </article>
  <?php endforeach; ?>
<?php endif; ?>
