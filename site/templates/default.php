<?php snippet( 'header' ) ?>

<article class="page">

  <?php
    snippet( 'hero' );
    snippet( 'body', array( 'columns' => 'yes' ) );
  ?>

</article>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
