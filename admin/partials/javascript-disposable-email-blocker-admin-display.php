<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://tomba.io/
 * @since      1.0.0
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/admin/partials
 */

$options = get_option('jdeb_settings')
?>

<script>
    const defaults = {
        disposable: {
            message: '<?php echo esc_html($options['disposable_message']); ?>',
        },
        webmail: {
            message: '<?php echo esc_html($options['webmail_message']); ?>',
            block: <?php echo isset($options['webmail_block']) ? esc_html($options['webmail_block'] === 'on' ? 1 : 0) : esc_html(0); ?>
        }
    };
    new Disposable.Blocker(defaults);
</script>
<div class="float-left">
    <div class="white-background padding-5-30">
        <a href="https://tomba.io/" target="_blank"><img class="image-style" width="120" height=120 src="<?php echo esc_url(plugins_url('/logo.png', __FILE__)); ?>" /></a>
        <p class="font-14"> Detect and Block if new account registrations are using disposable email services with javascript. </p>
        <ul class="list-style">
            <li>Protect all HTML Forms.</li>
            <li>To accept only valid email address.</li>
            <li>To accept only valid domain.</li>
            <li>To prevent all fraudulent signup.</li>
            <li>We crawl the disposable email domains<strong> DATA </strong> daily to keep safe from fake uses.</li>
            <li>Custom Error Message.</li>
            <li>Detect and Block webmail emails.</li>
        </ul>
    </div>
    <br />
    <div class="white-background  padding-15-30-25">
        <div id="wrap">
            <form method="post" action="options.php">
                <?php

                settings_fields('javascript_disposable_email_blocker');

                do_settings_sections($this->plugin_name);

                submit_button('Save Settings');

                ?>
                <input name="reset_clicked" type="button" value="<?php esc_attr_e('Reset'); ?>" onclick="reset_plugin()" class="button button-primary" style="margin-left: 10px" />
            </form>
            <form id="reset_form" name="reset" action="options-general.php?page=javascript-disposable-email-blocker" method="post">
                <?php $nonce = wp_create_nonce('reset_options_action'); ?>
                <input type="hidden" name="reset_options_nonce" value="<?php echo esc_attr($nonce); ?>">
                <input id="reset_options" name="reset_options" type="submit" style="display:none;" />
                <!-- Display success message -->
                <?php settings_errors('reset_options_success'); ?>
                <!-- Add action trigger -->
                <?php do_action('reset_plugin_settings_hook'); ?>
            </form>
        </div>
    </div>
    <br />
    <br />
    <div class="white-background  padding-15-30-25">
        <h3 class="font-1-5em">Test Plugin Settings</h3>
        <div class="flex-center">
            <form action="options-general.php?page=javascript-disposable-email-blocker" method="post" novalidate>
                <input placeholder="Enter a email address" name="email" size="30" type="email" value="" class="input-height" required />
                <p class="margin-left-5">
                    <input name="submit" type="submit" value="<?php esc_attr_e('Test'); ?>" class="button button-primary" />
                </p>
            </form>
        </div>
        <div id="tomba_result_div"></div>
    </div>
    <script>
        const reset_plugin = () => {
            if (confirm('Are you sure you want to revert to the default settings?')) {
                document.getElementById("reset_options").click();
            };
        }
    </script>
</div>