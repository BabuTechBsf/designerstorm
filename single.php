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
            <?php get_template_part('components/sidetext'); ?>
        </div>
    </div>
</section>
<?php }
?>
<?php get_footer(); ?>