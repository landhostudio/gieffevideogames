<?php if ( $page->team() ) : ?>
  <section class="team">
    <div class="container">
      <h3 class="team-title h2 text-color-3"><?= l( 'team.title' ) ?></h3>

      <div class="team-items">
        <?php foreach ( $page->team()->toStructure() as $person ) : ?>
          <article class="team-item">

            <?php if ( $image = $page->image( $person->image() ) ) : ?>
              <div class="team-item-image">
                <?= thumb( $image, array( 'width' => 96, 'height' => 96, 'crop' => true ) ); ?>
              </div>
            <?php endif; ?>

            <div class="team-item-content">
              <h4 class="h4 text-color-2"><?= $person->name(); ?></h4>
              <p class="h4 text-color-3"><?= $person->role(); ?></p>
              <?php if ( $person->text() ) : ?>
                <?= $person->text()->kirbytext() ?>
              <?php endif; ?>
            </div>

          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
