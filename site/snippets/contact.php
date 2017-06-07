<div class="contact">
  <div class="container">

    <?php
      $location = $page->map()->yaml();
      if ( $location ) :
    ?>
      <div class="contact-map">
        <div class="contact-map-content">
          <div class="contact-map-canvas">
            <div class="contact-map-location" data-lat="<?= $location['lat'] ?>" data-lng="<?= $location['lng'] ?>"></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="contact-content">
      <?= $page->text()->kirbytext() ?>
    </div>

  </div>
</div>
