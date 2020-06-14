<?php get_header(); ?>
<?php the_post_thumbnail('', $default_attr); ?>
<div class="text-wrapper">
    <div class="card-body">
        <h2 class="card-title"><?php the_title(); ?></h2>
        <p class="card-text"><?php the_content(); ?></p>
    </div>
    <div class="post-footer">
        <?php the_author(); ?>
        <?php the_date(); ?>
    </div>
</div>
<?php get_footer(); ?>
