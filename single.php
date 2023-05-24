<?php get_header(); ?>
<?php while(have_posts()){
    the_post();?> 
    
    <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('images/pet-img.png') ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
                <h2>
              <?php the_title();?>
              </h2>
            </div>
            <p>
            <?php the_content(); ?>  </p>
             
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }
?>
<?php get_footer(); ?>