<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
	'post_type' => 'post',
	'post_per_page' => '9',
	'post_status' => 'publish',
	'order' => 'DESC',
    'paged' => $paged,
);
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php $image = get_field('blog_banner_image','options'); ?>
    <section class="banner" style="background-image:url(<?php echo esc_url($image['url']); ?>);">
        <div class="container">
            <div class="columns">
                <div class="column-66 center centered column">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1>Legal Blog</h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-full posts">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

                            <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                            <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                <div class="post-image" style="background-image:url('<?php echo $featImg[0]; ?>');"/></div>
                            <?php } else { ?>
                                <?php $default = get_field('blog_single_default','options'); ?>
                                <div class="post-image" style="background-image:url('<?php echo esc_url($default['url']); ?>"/></div>
                            <?php } ?>
                                <div class="meta-content">
                                    <p class="blog-date"><strong>Posted: </strong><?php the_date(); ?></p>
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </a>
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