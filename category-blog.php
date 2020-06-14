<?php get_header(); ?>
<?php //echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]' ); ?>
<section class="posts-block">
<div class="blog__header-text-wrapper">
    <span class="blog__header-text">Blog</span>
</div>
    <div class="posts-filter__wrapper">
        <ul class="posts-filter__list">
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
            <li class="posts-filter__item"><a href="#" class="posts-filter__link">One</a></li>
        </ul>
    </div>
<div class="post-item">
<div class="post-item-centered">
<?php
if(have_posts()) {
    while(have_posts()) {
         the_post();
    ?>
    <div class="inner-post">
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
        <div class="post-footer">
            <h2><a class="inner-post__title-link" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <span class="post-footer__author"><?php the_author(); ?></span>
            <span><?php echo get_the_date();?></span>
<!--            <span>--><?php //the_comment() ?><!--</span>-->
        </div>
        <p><?php $readMore = "... <br><a href=" . get_the_permalink() . ">Read More ...</a>";
            echo wp_trim_words( get_the_content(), 15, $readMore);?></p>

    </div>
       <?php }
}
?>
</div>
</div>
</section>

<?php get_footer(); ?>




