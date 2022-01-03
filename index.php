<?php get_header(); ?>
<body>
    <div class="container-fluid" style="background:#163967">
        <div class="topbar">
            <div class="row">
                <div class="col-12 text-center col-md-6 text-md-start">
                <?php
// Check rows exists.
if (have_rows('topbar-left')):

    // Loop through rows.
    while (have_rows('topbar-left')):
        the_row();

        // Load sub field value.
        $text = get_sub_field('text');
        $url = get_sub_field('url');
        $icon = get_sub_field('icon');
        // Do something...
        
?>
                            <div style="display:inline-block">
                                <span class="topbar__icon"><img src="<?php echo $icon ?>"></span><a href="<?php echo $url; ?>" class="topbar__link"><?php echo $text; ?></a>
                            </div>
                            <?php

        // End loop.
        
    endwhile;

    // No value.
    else:
        // Do something...
        
    endif;
?>
                </div>
                <div class="col-12 text-center col-md-6 text-md-start">
                <?php
    // Check rows exists.
    if (have_rows('topbar-right')):

        // Loop through rows.
        while (have_rows('topbar-right')):
            the_row();

            // Load sub field value.
            $text = get_sub_field('text');
            $url = get_sub_field('url');
            $icon = get_sub_field('icon');
            // Do something...
            
?>
                            <div style="display:inline-block">
                                <?php if ($icon)
            { ?><span class="topbar__icon"><img src="<?php echo $icon; ?>"></span><?php
            } ?><?php if ($text)
            { ?><a href="<?php echo $url; ?>" class="topbar__link"><?php echo $text; ?></a><?php
            } ?>
                            </div>
                            <?php

            // End loop.
            
        endwhile;

        // No value.
        else:
            // Do something...
            
        endif;
?>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <?php
        get_template_part('content/navigation');
?>






    <!-- Content -->

    <?php
        // Check value exists.
        if (have_rows('content')):

            // Loop through rows.
            while (have_rows('content')):
                the_row();

                // Case: Paragraph layout.
                if (get_row_layout() == 'slider'):
                    $headline_type = get_sub_field('headline_type');

                    if (have_rows('slider-content')):

                        // Loop through rows.
                        while (have_rows('slider-content')):
                            the_row();

                            // Load sub field value.
                            $image = get_sub_field('bild');
                            $headline = get_sub_field('headline');
                            $text = get_sub_field('text');
                            $btntxt = get_sub_field('button_text');
                            $btnurl = get_sub_field('button_url');
                            // Do something...
                            
?>
                <div class="slider">
                    <div class="slider__content">
                        <img src="<?php echo $image ?>" class="slider__image">
                        <div class="container">
                            <div class="row justify-content-center text-center justify-content-md-start text-md-start">
                                <div class="col-9">
                                     <<?php echo $headline_type ?> class="slider__headline"><?php echo $headline ?></<?php echo $headline_type ?>>
                                </div>
                                <div class="col-9">
                                <p class="slider__text"><?php echo $text ?></p>
                                <?php if ($btnurl)
                            { ?> <a href="<?php echo $btnurl ?>" class="slider__button"><?php echo $btntxt ?></a><?php
                            } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                            // End loop.
                            
                        endwhile;

                        // No value.
                        else:
                            // Do something...
                            
                        endif;
                        // Do something...
                        

                        
                    endif;

                    if (get_row_layout() == 'karten'):
                        if (have_rows('cards')):
?>
            <div class="cards">
                <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start justify-content-md-center">
                <?php
                            // Loop through rows.
                            while (have_rows('cards')):
                                the_row();

                                // Load sub field value.
                                $headline = get_sub_field('headline');
                                $text = get_sub_field('text');
                                $icon = get_sub_field('image');
                                // Do something...
                                
?>  
                    <div class="cards__element">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo $icon; ?>" class="cards__image">
                        </div>

                        <div class="cards__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-9">
                                    <p class="cards__headline"><?php echo $headline; ?></p>
                                    <p class="cards__text"><?php echo $text; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                // End loop.
                                
                            endwhile;
?>
                </div>
            </div>

           <?php
                        endif;
                    endif;
?>

<?php
                        if( get_row_layout() == 'contact' ):
                            $headline = get_sub_field('headline');
                            $text = get_sub_field('text');

?>
                        <div class="contact">
                            <div class="container">
                                <div class="row">
                                <h3 class="text-center contact__headline contact__headline--special">Contact me</h3>
                                    <div class="col-12 col-md-5">
                                        <div class="contact__form">
                                        <input type="text" placeholder="Your Name">
                                        <input type="email" placeholder="Email">
                                        <input type="text" placeholder="Mobile-Number">
                                        <textarea placeholder="Message"></textarea>
                                        <div class="contact__button">Make An Appointment</div>
                                    </div>
                                </div>
                                    <div class="col-12 col-md-7">
                                        <div class="contact__content">
                                            <h3 class="contact__headline"><?php echo $headline; ?></h3>
                                            <p class="contact__text"><?php echo $text; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
                        endif;
                        if( get_row_layout() == 'plan' ):
                            $headline_type = get_sub_field('headline_typ');
                            $headline = get_sub_field('headline');
                            $text = get_sub_field('text');
?>
                            <div class="plan">
                                <div class="plan__content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <<?php echo $headline_type?> class="plan__headline"><?php echo $headline ?></<?php echo $headline_type ?>>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <p class="plan__text"><?php echo $text?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
                            if( have_rows('plans') ):
?>
                            <div class="container d-flex flex-column align-items-center d-md-block">
                                <div class="plans">
<?php

                                // Loop through rows.
                                while( have_rows('plans') ) : the_row();
                            
                                    // Load sub field value.
                                    $image = get_sub_field('image');
                                    $text = get_sub_field('text');
                                    $btntxt = get_sub_field('button_text');
                                    $btnurl = get_sub_field('button_url');
                                    $headline = get_sub_field('headline');
?>
                                    <div class="plans__item">
                                        <div class="plans-image">
                                            <img src="<?php echo $image ?>" alt="" class="plans__image">
                                        </div>
                                        <div class="plans__content">
                                            <h5 class="plans__headline"><?php echo $headline ?></h5>
                                            <p class="plans__text"><?php echo $text ?></p>

                                            <div class="d-flex justify-content-center w-100">
                                                <?php if($btntxt) {?>
                                                    <a class="plans__button" href="<?php echo $btnurl ?>"><?php echo $btntxt ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
<?php
                            
                                // End loop.
                                endwhile;
?>
                                </div>
                            </div>
<?php
                            
                            // No value.
                            else :
                                // Do something...
                            endif;
?>
<?php
                        endif;










                        
                    // End loop.
                    
                endwhile;

                // No value.
                else:
                    // Do something...
                    
                endif;
?>

    
<?php get_footer(); ?>
</body>
