<?php if ( $site->CTATitle() && $site->CTATitle() ): ?>
  <aside class="cta">
    <div class="cta-content">
      <h4><?= $site->CTATitle()->html(); ?></h4>
      <p><?= $site->CTAText()->html(); ?></p>
      <?php if ( $site->CTAButtonTitle() && $site->CTAButtonUrl() ): ?>
        <a href="mailto:<?= $site->CTAButtonEmail()->html(); ?>" class="button"><?= $site->CTAButtonTitle()->html(); ?></a>
      <?php endif; ?>
    </div>
  </aside>
<?php endif; ?>
