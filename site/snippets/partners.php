<?php if ( $site->partners() ) : ?>
  <section class="partners">
    <h3><?= l( 'partners.title' ) ?></h3>
    <ul>
      <?php foreach ( $site->partners()->toStructure() as $partner ) : ?>
        <?php if ( $image = $site->image( $partner->image() ) ) : ?>
          <li>
            <a href="<?= $partner->url(); ?>" rel="nofollow" target="_blank">
              <?= thumb( $image, array( 'height' => 80 ) ); ?>
            </a>
          </li>
        <?php endif; ?>
      <?php  endforeach; ?>
    </ul>
  </section>
<?php endif; ?>
