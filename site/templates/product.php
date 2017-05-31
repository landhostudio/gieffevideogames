<?php snippet( 'header' ) ?>

<article>

  <?php snippet( 'hero' ) ?>

  <?php if ( $page->gallery() ): ?>
    <div class="gallery">
      <?php $n = 0; foreach ( $page->gallery()->yaml() as $image ) : $n++; ?>
        <?php if ( $image = $page->image( $image ) ) : ?>
          <a href="<?= thumb( $image, array( 'width' => 300, 'crop' => true ) )->url(); ?>">Image <?= $n ?></a>
        <?php endif ?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php snippet( 'body' ); ?>

  <?php if ( $page->specs() ) : ?>
    <section class="specs">
      <h3 class="hidden">Product specs</h3>
      <dl>
        <?php foreach ( $page->specs()->yaml() as $spec ) : ?>
          <dt class="specs-header"><?= $spec[ 'title' ] ?></dt>
          <dd class="specs-description">
            <?= kirbytext( $spec[ 'description' ] ) ?>
          </dd>
        <?php endforeach; ?>
      </dl>
    </section>
  <?php endif; ?>

  <?php snippet( 'breadcrumb' ) ?>

</article>

<?php
  snippet('cta');
  snippet('footer');
?>
