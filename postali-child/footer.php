<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <!-- Utility Footer -->
    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <a href="/" title="Pittsburgh Divorce & Family Law"><img src="/wp-content/uploads/2018/07/logo-white.png" alt="Site logo" class="footer-logo"></a>
                </div>
                <div class="spacer-30"></div>
                <div class="column-33 column"> 
                    <div class="address">
                        <p class="heading">Contact</p>
                        <?php the_field('address','options'); ?>
                        <p>Phone: <a href="tel:<?php the_field('phone_number','options'); ?>" target="blank"><?php the_field('phone_number','options'); ?></a></p>
                        <p><a href="<?php the_field('driving_directions','options'); ?>" target="blank">Driving Directions</a></p>
                        <div class="spacer-15"></div>
                        <a href="https://www.bbb.org/us/pa/pittsburgh/profile/divorce-lawyers/pittsburgh-divorce-family-law-llc-0141-71101177/#sealclick" target="_blank" rel="nofollow"><img decoding="async" src="https://seal-westernpennsylvania.bbb.org/seals/gray-seal-200-42-whitetxt-bbb-71101177.png" style="border: 0;" alt="Pittsburgh Divorce &amp; Family Law, LLC BBB Business Review"></a>
                    </div>
                </div>
                <div class="column-33 footer-menu">
                    <p class="heading">Quick Links</p>
                    <?php wp_nav_menu( [ 'container' => false, 'theme_location' => 'footer-nav' ] ); ?>
                    <p class="copyright-year">Copyright &copy; <?php echo date('Y'); ?> Pittsburgh Divorce & Family Law, LLC</p>
                </div>
                <div class="column-33">
                    <div class="map">
                        <iframe src="<?php the_field('map_embed','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <?php if (is_page('6')) { ?>
                    <div class="spacer-30"></div>
                    <div class="column-full">
                        <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:30px 0 0;"></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

</footer>
<script type="text/javascript" src="//cdn.callrail.com/companies/501959028/a79cb6afd41d5c9ca89f/12/swap.js"></script>

<!-- Add JSON Schema here -->
    <?php 
    // Global Schema
    $global_schema = get_field('global_schema', 'options');
    if ( !empty($global_schema) ) :
        echo '<script type="application/ld+json">' . $global_schema . '</script>';
    endif;

    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; ?>

<?php wp_footer(); ?>
</body>
</html>


