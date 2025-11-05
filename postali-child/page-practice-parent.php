<?php
/**
 * Interior Page
 * Template Name: Practice Parent
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

    <div class="banner-icon">
        <?php the_field('banner_icon'); ?>
    </div>

    <section class="primary-content">
        <div class="container">
            <div class="columns">
                <div class="column-full column">
                    <div class="practice_area_nav">
                        <p>I need more information about…</p>
                    </div>
                    <div class="on-page">
                    <?php if( have_rows('on-page-nav') ): ?>
                    <?php while( have_rows('on-page-nav') ): the_row(); ?>  
                        <a href="#<?php the_sub_field('link_location'); ?>" class="btn nav"><?php the_sub_field('link_title'); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    </div>

                    <span class="intro"><?php the_field('p1_intro_paragraph'); ?></span>
                    
                    <div class="spacer-line"></div>

                    <div class="intro-copy">
                        <div class="left">  
                            <?php the_field('p1_copy'); ?>
                        </div>
                        <div class="right">
                            <div class="cta">
                                <span class="icon-BFL_Lighthouse"></span>
                                <p>Call our Pittsburgh domestic attorneys today at <a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a> to find out how we can help you.</p>
                                <div class="spacer-30"></div>
                                <a class="btn" title="contact us link" href="/contact/">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('p2_copy')) { ?>
    <section id="panel_2">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('p2_copy'); ?>
                </div>
                <div class="column-50 form">
                    <?php echo do_shortcode( ' [gravityform id="1" title="false"] ' ); ?>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    
    <?php if( have_rows('section_content') ): ?>
    <?php $n=3; ?>
    <?php while( have_rows('section_content') ): the_row(); ?>  
    <section id="panel_<?php echo $n; ?>">
        <div class="container" id="<?php the_sub_field('section_id'); ?>">
            <div class="columns">
            <?php if (get_sub_field('two_column')) { ?>
                <div class="column-50 column">
                    <?php the_sub_field('copy'); ?>
                </div>
                <div class="column-50 column">
                    <?php the_sub_field('copy_right'); ?>
                </div>
            <?php } else { ?>
                <div class="column-75 center column">
                    <?php the_sub_field('copy'); ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

    <?php if ($n==3) { ?>
    
    <section id="practice_area_testimonial" style="background-image: url('/wp-content/uploads/2018/07/testimonials-parallax.jpg');">
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <p><?php the_field('testimonial_block_quote','options'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>

    <?php $n++; ?>
    <?php endwhile; ?>
    <?php endif; ?> 

    <section class="footer-cta">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('footer_cta_copy'); ?>
                </div>
                <img src="/wp-content/uploads/2018/07/attorney-cutout-large.png" alt="Attorney Anthony Piccirili" class="attorney">
            </div>
        </div>
    </section>    

</div>

<?php get_footer();?>