<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head();
$pages = $_GET['product'];
?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/static/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/static/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/static/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/static/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/static/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- <link rel="canonical" href="<?php echo home_url() . '' . $pages . '?product=' . $pages; ?>"> -->
  <meta name="keywords" content="Copper, Brass, steel, stainless steel, wood, antique, polished, matte, farmhouse sinks, Bath, tubs, bathtubs, sinks, kitchen sinks">

</head>

<body <?php echo body_class(); ?> oncontextmenu="return false">
<header class="navbar-light bg-light">
    <a class="navbar-brand navbar-light bg-light d-flex justify-content-center" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/static/logo.png" alt="" height="70">
    </a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" aria-current="page"
                href="<?php echo home_url(); ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link"
                href="<?php echo home_url() . '/copper-bathtubs?product=copper-bathtubs'; ?>">Copper Bathtubs</a></li>
            <li class="nav-item"><a class="nav-link"
                href="<?php echo home_url() . '/stainless-steel-bathtubs?product=stainless-steel-bathtubs'; ?>">S-Steel
                Bathtubs</a></li>
            <li class="nav-item"><a class="nav-link"
                href="<?php echo home_url() . '/copper-kitchen-sinks?product=copper-kitchen-sinks'; ?>">Copper Kitchen
                Sinks</a></li>
            <li class="nav-item"><a class="nav-link"
                href="<?php echo home_url() . '/stainless-steel-sinks?product=stainless-steel-sinks'; ?>">S-Steel Sinks</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url() . '/basin?product=basin'; ?>">Basin</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Other Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/bar-wares?product=bar-wares'; ?>">Bar Wares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/bathwares?product=bathwares'; ?>">Bathwares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/drink-wares?product=drink-wares'; ?>">Drink Wares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/enps-wares?product=enps-wares'; ?>">Enps Wares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/furniture?product=furniture'; ?>">Furniture</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/garden-wares?product=garden-wares'; ?>">Garden Wares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/home-decor?product=home-decor'; ?>">Home Decor</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/house-hold-items?product=house-hold-items'; ?>">House Hold Items</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/kitchen-wares?product=kitchen-wares'; ?>">Kitchen Wares</a></li>
                <li class="nav-item"><a class="nav-link"
                    href="<?php echo home_url() . '/sanitary-wares?product=sanitary-wares'; ?>">Sanitary Wares</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url() . '/company-profile'; ?>">Company
                Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url() . '/about'; ?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url() . '/contact'; ?>">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </header>