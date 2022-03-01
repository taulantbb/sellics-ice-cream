<?php

add_action('genesis_header', 'custom_do_header', 1);



function custom_do_header()
{
    remove_action('genesis_header', 'genesis_header_markup_open', 5);
    remove_action('genesis_header', 'genesis_do_header', 10);
    remove_action('genesis_header', 'custom_remove_nav', 12);
    remove_action('genesis_header', 'genesis_header_markup_close', 15);
    remove_action('genesis_after_header', 'genesis_do_nav', 10);
    remove_action('genesis_after_header', 'genesis_do_subnav', 10);

    global $hc_settings;
?>

    <header class="header" id="header">
        <div class="container">
            <div class="header__navbar">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'menu genesis-nav-menu menu-primary',
                    'menu_id' => 'menu-main-menu'
                ]);
                ?>
            </div>
        </div>
    </header>

<?php
}
