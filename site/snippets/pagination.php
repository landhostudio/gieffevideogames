<?php if ( $pagination->hasPages() ) : ?>
  <nav class="pagination<?php if ( $position == 'top' ) : ?> pagination--top<?php else: ?> pagination--bottom<?php endif; ?>">
    <div class="container">

      <h4 class="hidden"><?= l( 'pagination.title' ) ?></h4>

      <div class="pagination-content">
        <?php if ( $pagination->hasPrevPage() ) : ?>
          <div class="pagination-prev">
            <a href="<?= $pagination->prevPageURL() ?>" rel="prev">
              <span><?= l( 'pagination.prev' ) ?></span>
              <?= ( new Asset( "assets/images/arrow-left.svg" ) )->content() ?>
            </a>
          </div>
        <?php else : ?>
          <div class="pagination-prev pagination-prev--disabled">
            <span><?= l( 'pagination.prev' ) ?></span>
            <?= ( new Asset( "assets/images/arrow-left.svg" ) )->content() ?>
          </div>
        <?php endif ?>

        <?php if ( $pagination->hasNextPage() ) : ?>
          <div class="pagination-next">
            <a href="<?= $pagination->nextPageURL() ?>" rel="next">
              <span><?= l( 'pagination.next' ) ?></span>
              <?= ( new Asset( "assets/images/arrow-right.svg" ) )->content() ?>
            </a>
          </div>
        <?php else : ?>
          <div class="pagination-next pagination-next--disabled">
            <span><?= l( 'pagination.next' ) ?></span>
            <?= ( new Asset( "assets/images/arrow-right.svg" ) )->content() ?>
          </div>
        <?php endif ?>
        <ul class="pagination-pages no-list inline-list">
          <?php foreach ( $pagination->range(4) as $page ) : ?>
            <li class="pagination-page<?php if ( $pagination->page() == $page ) echo ' pagination-page--active' ?>">
              <a href="<?= $pagination->pageURL( $page ) ?>"><?= $page ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>

    </div>
  </nav>
<?php endif ?>
