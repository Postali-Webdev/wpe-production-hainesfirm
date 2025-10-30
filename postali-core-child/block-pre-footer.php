<?php

    $pre_footer_background_image = get_field('pre_footer_background_image','options');
    $pre_footer_background_image_style = '';
	if( $pre_footer_background_image ) {
		$pre_footer_background_image_style = 'background-image: url('. $pre_footer_background_image .');';
	}
?>

<section id="pre-footer" style="<?php echo $pre_footer_background_image_style; ?>">
    <div class="container">
        <div class="columns">
            <div class="column-75 center centered block">
                <h2><?php the_field('pre_footer_headline','options'); ?></h2>
                <p class="subhead"><?php the_field('pre_footer_subheadline','options'); ?></p>
                <p><?php the_field('pre_footer_copy','options'); ?></p>
                <div class="pre-footer-contact">
                    <div class="contact-block-left">
                        <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn primary" title="Call today"><?php the_field('phone_number','options'); ?></a>
                    </div>
                    <?php if (!is_page_template('page-contact.php')) { ?>
                    <div class="contact-block-right">
                        <p><a href="/contact/" title="Online form">Contact Us Online</a> <span class="icon-right-arrow"></span></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>