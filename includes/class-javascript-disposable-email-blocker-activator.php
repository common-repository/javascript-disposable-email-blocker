<?php

/**
 * Fired during plugin activation
 *
 * @link       https://tomba.io/
 * @since      1.0.0
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 * @author     tomba.io <b.mohamed@tomba.io>
 */
class JDEB_Activator
{

    /**
     * On activation create plugin defaults options.
     *
     *
     * @since    1.0.0
     */
    public static function activate()
    {

        $settings = [
            'disposable_message' => 'Abuses, strongly encourage you to stop using disposable email.',
            'webmail_message' => 'Warning, You can create an account with this email address, but we strongly encourage you to use a professional email address.',
            'webmail_block' => 'off',
        ];

        update_option('jdeb_settings', $settings);
    }
}
