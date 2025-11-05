<?php
/**
 * Interior Page
 * Template Name: About
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
                <div class="column-50 column">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1><?php the_title(); ?></h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <div class="banner-icon">
        <?php the_field('banner_icon'); ?>
    </div>

    <section class="primary-content">
        <div class="container">
            <div class="columns">
                <div class="column-50 column">
                    <?php the_content(); ?>
                </div>
                <div class="column-50 column credentials">
                <?php 
                $image = get_field('credentials_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                    <div class="credentials-content">
                        <?php the_field('credentials'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>