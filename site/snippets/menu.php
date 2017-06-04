<nav role="navigation" class="header-menu">
  <h2 class="hidden"><?= l( 'menu.title' ) ?></h2>
  <ul class="header-menu-items<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php else : ?> text-color-2<?php endif; ?> no-list">
    <?php foreach ( $pages->visible() as $item ) : ?>
      <li class="header-menu-item">
        <a href="<?= $item->url() ?>" class="menu-link<?php if ( $page->template() == 'virtual-reality' ) : ?> text-color-4<?php if ( $item->isOpen() ) : ?> text-color-4<?php else : ?> text-color-4-alt<?php endif; ?><?php else : ?><?php if ( $item->isOpen() ) : ?> text-color-2<?php else : ?> text-color-3<?php endif; ?><?php endif; ?>"><?= $item->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
