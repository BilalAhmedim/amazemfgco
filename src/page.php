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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
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
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>
    </div>
  </div>
</section>

<section class="gallery">
  <div class="container">
    <header class="header">
      <h1>Copper Baths </h1>
    </header>

    <div class="gallery-inner">

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
        </a>
      </figure>

      <figure class="gallery-card">
        <a href="./gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/static/image.jpg" alt="" />
          <figcaption>Product N</figcaption>
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

    </div>

  </section>
  <?php

} else if (is_page()) {
}
?>

<?php get_footer();?>