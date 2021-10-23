<?php

/**
 * Template Name: Home
 * Description: Homepage
 *
 */

if ($video_txt = get_field('video_txt'));
if ($video_url = get_field('video_url'));


get_header();
?>

<section class="cover">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/hellothere.png" alt="">
</section>

<section class="intro" id="turniej">
    <div class="container">
        <div class="intro__video--cont"></div>
        <div class="row intro__video--bg">

            <!-- <?php if ($video_url) : ?>

                <div class="play-backdrop"></div>
                <div class="play-button">
                    <svg class="play-circles" viewBox="0 0 152 152">
                        <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7" />
                        <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5" />
                    </svg>
                    <div class="play-perspective">
                        <button class="play-close"></button>
                        <div class="play-triangle">
                            <div class="play-video">
                                <iframe width="600" height="400" src="<?php echo $video_url; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?> -->

            <?php if ($video_url) : 
            $video_url_poster = get_field( 'video_url_poster' ); ?>
                <div class="video-container">
                    <img id="video" src="<?php echo esc_url( $video_url_poster['url'] ); ?>" data-video="<?php echo $video_url; ?>">
                    <!-- <iframe src="<?php echo $video_url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
            <?php endif; ?>
           
        </div>
<script>
    jQuery('#video').click(function(){
    var video = '<iframe src="'+ jQuery(this).attr('data-video') +'"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    jQuery(this).replaceWith(video);
    });
</script>

        <?php if ($video_txt) : ?>
            <div class="intro__txt">
                <?php echo $video_txt; ?>
            </div>
        <?php endif; ?>




    </div>
</section>


<section class="streamers" id="streamerzy">
    <div class="container">

        <?php if ($streamers_title = get_field('streamers_title')) : ?>
            <h2 class="title color-black">
                <?php echo esc_html($streamers_title); ?>
            </h2>
        <?php endif; ?>
        <?php if ($streamers_subtitle = get_field('streamers_subtitle')) : ?>
            <div class="subtitle color-primary">
                <?php echo esc_html($streamers_subtitle); ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('streamerzy')) : ?>
            <div class="streamers__rptr">
                <div class="row">
                <div class="col-md-10">

                    <div class="row">
                        <?php while (have_rows('streamerzy')) :
                        
                            the_row(); ?>
                            <div class="col-md-6 col-lg-3 mb-4">

                                    <a class="card streamers__card" href="<?php if ( $streamer_url = get_sub_field( 'streamer_url' ) ) : ?>
                                                <?php echo esc_url( $streamer_url ); ?>
                                            <?php endif; ?>">
                                        <?php $streamer_photo = get_sub_field('streamer_photo');
                                        if ($streamer_photo) : ?>
                                            <!-- <div class="streamers__img"> -->
                                            <img src="<?php echo esc_url($streamer_photo['url']); ?>" alt="<?php echo esc_attr($streamer_photo['alt']); ?>" />
                                            <!-- </div> -->
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <?php if ($streamer_name = get_sub_field('streamer_name')) : ?>
                                                <div class="card-title streamers__name">
                                                    <?php echo esc_html($streamer_name); ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($streamer_txt = get_sub_field('streamer_txt')) : ?>
                                                <p class="card-text streamers__txt">
                                                    <?php echo esc_html($streamer_txt); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </a>

                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-2 streamers__cola">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/streamers_cola.png" alt=""> -->
                </div>
            </div>
            </div>

        <?php endif; ?>


    </div>

</section>
<section class="hosts" id="prowadzacy">
    <div class="hosts__path">
        <div class="container">
            <?php if ($hosts_title = get_field('hosts_title')) : ?>
                <h2 class="color-white">
                    <?php echo esc_html($hosts_title); ?>
                </h2>
            <?php endif; ?>
            <?php if ($hosts_subtitle = get_field('hosts_subtitle')) : ?>
                <div class="subtitle color-white">
                    <?php echo esc_html($hosts_subtitle); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <?php if (have_rows('hosts_rptr')) : ?>
            <div class="hosts__row">
                <?php while (have_rows('hosts_rptr')) :
                    the_row(); ?>
                    <div class="card hosts__card">
                        <!-- <div class="card"> -->
                            <?php
                            $host_photo = get_sub_field('host_photo');
                            if ($host_photo) : ?>
                                <!-- <div class="hosts__img"> -->
                                    <img src="<?php echo esc_url($host_photo['url']); ?>" alt="<?php echo esc_attr($host_photo['alt']); ?>" />
                                <!-- </div> -->
                            <?php endif; ?>
                            <div class="card-body">
    
                                <?php if ($host_name = get_sub_field('host_name')) : ?>
                                    <div class="hosts__name card-title">
                                        <?php echo esc_html($host_name); ?>
                                    </div>
                                <?php endif; ?>
    
                                <?php if (have_rows('host_socials')) : ?>
                                    <div class="hosts__socials card-text">
                                        <?php while (have_rows('host_socials')) :
                                            the_row(); ?>
                                            <?php if ($host_socials_twitter = get_sub_field('host_socials_twitter')) : ?>
                                                <a href="<?php echo esc_url($host_socials_twitter); ?>">
                                                    <div class="social-icon">
                                                        <svg id="Group_35" data-name="Group 35" xmlns="http://www.w3.org/2000/svg" width="20.292" height="16.532" viewBox="0 0 20.292 16.532">
                                                            <path id="Path_23" data-name="Path 23" d="M-521.743-1988.208h-.678a.932.932,0,0,0-.1-.013,10.978,10.978,0,0,1-1.253-.109,11.762,11.762,0,0,1-4.61-1.684c-.024-.015-.045-.033-.068-.05l.005-.018a8.4,8.4,0,0,0,3.216-.259,8.088,8.088,0,0,0,2.871-1.46,4.465,4.465,0,0,1-1.649-.4,4.268,4.268,0,0,1-1.363-1.019,3.612,3.612,0,0,1-.819-1.485,3.942,3.942,0,0,0,1.794-.074,4.359,4.359,0,0,1-1.7-.82,4.129,4.129,0,0,1-1.171-1.465,3.852,3.852,0,0,1-.393-1.837,5.449,5.449,0,0,0,.884.345,3.433,3.433,0,0,0,.94.138,4.184,4.184,0,0,1-1.7-2.527,4.138,4.138,0,0,1,.458-3.031,11.908,11.908,0,0,0,3.835,3.094,11.765,11.765,0,0,0,4.756,1.268c-.007-.05-.01-.082-.016-.113a4.038,4.038,0,0,1,.191-2.316,4.1,4.1,0,0,1,3.242-2.641c.125-.023.253-.035.379-.052h.571c.147.021.295.037.441.063a4.11,4.11,0,0,1,2.238,1.177.166.166,0,0,0,.181.055c.178-.048.359-.085.537-.134a8.286,8.286,0,0,0,1.881-.785c.031-.018.065-.031.1-.046l.016.021a4.253,4.253,0,0,1-1.76,2.238.182.182,0,0,0,.07,0,8.272,8.272,0,0,0,1.947-.506l.315-.124v.018c-.021.025-.044.048-.062.075a8.414,8.414,0,0,1-1.918,1.988.205.205,0,0,0-.094.193,11.667,11.667,0,0,1-.092,1.914,12.173,12.173,0,0,1-.615,2.517,12.159,12.159,0,0,1-3,4.682,11.066,11.066,0,0,1-2,1.535,11.6,11.6,0,0,1-5.628,1.632C-521.625-1988.222-521.684-1988.214-521.743-1988.208Z" transform="translate(528.448 2004.741)" fill="#666"/>
                                                        </svg>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
    
                                            <?php if ($host_socials_fb = get_sub_field('host_socials_fb')) : ?>
                                                <a href="<?php echo esc_url($host_socials_fb); ?>">
                                                    <div class="social-icon">
                                                        <svg id="Group_36" data-name="Group 36" xmlns="http://www.w3.org/2000/svg" width="10.011" height="19.25" viewBox="0 0 10.011 19.25">
                                                            <path id="Path_24" data-name="Path 24" d="M13.277-1998.67H9.734c0-.051-.009-.1-.009-.154q0-4.241,0-8.482v-.151H6.765v-3.427H9.724v-.142c0-.827,0-1.654,0-2.48a5.325,5.325,0,0,1,.313-1.829,3.7,3.7,0,0,1,1.889-2.123,4.525,4.525,0,0,1,2-.46c.748,0,1.5.036,2.244.063.2.007.4.036.6.056v3.083h-.141c-.546,0-1.093-.007-1.639,0a3.849,3.849,0,0,0-.7.069,1.123,1.123,0,0,0-.949.951,3.6,3.6,0,0,0-.056.626c-.007.687,0,1.373,0,2.06v.132h3.382l-.444,3.427H13.286v.154q0,4.236,0,8.471C13.286-1998.773,13.28-1998.722,13.277-1998.67Z" transform="translate(-6.765 2017.921)" fill="#666"/>
                                                        </svg>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
    
                                            <?php if ($host_socials_twitch = get_sub_field('host_socials_twitch')) : ?>
                                                <a href="<?php echo esc_url($host_socials_twitch); ?>">
                                                    <div class="social-icon">
                                                    <svg id="Group_37" data-name="Group 37" xmlns="http://www.w3.org/2000/svg" width="16.893" height="19.25" viewBox="0 0 16.893 19.25">
                                                        <g id="g3365" transform="translate(0 0)">
                                                            <path id="path3367" d="M360.588-2007.707l-2.751,2.751h-4.321l-2.357,2.357v-2.357h-3.536v-11.393h12.965Zm-14.537-10.214-.786,3.143v14.143H348.8v1.965h1.964l1.965-1.965h3.143l6.286-6.285v-11Z" transform="translate(-345.266 2017.921)" fill="#666"/>
                                                        </g>
                                                        <path id="path3369" d="M410.045-1967.486h1.571v-4.715h-1.571Zm4.321,0h1.572v-4.715h-1.572Z" transform="translate(-403.366 1976.915)" fill="#666"/>
                                                    </svg>

                                                    </div>
                                                </a>
                                            <?php endif; ?>
    
                                            <?php if ($host_socials_insta = get_sub_field('host_socials_insta')) : ?>
                                                <a href="<?php echo esc_url($host_socials_insta); ?>">
                                                    <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.504" height="18.504" viewBox="0 0 18.504 18.504">
                                                        <g id="Group_38" data-name="Group 38" transform="translate(0)">
                                                            <path id="Path_25" data-name="Path 25" d="M5256.913,30.911a6.769,6.769,0,0,0-.431-2.246,4.727,4.727,0,0,0-2.705-2.706,6.793,6.793,0,0,0-2.246-.43c-.987-.045-1.3-.056-3.814-.056s-2.828.011-3.815.056a6.8,6.8,0,0,0-2.246.43,4.732,4.732,0,0,0-2.706,2.706,6.809,6.809,0,0,0-.43,2.246c-.045.987-.056,1.3-.056,3.814s.011,2.828.056,3.815a6.809,6.809,0,0,0,.43,2.246,4.733,4.733,0,0,0,2.706,2.706,6.8,6.8,0,0,0,2.246.43c.987.045,1.3.056,3.815.056s2.827-.011,3.814-.056a6.793,6.793,0,0,0,2.246-.43,4.727,4.727,0,0,0,2.705-2.706,6.769,6.769,0,0,0,.431-2.246c.045-.987.056-1.3.056-3.815S5256.958,31.9,5256.913,30.911Zm-9.2,8.566a4.751,4.751,0,1,1,4.751-4.751A4.751,4.751,0,0,1,5247.717,39.477Zm4.939-8.58a1.11,1.11,0,1,1,1.11-1.11A1.111,1.111,0,0,1,5252.656,30.9Z" transform="translate(-5238.465 -25.474)" fill="#666"/>
                                                            <path id="Path_26" data-name="Path 26" d="M5301.374,85.3a3.084,3.084,0,1,0,3.084,3.084A3.084,3.084,0,0,0,5301.374,85.3Z" transform="translate(-5292.122 -79.13)" fill="#666"/>
                                                        </g>
                                                    </svg>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <!-- </div> -->
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

</section>

<div class="schedule" id="harmonogram">
    <div class="container">

    <?php if ( $schedule_title = get_field( 'schedule_title' ) ) : ?>
        <h2>
            <?php echo esc_html( $schedule_title ); ?>
        </h2>
    <?php endif; ?>
    
    <?php if ( $schedule_subtitle = get_field( 'schedule_subtitle' ) ) : ?>
        <div class="subtitle color-primary">
            <?php echo esc_html( $schedule_subtitle ); ?>
        </div>
    <?php endif; ?>
    
    <?php if ( have_rows( 'Schedule_games' ) ) : ?>
        <div class="schedule__games">

        <?php while ( have_rows( 'Schedule_games' ) ) :
            the_row(); ?>
                <?php
            $game_bg_field = get_sub_field( 'game_bg' );
            $game_bg = $game_bg_field['url'];
    
             ?>
    
            <div class="schedule__game" style="background-image:url('<?=$game_bg?>')">
                <?php
                $game_icon = get_sub_field( 'game_icon' );
                if ( $game_icon ) : ?>
                <div class="">
                    <img class="schedule__game--icon" src="<?php echo esc_url( $game_icon['url'] ); ?>" alt="<?php echo esc_attr( $game_icon['alt'] ); ?>" />
                </div>
                <?php endif; ?>
    
                <!-- <div class=""> -->
                    <?php if ( $game_phase = get_sub_field( 'game_phase' ) ) : ?>
                        <div class="schedule__game--phase" ><?php echo esc_html( $game_phase ); ?></div>
                    <?php endif; ?>
                    <?php if ( $game_name = get_sub_field( 'game_name' ) ) : ?>
                        <div class="schedule__game--name" ><?php echo ( $game_name ); ?></div>
                    <?php endif; ?>
                <!-- </div> -->

                <?php if ( $game_date = get_sub_field( 'game_date' ) ) : ?>
                    <div class="schedule__game--date" ><?php echo esc_html( $game_date ); ?></div>
                <?php endif; ?>

                    <?php
                    $link = get_sub_field( 'game_link' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <div class="game__btn">
                            <span>
                                <?php echo esc_html( $link_title ); ?>
                            </span>
                        </div>
                    </a>
                    <?php endif; ?>
            </div>
    
    
    
        <?php endwhile; ?>
        </div>

    <?php endif; ?>

    </div>
</div>


<?php
get_footer();
