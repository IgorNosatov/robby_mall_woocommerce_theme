<?php
/*
   * Template name: Login
   */
?>
<?php if (is_user_logged_in()) {
  wp_redirect(get_permalink(get_option('woocommerce_myaccount_page_id')));
} ?>

<?php get_header(); ?>
<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
<div class="login-area p-5">
    <div class="wrapper">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-12">
                <div class="login-area__wrapper">
                    <h2 class="font-weight-bold text-left">Login</h2>
                    <p>If you have an account with us, log in using your email address.</p>
                    <form method="post">
                        <?php do_action('woocommerce_login_form_start'); ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name ....." name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="***************" name="password" id="password" autocomplete="current-password" />
                        </div>
                        <?php do_action('woocommerce_login_form'); ?>
                        <p class="form-row">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
                            </label>
                            <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                        </p>
                        <p>
                            <button type="submit" class="btn btn-main" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
                        </p>
                        <p class="woocommerce-LostPassword lost_password">
                            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
                        </p>
                        <?php do_action('woocommerce_login_form_end'); ?>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="login-area__wrapper">
                    <h2 class="font-weight-bold text-left">New Customers</h2>
                    <p>Register with us for future convenience:</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            1.Fast and easy check out
                        </li>
                        <li class="nav-item">
                            2.Online order management (Order cancellation, reorder, print invoices and more)
                        </li>
                        <li class="nav-item">
                            3.Account management (Wishlist, reviews, address book, saved cards, support tickets and more)
                        </li>
                        <li class="nav-item">
                            4.No publicity via email unless you sign-up for the monthly newsletter
                        </li>
                    </ul>
                    <button class="btn btn-main mt-3">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>