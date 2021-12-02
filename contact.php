<?php /*Template Name: ContactPage */ ?>

<?php 
    get_header();
?>

<div class="main-wrapper">
    <h1 class="page-title"><?php the_title() ?></h1>

    <div class="contact-form">
        <?php while(have_posts()): the_post() ?>
            <p><?php the_content() ?></p>
        <?php endwhile ?>
    </div>
</div>

<?php 
    get_footer();
?>