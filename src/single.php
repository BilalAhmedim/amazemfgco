<?php get_header();?>

<div class="gallery-details">
    <header class="header">
      <h1>Product Details</h1>
    </header>

    <div class="slider container">
      <div class="slider__carousel">

        <div class="carousel__track-container">

          <ul class="carousel__track">
            <li class="carousel-slide current-slide">
              <div class="carousel__images" data-image-src="<?php echo get_template_directory_uri() ;?>/static/1.jpg" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo get_template_directory_uri() ;?>/static/5.jpg" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo get_template_directory_uri() ;?>/static/6.jpg" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo get_template_directory_uri() ;?>/static/7.jpg" alt="{{product.name}}"></div>
            </li>
          </ul>

        </div>

        <button class="carousel__button carousel__button--left">
          <img src="<?php echo get_template_directory_uri() ;?>/static/previous.svg" alt="Previous">
        </button>

        <button class="carousel__button carousel__button--right">
          <img src="<?php echo get_template_directory_uri() ;?>/static/next.svg" alt="Next">
        </button>

        <div class="carousel__nav">
          <img class="carousel__indicator current-slide" src="<?php echo get_template_directory_uri() ;?>/static/1.jpg" />
          <img class="carousel__indicator" src="<?php echo get_template_directory_uri() ;?>/static/5.jpg" />
          <img class="carousel__indicator" src="<?php echo get_template_directory_uri() ;?>/static/6.jpg" />
          <img class="carousel__indicator" src="<?php echo get_template_directory_uri() ;?>/static/7.jpg" />
        </div>

      </div>

      <div class="slider-details">
        <p>Product Name: 72” Brass Double Slipper Bath tub</p>
        <p>Item Number : RA72DB-BL/PL</p>
        <p>Finish: Black Outside / Polish Inside</p>
        <p>Material : Brass 16 Gauge</p>
        <p>Size: 72”L X 32”W X 31”H</p>
        <p>Finishes Available: Antique, Mate, Polish, Others</p>
        <p>Tags : Brass, Double Slipper, bath tub</p>
      </div>

    </div>
  </div>


    <?php get_footer();?>