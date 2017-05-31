<?php

  return function ( $site, $pages, $page ) {

    $products = $page->children()
                     ->visible();

    return [
      'products'   => $products
    ];

  };
