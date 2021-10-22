<?php

/**
 * Template Name: Voting
 * Description: Choose their destiny
 *
 */

get_header();

get_template_part("template-parts/page", "nav");
?>

<div class="voting">
    <div class="voting__header">
        <h2>
            Turniej jakiej gry mamy zorganizować
        </h2>
        <div class="subtitle color-primary">
            Zagłosuj a my załatwimy resztę :)
        </div>
    </div>
    <div class="votes">
           <?php echo do_shortcode('[poll id="2"]'); ?>
    </div>
</div>



<?php
get_footer();
