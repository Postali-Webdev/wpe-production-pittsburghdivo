<?php
/**
 * Template Name: Sitemap
 * @package Postali Child
 * @author Postali LLC
**/
get_header();



?>

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

    <span id="main-content"></span>

    <section id="panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <div>
                        <h3>Pages</h3>
                        <ul>
                            <?php echo wp_list_pages("title_li="); ?>
                        </ul>
                    </div>
                </div>
                <div class="column-50">
                    <div>
                        <h3>Blogs</h3>
                        <ul>
                            <?php echo wp_get_archives('type=postbypost'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>