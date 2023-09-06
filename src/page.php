<?php get_header();


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

// Get the about text
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
      <?php foreach ($image_array as $images) { ?>
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

        <?php } ?>
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
          <?php echo $about_text;?>
        </p>
      </div>
      <center>
        <a href="<?php echo $about_link?>" class="btn btn-brown">Learn More.</a>
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
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
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
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>

        <figure class="gallery-card">
          <a href="./gallery.html">
            <img src="<?php echo get_template_directory_uri() ;?>/static/image.jpg" alt="" />
            <figcaption>Product N</figcaption>
          </a>
        </figure>
      </div>
    </div>
  </section>

  <?php get_footer();?>