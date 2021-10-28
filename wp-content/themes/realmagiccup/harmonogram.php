<?php

/**
 * Template Name: Harmonogram
 *
 */

get_header();
$page_title = 'Harmonogram';
include(locate_template('/template-parts/page-nav.php', false, false));
?>

<div class="harmonogram">

    <?php if (have_rows('wyzwanie')) : ?>
        <?php while (have_rows('wyzwanie')) :
            the_row(); ?>
            <div class="etap">

                <div class="container challenge">
                    <div class="challenge__title--wrap">
                        <!-- <div class="row g-0"> -->
                        <!-- <div class="col challenge__title-set1"></div> -->
                        <div class="challenge__title">
                            <?php if ($title = get_sub_field('title')) : ?>
                                <?php echo $title; ?>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="col challenge__title-set2"></div> -->

                        <!-- </div> -->
                    </div>
                    <div class="row justify-content-between">
                        <?php if (have_rows('group_a')) : ?>
                            <div class="col-sm-6 col-lg-3 order-2 order-lg-1 group">
                                <?php if ( $group_a_name = get_sub_field( 'group_a_name' ) ) : ?>
                                <span class="group--title">
                                    <?php echo esc_html( $group_a_name ); ?>
                                </span>
                                <?php endif; ?>
                                <div class="group__grid">
                                    <?php while (have_rows('group_a')) :
                                        the_row(); ?>
                                        <div class="group__img">
                                            <?php
                                            $img = get_sub_field('group_a_img');
                                            if ($img) : ?>
                                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- fazy -->
                        <div class="col-sm-12 col-lg-6 order-1 order-lg-2 d-flex align-content-center justify-content-center">

                            <?php if (have_rows('phases')) : ?>
                                <div class="phase__wrap phase__chevrons">

                                    <ul class="phase">

                                        <?php while (have_rows('phases')) :
                                            the_row(); ?>
                                            <li class="phase__event">
                                                <?php if ($txt = get_sub_field('txt')) : ?>
                                                    <div class="phase__event--txt">
                                                        <?php echo $txt; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($date = get_sub_field('date')) : ?>
                                                    <div class="phase__event--date">
                                                        <span><?php echo esc_html($date); ?></span>.2021
                                                    </div>
                                                <?php endif; ?>
                                            </li>

                                        <?php endwhile; ?>
                                    </ul>
                                </div>

                            <?php endif; ?>

                        </div>
                        <!-- / fazy -->

                        <?php if (have_rows('group_b')) : ?>
                            <div class="col-sm-6 col-lg-3 order-3 group">
                                <?php if ( $group_b_name = get_sub_field( 'group_b_name' ) ) : ?>
                                <span class="group--title">
                                    <?php echo esc_html( $group_b_name ); ?>
                                </span>
                                <?php endif; ?>
                                <div class="group__grid">
                                    <?php while (have_rows('group_b')) :
                                        the_row(); ?>
                                        <div class="group__img">
                                            <?php
                                            $img = get_sub_field('group_b_img');
                                            if ($img) : ?>
                                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="row">
                        <?php if ($txt_left = get_sub_field('txt_left')) : ?>
                            <div class="col-md-4 txt--left">
                                <?php echo esc_html($txt_left); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($txt_right = get_sub_field('txt_right')) : ?>
                            <div class="col-md-8 txt--right">
                                <p>
                                    <?php echo esc_html($txt_right); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>




            </div> <!-- / etap -->


        <?php endwhile; ?>
    <?php endif; ?>





















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
