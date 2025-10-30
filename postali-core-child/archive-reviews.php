<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array (
	'post_type' => 'reviews',
	'posts_per_page' => '10',
	'post_status' => 'publish',
	'order' => 'DESC',
    'paged' => $paged,
);
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article>
                            <?php the_content(); ?>
                            <p class="author"><strong><?php the_field('testimonial_author'); ?></strong></p>
                            <?php 
                            $logo = get_field('featured_review_source','options');
                            if( !empty( $logo ) ): ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>