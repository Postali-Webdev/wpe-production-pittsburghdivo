<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner" style="background-image:url(<?php the_field('banner_background_image'); ?>);">
        <div class="banner-icon">
            <?php the_field('banner_icon'); ?>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column-50 column">
                    <h1><?php the_title(); ?></h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>

                    <?php if( have_rows('banner_pa_links') ): ?>
                    <ul class="banner-links">   
                    <?php while( have_rows('banner_pa_links') ): the_row(); ?>  
                        <li><a href="<?php the_sub_field('pa_page_link'); ?>"><?php the_sub_field('pa_name'); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section class="panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('p1_left_column'); ?>
                </div>
                <div class="column-50">
                    <?php the_field('p1_right_column'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-2 blue">
        <div class="container">
            <div class="icon">
                <?php the_field('p2_icon'); ?>
            </div>
            <div class="columns">
                <div class="column-full centered">
                    <h2><?php the_field('p2_headline'); ?></h2>
                </div>
                <div class="column-50">
                    <?php the_field('p2_left_column'); ?>
                </div>
                <div class="column-50">
                    <?php the_field('p2_right_column'); ?>
                </div>
            </div>
            <div class="spacer-line"></div>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <p class="lg"><?php the_field('p2_photo_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="hovers">
            <span id="numberOne" class="tooltip-top" data-tooltip="<?php the_field('p2_person_1_description'); ?>">1</span>
            <span id="numberTwo" class="tooltip-top" data-tooltip="<?php the_field('p2_person_2_description'); ?>">2</span>
            <span id="numberThree" class="tooltip-top" data-tooltip="<?php the_field('p2_person_3_description'); ?>">3</span>
            <span id="numberFour" class="tooltip-top" data-tooltip="<?php the_field('p2_person_4_description'); ?>">4</span>
            <span id="numberFive" class="tooltip-top" data-tooltip="<?php the_field('p2_person_5_description'); ?>">5</span>
        </div>
    </section>

    <section class="panel-3">
        
        <div class="panel-headline">
            <h2><?php the_field('p3_headline'); ?></h2>
        </div>

        <div class="process-tabs">
        <?php $n=1 ?>
        <?php if( have_rows('p3_tabs') ): ?>
        <?php while( have_rows('p3_tabs') ): the_row(); ?>  
            <div class="tab-link<?php if($n == 1) { ?> current<?php } ?>" data-tab="tab-<?php echo $n; ?>" id="tab-<?php echo $n; ?>-nav" style="background-image:url(<?php the_sub_field('tab_background'); ?>);">
                <span class="title"><?php the_sub_field('tab_title'); ?></span>
            </div>
            <?php $n++; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="spacer-60"></div>
        <div class="container">
            <div class="columns">
                <div class="column-75">
                    <div class="process-blocks">
                    <?php $i=1 ?>
                    <?php if( have_rows('p3_tabs') ): ?>
                    <?php while( have_rows('p3_tabs') ): the_row(); ?>  
                        <div id="tab-<?php echo $i; ?>" class="process-content<?php if($i == 1) { ?> current<?php } ?>">
                            <?php the_sub_field('tab_content'); ?>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    </div>
                </div>
                <div class="column-25">
                    <div class="sidebar-form">
                        <div class="form-headline">
                            <?php the_field('sidebar_form_icon'); ?>
                            <p class="lg"><?php the_field('sidebar_form_headline'); ?></p>
                        </div>
                        <p><?php the_field('sidebar_form_copy'); ?></p>
                        <?php echo do_shortcode( get_field('sidebar_form_shortcode') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-4" style="background-image:url('<?php the_field('p4_background'); ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-full centered column">
                    <?php echo do_shortcode( get_field('p4_icon') ); ?>
                    <h2><?php the_field('p4_headline'); ?></h2>
                    <p class="lg"><?php the_field('p4_copy'); ?></p>
                    <?php if( have_rows('p4_copy_locations') ): ?>
                    <ul>
                    <?php while( have_rows('p4_copy_locations') ): the_row(); ?>  
                        <li><?php the_sub_field('location'); ?></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php the_field('p5_copy'); ?>
                </div>
                <div class="column-33">
                <?php 
                $image = get_field('p5_attorney_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>