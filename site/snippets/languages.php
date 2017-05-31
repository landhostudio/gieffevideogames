<div class="header-languages">
  <div class="btn-group">
    <button type="button" class="button button--dropdown"><?= $site->language()->name() ?></button>
    <ul class="button-dropdown">
      <?php foreach ( $site->languages() as $language ) : ?>
        <li<?php e( $site->language() == $language, ' class="is-active"' ) ?>>
          <a href="<?= $language->url() ?>" rel="bookmark"><?= html($language->name()) ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
