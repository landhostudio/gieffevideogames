    <footer role="contentinfo" class="footer">
      
      <div class="footer-logo">
        <a href="<?= $site->language()->url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div>

      <div class="footer-menu">
        <ul>
          <?php foreach($pages->visible() as $item): ?>
            <li>
              <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>

      <?php if ( $site->youtube() || $site->facebook() || $site->instagram() ) : ?>
        <div class="footer-social">
          <ul>
            <?php if ( $site->youtube() ) : ?>
              <li>
                <a href="<?= $site->youtube(); ?>" rel="nofollow" target="_blank">YouTube</a>
              </li>
            <?php endif; ?>
            <?php if ( $site->facebook() ) : ?>
              <li>
                <a href="<?= $site->facebook(); ?>" rel="nofollow" target="_blank">Facebook</a>
              </li>
            <?php endif; ?>
            <?php if ( $site->instagram() ) : ?>
              <li>
                <a href="<?= $site->instagram(); ?>" rel="nofollow" target="_blank">Instagram</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="footer-copyright">
        <p><?php echo html::decode( $site->copyright()->kirbytext() ); ?></p>
      </div>

    </footer>

    <?=
      js(array(
        'assets/js/vendor.js',
        'assets/js/main.js'
      ))
    ?>
  </body>
</html>
