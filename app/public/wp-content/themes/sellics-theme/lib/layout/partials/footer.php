<?php

function custom_footer(){

    remove_action('genesis_footer', 'genesis_do_footer', 10); ?>
        <div class="bottom-content">
        <div class="container">
            <div class="col-md-6 delivery-now">
                <h4>Get your unlimited ice cream delivery now</h4>
                <p>From seasonal ice cream recipes and limited edition offerings 
                to coupons and special promotions—this club is made for real 
                ice cream lovers!</p>
            </div>
            <div class="col-md-6 ice-cream-form">
                <?php echo do_shortcode('[main-form]') ?>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="ice-creams">
                    <img class="pink-ice-cream" src="<?=CHILD_URL?>/assets/app/img/pink-ice-cream.png" alt="">
                    <img class="yellow-ice-cream" src="<?=CHILD_URL?>/assets/app/img/yellow-ice-cream.png" alt="">
                    <img class="blue-ice-cream" src="<?=CHILD_URL?>/assets/app/img/blue-ice-cream.png" alt="">
                    <img class="pink-ice-cream-2" src="<?=CHILD_URL?>/assets/app/img/pink-ice-cream.png" alt="">
                    <img class="yellow-ice-cream-2" src="<?=CHILD_URL?>/assets/app/img/yellow-ice-cream.png" alt="">
                    <img class="blue-ice-cream-2" src="<?=CHILD_URL?>/assets/app/img/blue-ice-cream.png" alt="">
                </div>
                <div class="copyright">Ice-cream All right Reserved! <?=date('Y')?></div>
            </div>
    </div>
    </div>

<?php }

add_action('genesis_footer', 'custom_footer', 8);
