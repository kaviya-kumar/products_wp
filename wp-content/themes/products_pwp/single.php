<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title('<h1>', '</h1>');
        the_date();
        the_content();

        the_post_thumbnail();
        comments_template();
    endwhile;
endif;
get_footer();
