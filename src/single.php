<?php get_header();
$product_image_1 = get_field('product-image-1');
$product_image_2 = get_field('product-image-2');
$product_image_3 = get_field('product-image-3');
$product_image_4 = get_field('product-image-4');
$product_name = get_field('product_name');
$product_item = get_field('item_no');
$prdocts_finish = get_field('finish');
$product_material = get_field('material');
$product_size = get_field('size');
$product_finishes_availability = get_field('finishes_availability');
$product_tags = get_field('tags');
?>

<div class="gallery-details">
    <header class="header">
      <h1>Product Details</h1>
    </header>

    <div class="slider container">
      <div class="slider__carousel">

        <div class="carousel__track-container">

          <ul class="carousel__track">
            <li class="carousel-slide current-slide">
              <div class="carousel__images" data-image-src="<?php echo $product_image_1; ?>" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo $product_image_2; ?>" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo $product_image_3; ?>" alt="{{product.name}}"></div>
            </li>
            <li class="carousel-slide">
              <div class="carousel__images" data-image-src="<?php echo $product_image_4; ?>" alt="{{product.name}}"></div>
            </li>
          </ul>

        </div>

        <button class="carousel__button carousel__button--left">
          <img src="<?php echo get_template_directory_uri(); ?>/static/previous.svg" alt="Previous">
        </button>

        <button class="carousel__button carousel__button--right">
          <img src="<?php echo get_template_directory_uri(); ?>/static/next.svg" alt="Next">
        </button>

        <div class="carousel__nav">
          <img class="carousel__indicator current-slide" src="<?php echo $product_image_1; ?>" />
          <img class="carousel__indicator" src="<?php echo $product_image_2; ?>" />
          <img class="carousel__indicator" src="<?php echo $product_image_3; ?>" />
          <img class="carousel__indicator" src="<?php echo $product_image_4; ?>" />

        </div>

      </div>

      <div class="slider-details">
        <p><b>Product Name:</b> <?php echo $product_name; ?></p>
        <p><b>Item Number :</b><?php echo $product_item; ?></p>
        <p><b>Finish: </b><?php echo $prdocts_finish; ?></p>
        <p><b>Material : </b><?php echo $product_material; ?></p>
        <p><b>Size: </b><?php echo $product_size; ?></p>
        <p><b>Finishes Available: </b><?php echo $product_finishes_availability; ?></p>
        <p><b>Tags : </b><?php echo $product_tags; ?></p>
      </div>

    </div>
  </div>


    <?php get_footer();?>