<?php

/*
 * Template Name: Home Page Template
*/

add_action('genesis_after_header', 'custom_front_page_after_header', 10);

function custom_front_page_after_header() {
    ?>

    <div class="homepage-hero">
        <div class="container">
            <div class="row hero-content">
                <div class="col-md-6">
                    <h1>Sign Up for unlimited Ice-Cream delivery</h1>
                    <form>
                        <input class="email-input" type="email" placeholder="E-mail">
                        <button id="get-ice-cream"> Get Your Ice-cream</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="<?=CHILD_URL?>/assets/app/img/desk-man.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php
}


remove_action('genesis_loop', 'genesis_do_loop', 10);
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );


//homepage content
add_action('genesis_loop', 'custom_homepage_content', 10);

remove_action('genesis_before_content_sidebar_wrap', 'custom_do_breadcrumbs', 5);

function custom_homepage_content(){ ?>

    <div class="container homepage-content">
        <div class="row">
            <div class="ice-cream col-md-3">
                <img src="<?=CHILD_URL?>/assets/app/img/brown-ice-cream.png" alt="Brown Ice Cream">
                <p>
                When it comes to gelatos and sorbets, Berlin may not quite rival Rome — but it sure gets 
pretty close. Germans have come to love their ice cream after all, another gift that Gastarbeiter, guest workers from Italy, brought with them in the 1950s and 60s. Our favourite ice cream shops keep the traditions alive — and put a new twist on them.
                </p>
            </div>
            <div class="ice-cream col-md-3">
                <img src="<?=CHILD_URL?>/assets/app/img/white-ice-cream.png" alt="White Ice Cream">
                <p>Grapefruit and Earl Grey? Or Roasted Chicory Coffee? Jones isn’t afraid of bold tastes. But 
every single of their scoops, even the most bizarre sounding flavour combinations, are a winner. You may have seen their little pastel-
yellow truck at all the most beautiful markets and street parties, but you can also taste their concoctions at their own gelateria in Schöneberg.</p>
            </div>
            <div class="ice-cream col-md-3">
                <img src="<?=CHILD_URL?>/assets/app/img/pink-white-ice-cream.png" alt="Pink & White Ice Cream">
                <p>Popsicles are underrated – and California Pops gives them the spotlight they truly deserve. 
Sold at their shops in Kreuzberg and Prenzlauer Berg (and available for deliveries, 
too), their popsicles are very instagrammable but also very delicious. We love the mango-
coconut flavour and the very fresh and fruity sorbets.</p>
            </div>
        </div>
    </div>

<?php }


genesis();