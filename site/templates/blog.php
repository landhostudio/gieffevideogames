<?php snippet( 'header' ) ?>

<section>

  <?php
    snippet( 'hero' );
    snippet( 'pagination', array( 'pagination' => $pagination ) );
    snippet( 'articles' );
    snippet( 'pagination', array( 'pagination' => $pagination ) );
  ?>

</section>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
