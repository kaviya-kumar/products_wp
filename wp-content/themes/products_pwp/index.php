<?php

use ParagonIE\Sodium\Core\Curve25519\H;

get_header(); ?>
<h1> Recent posts </h1>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        if (has_post_thumbnail()) :
            the_post_thumbnail();
        endif;
        the_title('<h1>', '</h1>');
        the_excerpt();
        printf('<a href="%s" > Read more</a>', get_permalink());


    // Display post content
    endwhile;
endif;
?>
<h1> Products </h1>
<?php
$args = array(
    'post_type' => 'products',
);
$query = new WP_Query($args);
$query = new WP_Query($args);
// The Loop
while ($query->have_posts()) {
    $query->the_post();
    if (has_post_thumbnail()) :
        the_post_thumbnail();
    endif;
    echo '<li>' . get_the_title() . '</li>';

    printf('<a href="%s" > Read more</a>', get_permalink());
}
get_sidebar();
