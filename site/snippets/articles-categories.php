<?php if ( count( $categories ) ) : ?>
  <aside class="hero-categories">
    <h4 class="hidden"><?= l( 'categories.title' ) ?></h4>
    <ul>
      <?php foreach ( $categories as $category ) : ?>
        <li class="hero-category<?php if ( $category == urlencode( param( 'category' ) ) ) : ?> hero-category--active<?php endif; ?>">
          <a href="<?php echo url( $page->url() . '/' . url::paramsToString( [ 'category' => $category ] ) ) ?>" rel="category tag"><?= $category ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </aside>
<?php endif; ?>
