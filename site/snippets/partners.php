<?php if ( $site->partners() ) : ?>
  <section class="partners">
    <div class="container">
      <h3 class="h4"><?= l( 'partners.title' ) ?></h3>
      <ul class="partners-items no-list inline-list">
        <?php foreach ( $site->partners()->toStructure() as $partner ) : ?>
          <?php if ( $image = $site->image( $partner->image() ) ) : ?>
            <li class="partners-item">
              <a href="<?= $partner->url(); ?>" rel="nofollow" target="_blank" class="partners-item-link">
                <?= thumb( $image, array( 'height' => 80 ) ); ?>
              </a>
            </li>
          <?php endif; ?>
        <?php  endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
