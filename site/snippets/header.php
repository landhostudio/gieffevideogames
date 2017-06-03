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
    <?= css('assets/css/main.css') ?>
  </head>
  <body>
    <header role="banner" class="header">
      <div class="container">
        <h1 class="header-title">
          <a href="<?= $site->language()->url() ?>" rel="home">
            <span class="hidden"><?= $site->title()->html() ?></span>
            <?php if ( $page->template() == 'virtual-reality' ) : ?>
              <img src="<?= url('assets/images/logo-2.png') ?>" alt="">
            <?php else: ?>
              <img src="<?= url('assets/images/logo-1.png') ?>" alt="">
            <?php endif; ?>
          </a>
        </h1>
        <div class="header-hamburger">
          <button type="button" class="button<?php e( $page->template() == 'virtual-reality', ' button--color-4', ' button--color-2' ) ?> button--s button--outline button--hamburger">
            <span class="hidden"><?= l( 'header.hamburger' ) ?></span>
            <span class="hamburger-bar" aria-hidden="true"></span>
            <span class="hamburger-bar" aria-hidden="true"></span>
            <span class="hamburger-bar" aria-hidden="true"></span>
          </button>
        </div>
        <?php
          snippet('menu');
          snippet('languages');
        ?>
      </div>
    </header>
