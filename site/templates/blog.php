<?php snippet( 'header' ) ?>

<section>

  <?php
    snippet( 'hero' );
    snippet( 'pagination', array( 'pagination' => $pagination, 'position' => 'top' ) );
    snippet( 'articles' );
    snippet( 'pagination', array( 'pagination' => $pagination, 'position' => 'bottom' ) );
  ?>

</section>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
