<?php get_header(); ?>
<h1>Archive Movies</h1>
<!-- вывод машин только по году-->
<?php $args = array(
//        'post_type'=> 'car',
//        'posts_per_page' => 10,
//        'tax_query' => array(
//            array(
//                    'taxonomy' => 'loft_year',
//                    'field' => 'slug',
//                    'terms' => '2001'
//            )
//)
);





//$query = new WP_Query( $args );
//// вывод таксономи
//$terms = get_terms( array(
//    'taxonomy' => 'kitdev_rating',
//    'hide_empty' => false ) );
//$output = '';
//foreach ($terms as $term ) {
//    $output .= $term->name . '<br />';
//}
//
//echo $output;



//if( $query->have_posts() ){ while( $query->have_posts() ){ $query->the_post(); ?>
<!--    <div class="inner-post">-->
<!--        <a href="--><?php //the_permalink() ?><!--">--><?php //echo get_the_post_thumbnail() ?><!--</a>-->
<!--        <div class="post-footer">-->
<!--            <h2><a class="inner-post__title-link" href="--><?php //the_permalink() ?><!--">--><?php //the_title() ?><!--</a></h2>-->
<!--            <span class="post-footer__author">--><?php //the_author(); ?><!--</span>-->
<!--            <span>--><?php //echo get_the_date();?><!--</span>-->
            <!--            <span>--><?php //the_comment() ?><!--</span>-->
<!--        </div>-->
<!--        <p>--><?php //$readMore = "... <br><a href=" . get_the_permalink() . ">Read More ...</a>";
//            echo wp_trim_words( get_the_content(), 15, $readMore);?><!--</p>-->
<!---->
<!--    </div>-->
<?php //}
//}
//?>
<?php //get_footer(); ?>


<section>
    <h1>POSTS budget</h1>
    <?php
    $genre = trim($_SERVER['REQUEST_URI'], '/');
    $genre = array_pop(explode('/', $genre));
    $args = array( 'post_type' => 'movie', 'genre' => $genre, 'posts_per_page' => 10 );
    ?>
    <?php $query = new WP_Query( $args );
    if( $query->have_posts() ){ while( $query->have_posts() ){ $query->the_post();
        get_template_part( 'kitdev_genre');
        ?>

        <!--    <div class="inner-post">-->
        <!--        <a href="--><?php //the_permalink() ?><!--">--><?php //echo get_the_post_thumbnail() ?><!--</a>-->
        <!--        <div class="post-footer">-->
        <!--            <h2><a class="inner-post__title-link" href="--><?php //the_permalink() ?><!--">--><?php //the_title() ?><!--</a></h2>-->
        <!--            <span class="post-footer__author">--><?php //the_author(); ?><!--</span>-->
        <!--            <span>--><?php //echo get_the_date();?><!--</span>-->
        <!--            <span>--><?php //the_comment() ?><!--</span>-->
        <!--        </div>-->
        <!--        <p>--><?php //$readMore = "... <br><a href=" . get_the_permalink() . ">Read More ...</a>";
//            echo wp_trim_words( get_the_content(), 15, $readMore);?><!--</p>-->
        <!---->
        <!--    </div>-->
    <?php }
    }
    ?>
</section>