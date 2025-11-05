<?php
/**
 * Interior Page
 * Template Name: Interior
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php endif; ?>
    <section class="banner" style="background-image:url(<?php echo $image[0]; ?>);">
        <div class="container">
            <div class="columns">
                <div class="column-66 center centered column">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1><?php the_title(); ?></h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="primary-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>