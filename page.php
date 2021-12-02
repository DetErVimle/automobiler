<?php 
    get_header();
?>

<div class="main-wrapper">

    <h1 class="page-title"><?php the_title() ?></h1>

    <div class="finans-info">
        <div>
            <h2><?php the_field("title") ?></h2>
            <p><?php the_field("text") ?></p>
        </div>
        <div>
            <img src="<?php the_field("image_1") ?>" alt="">
            <img src="<?php the_field("image_2") ?>" alt="">
        </div>
    </div>
</div>

<?php 
    get_footer();
?>