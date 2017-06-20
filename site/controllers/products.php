<?php

  return function ( $site, $pages, $page ) {

    // Fetch the basic set of pages
    $products = $page->children()->visible();

    return compact('products');

  };
