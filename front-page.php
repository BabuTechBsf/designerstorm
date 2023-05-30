<div class="hero_area ">
    <?php get_header(); ?>

    <!-- slider section -->
    <section class="slider_section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="detail-box">
                                    <div class="number">
                                        <h5>
                                            01
                                        </h5>
                                    </div>
                                    <h1>
                                        Drool <br>
                                        <span>
                                            Pet And Animal
                                        </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_theme_file_uri('images/slider-img.png') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="detail-box">
                                    <div class="number">
                                        <h5>
                                            02
                                        </h5>
                                    </div>
                                    <h1>
                                        Drool <br>
                                        <span>
                                            Pet And Animal
                                        </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_theme_file_uri('images/slider-img.png') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="detail-box">
                                    <div class="number">
                                        <h5>
                                            03
                                        </h5>
                                    </div>
                                    <h1>
                                        Drool <br>
                                        <span>
                                            Pet And Animal
                                        </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_theme_file_uri('images/slider-img.png') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="detail-box">
                                    <div class="number">
                                        <h5>
                                            04
                                        </h5>
                                    </div>
                                    <h1>
                                        Drool <br>
                                        <span>
                                            Pet And Animal
                                        </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="<?php echo get_theme_file_uri('images/slider-img.png') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end slider section -->
</div>


<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="detail-box">
            <div class="heading_container">
                <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
                <h2>
                    About Us
                </h2>
            </div>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters,
            </p>
            <div class="btn-box">
                <a href="">
                    <span>
                        Read More
                    </span>
                    <img src="<?php echo get_theme_file_uri('images/link-arrow.png') ?>" alt="">
                </a>
            </div>
            <div>

                <div class="heading_container">
                    <h2>
                        From Our Blogs
                    </h2>
                </div>
                <?php $frontPagePosts = new WP_Query(array(
            'posts_per_page' => 3
          ));
          while($frontPagePosts->have_posts()){
            $frontPagePosts->the_post();?>
                <h4> <?php the_title(); ?></h4>
                <p> <?php the_content(); ?></p>
                <a href='<?php the_permalink();?>'> Read More</a>
                <?php
          }
          wp_reset_postdata();
          ?>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- animal section -->

<section class="animal_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2 style='text-align:center;width:100%;'>
                Available Breeds
            </h2>
        </div>
        <div class="animal_container">
            <?php 
        $homepageBreeds = new WP_Query(array(
            'posts_per_page'=> 2,
            'post_type'=> 'breed'
        ));
        while($homepageBreeds->have_posts()){
            $homepageBreeds->the_post(); 
            ?>
            <div class="box b1">
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('images/dog.jpg') ?>" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        <?php the_title();?>
                    </h5>
                    <p>
                        <?php echo wp_trim_words(get_the_content(),10); ?>
                        <br/>
                        Date Entered: <?php the_field('breed_entry_date')?>
                    </p>
                    <a href='<?php the_permalink();?>'> Read More</a>
                </div>
            </div>
            <?php
        }
        ?>

        </div>
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

<!-- end animal section -->

<!-- pet section -->

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
                        <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
                        <h2>
                            Caring for your pets
                        </h2>
                    </div>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters,
                    </p>
                    <div class="btn-box">
                        <a href="">
                            <span>
                                Read More
                            </span>
                            <img src="<?php echo get_theme_file_uri('images/link-arrow.png') ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end pet section -->

<!-- us section -->

<section class="us_section layout_padding-bottom">
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

<!-- food section -->

<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
            <h2>
                Our Dog Food
            </h2>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a
            </p>
        </div>
        <div class="food_container">
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('images/f1.png') ?>" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Basic
                    </h6>
                    <h3>
                        <span>$</span>100
                    </h3>
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('images/f2.png') ?>" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Medium
                    </h6>
                    <h3>
                        <span>$</span>200
                    </h3>
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('images/f3.png') ?>" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Standard
                    </h6>
                    <h3>
                        <span>$</span>300
                    </h3>
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end food section -->

<!-- client section -->

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
            <h2>
                What Says Our Customer
            </h2>
            <p>
                It is a long established fact that a reader will be distracted by the
            </p>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri('images/client.png') ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Jack Mengo
                            </h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable cIt is a
                                long established fact that a reader will be distracted by the readable c
                            </p>
                            <img src="<?php echo get_theme_file_uri('images/quote.png') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri('images/client.png') ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Jack Mengo
                            </h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable cIt is a
                                long established fact that a reader will be distracted by the readable c
                            </p>
                            <img src="<?php echo get_theme_file_uri('images/quote.png') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri('images/client.png') ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Jack Mengo
                            </h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable cIt is a
                                long established fact that a reader will be distracted by the readable c
                            </p>
                            <img src="<?php echo get_theme_file_uri('images/quote.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <div class="form_container">
                    <div class="heading_container">
                        <img src="<?php echo get_theme_file_uri('images/heading-img.png') ?>" alt="">
                        <h2>
                            Request A Call Back
                        </h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the
                        </p>
                    </div>
                    <form action="">
                        <div>
                            <input type="text" placeholder="Full Name " />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone number" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="d-flex ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->
<?php get_footer(); ?>