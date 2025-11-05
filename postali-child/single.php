<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_header_image', 'options');

get_header();?>

<div class="body-container">

    <section class="single-post" id="post-container">
        <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
            <div class="columns">
                <div class="column-75 column">
                    <h1><?php the_title(); ?></h1>
                    <span class="create">
                        <span class="date"><span class="published">Published:</span> <?php the_time('M d, Y'); ?></span>
                        <?php _e('in','qode'); ?> <span class="category"><?php the_category(', '); ?></span>
                    </span>
                    <div class="spacer-30"></div>
                    <div class="article-single-featured-image">
                        <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                        <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                        <?php } else { ?>
                            <img src="<?php echo $blogDefault; ?>" id="article-featured-image-default" class="article-featured-image" >
                        <?php } ?>
                    </div>
                    <article>
                        <?php the_content(); ?>
                    </article>	
                    <p class="sm-pd"><strong>Categories:</strong></p>
                    <div class="categories">
                        <span class="post-meta-categories"><?php the_category(' '); ?></span>
                    </div>
                </div>
                <div class="column-25">
                    <div class="sidebar-header">
                        Latest Blog Posts
                    </div>
                    <?php
                    $current_post_id = get_the_ID();
                    
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array($current_post_id) 
                    );

                    $recent_posts_query = new WP_Query($args);

                    if ($recent_posts_query->have_posts()) {
                        while ($recent_posts_query->have_posts()) {
                            $recent_posts_query->the_post();
                            ?>
                            <div class="post"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No recent posts found.';
                    }
                    ?>

                    <div class="spacer-60"></div>

                    <div class="sidebar-form">
                        <?php the_field('sidebar_form_text','options'); ?>
                        <?php echo do_shortcode(' [gravityform id="1" title="false"] '); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>