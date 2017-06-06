<?php snippet( 'header' ) ?>

<article class="article">

  <?php
    snippet( 'hero' );
    snippet( 'body', array( 'columns' => 'yes' ) );
    snippet( 'breadcrumb' );
  ?>

</article>

<?php
  snippet( 'cta' );
  snippet( 'footer' );
?>
