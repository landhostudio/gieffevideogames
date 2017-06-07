<?php if ( $page->locations() ) : ?>
  <div class="locations">
    <div class="container">
      <?php foreach ( $page->locations()->toStructure() as $location ) : ?>
        <article class="locations-item">
          <?php if ( $image = $page->image( $location->image() ) ) : ?>
            <div class="locations-item-image">
              <?= thumb( $image, array( 'width' => 640, 'height' => 360, 'crop' => true ) ) ?>
            </div>
          <?php endif; ?>
          <div class="locations-item-content">
            <h3 class="h4 text-color-3"><?= $location->title(); ?></h3>
            <div class="locations-item-content-text">
              <?= $location->text()->kirbytext() ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
