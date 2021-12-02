<?php /*Template Name: FrontPage */ ?>

<?php 
    get_header();
?>

<div class="main-wrapper">
    <!-- Background video -->
    <div class="video-background-holder">
        <div class="video-background-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/TestMovie.mov" type="video/mp4">
        </video><!-- end video source-->
        <div class="video-background-content container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    
                </div><!-- end text/button area -->
            </div>
        </div><!-- end video-background-overlay-->
    </div>

    <div class="partners">
        <h2>Vi samarbejder med</h2>
        <div>
            <div><img src="<?php the_field("logo_1") ?>" alt=""></div>
            <div><img src="<?php the_field("logo_2") ?>" alt=""></div>
            <div><img src="<?php the_field("logo_3") ?>" alt=""></div>
            <div><img src="<?php the_field("logo_4") ?>" alt=""></div>
        </div>
    </div>

    <div class="front-info">
        <div>
            <h2><?php the_field("info_title") ?></h2>
            <!-- <p><?php the_field("info_punkter") ?></p> -->
            <ul>
                <li><?php the_field("info_punkt_1") ?></li>
                <li><?php the_field("info_punkt_2") ?></li>
                <li><?php the_field("info_punkt_3") ?></li>
                <li><?php the_field("info_punkt_4") ?></li>
                <li><?php the_field("info_punkt_5") ?></li>
                <li><?php the_field("info_punkt_6") ?></li>
            </ul>
        </div>
        <div>
        <img src="<?php the_field("info_logo") ?>" alt="">
        </div>
    </div>
</div>

<?php 
    get_footer();
?>