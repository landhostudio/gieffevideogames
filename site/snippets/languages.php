<div class="header-languages">
  <div class="dropdown">
    <button type="button" class="button button button--color-2 button--s button--outline button--toggle"><?= $site->language()->name() ?><span class="button-caret"></span></button>
    <ul class="dropdown-menu">
      <?php foreach ( $site->languages() as $language ) : ?>
        <li class="language<?php e( $site->language() == $language, ' language--active' ) ?>">
          <a href="<?= $language->url() ?>" rel="bookmark"><?= html( $language->name() ) ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
