<div class="meta">
  <ul>
    <li class="meta-date">
      <?php if ( $page->template() == 'article' ) : ?>
        <time datetime="<?= $article->date('c') ?>" rel="bookmark"><?= $article->date( l('date.format') ) ?></time>
      <?php else : ?>
        <a href="<?= $article->url() ?>" rel="bookmark"><time datetime="<?= $article->date('c') ?>" rel="bookmark"><?= $article->date( l('date.format') ) ?></time></a>
      <?php endif; ?>
    </li>
    <?php foreach( $article->categories()->split( ',' ) as $category ): ?>
      <li class="meta-category">
        <?php if ( $page->template() == 'article' ) : ?>
          <a href="<?php echo url( $page->parent()->url() . '/' . url::paramsToString( [ 'category' => $category ] ) ) ?>" rel="category tag"><?= $category ?></a>
        <?php else : ?>
          <a href="<?php echo url( $page->url() . '/' . url::paramsToString( [ 'category' => $category ] ) ) ?>" rel="category tag"><?= $category ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach ?>
  </ul>
</div>
