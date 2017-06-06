<?php snippet( 'header' ) ?>

<article>

  <?php snippet( 'hero-product' ) ?>

  <?php snippet( 'body', array( 'columns' => 'yes' ) ); ?>

  <?php if ( $page->specs() ) : ?>
    <section class="specs">
      <h3 class="hidden"><?= l( 'product.specs' ) ?></h3>
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
