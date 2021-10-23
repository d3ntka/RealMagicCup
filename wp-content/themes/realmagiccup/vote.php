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




<!-- Voting form -->

<!-- <li class="game-%POLL_ANSWER_ID% pointer">
    <label for="poll-answer-%POLL_ANSWER_ID%">%POLL_ANSWER%<input type="%POLL_CHECKBOX_RADIO%" id="poll-answer-%POLL_ANSWER_ID%" name="poll_%POLL_ID%" value="%POLL_ANSWER_ID%" /><span class="checkmark"></span><div class="overlay"></div>
    </label> 
</li> -->


<!-- Results form (voted) -->

<!-- <li class="col-auto game-%POLL_ANSWER_ID%">
    <label>
        <div class="">
            %POLL_ANSWER%
        </div>
        <div class="poll__results--wrap">
            <div class="poll__results--votes">
                <span>%POLL_ANSWER_VOTES%</span> głosy
            </div>
            <div class="poll__results">
                <div class="poll__results--bar">
                    <div class="pollbar" style="width: %POLL_ANSWER_IMAGEWIDTH%%" title="Zagłosowałeś na ten tytuł - %POLL_ANSWER_TEXT% (%POLL_ANSWER_PERCENTAGE%% | %POLL_ANSWER_VOTES% głosy)">
                    </div>
                </div>
                <div class="poll__results--percent">
                    %POLL_ANSWER_PERCENTAGE%%
                </div>
            </div>
        </div>
    </label>
</li> -->

<?php
get_footer();
