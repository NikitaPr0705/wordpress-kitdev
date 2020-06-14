<?php get_header(); ?>
<h1>Archive Car</h1>
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
$query = new WP_Query( $args );
// вывод таксономи
$terms = get_terms( array(
        'taxonomy' => 'loft_color',
        'hide_empty' => false ) );
$output = '';
foreach ($terms as $term ) {
    $output .= $term->name . '<br />';
}

echo $output;



if( $query->have_posts() ){ while( $query->have_posts() ){ $query->the_post(); ?>
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
<?php get_footer(); ?>
