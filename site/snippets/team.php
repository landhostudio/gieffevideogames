<?php if ( $page->team() ) : ?>
  <section class="team">
    <h3 class="hidden"><?= l( 'team.title' ) ?></h3>
    <?php foreach ( $page->team()->toStructure() as $person ) : ?>
      <article class="person">

        <?php if ( $image = $page->image( $person->image() ) ) : ?>
          <div class="person-image">
            <?= thumb( $image, array( 'width' => 120, 'crop' => true ) ); ?>
          </div>
        <?php endif; ?>

        <div class="person-content">
          <h4><?= $person->name(); ?></h4>
          <p><?= $person->role(); ?></p>
          <?php if ( $person->text() ) : ?>
            <?= $person->text()->kirbytext() ?>
          <?php endif; ?>
        </div>

      </article>
    <?php endforeach; ?>
  </section>
<?php endif; ?>
