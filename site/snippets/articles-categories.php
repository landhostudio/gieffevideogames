<?php if ( count( $categories ) ) : ?>
  <aside class="hero-categories">
    <h4 class="hidden"><?= l( 'categories.title' ) ?></h4>
    <ul class="no-list inline-list">
      <?php foreach ( $categories as $category ) : ?>
        <li class="hero-category<?php if ( $category == urlencode( param( 'category' ) ) ) : ?> hero-category--active<?php endif; ?> text-color-2">
          <a href="<?php echo url( $page->url() . '/' . url::paramsToString( [ 'category' => $category ] ) ) ?>" rel="category tag" class="text-color-2"><?= $category ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </aside>
<?php endif; ?>
