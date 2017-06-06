<?php snippet( 'header' ) ?>

<article>

  <?php
    snippet( 'hero' );
    snippet( 'map' );
    snippet( 'body', array( 'columns' => 'yes' ) );
  ?>

</article>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
