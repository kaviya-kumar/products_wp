<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content/themes/products_pwp/style.css" />
    <title>Products</title>
</head>

<body>
    <header>
        <nav id="nav" class="main-navigation" style="color:black">

            <?php
            $custom_logo_id = themename_custom_logo_setup('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (the_custom_logo()) :
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '>';

            endif;
            wp_nav_menu(
                array(
                    'theme_location' => 'header'

                )
            );
            ?>
        </nav>
    </header>
</body>

</html>