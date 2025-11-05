<?php
/**
 * Template Name: error404
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php $image = get_field('blog_banner_image','options'); ?>
    <section class="banner" style="background-image:url(<?php echo esc_url($image['url']); ?>);">
        <div class="container">
            <div class="columns">
                <div class="column-66 center centered column">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1>404 Page Not Found</h1>
                    <p class="headline">We're Sorry, This Page Doesn't Exist</p>
                </div>
            </div>
        </div>
    </section>

    <section class="primary-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <p>The page you’re looking for has moved or the URL is incorrect.</p>
                    <a href="/" class="btn">TAKE ME BACK TO THE SITE</a>
                </div>
            </div>
        </div>
    </section>


</div>

<?php get_footer();?>