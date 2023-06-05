<!DOCTYPE html>
<html>

<head>
    <?php wp_head();?>
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="">
                </a>
                <div class="" id="">
                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                            <span class="s-1">

                            </span>
                            <span class="s-2">

                            </span>
                            <span class="s-3">

                            </span>
                        </button>
                    </div>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="index.html">Home</a>
                            <a href="about.html">About</a>
                            <a href="contact.html">Contact Us</a>
                            <?php  if(is_user_logged_in()) { ?>
                                <a href="<?php echo wp_logout_url();  ?>">Log Out</a>
                            <?php } else { ?>
                                <a href="<?php echo  wp_login_url(); ?>">Login</a>
                                <a href="<?php echo wp_registration_url(); ?>">Sign Up</a>
                            <?php } ?>

                            <input id='search_txt' type='text' placeholder='Search here' />
                            <div id='showResults'>No Data to Show</div>
                            <div>
                                Wordpress Traditional Search
                                <form method='get' action="<?php echo esc_url(site_url('/'));?>">
                                    <input type="search" name='s'>
                                    <input type="submit" value='Search'>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->