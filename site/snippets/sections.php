<?php if ( $page->sections() ) : ?>
  <?php $n = 0; foreach ( $page->sections()->toStructure() as $section ) : $n++; ?>
    <section class="section<?= ( $n%2 ) ? ' section--right' : ' section--left' ?>">
      <div class="container-full">
        <div class="section-container">
          <?php if ( $image = $page->image( $section->image() ) ) : ?>
            <div class="section-image">
              <div class="section-image-container">
                <?= thumb( $image, array( 'width' => 960, 'height' => 540, 'crop' => true ) ) ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="section-content">
            <h3 class="h2<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>"><?= $section->title(); ?></h3>
            <p><?= $section->description(); ?></p>
            <?php if ( $section->ctatitle()->isNotEmpty() && $section->ctaurl()->isNotEmpty() ) : ?>
              <a href="<?= $site->language()->url() ?>/<?= $section->ctaurl(); ?>" rel="bookmark" class="button<?php if ( $page->template() == 'virtual-reality' ) : ?> button--color-4<?php else : ?> button--color-2<?php endif; ?> button--m button--outline"><?= $section->ctatitle(); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
<?php endif; ?>
