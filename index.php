<?php get_header(); ?>
<body>
    <div class="container-fluid" style="background:#163967">
        <div class="topbar">
            <div class="row">
                <div class="col-12 text-center col-md-6 text-md-start">
                <?php
                    // Check rows exists.
                    if( have_rows('topbar-left') ):

                        // Loop through rows.
                        while( have_rows('topbar-left') ) : the_row();

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
                    else :
                        // Do something...
                    endif;
                ?>
                </div>
                <div class="col-12 text-center col-md-6 text-md-start">
                <?php
                    // Check rows exists.
                    if( have_rows('topbar-right') ):

                        // Loop through rows.
                        while( have_rows('topbar-right') ) : the_row();

                            // Load sub field value.
                            $text = get_sub_field('text');
                            $url = get_sub_field('url');
                            $icon = get_sub_field('icon');
                            // Do something...
                            ?>
                            <div style="display:inline-block">
                                <?php if($icon) { ?><span class="topbar__icon"><img src="<?php echo $icon; ?>"></span><?php } ?><?php if($text){ ?><a href="<?php echo $url; ?>" class="topbar__link"><?php echo $text; ?></a><?php } ?>
                            </div>
                            <?php 

                        // End loop.
                        endwhile;

                    // No value.
                    else :
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
if( have_rows('content') ):

    // Loop through rows.
    while ( have_rows('content') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'paragraph' ):
            $text = get_sub_field('text');
            // Do something...

        // Case: Download layout.
        elseif( get_row_layout() == 'download' ): 
            $file = get_sub_field('file');
            // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

    
<?php get_footer(); ?>
</body>