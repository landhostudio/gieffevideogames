<?php snippet( 'header' ) ?>

<article class="page">

  <?php
    snippet( 'hero' );
    snippet( 'body', array( 'columns' => 'yes' ) );
    snippet( 'team' );
    snippet( 'partners' );
  ?>

</article>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
