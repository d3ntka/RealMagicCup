<?php

/**
 * Template Name: Voting
 * Description: Choose their destiny
 *
 */

get_header();
$page_title = 'Głosowanie';
include( locate_template( '/template-parts/page-nav.php', false, false ) );
?>

<div class="voting">
    <div class="voting__header">
        <h2>
            Wybierz trzy gry, w których mają zmierzyć się streamerzy!
        </h2>
        <div class="subtitle color-primary">
            Zagłosuj, a my rzucimy im wyzwanie!
        </div>
    </div>
    <div class="votes">
        <?php echo do_shortcode('[poll id="2"]'); ?>
    </div>
</div>





<?php
get_footer();
