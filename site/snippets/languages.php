<div class="header-languages">
  <div class="dropdown">
    <button type="button" class="button<?php e( $page->template() == 'virtual-reality', ' button--color-4', ' button--color-2' ) ?> button--s button--outline button--toggle"><?= $site->language()->name() ?><span class="button-caret"></span></button>
    <ul class="dropdown-menu<?php e( $page->template() == 'virtual-reality', ' text-color-4', ' text-color-2' ) ?>">
      <?php foreach ( $site->languages() as $language ) : ?>
        <li class="language<?php e( $site->language() == $language, ' language--active' ) ?>">
          <a href="<?= $language->url() ?>" rel="bookmark" class="language-link<?php e( $page->template() == 'virtual-reality', ' text-color-4', ' text-color-2' ) ?>"><?= html( $language->name() ) ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
