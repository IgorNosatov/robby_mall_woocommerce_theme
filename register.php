<?php
/*
   * Template name: Register
   */
?>
<?php if (is_user_logged_in()) {
  wp_redirect(get_permalink(get_option('woocommerce_myaccount_page_id')));
} ?>
<?php get_header(); ?>
<div class="register-area pt-5 pb-5">
  <div class="wrapper">
    <div class="row no-gutters justify-content-center">
      <div class="col-sm-12 col-lg-6">
        <div class="register-area__wrapper">
          <h3 class="font-weight-bold text-left">Create an Account</h3>
          <p>By creating an account with our store, you will be able to move through the checkout process faster, <br> store multiple shipping addresses, view and track your orders in your account and more.</p>
          <form method="post" <?php do_action('woocommerce_register_form_tag'); ?>>
            <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
              <div class="form-row">
                <div class="form-group col-12">
                  <label for="reg_username">User Name</label>
                  <input type="text" class="form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                </div>
              </div>
            <?php endif; ?>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="reg_email">Email</label>
                <input type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
              </div>
            </div>
            <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
              <div class="form-row">
                <div class="form-group col-12">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" id="reg_password" autocomplete="new-password" />
                </div>
              </div>
            <?php else : ?>
              <p><?php esc_html_e('A password will be sent to your email address.', 'woocommerce'); ?></p>
            <?php endif; ?>
            <?php do_action('woocommerce_register_form'); ?>
            <div class="item btn-default">
              <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
              <button type="submit" class="btn btn-main" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
            </div>
            <?php do_action('woocommerce_register_form_end'); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>