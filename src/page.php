<?php get_header();

// if home page(front page) then show this content
if (is_front_page()) {

  // Get Slider Images
  $image_array = array();
  if (have_rows('product_slider')) {
    while (have_rows('product_slider')) {
      the_row();
      $image_array[] = array(
        'slide_1' => get_sub_field('slide_1'),
        'slide_2' => get_sub_field('slide_2'),
        'slide_3' => get_sub_field('slide_3'),
        'slide_4' => get_sub_field('slide_4'),
      );
    }
  }

// Get the about text and link
  $about_text = get_field('about_text_short');
  $about_link = get_field('about_link');
  ?>


<section class="slider-main p0">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <?php foreach ($image_array as $images) {?>
      <div class="carousel-item active">
        <img src="<?php echo $images['slide_1']; ?>" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="<?php echo $images['slide_2']; ?>" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="<?php echo $images['slide_3']; ?>" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="<?php echo $images['slide_4']; ?>" class="d-block w-100" alt="..." />
      </div>

      <?php }?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="about p-t-0">
  <header class="header">
    <h1>About Amaze</h1>
  </header>

  <div class="container">
    <div class="wrapper text-center:md">
      <p>
        <?php echo $about_text; ?>
      </p>
    </div>
    <center>
      <a href="<?php echo $about_link; ?>" class="btn btn-brown">Learn More.</a>
    </center>
  </div>
</section>

<section class="gallery gallery-featured">
  <div class="container">
    <header class="header">
      <h1>Featured Products</h1>
    </header>

    <div class="gallery-inner">
      <?php
$featured_products = array(
    array('Copper Bathtub', '/copper-bathtubs?product=copper-bathtubs'),
    array('Stainless Steel Bathtubs', '/stainless-steel-bathtubs?product=stainless-steel-bathtubs'),
    array('Copper Kitchen Sink', '/copper-kitchen-sinks?product=copper-kitchen-sinks'),
    array('Copper Basin', '/basin?product=basin'),
    array('Stainless Steel Kitchen Sinks', '/stainless-steel-sinks?product=stainless-steel-sinks'),
  );

  for ($x = 0; $x < count($featured_products); $x++) {
    ?>
      <figure class="gallery-card">
        <a href="<?php echo $featured_products[$x][1]; ?>">
          <img src="<?php echo get_template_directory_uri() . "/static/" . $featured_products[$x][0] . ".jpg"; ?>" alt="
          <?php echo $featured_products[$x][0]; ?>" />
          <figcaption>
            <?php echo $featured_products[$x][0]; ?>
          </figcaption>
        </a>
      </figure>
      <?php
}
  ?>
    </div>
  </div>
</section>

<section class="gallery">
  <div class="container">
    <header class="header">
      <h1>Products</h1>
    </header>

    <div class="gallery-inner">

      <figure class="gallery-card">
        <a href="/bar-wares?product=bar-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/amc-barware.jpg" alt="Bare Wares" />
          <figcaption>Bare Wares</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/drink-wares?product=drink-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/drinkware.jpg" alt="Drink Ware" />
          <figcaption>Drink Ware</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/enps-wares?product=enps-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/enps ware 1.jpg" alt="Electro Plated Nickel Silver(EPNS) Ware" />
          <figcaption>EPNS. Wares</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/furniture?product=furniture">
          <img src="<?php echo get_template_directory_uri(); ?>/static/furniture.jpg" alt="furniture" />
          <figcaption>Furniture</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/garden-wares?product=garden-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/Gardenware.jpg" alt="Garden Wares" />
          <figcaption>Garden Wares</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/home-decor?product=home-decor">
          <img src="<?php echo get_template_directory_uri(); ?>/static/home decor.jpg" alt="Home Decors" />
          <figcaption>Home Decor</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/kitchen-wares?product=kitchen-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/kitchenwares.jpg" alt="kitchen Wares" />
          <figcaption>Kitchen Wares</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="/sanitary-wares?product=sanitary-wares">
          <img src="<?php echo get_template_directory_uri(); ?>/static/Sanitryware.jpg" alt="Sanitry Ware" />
          <figcaption>Sanitry Ware</figcaption>
        </a>
      </figure>

    </div>
  </div>
</section>




<?php }
// about us page content
else if (is_page('About')) {
  ?>
<section class="about">
  <header class="header">
    <h1>About Amaze</h1>
  </header>

  <div class="container">
    <div class="wrapper text-center:md">
      <?php
while (have_posts()) {
    the_post();
    the_content();
  }?>
    </div>
  </div>
</section>
<?php
}
// contact page content
else if (is_page('Contact')) {
  ?>
<section class="contact">
  <div class="container">
    <header class="header">
      <h1>Contact Us</h1>
    </header>

    <div class="contact-us">

      <div class="map-container">
        <iframe class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d734.9148144722428!2d78.74351737624923!3d28.813135224547228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afda472a2a7c7%3A0xe2d4985830964c6!2sAmaze%20Mfg.%20Co.!5e0!3m2!1sen!2sin!4v1693253594745!5m2!1sen!2sin"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="form">
        <form action="#">
          <fieldset>
            <legend visible="true">Happy to hear from you</legend>
            <label for="fname">First name:</label>
            <input type="text" name="fname" id="fname" autocomplete="on">
            <label for="lname">Last name:</label>
            <input type="text" name="lname" id="lname" autocomplete="on">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" autocomplete="on">
            <label for="msg">Massage:</label>
            <textarea name="msg" id="msg" autocomplete="on"></textarea>
            <input type="submit" value="Submit">
          </fieldset>
        </form>
      </div>

    </div>
    <?php
while (have_posts()) {
    the_post();
    the_content();
  }?>

  </div>

</section>
<?php

} else {

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => $_GET['product'],
  );
  $query = new WP_Query($args);

  $count = 1;?>
<section>
  <div class="container">
    <header class="header">
      <h1>
        <?php echo str_replace("-", " ", $_GET['product']); ?>
      </h1>
    </header>
    <div class="gallery-inner">
      <?php

  while ($query->have_posts()) {
    $query->the_post();
    // getting acf fields with wp post loop
    $product_image = get_field('product-image-1');
    $product_name = get_field('product_name');
    // getting post id
    $post_id = get_the_ID();
    // . '/p_id=' . $post_id;
    ?>
      <figure class="gallery-card">
        <a href="<?php echo the_permalink(); ?>">
          <img src="<?php echo $product_image; ?>" alt="" />
          <figcaption>
            <?php echo $product_name; ?>
          </figcaption>
        </a>
      </figure>
      <?php
$count++;
  }
  wp_reset_query();
  ?>
    </div>
  </div>

</section>
<?php
}
?>

<?php get_footer();?>