<?php /*Template Name: AboutPage */ ?>

<?php 
    get_header();
?>

<div class="main-wrapper">
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="main-content">
        <div>
            <h2><?php the_field("title") ?></h2>
            <p><?php the_field("text") ?></p>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>