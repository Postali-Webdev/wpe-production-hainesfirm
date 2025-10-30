<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="mobile-contact">
        <div class="container">
            <div class="columns">
                <div class="column-33 icon">
                    <a href="https://thehainesfirm.cliogrow.com/book" target="blank">
                        <img src="/wp-content/uploads/2025/09/icon-calendar.png" alt=""><br>
                        <span class="text">Schedule a<br>Consultation</span>
                    </a>
                </div>
                <div class="column-33 icon">
                    <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today">
                        <img src="/wp-content/uploads/2025/09/icon-phone.png" alt=""><br>
                        <span class="text">Call<br>Now</span>
                    </a>
                </div>
                <div class="column-33 icon">
                    <a href="/reviews/">
                        <img src="/wp-content/uploads/2025/09/icon-reviews.png" alt=""><br>
                        <span class="text">Read<br>Reviews</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="spacer-60"></div>
                <div class="column-25 block">
                    <p><strong>Contact Us</strong><br>
                    <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today"><?php the_field('phone_number','options'); ?></a><br>
                    <a href="mailto:<?php the_field('email_address','options'); ?>" title="Email Today"><?php the_field('email_address','options'); ?></a>
                    </p>
                </div>
                <div class="column-50 address-map">
                    <div class="footer-address">
                        <p><strong>Office</strong><br>
                        <?php the_field('address','options'); ?><br>
                        <a href="<?php the_field('driving_directions','options'); ?>" title="Driving directions" target="blank">Directions</a>
                        </p>
                    </div>
                    <div class="footer-map">
                        <iframe src="<?php the_field('map_embed','options'); ?>" title="location map" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="column-20 block menu">
                    <p><strong>Site Navigation</strong></p>
                    <nav role="navigation">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'footer-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                    </nav>
                </div>
                <div class="spacer-60"></div>
                <div class="footer-social">
                    <?php if(get_field('social_facebook','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_facebook','options'); ?>" title="Facebook" target="blank"><span class="icon-social-facebook"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_instagram','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_instagram','options'); ?>" title="Instagram" target="blank"><span class="icon-social-instagram"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_linkedin','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_linkedin','options'); ?>" title="LinkedIn" target="blank"><span class="icon-social-linkedin"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_twitter','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_twitter','options'); ?>" title="Twitter" target="blank"><span class="icon-social-twitter"></span></a>
                    <?php } ?>
                    <?php if(get_field('social_youtube','options')) { ?>
                        <a class="social-link" href="<?php the_field('social_youtube','options'); ?>" title="YouTube" target="blank"><span class="icon-social-youtube"></span></a>
                    <?php } ?>
                </div>
                <div class="footer-utility">
                    <div class="utility">
                    <?php if ( have_rows('utility_links','options') ): ?>
                    <?php while ( have_rows('utility_links','options') ): the_row(); ?>  
                        <a href="<?php the_sub_field('utility_page_link'); ?>"><?php the_sub_field('utility_link_text'); ?></a>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    </div>
                    <div class="disclaimer">
                        <p class="small"><?php the_field('disclaimer_text','options'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</footer>

    <script>
    jQuery(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        jQuery(".video").fitVids();
    });
    </script>


<?php wp_footer(); ?>

<!-- Start CallRail Script -->
<script type="text/javascript" src="//cdn.callrail.com/companies/210033655/8707522034fa001b33e0/12/swap.js"></script> 
<!-- End CallRail Script -->


</body>
</html>


