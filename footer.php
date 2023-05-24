<!-- info section -->
<section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="<?php echo get_theme_file_uri('images/call.png') ?>" alt="" />
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <img src="<?php echo get_theme_file_uri('images/mail.png') ?>" alt="" />
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Usefull Links
            </h5>
            <div>
              <p>
              <a href="<?php echo site_url('/about-us'); ?>">About</a>
              </p>
            </div>
            <div>
              <p>
              <a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="<?php echo get_theme_file_uri('images/fb.png') ?>" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_theme_file_uri('images/twitter.png') ?>" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_theme_file_uri('images/linkedin.png') ?>" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="<?php echo get_theme_file_uri('images/instagram.png') ?>" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- end  footer section -->
<?php wp_footer();?>
</body>
</html>