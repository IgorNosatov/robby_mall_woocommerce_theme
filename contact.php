<?php
/**
 * Template name:Contact page
 *
 */

get_header();
?>
<div class="contact-area pt-3">
        <div class="wrapper">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-7 mb-5">
                    <div class="contact-area__form p-3">
                    <?php echo do_shortcode('[contact-form-7 id="270" title="ContactForm1" html_class="p-5 bg-white bg-2"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
