<div class="container">
    <div class="mainnav">
        <div class="toggle">
            <div class="toggle__line"></div>
            <div class="toggle__line"></div>
            <div class="toggle__line"></div>
        </div>
        <div class="mainnav__logo">
            <img src="<?php echo get_field('logo'); ?>" class="w-100">
        </div>
    </div>
    <div class="mainnav__overview">
        <span class="close">X</span>
    <?php 
            $args = array(
                'theme_location' => 'mainnav',
                'container_class' => 'mainnav__links',
            );
            wp_nav_menu( $args );
        ?>
    </div>
</div>