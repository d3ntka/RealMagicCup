<?php
/**
 * Template Name: Home
 * Description: Homepage
 *
 */

if ( $video_txt = get_field( 'video_txt' ) );
if ( $video_url = get_field( 'video_url' ) );


get_header();
?>


<section class="intro">
    <div class="container">
        <div class="row intro__video--bg">
            
            <?php if ( $video_url ) : ?>

                <div class="play-backdrop"></div>
                <div class="play-button">
                    <svg class="play-circles" viewBox="0 0 152 152">
                        <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                        <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3" stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                    </svg>
                    <div class="play-perspective">
                        <button class="play-close"></button>
                        <div class="play-triangle">
                        <div class="play-video">
                            <iframe width="600" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                </div>

            <?php endif; ?>

            <!-- <div class="video-container">
                    <iframe src="<?php echo $video_url ; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>  -->
        </div>


        <?php if ( $video_txt ) : ?>
            <div class="intro__txt">
                <?php echo $video_txt; ?>
            </div>
        <?php endif; ?>




    </div>
</section>






<?php
get_footer();