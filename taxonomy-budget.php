

<?php get_header(); ?>
<?php //echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]' ); ?>
<section class="posts-block">
    <div class="blog__header-text-wrapper">
        <span class="blog__header-text">Movie Budget</span>
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
        <?php
        $budget = trim($_SERVER['REQUEST_URI'], '/');
        $budget = array_pop(explode('/', $budget));
        $args = array('post_type' => 'movie', 'budget' => $budget, 'posts_per_page' => 10);

        $cat = get_query_var('cat');
        $categories = get_categories('include=' . $cat);
        if ($categories) {
            foreach ($categories as $category) {
                echo 'Posts in this category = ' . $category->count . '<br>';
            }
        }

        $query = new WP_Query( $args );
        // вывод таксономи
        $terms = get_terms( array(
            'taxonomy' => 'kitdev_genre',
            'hide_empty' => false ) );
        $output = '';
        foreach ($terms as $term ) {
            $output .= $term->name . '<br />';
        }

        echo $output;

        $query = new WP_Query( $args );
        // вывод таксономи
        $terms = get_terms( array(
            'taxonomy' => 'kitdev_budget',
            'hide_empty' => false ) );
        $output = '';
        foreach ($terms as $term ) {
            $output .= $term->name . '<br />';
        }

        echo $output;
        ?>
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






