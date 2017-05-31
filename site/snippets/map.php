<?php
  $location = $page->map()->yaml();
  if ( $location ) :
?>
  <div class="map">
    <div class="map-content">
      <div class="map-location" data-lat="<?= $location['lat'] ?>" data-lng="<?= $location['lng'] ?>"></div>
    </div>
  </div>
<?php endif; ?>
