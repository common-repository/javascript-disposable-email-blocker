<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://tomba.io/
 * @since      1.0.0
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/public
 * @author     tomba.io <b.mohamed@tomba.io>
 */
class JDEB_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }


    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/disposable-email-blocker.min.js', [], $this->version, false);

        $options = get_option('jdeb_settings');

        $disposable_message = $options['disposable_message'];

        $webmail_message = $options['webmail_message'];

        $webmail_block = isset($options['webmail_block']) ? esc_html($options['webmail_block'] === 'on' ? 1 : 0) : esc_html(0);

        // Enqueue the script
        wp_enqueue_script($this->plugin_name);
        // Inline script
        wp_add_inline_script($this->plugin_name, "
		const defaults = { disposable: { message: '$disposable_message', }, webmail: { message: '$webmail_message', block: $webmail_block, }}; \n new Disposable.Blocker(defaults);
		");
    }
}
