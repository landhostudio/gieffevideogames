<?php if ( $site->CTATitle() && $site->CTATitle() ): ?>
  <aside class="cta<?php if ( $page->template() == 'virtual-reality' ) : ?> gradient-2<?php else : ?> gradient-1<?php endif; ?>">
    <div class="container">
      <div class="cta-content">
        <h4 class="cta-content-title h1<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-2<?php endif; ?>"><?= $site->CTATitle()->html(); ?></h4>
        <p><?= $site->CTAText()->html(); ?></p>

        <?php if ( $site->CTAButtonTitle1() && $site->CTAButtonSubject1() && $site->CTAButtonEmail1() || $site->CTAButtonTitle2() && $site->CTAButtonSubject2() && $site->CTAButtonEmail2() ) : ?>
          <div class="cta-content-buttons">
            <?php if ( $site->CTAButtonTitle1() && $site->CTAButtonSubject1() && $site->CTAButtonEmail1() ) : ?>
              <a href="mailto:<?= $site->CTAButtonEmail1()->html(); ?>?subject=<?= $site->CTAButtonSubject1()->html(); ?>" class="button<?php if ( $page->template() == 'virtual-reality' ) : ?> button--color-4<?php else : ?> button--color-2<?php endif; ?> button--l"><?= $site->CTAButtonTitle1()->html(); ?></a>
            <?php endif; ?>
            <?php if ( $site->CTAButtonTitle2() && $site->CTAButtonSubject2() && $site->CTAButtonEmail2() || $site->CTAButtonTitle2() && $site->CTAButtonSubject2() && $site->CTAButtonEmail2() ) : ?>
              <a href="mailto:<?= $site->CTAButtonEmail2()->html(); ?>?subject=<?= $site->CTAButtonSubject2()->html(); ?>" class="button<?php if ( $page->template() == 'virtual-reality' ) : ?> button--color-4<?php else : ?> button--color-2<?php endif; ?> button--l"><?= $site->CTAButtonTitle2()->html(); ?></a>
            <?php endif; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </aside>
<?php endif; ?>
