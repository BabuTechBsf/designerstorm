<?php 
get_header();
?>
<section class="about_section layout_padding">
    <div class="container">
        <div class="detail-box">
            <div class="heading_container">
                <img src="images/heading-img.png" alt="">
                <h2>
                    Welcome to Blogs
                </h2>
            </div>
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
<?php while(have_posts()){
  the_post();?>
<div class="card">
    <h2><?php the_title(); ?></h2>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <a href='<?php the_permalink();?>'> Read More</a>
</div>
<?php } 
echo paginate_links();
?>


<?php 
get_footer();
?>