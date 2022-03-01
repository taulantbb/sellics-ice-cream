<?php

function main_form_shortcode($atts = null) {


    ob_start();
    //BEGIN OUTPUT

    ?>

<form id="main-form" method="post" accept-charset="UTF-8" content-Type="multipart/form-data"  >
    <div class="first-step">
        <label for="email">Email*</label>
        <span class="err">Please complete this required field.</span>
        <input class="form-email" name="email" type="email">
        <label for="first name">First name</label>
        <input name="firstname" type="text">
        <label for="last name">Last name</label>
        <input name="lastname" type="text">
        <button id="next" class="next">Next</button>
    </div>
    <div class="submit-form">
        <label for="">Which Ice cream taste you like?</label>
        <div class="radio-buttons">

        <div class="vanilla">
            <input name="ice_cream_taste-Vanilla" type="radio">
            <label for="">Vanilla</label>
        </div>
        <div class="strawberry">
            <input name="ice_cream_taste-Strawberry" type="radio">
            <label for="">Strawberry</label>
        </div>
        <div class="coconut">
            <input name="ice_cream_taste-Coconut" type="radio">
            <label for="">Coconut</label>
        </div>
        <div class="sellics-special">
            <input name="ice_cream_taste-Sellics Special" type="radio">
            <label for="">Sellics Special</label>
        </div>
        <div class="chocolat">
            <input name="ice_cream_taste-Chocolat" type="radio">
            <label for="">Chocolat</label>
        </div>
        <div class="caramel">
            <input name="ice_cream_taste-Caramel Macchiato" type="radio">
            <label for="">Caramel Macchiato</label>
        </div>
        </div>

        <label for="">How many servings of ice cream do you consume per month?</label>
        <input name="ice_cream_quantity" type="number">
        <label for="">How many month should your ice cream supply last for?</label>
        <input name="order_frequency" type="number">

        <button type="submit" name ="submit" class="submit">Submit</button>
    </div>
</form>

    <?php
    //END OUTPUT (And actually output it!)
    $output = ob_get_contents();
    ob_end_clean();
    return  $output;
}


add_shortcode('main-form', 'main_form_shortcode');