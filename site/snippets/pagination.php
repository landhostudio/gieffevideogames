<?php if ( $pagination->hasPages() ) : ?>
  <nav class="pagination">
    <h4 class="hidden"><?= l( 'pagination.title' ) ?></h4>
    <ul>
      <?php if ( $pagination->hasPrevPage() ) : ?>
        <li class="pagination-prev">
          <a href="<?= $pagination->prevPageURL() ?>" rel="prev"><?= l( 'pagination.prev' ) ?></a>
        </li>
      <?php else : ?>
        <li class="pagination-prev pagination-prev--disabled">
          <span><?= l( 'pagination.prev' ) ?></span>
        </li>
      <?php endif ?>

      <?php foreach ( $pagination->range(6) as $page ) : ?>
        <li class="pagination-page<?php if ( $pagination->page() == $page ) echo ' pagination-page--active' ?>">
          <a href="<?= $pagination->pageURL( $page ) ?>"><?= $page ?></a>
        </li>
      <?php endforeach ?>

      <?php if ( $pagination->hasNextPage() ) : ?>
        <li class="pagination-next">
          <a href="<?= $pagination->nextPageURL() ?>" rel="next"><?= l( 'pagination.next' ) ?></a>
        </li>
      <?php else : ?>
        <li class="pagination-next pagination-next--disabled">
          <span><?= l( 'pagination.next' ) ?></span>
        </li>
      <?php endif ?>
    </ul>
  </nav>
<?php endif ?>
