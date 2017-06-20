<?php

  return function ( $site, $pages, $page ) {

    // Fetch the basic set of pages
    $products = $page->children()->visible();

    // Reverse the order
    $products = $products->flip();

    // Apply pagination
    $products = $products->paginate(12);
    $pagination = $products->pagination();

    return compact('products', 'pagination');

  };
