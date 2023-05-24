
<?php get_header(); ?>
<?php while(have_posts()){
    the_post();?>
     <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/heading-img.png" alt="">
          <h2>
            <?php the_title(); ?>
          </h2>
        </div>
        <p>
         <?php the_content();?></p>
        <div class="btn-box">
          <a href="">
            <span>
              Read More
            </span>
            <img src="images/link-arrow.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- pet section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('images/dog.jpg') ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Cute Dog
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('images/bird.jpg') ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Birds
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('images/fish.jpg') ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Fish
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('images/cat.jpg') ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Cat Bite
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end pet section -->

  <!-- us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
        <h2>
          Why Choose Us
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a
        </p>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img1-box">
            <img src="<?php echo get_theme_file_uri('images/pet1.png') ?>" alt="">
          </div>
          <div class="img2-box">
            <img src="<?php echo get_theme_file_uri('images/omega.png') ?>" alt="">
          </div>
          <div class="detail-box">
            <h6>
              PET NUTRITIONISTS
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="<?php echo get_theme_file_uri('images/pet2.png') ?>" alt="">
          </div>
          <div class="img2-box">
            <img src="<?php echo get_theme_file_uri('images/dog.png') ?>" alt="">
          </div>
          <div class="detail-box">
            <h6>
              STANDARDS
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="<?php echo get_theme_file_uri('images/pet2.png') ?>" alt="">
          </div>
          <div class="img2-box">
            <img src="<?php echo get_theme_file_uri('images/shield.png') ?>" alt="">
          </div>
          <div class="detail-box">
            <h6>
              QUALITY & SAFETY
            </h6>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          <span>
            Read More
          </span>
          <img src="<?php echo get_theme_file_uri('images/link-arrow.png') ?>" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->
<?php }
?>
<?php get_footer(); ?>