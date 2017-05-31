<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pinterest" content="nopin">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?php if ( $site->description() ) : ?><?= $site->description()->html() ?><?php elseif ( $page->description() ) : ?><?= $page->description()->html() ?><?php endif; ?>">
    <meta name="keywords" content="<?php if ( $site->keywords() ) : ?><?= $site->keywords()->html() ?><?php elseif ( $page->keywords() ) : ?><?= $page->keywords()->html() ?><?php endif; ?>">
    <?= css('assets/css/index.css') ?>
  </head>
  <body>
    <header role="banner" class="header">
      <h1>
        <a href="<?= $site->language()->url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </h1>
      <?php
        snippet('menu');
        snippet('languages');
      ?>
    </header>
