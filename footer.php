<footer class="footer">

<div class="container">
  <div class="row">
    <div class="col-12 col-md-4">
        <div class="footer__logo">
            <img src="<?php echo get_field('logo'); ?>" class="w-100">
        </div>
        <p class="footer__text"><?php echo get_field("footer_left")?></p>

        <div class="footer__icons d-flex">
          <?php 
            if( have_rows('icons') ):

              // Loop through rows.
              while( have_rows('icons') ) : the_row();

                  // Load sub field value.
                  $icon = get_sub_field('icon');
          ?>
              <div class="footer__icon">
                <img src="<?php echo $icon ?>" class="w-100">
              </div>
          <?php
                  // Do something...

              // End loop.
              endwhile;

            // No value.
            else :
              // Do something...
            endif;
          ?>
        </div>
    </div>
    <div class="col-12 col-md-4 d-md-flex flex-md-column align-items-md-center">
      <div>
        <h5 class="footer__headline">Our Services</h5>
            <ol class="footer__links">
                <li><a href="#">Business Law</a></li>
                <li><a href="#">Education Law</a></li>
                <li><a href="#">Criminal Law</a></li>
                <li><a href="#">Family Law</a></li>
                <li><a href="#">Personal Injury</a></li>
            </ol>
          </div>
    </div>
    <div class="col-12 col-md-4">
    <h5 class="footer__headline">Our Adress</h5>
            <ol class="footer__links">
                <li>Joan Romero 666-4366 Lacinia Avenue</li>
                <li>+1 888 187 986 897</li>
                <li>canun@gmail.com</li>
            </ol>
          </div>
    </div>
  </div>
</div>

    <script src="<?php echo get_template_directory_uri(); ?>/javascript/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_footer(); ?>
</footer>
</html>