<?php get_header(); ?>
<?php while(have_posts()){
    the_post();?>
<div class="heading_container">
    <h2 style='text-align:center;width:100%;'>
        Breeds Details
    </h2>
</div>
<section class="pet_section layout_padding">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    If()
                    <?php the_post_thumbnail('breedlandscape'); ?>
                    else
                    use thicode 
                </div>
            </div>
            <?php get_template_part('components/sidetext'); ?>
        </div>
    </div>
</section>
<?php }
?>
<?php get_footer(); ?>