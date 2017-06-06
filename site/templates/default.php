<?php snippet( 'header' ) ?>

<article>

  <?php
    snippet( 'hero' );
    snippet( 'body', array( 'columns' => 'yes' ) );
  ?>

</article>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
