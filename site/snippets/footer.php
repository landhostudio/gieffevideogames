    <footer role="contentinfo" class="footer">
      <div class="container">
      
        <div class="footer-logo">
          <a href="<?= $site->language()->url() ?>" rel="home">
            <span class="hidden"><?= $site->title()->html() ?></span>
            <?php if ( $page->template() == 'virtual-reality' ) : ?>
              <img src="<?= url('assets/images/logo-2.png') ?>" alt="">
            <?php else: ?>
              <img src="<?= url('assets/images/logo-1.png') ?>" alt="">
            <?php endif; ?>
          </a>
        </div>

        <div class="footer-menu">
          <ul class="footer-menu-items no-list">
            <?php foreach($pages->visible() as $item): ?>
              <li class="footer-menu-item">
                <a href="<?= $item->url() ?>" class="menu-link<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-3<?php endif; ?>"><?= $item->title()->html() ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>

        <?php if ( $site->youtube() || $site->facebook() || $site->instagram() ) : ?>
          <div class="footer-social<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-2<?php endif; ?>">
            <ul class="footer-social-items no-list">
              <?php if ( $site->facebook() ) : ?>
                <li class="footer-social-item">
                  <a href="<?= $site->facebook(); ?>" rel="nofollow" target="_blank" class="footer-social-link">
                    <span class="hidden">Facebook</span>
                    <?= ( new Asset( "assets/images/facebook.svg" ) )->content() ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if ( $site->youtube() ) : ?>
                <li class="footer-social-item">
                  <a href="<?= $site->youtube(); ?>" rel="nofollow" target="_blank" class="footer-social-link">
                    <span class="hidden">YouTube</span>
                    <?= ( new Asset( "assets/images/youtube.svg" ) )->content() ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if ( $site->instagram() ) : ?>
                <li class="footer-social-item">
                  <a href="<?= $site->instagram(); ?>" rel="nofollow" target="_blank" class="footer-social-link">
                    <span class="hidden">Instagram</span>
                    <?= ( new Asset( "assets/images/instagram.svg" ) )->content() ?>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </footer>

    <footer class="copyright <?php if ( $page->template() == 'virtual-reality' ) : ?> background-2<?php else : ?> background-1<?php endif; ?>">
      <p class="<?php if ( $page->template() == 'virtual-reality' ) : ?>text-color-4-alt<?php else : ?>text-color-2<?php endif; ?>"><?php echo html::decode( $site->copyright()->kirbytext() ); ?></p>
    </footer>

    <?php if ( $page->template() == 'contact' ) : ?>
      <?= js( 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB-7QytKMD90pKwOssSFELz40Cemx1MXgU' ) ?>
    <?php endif; ?>

    <?=
      js(array(
        'assets/js/vendor.js',
        'assets/js/main.js'
      ))
    ?>
  </body>
</html>
