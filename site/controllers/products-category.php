<?php

  return function ( $site, $pages, $page ) {

    $products = $page->children()
                     ->visible()
                     ->paginate(12);

    return [
      'products'   => $products,
      'pagination' => $products->pagination()
    ];

  };
