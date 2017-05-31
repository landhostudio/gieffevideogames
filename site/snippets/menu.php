<nav role="navigation" class="header-menu">
  <h2 class="hidden"><?= l( 'menu.title' ) ?></h2>
  <ul class="header-menu-items">
    <?php foreach ( $pages->visible() as $item ) : ?>
      <li class="header-menu-item<?= r( $item->isOpen(), ' header-menu-item--active' ) ?>">
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
