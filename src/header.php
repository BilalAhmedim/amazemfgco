<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head();?>
  <title>Home - Amaze Manufacturing Company</title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ;?>/static/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ;?>/static/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ;?>/static/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri() ;?>/static/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri() ;?>/static/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <header class="nav-header">
    <div class="container">
      <div class="nav-brand">
        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() ;?>/static/logo.png" alt="Amaze Manufacturing Company Logo" /></a>
        <svg class="hb hide-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="" stroke-width=".3"
          fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
          <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
            <animate dur="0.2s" attributeName="d"
              values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze"
              begin="start.begin" />
            <animate dur="0.2s" attributeName="d"
              values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze"
              begin="reverse.begin" />
          </path>
          <rect width="10" height="10" stroke="none">
            <animate dur="2s" id="reverse" attributeName="width" begin="click" />
          </rect>
          <rect width="10" height="10" stroke="none">
            <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
            <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
          </rect>
        </svg>
      </div>
      <div class="model hide-md">&nbsp;</div>
      <nav class="nav-nav">
        <ul class="main-menu clearfix">
          <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
          <li><a href="copper-bathstubs">Copper Bathstubs</a></li>
          <li><a href="ss-bathtubs">SS Bathstubs</a></li>
          <li><a href="copper-kitchen-sinks">Copper Kitchen Sinks</a></li>
          <li><a href="basin">Basin</a></li>
          <li>
            <a href="javascript:void(0)" class="has-submenu">Others<i class="arrow down"></i></a>
            <ul class="sub-menu">
              <li><a href="/hoods/product">Product 1</a></li>
              <li><a href="/hoods/product">Product 1</a></li>
              <li><a href="/hoods/product">Product 1</a></li>
              <li><a href="/hoods/product">Product 1</a></li>
              <li><a href="/hoods/product">Product 1</a></li>
            </ul>
          </li>
          <li><a href="about">About</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <a class="contact-link hide-md" href="mailto:info@amazemfgco.com">info@amazemfgco.com</a>
      </nav>
    </div>
  </header>