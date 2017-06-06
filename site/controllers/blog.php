<?php

  return function ( $site, $pages, $page ) {

    // Fetch the basic set of pages
    $articles = $page->children()->visible();

    // Fetch all categories
    $categories = $articles->pluck( 'categories', ',', true );

    // Add the category filter
    if ( $category = urldecode( param( 'category' ) ) ) {
      $articles = $articles->filterBy( 'categories', $category, ',' )->sortBy( 'date' )->flip();
    } else {
      $articles = $articles->sortBy( 'date' )->flip();
    }

    // Apply pagination
    $articles = $articles->paginate(6);
    $pagination = $articles->pagination();

    return compact('articles', 'categories', 'category', 'pagination');

  };
