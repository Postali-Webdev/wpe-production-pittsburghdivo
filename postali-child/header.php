<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
' https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P8N2NRL');</script>
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=" https://www.googletagmanager.com/ns.html?id=GTM-P8N2NRL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div class="cta-text">
                    <p class="lg"><?php the_field('tn_cta_headline','options'); ?></p>
                    <p><?php the_field('tn_cta_copy','options'); ?></p>
                </div>
                <div class="phone-email">
                    <p><a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a></p>
                    <p><a href="/contact/">Online Form</a></p>
                </div>
			</div>
		</div>

        <div id="header-bottom" class="container">
            <div id="header-top_menu">
                <nav role="navigation">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'header-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                </nav>		
                <div id="header-top_mobile">
                    <div id="menu-icon" class="toggle-nav">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </div>
                </div>
            </div>
        </div>
	</header>
