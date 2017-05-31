<?php if ( $page->sections() ) : ?>
  <?php $n = 0; foreach ( $page->sections()->toStructure() as $section ) : $n++; ?>
    <section class="section<?= ( $n%2 ) ? ' section--right' : ' section--left' ?>">
      
      <?php if ( $image = $page->image( $section->image() ) ) : ?>
        <div class="section-image">
          <?= thumb( $image, array( 'width' => 300, 'crop' => true ) ); ?>
        </div>
      <?php endif; ?>

      <div class="section-content">
        <h3><?= $section->title(); ?></h3>
        <p><?= $section->description(); ?></p>
        <?php if ( $section->ctatitle()->isNotEmpty() && $section->ctaurl()->isNotEmpty() ) : ?>
          <a href="<?= $site->language()->url() ?>/<?= $section->ctaurl(); ?>" rel="bookmark" class="button"><?= $section->ctatitle(); ?></a>
        <?php endif; ?>
      </div>

    </section>
  <?php endforeach; ?>
<?php endif; ?>
