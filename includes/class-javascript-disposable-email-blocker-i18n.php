<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tomba.io/
 * @since      1.0.0
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 * @author     tomba.io <b.mohamed@tomba.io>
 */
class JDEB_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'javascript-disposable-email-blocker',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
