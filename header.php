<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <ul>
      <li>
        <a href="<?php echo site_url('/cars') ?>">
          Cars
        </a>
      </li>

      <li>
        <a href="<?php echo site_url('/blog') ?>">
          Blog
        </a>
      </li>
    </ul>
  </header>